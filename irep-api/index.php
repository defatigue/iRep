<?php
	require "irep_class.php";
	require "dependencies/Slim/Slim/Slim.php";
	require "dependencies/DOM/QueryManager.php";
	\Slim\Slim::registerAutoloader();

	use iRep\irep_class;

	$iRepClassObject = new irep_class(new \Slim\Slim(), new Query(new ExceptionManager()), new iRep\irep_response());
	$returnedResult = $iRepClassObject->getMethod();
	$iRepClassObject->runApplication();
?>