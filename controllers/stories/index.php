<?php

	$obj = params::get(PATH_CURRENT . "params.json");
	$sprint_id = $obj->sprint_id;
	//$sprint_id = 48;
	
	$query = "SELECT rank, uid, name, effort FROM `icescrum2_story` WHERE parent_sprint_id = $sprint_id order by rank ASC; ";
	
	sql::query($query);
	$data = sql::AllFetchArray();

	// Enrichissement de la data
	$emptymore = array('created'=>'', 'status'=>'');
	$i=0;
	while (isset($data[$i])) {
		
		$moredata  = OrmStatus::getLast($data[$i]['uid']);
		if ($moredata) {
			$data[$i] = array_merge ($moredata, $data[$i]);	
			$data[$i]['status'] = html::statusToLabel($data[$i]['status']);
		} else {
			$data[$i] = array_merge ($emptymore, $data[$i]);
		}
		$i++;
	}
