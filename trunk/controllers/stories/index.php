<?php

	$sprint_id = 48;
	$query = "SELECT rank, uid, name, effort FROM `icescrum2_story` WHERE parent_sprint_id = $sprint_id order by rank ASC; ";
	sql::query($query);
	$data = sql::AllFetchArray();

	//print_r($res);

