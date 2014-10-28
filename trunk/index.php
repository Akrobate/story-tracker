<?php
	session_start();
	error_reporting(15);
	require_once("./api.php");
	
	$controller = request::get("controller");
	$action = request::get("action");
	
	if ($controller == "") {
		$controller = "stories";
	}
	
	if($action == "") {
		$action = "index";
	}
	
	users::tryToAuth();
	
	if (!users::isConnected()) {

		$controller = "users";
		$action = "login";
		require_once (PATH_SCRIPTS . $controller . "/" . $action . ".php");
		ob_start();
			require_once (PATH_TEMPLATES . $controller . "/" . $action . ".php");
		$template_content = ob_get_contents();
		ob_end_clean();
		require_once( PATH_TEMPLATES . "layouts/connect.php");	

	} else {
	
		$action_tab = explode('-', $action);
		if ($action_tab[0] == 'ajax') {
			if(file_exists(PATH_SCRIPTS . $controller . "/" . $action . ".php")) {
				require_once (PATH_SCRIPTS . $controller . "/" . $action . ".php");
			}

		} else {
			if ((file_exists(PATH_SCRIPTS . $controller . "/" . $action . ".php")) 
				&& ((PATH_TEMPLATES . $controller . "/" . $action . ".php"))) {
					require_once (PATH_SCRIPTS . $controller . "/" . $action . ".php");
					ob_start();
						require_once (PATH_TEMPLATES . $controller . "/" . $action . ".php");
					//$template_content = ob_get_contents();
					$template_content = ob_get_contents();
					ob_end_clean();
					require_once( PATH_TEMPLATES . "layouts/main.php");	
			} else {
				echo("ERROR::Template or script missing");
			}
		}
	}
