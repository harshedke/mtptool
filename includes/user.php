<?php

/**
* This is a User Class that enables, to do different operations for user
*/
include_once('dbconnect.php');
include_once('dblibrary.php');
class User extends DBLibrary
{
	var $database =null;
	function __construct()
	{
		$this->database = new DBConnection();
	}

	public function adduser($name,$email,$username,$password)
	{
		$query ="INSERT INTO userinfo (name,email,username,password)values('$name','$email','$username','$password')";
		$result_set = $this->database->query($query);
		return $result_set;
	}
	public function login($username,$password)
	{
		$query ="SELECT username ,id ,status FROM userinfo WHERE username ='$username' and password='$password'";
		$result_set = $this->database->query($query);
		return $result_set;
	}
	public function getuserid($username)
	{
		$query ="SELECT id FROM userinfo WHERE username ='$username'";
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function rowsaffected()
	{
		return $this->database->affected_rows();
	}
}
?>