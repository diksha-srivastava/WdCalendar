<?php
class DBConnection{
	
	public $servername 	= "localhost";
	public $username 	= "root";
	public $password 	= "root";
	public $database 	= 'wdcalendar';
	public $dbcon;
	
	public function __construct()
	{
        $this->dbcon = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
	public function get_connection()
	{
		return $this->dbcon;
	}
	
}
?>