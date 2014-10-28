<?php

class users {

	private static $connected = null;
	
	public static function connect($login, $pw) {
		if( (ADMIN_LOGIN == $login) && (ADMIN_PASSWORD == $pw)) {
			self::$connected = true;
			$_SESSION['user']['connected'] = true;
			return true;
		} else {
			self::$connected = false;
			$_SESSION['user']['connected'] = false;
			return false;
		}
	}

	public static function logout() {
		@$_SESSION['user']['connected'] = false;
		self::$connected = false;
		return true;
	}

	public static function isConnected() {
	
		if (@$_SESSION['user']['connected'] == true) {
			self::$connected = true;
			return true;
		} else {
			self::$connected = false;
			return false;
		}	
	}
	
	
	public static function tryToAuth() {
		$auth = request::get("auth");
		if ($auth != "") {
			$hash = self::getAdminAuth();
			if($auth == $hash) {
				self::connect(ADMIN_LOGIN, ADMIN_PASSWORD);
			}
		}
	}
	
	
	public static function getAuth($login, $pw) {
		return md5($login . md5($pw));	
	}
	
		
	public static function getAdminAuth() {
		return self::getAuth(ADMIN_LOGIN, ADMIN_PASSWORD);	
	}
}

?>
