<?php

require_once(LIBS_PATH."sql.class.php");

class OrmStatus extends sql {

	private static $tablename = "statuses";

	public static function add($id_story, $status) {
	
		$query = "INSERT INTO ". self::$tablename ." (id_storie, status, created) 
					VALUES ('".$id_story."','".$status."', NOW() );";
		
		$result = parent::query($query);
	
	}


	public static function getLast($id_story) {

		$query = "SELECT * FROM ". self::$tablename ." WHERE id_storie = '". $id_story ."' ORDER BY created DESC LIMIT 1";	
		$result = parent::query($query);
		$nb = parent::nbrRows();
		if ($nb == 0) {
			return false;		
		} else {
			$tab = parent::allFetchArray();
			return $tab[0];		
		}
	}


	public static function addIfChange($id_story, $status) {
	
		$added = true;
		$val = self::getLast($id_story);
		if ($val) {
			if ($val['status'] != $status) {
				self::add($id_story, $status);			
			} else {
				$added = false;
			}
		} else {
			self::add($id_story, $status);
		}
	}


	
	
}
