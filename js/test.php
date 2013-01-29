<?php
error_log("In THis file b4");

foreach (json_decode($_POST['page']) as $key => $value) {
	error_log("Key ".$key.",value ".$value);
}
error_log("<br>In THis file after");
?>