<?php

$action = $_REQUEST['action'];
$format = $_REQUEST['format'];

switch($action){
	
	case 'webdev':
		
		$model = '';
		$view = 'webdeveloper-portfolio.php';
		$title = 'My Web Developer portfolio';
		break;
		
	case 'engineer':
		
		$model = '';
		$view = 'engineer-portfolio.php';
		$title = 'My Software Engineering portfolio';
		break;
	
	default : 
		
		$model = '';
		$view = 'portfolio.php';
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
