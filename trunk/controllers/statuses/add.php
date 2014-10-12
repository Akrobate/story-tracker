<?php

	$status = request::get("status");
	$id_story = request::get("id");
	$previousStatus = request::get("previousstatus");
	
	if ($previousStatus == "") {
		
		if (OrmStatus::getLast($id_story)) {
			$val = OrmStatus::getLast($id_story);
			$previousStatus = $val['status'];
			
		}
	}
	
	if ($status != "" && $id_story != "") {
		OrmStatus::addIfChange($id_story, $status);
		$previousStatus = $status;	
	}
	
	// Assignation pour le template	
	



	

