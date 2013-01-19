<?php
/**
* 
*/
include_once('dbconnect.php');
class Website 
{
	var $database = null;
	function __construct()
	{
		$this->database = new DBConnection();
	}

	public function setseotags($website_id,$keywords,$metatags,$sitetitle,$description)
	{
		$query ="INSERT INTO seo_settings (website_id, keyword, meta_tag, site_title, meta_description)values('$website_id', '$keywords', '$metatags', '$sitetitle', '$description')";
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
}
?>