<head>
  <script>
     function showMoreInfo(id){
		 var xmlhttp = new XMLHttpRequest();
		 xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				document.getElementById(id).innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","info.php?id="+id);
			xmlhttp.send();
	 }
  </script>
  <style type="text/css">
  	
  		p{
  			font-size: 20px;
  		}
  	
  </style>

</head>


<body>
<br /><br />
<center><font  size="+3">Welcome User</font><br/><br>
<font color="red" size="+3" >You are in the Fashion Shop.</font><br/><br>
<font color="green" size="+3">You are Successfully logged in!!! </font><br/><br/>

 <?php
 $i=0;
 while($i<1){
	$i++;
	  if($i==1){
		 $ii=" Post One";
	 } ?>
	 <p>This is some information about this project ........</p>
	  <p>For More information about This Project Click On the more button</p>
	  <p id='<?php echo $i; ?>' ></p>
	  <button onclick ='showMoreInfo(<?php echo $i; ?>)' class="btn btn-primary " style="width: 30%">More</button>
 <?php
 }

?>
</center>

</body>





 
