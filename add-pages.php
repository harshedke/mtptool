<?php
session_start();
if ($_SESSION['username'] != null) {

include_once("header.php");
include_once('menu.php');
?>
<body>
	<h2>Add Pages</h2>
	<hr>
	<form name= 'add-page-form'autocomplete='off' method='POST' action='includes/add-pages-processing.php'>
		<div id='pagecountdiv'>
			<input type='hidden' name='website_id' value ='<?php echo "".$_GET['website_id'];?>'>

			Number of pages :<input type= 'text' id ='pagecount'  name='pagecount'>
			<input type='button' id='ok' value='Ok' />
		</div>
		<div id='pages'></div>
	</form>
</body>
<?php include_once("footer.php");
} else {
	header('Location: ./index.php');
}
?>
