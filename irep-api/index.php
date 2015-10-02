<?php
	require "irep_class.php";
	require "dependencies/Slim/Slim/Slim.php";
	require "dependencies/Database-Object-Manager/QueryManager.php";
	\Slim\Slim::registerAutoloader();

	use iRep\irep_class;
	$exception = new ExceptionManager();
	$test = new irep_class(new \Slim\Slim(), new Query($exception), new iRep\irep_response());
	$result = $test->getMethod();
	print_r($result);
	$test->runApplication();
?>