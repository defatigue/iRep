<?php
	namespace iRep;
	class irep_response
	{
		public $HTTP_HEADER;
		public function __construct()
		{
			$_SERVER["HTTP_ACCEPT"] = "application/json";
			$_SERVER["REQUEST_TIME"] = date('l, F j, Y g:i a', $_SERVER["REQUEST_TIME"]);
			$_SERVER["SERVER_SOFTWARE"];
			$_SERVER["AUTH_STATUS"] = "200 Ok";
			$_SERVER["STATUS_CODE"] = "200";
			$this->HTTP_HEADER = array("Connection"=>$_SERVER["HTTP_CONNECTION"], "Content-Type"=>$_SERVER["HTTP_ACCEPT"], "Date"=>$_SERVER["REQUEST_TIME"], "Server"=>$_SERVER["SERVER_SOFTWARE"], "Auth-Status"=>$_SERVER["AUTH_STATUS"], "Status-Code"=>$_SERVER["STATUS_CODE"], "Status-Code-Desc-Code"=>"203", "Status-Code-Desc"=>"Request Processed Successfully");
			
		}

		public function execute($responseObject)
		{
			if (is_array($responseObject))
			{
				/*print_r($this->HTTP_HEADER);
				print_r(json_encode($responseObject));*/
				if (count($responseObject) < 1)
				{
					$this->HTTP_HEADER["Status-Code-Desc-Code"] = "204";
					$this->HTTP_HEADER["Status-Code-Desc"] = "Request processed, No Content Returned";
				}
				$json_response = json_encode($responseObject);
				switch(json_last_error())
				{
					case JSON_ERROR_NONE:
					{
						$this->HTTP_HEADER["Status-Code-Desc-Code"] = "200";
						$this->HTTP_HEADER["Status-Code-Desc"] = "Request processed Successfully, No Error Occurred";
						break;
					}

					case JSON_ERROR_DEPTH:
					{
						$this->HTTP_HEADER["Status-Code-Desc-Code"] = "413";
						$this->HTTP_HEADER["Status-Code-Desc"] = "Maximum Stack Depth Exceeded, Request is too large to process";
						break;
					}

					case JSON_ERROR_STATE_MISMATCH:
					case JSON_ERROR_CTRL_CHAR:
					case JSON_ERROR_SYNTAX:
					case JSON_ERROR_UTF8:
					case JSON_ERROR_INF_OR_NAN:
					case JSON_ERROR_UNSUPPORTED_TYPE:
					{
						$this->HTTP_HEADER["Status-Code-Desc-Code"] = "400";
						$this->HTTP_HEADER["Status-Code-Desc"] = "Request cannot be fulfilled, Response contains malformed or invalid characters";
						break;
					}
					default:
					{
						$this->HTTP_HEADER["Status-Code-Desc-Code"] = "204";
						$this->HTTP_HEADER["Status-Code-Desc"] = "Request processed, No Content Returned";
					}
				}
			}
		}
	}
?>