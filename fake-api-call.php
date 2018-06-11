<?php

   
$file = fopen("todo.list", "r");
$members = array();
$tokenize_members = array();

while (!feof($file)) {
   $members[] = fgets($file);
}

foreach ($members as $key => $value) {

if (!empty($value)){

	$pieces = explode("|", $value);

	if (empty($pieces[0]))
		$tokenize_members[$key]['id'] = "";
	else
		$tokenize_members[$key]['id'] = $pieces[0];

	if (empty($pieces[1]))
		$tokenize_members[$key]['status'] = "";
	else
		$tokenize_members[$key]['status'] = $pieces[1];
	
	if (empty($pieces[2]))
		$tokenize_members[$key]['task name'] = "";
	else
		$tokenize_members[$key]['task name'] = $pieces[2];
	
	if (empty($pieces[3]))
		$tokenize_members[$key]['category'] = "";
	else
		$tokenize_members[$key]['category'] = $pieces[3];
	
	if (empty($pieces[4]))
		$tokenize_members[$key]['due date'] = "";
	else
		$tokenize_members[$key]['due date'] = $pieces[4];

	
}
}

// print_r($tokenize_members);

	$json = json_encode($tokenize_members, JSON_PRETTY_PRINT);
	print_r($json);

fclose($file);

// $content = json_encode($members);


// print_r($content);	


?>