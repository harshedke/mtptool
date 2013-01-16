<?php include_once("header.php");?>
<body>
<form name='registration-form' method='POST' action='includes/register-processing.php' autocomplete="off">
Name :<input type ='text' name ='name'> <br/>
Email-ID :<input type ='text' name ='email'> <br/>
Username :<input type ='text' name ='username'> <br/>
Password :<input type ='password' name ='password'> <br/> 
Confirm Password :<input type ='password' name ='confirmpassword'> <br/>
<input type ='submit' name ='btnsubmit' value ='Submit' onClick="return validateregister()"> 
<input type ='reset' name ='btnreset' value ='Clear'><br/>

<button><a href="index.php">Go Back</a></button>
 
</form>
</body>

<?php include_once("footer.php");?>