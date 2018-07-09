<?php
	include("config.php");
	$sel=mysql_query("select * from fdbk");
	$file = fopen("feadback.csv", "w+");
	$head = array("Name", "Mobile", 'Email', "Subject", 'Message');
	fputcsv($file, $head);
	while($row = mysql_fetch_assoc($sel)){
		$array = array($row['name'], $row['phone no'], $row['email'], $row['subj'], $row['mesg']);
		fputcsv($file, $array);

	}
	//$array = array();
	fclose($file);


	
?>