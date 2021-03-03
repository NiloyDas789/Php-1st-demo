<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','my_practice');

class controller
{

	public $host=DB_HOST;
	public $user=DB_USER;
	public $pass=DB_PASS;
	public $dbname=DB_NAME;

	public $conn;
	public $error;

	function __construct()
	{
		$this->conn=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if (!$this->conn) {
			$this->error="Connection Failed".$this->conn->connect_error;
			return false;
		}
	}

	function store($sql)
	{
		$data=$this->conn->query($sql) or die($this->conn->error.__LINE__);

		if ($data) {
			// echo "Data entry Successfull";
			header("Location: index.php?msg=".urldecode("Data Store Successfull"));
			exit();
		} 
		else {
			// echo "Data entry Failed";
			header("Location: index.php?msg=".urldecode("Data Store Failed"));
		}
	}

	function read($sql)
	{
		$data=$this->conn->query($sql) or die($this->conn->error.__LINE__);
		if ($data->num_rows>0){
			return $data;
		}
		else{
			return false;
		}
	}
	function delete($sql)
	{
		$data=$this->conn->query($sql) or die($this->conn->error.__LINE__);

		if ($data) {
			
			header("Location: recycle.php?msg=".urldecode("Data Delete Successfull"));
			exit();
		} 
		else {
			
			header("Location: recycle.php?error=".urldecode("Data Delete Failed"));
		}
		
	}
	function update($sql)
	{
		$data=$this->conn->query($sql) or die($this->conn->error.__LINE__);

		if ($data) {
			// echo "Data entry Successfull";
			header("Location: ../index.php?msg=".urldecode("Data Update Successfull"));
			exit();
		} 
		else {
			// echo "Data entry Failed";
			header("Location: ../index.php?msg=".urldecode("Data Update Failed"));
		}
	}
	function bin($sql)
	{
		$data=$this->conn->query($sql) or die($this->conn->error.__LINE__);

		if ($data) {
			// echo "Data entry Successfull";
			header("Location: ../index.php?error=".urldecode("Data Stored in Bin Successfully"));
			exit();
		} 
		else {
			// echo "Data entry Failed";
			header("Location: ../index.php?error=".urldecode("Data Stored in Bin Failed"));
		}
	}
	function restore($sql)
	{
		$data=$this->conn->query($sql) or die($this->conn->error.__LINE__);

		if ($data) {
			// echo "Data entry Successfull";
			header("Location: recycle.php?msg=".urldecode("Data Restored Successfully"));
			exit();
		} 
		else {
			// echo "Data entry Failed";
			header("Location: recycle.php?msg=".urldecode("Data Restored Failed"));
		}
	}


}
?>
