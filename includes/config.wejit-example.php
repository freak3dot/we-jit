<?php
/*
 * To use this file, rename it to config.wejit.php
 */

// general config
$config = array(
	'db' => array(
		'dbname' => 'wejit',
		'dbuser' => 'wejit',
		'password' => 'pa$$w0rd',
		'host' => 'localhost',
		'prefix' => 'wejit_' 
	),
	'frommail' => 'user@example.com',
	'cryptkey' => 'cryptkey'
);

// Paths
$config['SERVERPATH'] = $_SERVER['DOCUMENT_ROOT'] . '/';
if(isset( $_SERVER['HTTPS'] ) && strcmp($_SERVER['HTTPS'],'')!=0){
	$config['URLPATH'] = 'https://' . $_SERVER['HTTP_HOST'] . '/';
} else {
	$config['URLPATH'] = 'http://' . $_SERVER['HTTP_HOST'] . '/';
}

// Spaces and lines
define('NL', "\n");

// Error reporting.
ini_set('error_reporting', 'false');  
error_reporting(E_NONE); 
?>