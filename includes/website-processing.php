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
        	$main_page= $row['main_page'];
        	error_log("main page ".$main_page);
        	if (is_null($main_page)) {
        		echo "<tr><td><a href='#' target='_blank'>".$row['website_name']."</a></td>";
        		// echo "<script>alert('Please set your website home page first.')</script>";
        	} else {
            	echo "<tr>
            	<td><a href=websitepreview.php?website_id=".$row['website_id']."&pageurlid=".$main_page." target='_blank'>".$row['website_name']."</a></td>";
            }
            echo "<td><a href=add-pages.php?website_id=".$row['website_id'].">Add Pages</a></td></tr>";
        }
    }
    else{
        echo "<tr><td>There are no websites.</td></tr>";
    }
}
?>