<head>
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
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}



xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("subcat").innerHTML=xmlhttp.responseText;
}
}
//alert(str);
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



</head>


<body>
<br><br><br>
<div class="container text-center"><h1>View All</h1>


<form action=""  name="testform" method="post" enctype="multipart/form-data" >
<div class="form-group">


    <table class="table" style="width: 60%" align="center">
        <tr><td>Category:</td><td><select name="cat" class="form-control" onChange="showUser(this.value)">
                    <option value=''>Select One</option>
                    <?php
                    require "config.php";// connection to database
                    $q=mysql_query("select * from category ");
                    while($n=mysql_fetch_array($q)){
                        echo "<option value=".$n['cat_id'].">".$n['category']."</option>";
                    }
                    ?>

                </select></td></tr>

        <tr><td>Sub Category:</td><td><select name="subcat" class="form-control" id="subcat">

                </select></td></tr>

        <tr><td colspan="2"><input  name="sub" type="submit" value="View" id="veiw" class="btn btn-primary form-control "  ></td></tr>

    </table>


</div>
</form>

<table class="table alert-warning  table-hover" style="width: 60%;"  align="center" >
    <thead>

        <th>
            Item
        </th>
        <th>
            Describtion
        </th>


    </thead>
<?php
  if(isset($_POST['sub'])) {


      $cat = $_REQUEST['cat'];
      $subcat = $_REQUEST['subcat'];
      $itemno = $_REQUEST['t1'];

      include "item_crud.php";

                $conn = new db_class();
                $read = $conn->read_item($cat, $subcat);
    
      
      while($fetch = $read->fetch_array()){ 

         $i = $fetch['itemno'];



      ?>
      <tr>
          <td><?php echo "<img src='itempics/$i.jpg' height='200' width='200'>" ?></td>
          <td><b>Itemno:</b><?php echo $fetch['
          
          '] ?><br><b>Price:</b><?php echo $fetch['price'] ?>
              <br><b>Description:</b><?php echo $fetch['description'] ?><br><br><br>
              <a class = "btn btn-warning update_item_id" data-toggle = "modal" data-target = "#update_modal" name = "<?php echo $fetch['id']?>"><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_item_id" name = "<?php echo $fetch['id']?>" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a>
          </td>


      </tr>

      <?php
      }

  }
    ?>




</table>

</div>



<!-- Modal -->
<div class="modal fade" id="del_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
    <center><h4 class = "text-danger">Are you sure you want to delete this record?</h4></center>
      </div>
      <div class="modal-footer">
        <button type = "button" class="btn btn-warning" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> No</button>
        <button type = "button" class="btn btn-danger del_item"><span class = "glyphicon glyphicon-trash"></span> Yes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class = "modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 class = "text-success modal-title">Update Item</h3>
    </div>
    <form method = "POST" action = "update_item_query.php">
    <div class="modal-body update">
      
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" name = "update"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


<script type = "text/javascript">
  $(document).ready(function(){
    
    //Delete
    $('.del_item_id').on('click', function(){
      $item_id = $(this).attr('name');
      $('.del_item').on('click', function(){
        window.location = "delete_item.php?item_id=" + $item_id;
      });
    });
    
    //Update
    $('.update_item_id').on('click', function(){
      $item_id = $(this).attr('name');
      
      $('.update').load('item_data.php?item_id=' +$item_id);
    });
  });
</script>


    </body>






