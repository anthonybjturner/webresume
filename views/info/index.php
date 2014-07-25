<?php

$action = $_REQUEST['action'];
$format = $_REQUEST['format'];

switch($action){
	
	case 'about':
		
		$model = '';
		$view = 'about.php';
		$title = 'About me';
		break;
		
	
	default : 
		
		$model = '';
		$view = 'about.php';
		$title = 'About me';
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
