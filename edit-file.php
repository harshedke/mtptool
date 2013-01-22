<?php
session_start();
if ($_SESSION['username'] != null) {

	include_once('header.php');
	include_once('menu.php');
	include_once('includes/file.php');
	$action = $_GET['action'];
	$id = $_GET['id'];
	$user_id = $_GET['user_id'];
	// echo "Action:".$action." Id:".$id." User_id :".$user_id;


	if ($action == 'edit') {
		// echo "Editing image";
	?>
		<!-- <a href="view-file.php">Go Back</a><br> -->
		<button type='button' onClick="return goto(this.value)" value='view-file.php'>Go Back</button>
		<form name ='upload-file-form' method='POST' action='includes/edit-file-processing.php' enctype="multipart/form-data">
		<input type='hidden' name='id' value='<?php echo $id;?>'>	
		Select Image/Video Files <input type = 'file' name= 'file'> <br />
		<input type = 'submit' name ='btnupload' value ='Upload file' onClick="return validatefileupload()"> 
		<input type ='reset' name ='Clear'>  

	<?php
	}
	if ($action == 'delete') {
		// echo "Deleting image";

		$file = new Fileclass();
		$result = $file->getfile($id);
		$row = $file->fetch_object($result);
		$filename = $row->file_path.$row->file_name;
		
		$pos =strpos($filename, '/');
		$filename = substr($filename, $pos+1);
		 echo "<br>test Path".$filename."<br>";
		unlink($filename);
		$result = $file->deletefile($id);
		if ($file->affected_rows()>0) {
			echo "<script>alert('File has been deleted');</script>";
			echo "<script>window.location.href='view-file.php'</script>";
		} else {
			echo "<script>alert('File not deleted,some error occured,please try again.');</script>";
			echo "<script>window.location.href='view-file.php'</script>";
		}
	}
	include_once('footer.php');
} else {
	header('Location: ./index.php');
}
?>