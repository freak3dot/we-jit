<?php
	include('includes/config.wejit.php');
	include('includes/util.php');

	// Get and sanatize variables
	$dashboardId = sanParam('d', FILTER_SANITIZE_STRING, '');
	if($dashboardId == ''){
		// find default dashboard for user
	}

	// query dashboard in database
	
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>We-jit Dashboard</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css"/>
	</head>
	<body>
		<div id="dashboard">
		<? /* write list of widgets with unique ids */ ?>
		</div>
		<script src="/js/util.js" ></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
		<script src="/js/widgets.js" ></script>
	</body>
</html>