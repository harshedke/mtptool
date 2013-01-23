<?php 
session_start();
if ($_SESSION['username'] != null) {

include_once("header.php");
include_once('menu.php');

?>
<body>
	<h2>Add Pages</h2>
	<hr>
	<form method='POST' action='add-pages.php'>
		Number of pages :<input type= 'text' name='pagecount'><br>
		<button type='Submit' name='ok'>Ok</button>
	</form>
	<?php 
		if (isset($_POST['ok'])) {
	?>
	<form name = 'add-pages-form' method= 'POST' action='includes/add-pages-processing.php' >
	<?php
		$cnt=$_POST['pagecount'];
		echo "Number of pages you want : ".$cnt."<br>";
		if ($cnt>1) {
	?>
	
	<?php
		for ($i=1; $i <= $cnt ; $i++) { 
			echo "Enter name of Page $i:<input type='text' name ='page[]'><br>";
		}
	?>
	<input type='submit' name='btnsubmit' value='Create' onclick= "return validatepagename()">
	
	<?php
		}
		else {
			echo "Enter name of Page :<input type='text' name ='page[]'> ";	
	?>
	<input type='submit' name='btnsubmit' value='Create' onclick= "return validatepagename()">
	<?php 
		}
	?>
	</form>
	<?php
		}
	?>
</body>
<?php include_once("footer.php");
} else {
	header('Location: ./index.php');
}
?>
