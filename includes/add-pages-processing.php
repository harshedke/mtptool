<?php

include_once ('website.php');
$website = new Website();
// print_r($_POST);
$default_content = 'Body content will display here';
$website_id =$_POST['website_id'];
$arrayflag =0;
if (is_array($_POST['page'])) {
	$arrayflag=1;
}
$page = $_POST['page'];
$result = $website->addpage($website_id,$page,$default_content,$arrayflag);
if ($website->rowsaffected()>0) {
	if ($arrayflag == 1) {
		echo "<script>alert('All pages are created successfully')</script>";
	} else
	{
		echo "<script>alert('Page created successfully')</script>";
	}
	echo "<script>window.location.href= '../add-pages.php'</script>";
}else {
if ($arrayflag == 1) {
	echo "<script>alert('Pages not created,some error occurred')</script>";
} else {
	echo "<script>alert('Page not created,some error occurred')</script>";
}
echo "<script>window.location.href= '../add-pages.php'</script>";
}
?>