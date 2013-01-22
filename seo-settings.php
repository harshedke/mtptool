<?php 
session_start();
if ($_SESSION['username'] != null) {
	include_once('header.php');
	include_once('menu.php');
?>
<body>
	<h2>SEO Settings</h2>
	<hr>
	<form name ='seo-form' method='POST' action='./includes/seo-tags-processing.php'>
		<table>
		<tr>
			<td>Website name </td>

			<td><input type='text' name='website_id'></td>
			<!-- <td>Select website </td>
			<td>
				<select name='website_id'>
					<?php 
				/*		$website = new Website();
						$result = $website->getwebsites($_SESSION['user_id']);
						if ($website->num_rows($result)==0) {
								echo "<option value=' '>None</option>";	
						} else {
							while ($row = $website->fetch_array($result)) {
								echo "<option value=".$row->website_id.">".$row->website_name."</option>";	
							}
						}*/
					?>
				</select>
			</td> --> 
		</tr>
		<tr><td>Site Title</td><td><input type='text' name ='sitetitle'></td></tr>
		<tr><td>Keywords</td><td><textarea name='keywords' cols='16'></textarea></td></tr>
		<tr><td>Meta Tags</td><td><textarea name='metatags' cols='16'></textarea></td></tr>
		
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