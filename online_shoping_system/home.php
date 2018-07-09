
<?php
error_reporting(1);
session_start();
$name=$_SESSION['eid'];
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php");
}
else if($name=="")
{
header("location:index.php");
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


#image{
    background-image: url("usepics/2.jpg");

    height: 100vh;/* Full height */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}

#rside{

    background-image: url("usepics/washi.png");
    font-family: Monotype Corsiva;
}

    #header{
        background-image: url("usepics/nistri.png");
        font-family: Monotype Corsiva;
    }
  #lside{

      background-image: url("usepics/nistri.png");
      font-family: Monotype Corsiva;


  }


#hbutton{
	float: right;


}


</style>


</head>
<body>



<div class="container text-center" id="header" style="width: 80%;float: right;background-color: black;height: 30%;"> <h2 >Online Shopping System</h2><br>
	<h3>Evry things you want is here just you want ariger</h3>
        <div id="hbutton"><a href="?con=hm"> <button type="button" class="btn btn-primary " >Home    <i class="glyphicon glyphicon-home"></i></button></a>
            <a href="?log=out"> <button type="button" class="btn btn-primary " >Log out   <i class="glyphicon glyphicon-log-out"></i></button></a></div>
 </div>



<div class="container" id="lside" style="width: 20%;height: 100%;float: left;">


    <div id="image" style="background-color: blue;height: 40%;width: 100% ">

 

    </div>

    <!--star btn groups -->


    <div class="btn-group btn-block">
        <a href="?con=add"> <button type="button" class="btn btn-primary btn-block" >Add Item <i style="float: right" class="glyphicon glyphicon-plus-sign"></i></button></a>

    </div>
    <div class="btn-group btn-block">
        <a href="?con=view"> <button type="button" class="btn btn-primary btn-block" >View All <i style="float: right" class="glyphicon glyphicon-eye-open"></i></button></a>
    </div>



    <div class="btn-group btn-block">
        <a href="?con=ord"> <button type="button" class="btn btn-primary btn-block" >Sold    <span style="float: right" class="badge"><?php include("config.php");
                    $count=0;
                    $sel=mysql_query("select * from orders");
                    $count=mysql_num_rows($sel);
                    echo $count;  ?></span></button></a>

    </div>


    <div class="btn-group btn-block">
        <a href="?con=fdbk"> <button type="button" class="btn btn-primary btn-block" >Feedback  <span style="float: right" class="badge"><?php
                    include("config.php");
                    $count=0;
                    $sel=mysql_query("select * from fdbk");
                    $count=mysql_num_rows($sel);
                    echo $count;
                    ?></span></button></a>

    </div>


</div>
<div class="container" id="rside" style="float: right;width: 80%;min-height: 80%;background-color: green" >

    <?php
    switch($_REQUEST['con'])
    {
        case 'add':include("additem.php");
            break;

        case 'view':include("view.php");
            break;

        case 'ord':include("orders.php");
            break;
        case 'fdbk':include("fdbk.php");
            break;
        case 'hm':include("hm.php");
            break;
            default;
            include("hm.php");
    }


    ?>


</div>

</body>
</html>