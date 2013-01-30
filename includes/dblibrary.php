<?php
/**
* DBlibrary class provids functions to manipulate resultset.
*/
class DBLibrary
{
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