<!-- This is the main global layout for the site -->
<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title><?$title?></title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	</head>
 	<? include '_default_navigation.php'; ?>
		
	<body>
		<? include $view ?>

	  	<!-- These scripts are global through out the site-->
	  	<script src="http://code.jquery.com/jquery.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<? if(function_exists('Scripts')) Scripts(); ?>
	</body>
</html>