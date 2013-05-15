<?php
/**
   * We-jit Index
   * @version 0.1
   * @author Ryan Johnston <githubwejit@shopandlearn.net>
   * @link https://github.com/freak3dot/we-jit
   * @copyright Copyright 2013 Ryan Johnston
   * @license http://www.opensource.org/licenses/mit-license.php MIT License
   * @package We-jit
   */
	include('includes/config.wejit.php');
	include('includes/edb.class.php');
	include('includes/util.php');

	// Database Connection
	$db = new edb($config['db']['host'], $config['db']['dbuser'], $config['db']['password'], $config['db']['dbname']);

	// Get and sanatize variables
	$dashboardId = sanParam('d', FILTER_SANITIZE_STRING, '');
	if($dashboardId == ''){
		// find default dashboard for user
		$result = $db->q('SELECT * FROM ' . $config['db']['prefix'] . 'dashboards WHERE fldUserId="1" LIMIT 1; ');
		if(sizeof($result)>0){
			$dashboardId = $result[0]['fldID'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>We-jit Dashboard</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css"/>
		<link rel="stylesheet" href="/css/dashboard.css" type="text/css"/>
	</head>
	<body>
		<div id="dashboard">
		<?php /* write list of widgets with unique ids */
			// query dashboard in database
			$result = $db->q('SELECT * FROM ' . $config['db']['prefix'] . 'widgets WHERE fldDashboardId="' . $dashboardId . '" ORDER BY fldSort;');
			if(sizeof($result)>0){
				echo '	<div class="container-fluid">' . NL;
				echo '		<div class="row-fluid">' . NL;
				foreach($result as $a){
					echo '<div id="' . $a['fldWidgetId'] . '" data-wejit-type="' . $a['fldWidgetType'] . '" class="we-jit_widget"></div>' . NL;
				}
				echo '		</div>' . NL;
				echo '	</div>' . NL;
			} else {
				echo '<div class="alert alert-error">' . NL;
				echo '<strong>Oh snap!</strong>' . NL;
				if($dashboardId === ''){
					echo 'There are no dashboards defined in the database.' . NL;
				} else {
					echo 'There are no widgets defined in the database.' . NL;
				}
				echo '</div>' . NL;
			}

		?>
		</div>
		<script src="/js/util.js" ></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
		<script src="/js/widgets.js" ></script>
		<script src="/js/initialize.js" ></script>

	</body>
</html>