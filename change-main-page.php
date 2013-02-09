<?php
include_once('header.php');
?>
<div id = 'dialog-change-main-page' title='Change main page'>
	<form id ='change-main-page'>
    <fieldset>
        <label for="name">Url</label>
        <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" />
    </fieldset>
	</form>
	<p class="validateTips">All form fields are required.</p>
</div>
<?php include_once('footer.php');?>