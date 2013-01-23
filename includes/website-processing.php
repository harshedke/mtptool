<?php
session_start();
include_once('website.php');
$website = new Website();
if (isset($_POST['website_name'])) {
	$website_name = trim($_POST['website_name']);
	addwebsite($_SESSION['user_id'],$website_name);
}

function addwebsite($user_id,$website_name)
{
	$website = new Website();
	// error_log("addwebsite".$user_id.",".$website_name);
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
	$result = $website->getuserwebsites($_SESSION['user_id']);
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