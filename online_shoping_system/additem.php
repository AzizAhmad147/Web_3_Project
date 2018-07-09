
<script>
function showUser(str)
{
if (str=="")
{
document.getElementById("txtHint").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}


xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("subcat").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","dd.php?q="+str,true);
xmlhttp.send();
}
</script>




    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="asset/bootstrap.min.css">


    <!-- jQuery library -->
    <script src="asset/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="asset/bootstrap.min.js"></script>

    <!--include stylesheet file-->
    <link rel="stylesheet" href="asset/customise.css" type="text/css">






<body>
<br><br><br>


<div class="container text-center"><h1>Add Item</h1>
<br><br>

<form action="create.php"  name="testform" method="post" enctype="multipart/form-data" >
<div class="form-group">

    <table style="width: 60%" align="center" class="table">
        <tr><td>Category:</td><td><select name=cat class="form-control"  onChange="showUser(this.value)">
                    <option value=''>Select One</option>
                    <?php
                    require "config.php";// connection to database
                    $q=mysql_query("select * from category ");
                    while($n=mysql_fetch_array($q)){
                        echo "<option value=".$n['cat_id'].">".$n['category']."</option>";
                    }
                    ?>

                </select></td></tr>

        <tr><td>Sub Category:</td><td><select name="subcat" id="subcat" class="form-control">

                </select></td></tr>


        <tr><td>Image:</td><td><input name="file" type="file" required class="form-control"></td></tr>
        <tr><td>Item No:</td><td> <input name="t1" type="text" id="t1" class="form-control"  required></td></tr>
        <tr><td>Price:</td><td><input type="text" name="t2"  id="t2" class="form-control"  required></td></tr>
        <tr><td colspan="2"><textarea name="text" cols="40" rows="6"  required class="form-control"></textarea></td></tr>
        <tr><td colspan="2"><input name="save" id="insert" class=" btn btn-primary form-control" type="submit" value="Add Item" ></td></tr>



    </table>
</form>



</div>



</body>
