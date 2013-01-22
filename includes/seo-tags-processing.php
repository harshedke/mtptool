<?php
include_once('website.php');
if (isset($_POST['btnsubmit'])) {
	$website_id = $_POST['website_id'];
	$keywords = $_POST['keywords'];
	$metatags = $_POST['metatags'];
	$sitetitle = $_POST['sitetitle'];
	$description = $_POST['description'];
	$error = '';
	if (empty($website_id)) {
		// $error .= "Please select website.";
		$error .= "Please enter website.<br>";
	}
	if (empty($keywords)) {
		$error .= "Please enter keywords.<br>";
	}
	if (empty($metatags)) {
		$error .= "Please enter meta tags.<br>";
	}
	if (empty($sitetitle)) {
		$error .= "Please enter site title.<br>";
	}
	if (empty($description)) {
		$error .= "Please enter meta description.<br>";
	}
	if (!empty($error)) {
		echo "Go back and fix following errors <br>".$error;
	} else {
		$website = new Website();
		$website_id =1;
		$result = $website->setseotags($website_id,$keywords,$metatags,$sitetitle,$description);
		if ($website->rowsaffected()>0) {
			echo "<script>alert('SEO settings has been updated.')</script>";
			echo "<script>window.location.href='../seo-settings.php'</script>";

		}
		else
		{
			echo "<script>alert('SEO settings not updated.')</script>";
			echo "<script>window.location.href='../seo-settings.php'</script>";				
		}

	}
}
?>