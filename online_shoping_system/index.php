<?php
error_reporting(1);
include("config.php");
$name=$_REQUEST['t1'];
$pass=$_REQUEST['p1'];

if($_REQUEST['sub'])
 {
 $sel=mysql_query("select name,pass from details where name='$name'");
 $arr=mysql_fetch_array($sel);
 if($arr['name']==$name and $arr['pass']==$pass)
   {
   session_start();
   $_SESSION['eid']=$name;
  header("location:home.php");
  }
  else
   {
     $er="name and password do not match";
	 }
}	 
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Online Shoping </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="asset/bootstrap.min.css">


    <!-- jQuery library -->
    <script src="asset/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="asset/bootstrap.min.js"></script>


    <!-- stylesheet -->
    <link rel="stylesheet" href="asset/font-awesome.min.css" type="text/css">

<style type="text/css">
 body{
 	background: url('usepics/ba14.jpg');
 }

 #pdiv{
 	height: 60%;
 	width: 40%;
 	background-color:rgba(255,255,255,255);
 	position: fixed;
    top:20%;
    left: 30%;
    border-radius: 2%;


 }

.input-group{
	margin: 2% 10% 2% 10%;
}


.input-group-addon{
	background-color:black; 
	color: white;
}
#check{
	width: 45%;
}
.btn{
width: 40%;
}

</style>


</head>
<body>

	<div id="pdiv" class="container-fluied text-center">
		<img class="img-circle" src="usepics/img_user.png" height="
		150" width="150">
		<form method="post">
			<?php echo "<font color='red'>$er</font>";?>
			<br><br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input  type="text" class="form-control" name="t1" placeholder="User Name">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input  type="password" class="form-control" name="p1" placeholder="Password">
  </div>


    <div class="form-group"> 
  
   
      <button type="submit" class="btn btn-danger" name="fsub">Forgot Password?</button>
      <input type="submit" class="btn btn-warning " name="sub" value="Log In">

    
  </div>

</form>

		


	</div>




</body>
</html>