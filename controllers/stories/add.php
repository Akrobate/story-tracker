<?php

	$mailbox = new MyMail();
	$msgs = $mailbox->getAllAndRemove(true);
	
	foreach($msgs as $m) {
		//print_r($m);
		$sujet = $m['subject'];
		$user = $m['from'];
		$date = date("Y-m-y", strtotime($m['date']));
		
		if (MySmiley::detect($sujet)) {
			if(users::checkUserCanAdd($user, $date)) {	
				$item = array();
				$item['smiles']['smileycode'] = MySmiley::detect($sujet);
				$item['smiles']['created'] = $date;
				$item['smiles']['inteams'] = users::getTeamIds($user);
				
				OrmSmiley::addSmile($item);
				users::addVoteDay($user, $date);
			}
		}
		
	}

?>
