<?php
/**
* This class enable file related operations
*/
include_once('dbconnect.php');
include_once('dblibrary.php');
class Fileclass extends DBLibrary
{
	var $database = null;
	function __construct()
	{
		$this->database = new DBConnection();
	}

	public function uploadfile($id,$user_id,$target_path,$file_name)
	{
		$query ="INSERT INTO file (id,user_id,file_path,file_name)values('$id','$user_id','$target_path','$file_name')";
		error_log(" ".$query);
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function getmaxid()
	{
		$query ="SELECT max(id) as id FROM file ";
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function getuserfiles($user_id) 
	{
		$query ="SELECT id, file_path , file_name FROM file WHERE user_id='$user_id' AND trashflag=0";
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function getfile($id)
	{
		$query ="SELECT file_path , file_name FROM file WHERE id='$id'";
		$result_set = $this->database->query($query);
		return $result_set;
	}
	public function movetotrash($id,$target_path=null)
	{
		$query = "UPDATE file SET file_path='$target_path' ,trashflag = '1' WHERE id= '$id'";
		$result_set = $this->database->query($query);
		return $result_set;
	}

	public function gettrashfiles($user_id)
	{
		$query ="SELECT id, file_path , file_name FROM file WHERE user_id='$user_id' AND trashflag=1";
		$result_set = $this->database->query($query);
		return $result_set;
	}
	public function editfile($id,$target_path,$file_name)
	{
		$query ="UPDATE file SET file_path='$target_path',file_name='$file_name' WHERE id='$id'";
		$result_set = $this->database->query($query);
		return $result_set;
	}
	public function affected_rows() {
	    return $this->database->affected_rows($this->connection);
	}
}
?>