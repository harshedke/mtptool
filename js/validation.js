function validateregister () {
	
	var alpha="^[a-zA-Z\ \]+$";
	var alphanum = "[a-zA-Z0-9]+$";
	var error;
	var MatchEmailPattern =/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	// alert('test');
	x=document.forms["registration-form"]["name"].value;
	if (x==null || x=="")
	{
		error="Name field should not be empty";
		alert(error);
		document.forms["registration-form"]["name"].focus();
		return false;
	}
	if (!x.match(alpha)) {
		error="Name field should not contain numbers";
		document.forms["registration-form"]["name"].value='';
		document.forms["registration-form"]["name"].focus();
		alert(error);
		return false;	
	}

	x=document.forms["registration-form"]["email"].value;
	if (x==null || x=="")
	{
		error="Email-Id field should not be empty";
		alert(error);
		document.forms["registration-form"]["email"].focus();
		return false;
	}

	if (!x.match(MatchEmailPattern)) {
		error = 'Email-Id is not valid.';
		alert(error);
		document.forms["registration-form"]["email"].value='';
		document.forms["registration-form"]["email"].focus();
		return false;
	}

	x=document.forms["registration-form"]["username"].value;
	if (x==null || x=="")
	{
		error="Username field should not be empty";
		alert(error);
		document.forms["registration-form"]["username"].focus();
		return false;
	}

	if (!x.match(alphanum)) {
		error="Only alphabets and numbers allowed in username field";
		document.forms["registration-form"]["username"].value='';
		document.forms["registration-form"]["username"].focus();
		alert(error);
		return false;	
	}

	x=document.forms["registration-form"]["password"].value;
	if (x==null || x=="")
	{
		error="Password field should not be empty";
		alert(error);
		document.forms["registration-form"]["password"].focus();
		return false;
	}
	 if (x.length <6) {
		error="Password must contain at least 6 charactres";
		alert(error);
		document.forms["registration-form"]["password"].value='';
		document.forms["registration-form"]["password"].focus();
		return false;
	}
	x=document.forms["registration-form"]["confirmpassword"].value;
	if (x==null || x=="")
	{
		error="Confirm Password field should not be empty";
		alert(error);
		document.forms["registration-form"]["confirmpassword"].focus();
		return false;
	}
	password=document.forms["registration-form"]["password"].value;
	confirmpassword=document.forms["registration-form"]["confirmpassword"].value;
	if (password!=confirmpassword)
	{
		error="Password's not matched";
		alert(error);
		document.forms["registration-form"]["password"].value='';
		document.forms["registration-form"]["confirmpassword"].value='';
		document.forms["registration-form"]["password"].focus();
		return false;
	}
}

function validatefileupload () {
	// x=document.forms["upload-file-form"]["filename"].value;
	// if (x==null || x=="")
	// {
	// 	error="Enter filename ";
	// 	alert(error);
	// 	document.forms["upload-file-form"]["filename"].focus();
	// 	return false;
	// }
	x=document.forms["upload-file-form"]["file"].value;
	if (x==null || x=="")
	{
		error="Select file to upload ";
		alert(error);
		document.forms["upload-file-form"]["file"].focus();
		return false;
	}
}

function validatelogin () {
	
	x=document.forms["login-form"]["username"].value;
	if (x==null || x=="")
	{
		error="Enter username field";
		alert(error);
		document.forms["login-form"]["username"].focus();
		return false;
	}
	x=document.forms["login-form"]["password"].value;
	if (x==null || x=="")
	{
		error="Enter Password field";
		alert(error);
		document.forms["login-form"]["password"].focus();
		return false;
	}
}
