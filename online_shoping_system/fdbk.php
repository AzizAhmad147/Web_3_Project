<body>
<br>
<center><font color="white" size="+3">Feedback</font></center>
<br>
</body>
<?php
include("config.php");
$sel=mysql_query("select * from fdbk");

while($arr=mysql_fetch_array($sel))
  {
  	
     $i=$arr['itemno'];
	
	echo "<center><fieldset style='width:40% ;border:1px solid black;border-radius:10px'><table>
	<tr>
	
	<td><h3>Details</h3><b>Buyer:</b> ".$arr['name']."<br>
	<b>Phone No:</b> ".$arr['phone no']."<br>
	<b>Email:</b> ".$arr['email']."<br>
	<b>Subject:</b> ".$arr['subj']."<br>
	<b>Message:</b> ".$arr['mesg']."<br></td>
</tr>
	</table>
</fieldset><br>
</center>";
}

	
	?>
