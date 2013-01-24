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

	public function addpage($website_id,$page_name,$default_content,$arrayflag)
	{
		if ($arrayflag ==1 ) {
			$query ="INSERT INTO page (website_id, page_name, page_content) VALUES";
			$i=0;
			foreach ($page_name as $key => $value) {
				$page = trim($value);
				$query .= "('$website_id','$page','$default_content')";
				if ($i < count($page_name)-1 ) {
					$query .= ",";
				}
				$i++;
			}
		}else{
			$query ="INSERT INTO page (website_id, page_name, page_content) VALUES('$website_id','$page_name','$default_content')";
		}
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

	public function getseotags($website_id)
	{
		$query ="SELECT site_title ,keyword, meta_description FROM seo_settings WHERE website_id = '$website_id'";
		error_log($query);
		$result_set = $this->database->query($query);
		return $result_set;	
	}
	public function updateseotags($website_id,$keywords,$sitetitle,$description)
	{
		$query ="UPDATE seo_settings set keyword = '$keywords',site_title = '$sitetitle', meta_description = '$description' WHERE website_id = '$website_id'";
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
	
	public function fetch_assoc($result_set)
	{
		return $this->database->fetch_assoc($result_set);
	}
}
?>