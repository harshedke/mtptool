<?php
/*
* View 
*/
	include_once("header.php");
	include_once('includes/file.php');
	include_once('includes/user.php');
	session_start();
	// echo "In View ";
	$username = $_SESSION['username'];
	// echo "Username ".$username."<br>";
?>
	<button><a href='upload-file.php'>Add new file</a></button><br>
<?php
	$file = new Fileclass();
	$user = new User();
	$result = $user->getuserid($username);
	$row = $user->fetch_object($result);
	$user_id = $row->id;
	// echo "User ID :".$user_id."<br>";
	$result = $file->getuserfiles($user_id);
	if ($file->num_rows($result)>0) {
			
		
		while ($row = $user->fetch_object($result)) {
			$id = $row->id;
			$file = $row->file_path.$row->file_name;
			$pos =strpos($file, '/');
			$filename = substr($file, $pos+1);
			// echo "$file $filename";
?>
		<img src='<?php echo $filename; ?>' height='100' width='100'>
		<!-- <button><a href="<?php echo 'editfile.php?action=edit&id=$id&userid=$user_id';?>"></a>Edit</button>
		<button><a href="<?php echo 'editfile.php?action=delete&id=$id&userid=$user_id';?>"></a>Delete</button><br> -->
		<?php echo "<a href='edit-file.php?action=edit&id=$id'> Edit</a>";?>
		<?php echo "<a href='edit-file.php?action=delete&id=$id'> Delete</a>";?>
<?php
		}
	} else {
		echo "No files found.";
	}

?>

<?php include_once("footer.php");?>