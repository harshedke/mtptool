<?php include_once("header.php");
session_start();
if ($_SESSION['username'] !='' ) {
	error_log("string".$_SESSION['username']);
	 header("Location: ./upload-file.php");
}else{
?>
<body>
<h2>Login-form</h2>
<hr>
<form name='login-form' method='POST' action='includes/login-processing.php' autocomplete="off">

Username :<input type ='text' name ='username' autofocus> <br/>
Password :<input type ='password' name ='password'> <br/> 
<input type ='submit' name ='btnsubmit' value ='Submit' onClick="return validatelogin()"> 
<input type ='reset' name ='btnreset' value ='Clear'>
<a href="register.php">Register Here</a>
</form>
</body>

<?php 
include_once("footer.php");
}
?>