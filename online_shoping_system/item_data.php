<?php
	$item_id = $_REQUEST['item_id'];
	require_once 'item_crud.php';
	$conn = new db_class();
	 $fetch = $conn->item_id($item_id);
?>
<div class = "form-group">
	<label>Price</label>
	<input type = "text" name = "price" value = "<?php echo $fetch['price']?>" class = "form-control" />
	<input type = "hidden" name = "item_id" value = "<?php echo $item_id?>" />
</div>
<div class = "form-group">
	<label>Description</label>
	<textarea name = "desc" value = "" class = "form-control" ><?php echo $fetch['description']?></textarea>
</div>	