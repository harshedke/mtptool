function validateregister () {

	var alpha="^[a-zA-Z\ \]+$";
	var alphanum = "[a-zA-Z0-9]+$";
	var error;
	var MatchEmailPattern =/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	// alert('test');
	x=document.forms["registration-form"]["name"].value.trim();
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

	x=document.forms["registration-form"]["email"].value.trim();
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

	x=document.forms["registration-form"]["username"].value.trim();
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

	x=document.forms["registration-form"]["password"].value.trim();
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
	x=document.forms["registration-form"]["confirmpassword"].value.trim();
	if (x==null || x=="")
	{
		error="Confirm Password field should not be empty";
		alert(error);
		document.forms["registration-form"]["confirmpassword"].focus();
		return false;
	}
	password=document.forms["registration-form"]["password"].value.trim();
	confirmpassword=document.forms["registration-form"]["confirmpassword"].value.trim();
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
	// x=document.forms["upload-file-form"]["filename"].value.trim();
	// if (x==null || x=="")
	// {
	// 	error="Enter filename ";
	// 	alert(error);
	// 	document.forms["upload-file-form"]["filename"].focus();
	// 	return false;
	// }
	x=document.forms["upload-file-form"]["file"].value.trim();
	if (x==null || x=="")
	{
		error="Select file to upload ";
		alert(error);
		document.forms["upload-file-form"]["file"].focus();
		return false;
	}
}

function goto (link) {
	// alert(link);
	self.location = "http://localhost/MTP/"+link;
}

function validatelogin () {

	x=document.forms["login-form"]["username"].value.trim();
	if (x==null || x=="")
	{
		error="Enter username field";
		alert(error);
		document.forms["login-form"]["username"].focus();
		return false;
	}
	x=document.forms["login-form"]["password"].value.trim();
	if (x==null || x=="")
	{
		error="Enter Password field";
		alert(error);
		document.forms["login-form"]["password"].focus();
		return false;
	}
}

function validateseoform () {
	//alert('test');
	// return false;
	x=document.forms["seo-form"]["website_id"].value.trim();
	if (x==null || x=="")
	{
		// error="Please select website.";
		error="Please enter website.";
		alert(error);
		document.forms["seo-form"]["website_id"].focus();
		return false;
	}
	x=document.forms["seo-form"]["sitetitle"].value.trim();
	if (x==null || x=="")
	{
		error="Please enter site title.";
		alert(error);
		document.forms["seo-form"]["sitetitle"].focus();
		return false;
	}
	x=document.forms["seo-form"]["keywords"].value.trim();
	if (x==null || x=="")
	{
		error="Please enter keywords.";
		alert(error);
		document.forms["seo-form"]["keywords"].focus();
		return false;
	}

	x=document.forms["seo-form"]["description"].value.trim();
	if (x==null || x=="")
	{
		error="Please enter meta description.";
		alert(error);
		document.forms["seo-form"]["description"].focus();
		return false;
	}

}
function validatepagecount () {

	x=document.forms["add-page-form"]["pagecount"].value.trim();
	if (x==null || x=="")
	{
		error="Enter how many pages you want to create.";
		alert(error);
		document.forms["add-page-form"]["pagecount"].focus();
		return false;
	}
}
function validatepagename () {
	x = document.getElementsByName('page[]');
	var cnt = 0;
	alert("In JavaScript Start");
	for ( var i = 0; i < x.length; i++ ){
        if ( x[i].value == "" || x[i].value == null ) {
            alert("Enter name of page "+(i+1));
            x[i].focus();
            cnt=1;
            return false;
        }
    }
    alert("In JavaScript End");
}

function validatesinglepagename () {
	x=document.forms["add-pages-form"]["page"].value.trim();
	if (x==null || x=="")
	{
		error="Enter name of page.";
		alert(error);
		document.forms["add-pages-form"]["page"].focus();
		return false;
	}
}

/*
x=document.forms[""][""].value.trim();
	if (x==null || x=="")
	{
		error="Enter .";
		alert(error);
		document.forms[""][""].focus();
		return false;
	}
	x=document.forms[""][""].value.trim();
	if (x==null || x=="")
	{
		error="Enter .";
		alert(error);
		document.forms[""][""].focus();
		return false;
	}
*/