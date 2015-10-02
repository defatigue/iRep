<?php
	namespace iRep
	{
		interface irep_interface
		{
			public function __construct(\Slim\Slim $slimObject, \Query $queryObject, irep_response $respObject);
/*
			function getFederalConstituency();

			protected function getLocalGovernment();

			protected function getSenatorialDistrict();

			protected function getState();

			protected function getStateConstituency();*/
		}
	}
?>