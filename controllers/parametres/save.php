<?

	$sprint_id = request::get('sprint_id');
	$obj = params::get(PATH_CURRENT . "params.json");
	$obj->sprint_id = $sprint_id;
	
	$str = json_encode($obj);
	file_put_contents(PATH_CURRENT . "params.json", $str);

	url::redirect("stories","index");
