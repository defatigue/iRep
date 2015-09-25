<?php
	require "irep_class.php";
	require "dependencies/Slim/Slim/Slim.php";
	require "dependencies/Database-Object-Manager/QueryManager.php";
	\Slim\Slim::registerAutoloader();

	use iRep\irep_class;
	
	$test = new irep_class(new \Slim\Slim(), new Query());
	$result = $test->getMethod();
	print_r($result);
	$test->runApplication();
?>