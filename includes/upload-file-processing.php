<?php
session_start();
include_once("file.php");
include_once("user.php");
if (isset($_POST['btnupload'])) {

	$file = new Fileclass();
	$user = new User();
	// $filename =$_POST['filename'];

	$error ='';

	if ($_FILES["file"]["error"] > 0)
	{
		// echo "Error: " . $_FILES["file"]["error"] . "<br>";
		echo "Please Select file to upload.<br>";
		echo "<a href='../upload-file.php'>Back</a>";
	}
	else {

		$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

		if ($extension =='jpg' || $extension =='jpeg' || $extension =='gif' ||$extension =='png' ) {
			// echo "extension ".$extension."<br>";
			$target_path = "../images/";
		}
		elseif ($extension =='avi' || $extension =='mpeg' || $extension =='mp4') {
			// echo "extension ".$extension."<br>";
			$target_path = "../videos/";
		}
		else
		{
			$error ="File type not valid";
		}
		if(empty($error)){

			$file_path = $target_path;
			$result =$file->getmaxid();
			$row = $file->fetch_object($result);
			$id = $row->id + 1;
			$file_name = $id.".".$extension;
			$final = $target_path . $file_name;
			$result= $user->getuserid($_SESSION['username']);
			$row = $user->fetch_object($result);
			$user_id =$row->id;
			if(move_uploaded_file($_FILES['file']['tmp_name'], $final)) {

				// echo $final;
			    $result = $file->uploadfile($id,$user_id,$target_path,$file_name);
			    if ($file->affected_rows()>0) {
					// echo "The file ".  basename( $_FILES['file']['name'])." has been uploaded";

			    echo "<script>alert('File has been uploaded')</script>";
				echo "<script>window.location.href='../upload-file.php'</script>";
			    }
			    else
			    {
			    	unlink($final);
			    	echo "<script>alert('There was an error uploading the file, please try again!')</script>";
					echo "<script>window.location.href='../upload-file.php'</script>";
			    	echo "There was an error uploading the file, please try again!";
			    }
			} else{

				echo "<script>alert('There was an error uploading the file, please try again!')</script>";
				echo "<script>window.location.href='../upload-file.php'</script>";
			    echo "There was an error uploading the file, please try again!";
			}
		}
		else{
			echo "".$error;
		}

	}
}

?>