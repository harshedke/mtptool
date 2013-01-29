<p class="validateTips">All pages created successfully,select menu pages for your website.</p>
<form id = "add-menu-form">
	<fieldset>
	<?php
	include_once ('includes/website.php');
	$website_id = $_REQUEST['website_id'];
	$website = new Website();
	$result = $website->getpages($website_id);
	while ($row = $website->fetch_array($result)) {
		$pagename = $row['page_name'];
		$id = $row['page_id'];
	?>
	<label for='name'><?php echo $pagename ;?></label>
	<input type='checkbox' name='checkname[]' value='<?php echo $id;?>' />
	<?php }?>
	</fieldset>
</form>