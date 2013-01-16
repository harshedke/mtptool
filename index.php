<?php include_once("header.php");?>
<body>
<h2>Login-form</h2>
<hr>
<form name='login-form' method='POST' action='includes/login-processing.php' autocomplete="off">

Username :<input type ='text' name ='username'> <br/>
Password :<input type ='password' name ='password'> <br/> 
<input type ='submit' name ='btnsubmit' value ='Submit' onClick="return validatelogin()"> 
<input type ='reset' name ='btnreset' value ='Clear'><button><a href="register.php">Register Here</a></button>
</form>
</body>

<?php include_once("footer.php");?>