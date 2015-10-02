<?php
	namespace iRep
	{
		require_once "irep_interface.php";
		require_once "irep_response.php";
		use iRep\irep_interface;

		class irep_class implements irep_interface
		{
			private static $slimObject;
			private static $queryObject;

			protected static $validMethodNames = array("getFederalConstituency", "getLocalGovernment", "getSenatorialDistrict",
												"getState", "getStateConstituency"
											);

			protected $tableColumns = array("FederalConstituency"=>"federal_constituencies", "LocalGovernment"=>"local_govts",
											"SenatorialDistrict"=>"senatorial_districts", "State"=>"states",
											"StateConstituency"=>"state_constituencies" 
										);
			protected static $returnResponse;
			public function __construct(\Slim\Slim $slimObject, \Query $queryObject, irep_response $returnResponse)
			{
				try
				{
					self::$slimObject = $slimObject;
					self::$queryObject = $queryObject;
					self::$returnResponse = $returnResponse;
				}
				catch(Exception $e)
				{
					return $queryObject->exception->returnError($e);
				}
			}

			public function getMethod()
			{
				try
				{
					self::$slimObject->get("/", function(){
						return self::invalidRequest("No Request Made");
					});

					self::$slimObject->get("/:methodName", function($methodName){
						if (!self::isMethodNameValidMethod("get", self::getMethodName($methodName)))
						{
							return self::invalidRequest("Invalid Method Requested");
						}
						else
						{
							$result = self::activateMethod(self::getMethodName($methodName));
							self::returnResult($result);
						}
					});

					self::$slimObject->get("/:methodName/:parameters+", function($methodName, $parameters){
						if (!self::isMethodNameValidMethod("get", self::getMethodName($methodName)))
						{
							return self::invalidRequest("Invalid Method Requested");
						}
						else
						{
							$result = self::activateMethod(self::getMethodName($methodName), $parameters);
							self::returnResult($result);
						}
					});
				}
				catch (\Exception $e)
				{
					throw new Exception("A dependency error has just occurred, please go through the error log to resolve this isssue");
				}

			}
			public function runApplication()
			{
				self::$slimObject->run();
			}

			private static function getMethodName($methodName)
			{
				$explodedMethodName = explode("-", $methodName);
				$newMethodName = "";
				foreach($explodedMethodName as $methodNameExploded)
				{
					$newMethodName .= ucfirst($methodNameExploded);
				}
				return $newMethodName;
			}

			private static function isMethodNameValidMethod($requestType, $methodName)
			{
				$stringRequest = $requestType.$methodName;
				$boolValid = (in_array($stringRequest, self::$validMethodNames))?true:false;

				return $boolValid;
			}

			protected function invalidRequest($errorMessage)
			{
				try
				{
					//log error
					throw new \Exception($errorMessage);
				}
				catch(\Exception $e)
				{
					//DEBUG: print_r($e);
					//echo "An Invalid Request Was Sent, Please Review and Try Again";
					return self::$queryObject->exception->returnError($e);
				}

			}

			private function activateMethod()
			{
				$method = (isset(func_get_args()[0]))?func_get_args()[0]:null;
				$parameters = (isset(func_get_args()[1]))?func_get_args()[1][0]:null;

				switch(strtolower($method))
				{
					case "federalconstituency":
					{
						$results = self::getFederalConstituency($parameters);
						break;
					}

					case "localgovernment":
					{
						$results = self::getLocalGovernment($parameters);
						break;
					}

					case "senatorialdistrict":
					{
						$results = self::getSenatorialDistrict($parameters);
						break;
					}

					case "state":
					{
						$results = self::getState($parameters);
						break;
					}

					case "stateconstituency":
					{
						$results = self::getStateConstituency($parameters);
						break;
					}

					default:
					{
						//do something
					}
				}
				return $results;
			}

			protected function getFederalConstituency()
			{
				if (!is_null(func_get_args()))
				{
					$query = self::stringifyQuery("select",
												   array("*", $this->tableColumns["FederalConstituency"], func_get_args()[0])
												  );
				}
				else
				{
					$query = self::stringifyQuery("select", array("*", $this->tableColumns["FederalConstituency"]));
				}
				$result = self::$queryObject->Execute($query);
				return $result;
			}

			protected function getLocalGovernment()
			{
				if (!is_null(func_get_args()))
				{
					$query = self::stringifyQuery("select",
												   array("*", $this->tableColumns["LocalGovernment"], func_get_args()[0])
												  );
				}
				else
				{
					$query = self::stringifyQuery("select", array("*", $this->tableColumns["LocalGovernment"]));
				}

				$result = self::$queryObject->Execute($query);
				return $result;
			}

			protected function getSenatorialDistrict()
			{
				if (!is_null(func_get_args()))
				{
					$query = self::stringifyQuery("select",
												   array("*", $this->tableColumns["SenatorialDistrict"], func_get_args()[0])
												  );
				}
				else
				{
					$query = self::stringifyQuery("select", array("*", $this->tableColumns["SenatorialDistrict"]));
				}

				$result = self::$queryObject->Execute($query);
				return $result;
			}

			protected function getState()
			{
				if (!is_null(func_get_args()))
				{
					$query = self::stringifyQuery("select",
												   array("*", $this->tableColumns["State"], func_get_args()[0])
												  );
				}
				else
				{
					$query = self::stringifyQuery("select", array("*", $this->tableColumns["State"]));
				}

				$result = self::$queryObject->Execute($query);
				return $result;
			}

			protected function getStateConstituency()
			{
				if (!is_null(func_get_args()))
				{
					$query = self::stringifyQuery("select",
												   array("*", $this->tableColumns["StateConstituency"], func_get_args()[0])
												  );
				}
				else
				{
					$query = self::stringifyQuery("select", array("*", $this->tableColumns["StateConstituency"]));
				}

				$result = self::$queryObject->Execute($query);
				return $result;
			}

			private function stringifyQuery($crudOption, $crudParams)
			{
				switch (strtolower($crudOption))
				{
					case "select":
					{
						if (isset($crudParams[2]))
						{
							$stringifiedQuery = "SELECT ".$crudParams[0]." FROM ".$crudParams[1]." WHERE id_no=".$crudParams[2];
						}
						else
						{
							$stringifiedQuery = "SELECT ".$crudParams[0]." FROM ".$crudParams[1];
						}
						break;
					}

					default:
					{
						$stringifiedQuery = "under construction";
					}
				}
				return $stringifiedQuery;
			}

			public function returnResult($results)
			{
				self::$returnResponse->execute($results);
			}

		}

	}
?>