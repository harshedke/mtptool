<?php
/*
* This file does the processing of data passed by user login form
*/
session_start();
include_once('user.php');

if (isset($_POST['btnsubmit']))
{

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$error= '';
	if (empty($username)) {
		$error.= "Username field should not empty<br>";
	}
	if (!empty($username) && (ctype_alnum($username))==FALSE) {
		$error.= "Only alphabets and numbers allowed in username field<br>";
	}
	if (empty($password)) {
		$error.= "Password field should not empty<br>";
	}
	if (!empty($error)) {
		echo "Please go back and fix following errors <br/>$error";
	} else {
		$user =  new User();
		$encryptpassword = md5($password);
		$result =$user->login($username,$encryptpassword);
		if($user->num_rows($result)>0)
		{
			$row = $user->fetch_object($result);
			if ($row->status!='inactive') {
				$_SESSION['username'] = $username;
 				echo "<script>alert('Login Successful')</script>";
				// echo "<script>window.location.href='../create-website.php'</script>";
				echo "<script>window.location.href='../websites'</script>";
			} else {
				echo "<script>alert('Please verify your account.')</script>";
				echo "<script>window.location.href='../instructions.php'</script>";
			}
		}
		else
		{
			echo "<script>alert('Unsuccessful login attempt')</script>";
			echo "<script>window.location.href='../index.php'</script>";
		}
	}
}
?>