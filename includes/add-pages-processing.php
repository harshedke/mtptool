<?php

include_once ('website.php');
$website = new Website();
// print_r($_POST);
$default_content = 'Body content will display here';
$website_id =1;
foreach ($_POST['page'] as $key => $page_name) {
	$result = $website->addpage($website_id,$page_name,$default_content);
	if ($website->rowsaffected()>0) {
		echo "<script>alert('".$page_name." created successfully')</script>";
		echo "<script>window.location.href= '../add-pages.php'</script>";
	}
	else {
		echo "<script>alert('".$page_name." not created.some error occurred')</script>";	
		echo "<script>window.location.href= '../add-pages.php'</script>";
	}
}
?>