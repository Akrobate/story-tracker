<?php

	$sprint_id = 48;
	
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
		
		// $codeContents = $data[$i]['uid'] . $data[$i]['name'];
		$codeContents = SITE_URL . "" . url::internal("statuses", "add", $data[$i]['uid'] ) ;		
		
		//echo($codeContents);
		
		// Generating Qrcodes
		QRcode::png($codeContents, PATH_CACHE. $data[$i]['uid'] . '.png', QR_ECLEVEL_L, 4);
		
		$i++;
	}
