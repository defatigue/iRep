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
			$this->HTTP_HEADER = array("Connection"=>$_SERVER["HTTP_CONNECTION"], "Content-Type"=>$_SERVER["HTTP_ACCEPT"], "Date"=>$_SERVER["REQUEST_TIME"], "Server"=>$_SERVER["SERVER_SOFTWARE"]);
		}

		public function execute($responseObject)
		{
			if (is_array($responseObject))
			{
				print_r($this->HTTP_HEADER);
			}
		}
	}
?>