<?php 
	require_once 'item_crud.php';
	if(ISSET($_POST['update'])){	
		$price = $_POST['price'];
		$desc = $_POST['desc'];
		$item_id = $_POST['item_id'];
		$conn = new db_class();
		$conn->update_item($price, $desc, $item_id);
		echo '
			<script>alert("Updated Successfully")</script>;
			
		';
		header('location:home.php?con=view');
	}	
?>