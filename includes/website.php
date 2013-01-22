<?php
/**
* This is Website class
*/
include_once('dbconnect.php');
class Website 
{
	var $database = null;
	function __construct()
	{
		$this->database = new DBConnection();
	}

	public function createwebsite($user_id, $name)
	{
		$query ="INSERT INTO website (user_id, website_name) VALUES('$user_id','$name')";
		error_log($query);
		$result_set = $this->database->query($query);
		return $result_set;	
	}

	public function getuserwebsites($user_id)
	{
		$query = "SELECT website_name FROM website WHERE user_id='$user_id'";
		error_log($query);
		$result_set = $this->database->query($query);
		return $result_set;	
	}

	public function addpage($website_id,$page_name,$default_content)
	{
		$query ="INSERT INTO page (website_id, page_name, page_content) VALUES('$website_id','$page_name','$default_content')";
		error_log($query);
		$result_set = $this->database->query($query);
		return $result_set;		
	}

	public function setseotags($website_id,$keywords,$sitetitle,$description)
	{
		$query ="INSERT INTO seo_settings (website_id, keyword, site_title, meta_description)values('$website_id', '$keywords', '$sitetitle', '$description')";
		error_log($query);
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function getwebsites($user_id)
	{
		error_log("User id:".$user_id);
		$query ="SELECT website_id , website_name FROM website WHERE user_id = '$user_id'";
		error_log($query);
		$result_set = $this->database->query($query);
		return $result_set;	
	}
	public function rowsaffected()
	{
		return $this->database->affected_rows();
	}

	public function num_rows($result_set)
	{
		return $this->database->num_rows($result_set);
	}

	public function fetch_object($result_set)
	{
		return $this->database->fetch_object($result_set);
	}
	public function fetch_array($result_set)
	{
		return $this->database->fetch_array($result_set);	
	}
}
?>