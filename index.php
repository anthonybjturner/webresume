<?php

$action = $_REQUEST['action'];
$format = $_REQUEST['format'];

switch($action){
	
	
	default : 
		
		$model = '';
		$view = 'views/home.php';
		$title = 'My resume';
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
		include 'shared/_default_layout.php';		
		break;
}
