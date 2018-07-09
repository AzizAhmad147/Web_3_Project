<?php
	require_once 'item_crud.php';
	
	$item_id = $_REQUEST['item_id'];
	$conn = new db_class();
	$conn->delete_item($item_id);
			echo '
			<script>alert("Dellete Successfully")</script>;
			<script>window.location = "home.php"</script>;
		';
?>