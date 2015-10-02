<?php
/****
*****@Author: Samuel Adeshina
*****@Date:	   2/27/2015, 1:37PM
*****@Description: This File Contains a
					Base Class For Executing Queries
					In A Database.
					Watch Out For Other Database Scripts.
*****@Keywords: PDO, Databases, PHP, SQL Server
*****@Contact: samueladeshina73@gmail.com
****/
	require_once('connection.php');
	require_once('ExceptionManager.class.php');
	class Query extends connection
	{
		public $exception;
		public function __construct(ExceptionManager $e)
		{
			$this->exception = $e;
			parent::__construct($this->exception);
		}
		function Execute($query){
			if ($this->driver == 'SQL Server')
			{
				$connection = self::SQLServer($this->params);
				try{
					$query_to_execute = $connection->query($query);
					if (!$query_to_execute)
					{
						$errorMsg = $connection->errorInfo();
						return 'An Error occured: '.$errorMsg[2];
					}

					else
					{
						return self::Result($query_to_execute);
					}
					
				}
				catch (PDOException $e){
					//Catch This Error Properly
					return 'Error: '.$e->getMessage();
					exit();
				}
				finally{
					//Do something here. Save this connection meta details sush
					//as time, date, and so on in a log file.
					//echo 'Query Execution Complete';
				}
			}
			else if ($this->driver == 'MySQL')
			{
				$connection = self::MySQL($this->params);
				try{
					$query_to_execute = $connection->query($query);
					if (!$query_to_execute)
					{
						$errorMsg = $connection->errorInfo();
						throw new \Exception('An Error occured: '.$errorMsg[2]);
					}
					else
					{
						return self::Result($query_to_execute);
					}
					
				}
				catch (PDOException $e){
					//Catch This Error Properly
					return $this->exception->returnError($e);
				}
				finally{
					//Do something here. Save this connection meta details sush
					//as time, date, and so on in a log file.
					//echo 'Query Execution Complete';
				}
			}
		}
		function Result($result)
		{
			$_result = $result->fetchall(PDO::FETCH_ASSOC);
			return $_result;
		}
	}
	$connection = new Query(new ExceptionManager());
?>