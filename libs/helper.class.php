<?php

class url {

	static $rewrited = false;


	static function setRewrite($bool) {
		self::$rewrited = $bool;
	}


	static function redirect($controller, $action, $id = null, $other_params = null){
		$querystr = self::internal($controller, $action, $id = null, $other_params = null);
		header("Location: index.php" . $querystr);
	}


	static function internal($controller, $action, $id = null, $other_params = null) {
		if (self::$rewrited) {
			
			$query = "$controller/$action";
			if ($id) {
				$query .= "/$id";
			}
			
			if ($other_params) {
				$query .= "?" . $other_params;
			}
						
		} else {
			$query = "?controller=$controller&action=$action";
			if ($id) {
				$query .= "&id=$id";
			}
			
			if ($other_params) {
				$query .= $other_params;
			}
		}
	
		return $query;
	}
}



class link {
	static function internal ($controller, $action, $id = null) {
		
	}
}


class str {

	static function utf8e ($str) {
		return utf8_encode($str);
	}
}


class params {
	
	public static function get ($file){
		$str = file_get_contents(PATH_CURRENT . "params.json");
		$obj = json_decode($str);

		if (!isset($obj->sprint_id)) {
			$obj = new stdClass();
		}
		return $obj;
	
	}

}



?>
