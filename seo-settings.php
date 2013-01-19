<?php include_once('header.php');?>
<body>
	<h2>SEO Settings</h2>
	<hr>
	<form name ='seo-form' method='POST' action='./includes/seo-tags-processing.php'>
		<table>
		<tr>
			<td>Website name </td>
			<td><input type='text' name='websitename'></td>
			<!-- <td>
				<select name='websitename'>
					<?php 
				/*		$website = new Website();
						$result = $website->getwebsites($_SESSION['user_id']);
						if ($website->num_rows($result)==0) {
								echo "<option name=' '>None</option>";	
						} else {
							while ($row = $website->fetch_array($result)) {
								echo "<option name=".$row->website_name.">".$row->website_name."</option>";	
							}
						}*/
					?>
				</select>
			</td> --> 
		</tr>
		<tr><td>Keywords</td><td><input type='text' name='keywords'></td></tr>
		<tr><td>Meta Tags</td><td><input type='text' name='metatags'></td></tr>
		<tr><td>Site Title</td><td><input type='text' name ='sitetitle'></td></tr>
		<tr><td>Meta Description</td><td><input type = 'text' name = 'description'></td></tr>
		<tr><td><input type='submit' name='btnsubmit' value='Save' onClick="return validateseoform()">
		<input type='reset' name='btnreset' value='Clear'></td></tr>
	</form>
</body>
<?php include_once('footer.php');?>