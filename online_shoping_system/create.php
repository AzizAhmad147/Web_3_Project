


<?php
        require_once 'item_crud.php';
	
	if(ISSET($_POST['save'])){	
    $catg=$_REQUEST['cat'];
    $subcatg=$_REQUEST['subcat'];
    $img=$_FILES['file']['name'];
    $itemno=$_REQUEST['t1'];
    $price=$_REQUEST['t2'];
    $desc=$_REQUEST['text'];
    $t=date("d-m-y h-i-s");
		$conn = new db_class();
		$conn->create_item($catg,$subcatg,$img,$itemno,$price,$desc,$t);
		header('location: index.php');
	}	
	
?>

