<?php

$action = $_REQUEST['action'];
$format = $_REQUEST['format'];

switch($action){
	
	case 'edu':
		
		$model = '';
		$view = 'edu.php';
		$title = 'My College and University projects';
		break;
		
	case 'personal':
		
		$model = '';
		$view = 'personal.php';
		$title = 'My personal projects';
		break;
	
	default : 
		
		$model = '';
		$view = 'projects.php';
		$title = 'My Projects';
		break;
}

switch ($format){
	
	case 'json':
		echo json_encode(array('model'=> $model, 'errors'=> $errors));
		break;
	
	case 'plain':
		include $view;
		break;
	
	default:
		include '/home/u191123982/public_html/shared/_default_layout.php';		
		break;
}
