<?php
session_start();
include_once('website.php');
include_once('user.php');
$website = new Website();
if (isset($_POST['website_name'])) {
	$website_name = trim($_POST['website_name']);
	addwebsite($_SESSION['user_id'],$website_name);
}

function addwebsite($user_id,$website_name)
{
	$website = new Website();
	 error_log("addwebsite".$user_id.",".$website_name);
	$result = $website->createwebsite($user_id,$website_name);
	if ($website->rowsaffected()>0) {
		echo '1';
	}
	else {
		echo '0';
	}
}

function getuserwebsites()
{
	$website = new Website();
	$user = new User();
	$result = $user->getuserid($_SESSION['username']);
	$row = $user->fetch_object($result);
	$user_id = $row->id;
	error_log($user_id);
	$result = $website->getuserwebsites($user_id);
	if ($website->num_rows($result)>0) {
        while ($row = $website->fetch_array($result)) {
            echo "<tr><td>".$row['website_name']."</td></tr>";
        }
    }
    else{
        echo "<tr><td>There are no websites.</td></tr>";
    }
}
?>