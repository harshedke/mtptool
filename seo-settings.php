<?php 
session_start();
if ($_SESSION['username'] != null) {
	include_once('header.php');
	include_once('menu.php');
	include_once('includes/website.php');
?>
<body>
	<h2>SEO Settings</h2>
	<hr>
	<form name ='seo-form' method='POST' action='./includes/seo-tags-processing.php'>
		<table>
		<tr>
			<!-- <td>Website name </td>
			<td><input type='text' name='website_id'></td> -->
			<td>Select website </td>
			<td>
				<select name='website_id'>
					<?php 
						error_log("User ID : ".$_SESSION['user_id']);
						$website = new Website();
						$result = $website->getwebsites($_SESSION['user_id']);
						error_log("num rows ".$website->num_rows($result));
						if ($website->num_rows($result)<1) {
								echo "<option value=' '>None</option>";	
						} else {
							echo "<option value=' '>Select</option>";
							while ($row = $website->fetch_array($result)) {
								echo "<option value=".$row['website_id'].">".$row['website_name']."</option>";	
							}
						}
					?>
				</select>
			</td>
		</tr>
		<tr><td>Site Title</td><td><input type='text' name ='sitetitle'></td></tr>
		<tr><td>Keywords</td><td><textarea name='keywords' cols='16'></textarea></td></tr>
		<tr><td>Meta Description</td><td><textarea name = 'description' cols='16'></textarea></td></tr>
		<tr><td><input type='submit' name='btnsubmit' value='Save' onClick="return validateseoform()">
		<input type='reset' name='btnreset' value='Clear'></td></tr>
	</form>
</body>
<?php include_once('footer.php');
} else {
	header('Location: ./index.php');
}
?>