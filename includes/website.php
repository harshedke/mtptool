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
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function getwebsiteid($user_id,$website_name)
	{
		$query = "SELECT website_id FROM website WHERE user_id='$user_id' AND website_name='$website_name'";
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function getuserwebsites($user_id)
	{
		$query = "SELECT website_id, website_name, main_page FROM website WHERE user_id='$user_id'";
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function getmenupages($website_id)
	{
		$query = "SELECT page_id, page_name FROM page WHERE website_id='$website_id' AND menu='Yes' AND page_status='Active'";
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
		}
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function setseotags($website_id,$keywords,$sitetitle,$description)
	{
		$query ="INSERT INTO seo_settings (website_id, keyword, site_title, meta_description)values('$website_id', '$keywords', '$sitetitle', '$description')";
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function getseotags($website_id)
	{
		$query ="SELECT site_title ,keyword, meta_description FROM seo_settings WHERE website_id = '$website_id'";
		$result_set = $this->database->query($query);
		return $result_set;
	}
	public function updateseotags($website_id,$keywords,$sitetitle,$description)
	{
		$query ="UPDATE seo_settings set keyword = '$keywords',site_title = '$sitetitle', meta_description = '$description' WHERE website_id = '$website_id'";
		$result_set = $this->database->query($query);
		return $result_set;
	}
	public function getwebsites($user_id)
	{
		error_log("User id:".$user_id);
		$query ="SELECT website_id , website_name FROM website WHERE user_id = '$user_id'";
		$result_set = $this->database->query($query);
		return $result_set;
	}

	function fetchpage($websiteid,$pageid)
	{
		$query = "SELECT page_id,website_id,page_name,page_content,page_status,parent_id,menu,submenu FROM page WHERE website_id = '$websiteid' ";
		if($pageid>0){
		$query.= " AND page_id=$pageid";
	    }
		$result_set = $this->database->query($query);
		return $result_set;

	}
	function fetchewebsiteinfo($websiteid)
	{
		$query ="SELECT a.website_id, a.website_name, a.user_id, b.keyword,b.site_title, b.meta_description FROM website a LEFT OUTER JOIN seo_settings b ON a.website_id = b.website_id
WHERE a.website_id = '$websiteid' ";
		 //echo "query=".$query;
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