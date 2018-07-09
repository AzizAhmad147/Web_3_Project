<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <script src="js/jquery.min.js"></script>

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">


<style type="text/css">
	  .Contact_form{
      position: fixed;
      left: 5px;
      bottom:0;
     }

     #hidden{
      display: none;
 
     }
</style>
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="?page=home">Home</a></li>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="index.php?catg=2 & subcatg=dresses">Dresses</a></li>
                                        <li><a href="index.php?catg=2 & subcatg=Churidar Suits">Churidar Suits</a></li>
                                        <li><a href="index.php?catg=2 & subcatg=Kurtas">Kurtas</a></li>
                                        <li><a href="index.php?catg=2 & subcatg=Sandals">Sandals</a></li>
                                        <li><a href="index.php?catg=2 & subcatg=Office Wear">Office Wear</a></li>
                                        <li><a href="index.php?catg=2 & subcatg=Artificial Jewellery">Artificial Jewellery</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <li><a href="index.php?catg=1 & subcatg=Casual Shirts">Casual Shirts</a></li>
                                        <li><a href="index.php?catg=1 & subcatg=Jeans">jeans</a></li>
                                        <li><a href="index.php?catg=1 & subcatg=T-Shirts">T_Shirts</a></li>
                                        <li><a href="index.php?catg=1 & subcatg=Footwear">Footwear</a></li>
                                        <li><a href="index.php?catg=1 & subcatg=Shorts">Shorts</a></li>
                                        <li><a href="index.php?catg=1 & subcatg=watches">Watches</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <li><a href="index.php?catg=3 & subcatg=Baby Apparel">Baby Apparel</a></li>
                                        <li><a href="index.php?catg=3 & subcatg=Girls Apparel">Girls Apparel</a></li>
                                        <li><a href="index.php?catg=3 & subcatg=Boys Apparel">Boys Apparel</a></li>
                                        <li><a href="index.php?catg=3 & subcatg=Kids Toys">Kids Toys</a></li>
                                        
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!--Middle and changable section -->
    <section>

        <?php
        error_reporting(0);


        if($_REQUEST['catg']==1)
        {
            if($_REQUEST['subcatg']=='Casual Shirts')
            {
                include("casual.php");
            }
        }

        if($_REQUEST['catg']==2)
        {
            if($_REQUEST['subcatg']=='dresses')
            {
                include("dress.php");
            }
        }

        if($_REQUEST['catg']==2)
        {
            if($_REQUEST['subcatg']=='Churidar Suits')
            {
                include("suits.php");
            }
        }
        if($_REQUEST['catg']==2)
        {
            if($_REQUEST['subcatg']=='Sandals')
            {
                include("sandals.php");
            }
        }
        if($_REQUEST['catg']==2)
        {
            if($_REQUEST['subcatg']=='Kurtas')
            {
                include("kurtas.php");
            }
        }
        if($_REQUEST['catg']==2)
        {
            if($_REQUEST['subcatg']=='Office Wear')
            {
                include("office.php");
            }
        }
        if($_REQUEST['catg']==2)
        {
            if($_REQUEST['subcatg']=='Artificial Jewellery')
            {
                include("jewel.php");
            }
        }
        if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Casual Shirts')
{
include("casual.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Jeans')
{
include("jeans.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='T-Shirts')
{
include("tshirt.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Footwear')
{
include("shoe.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Shorts')
{
include("shorts.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='watches')
{
include("watch.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Baby Apparel')
{
include("baby.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Girls Apparel')
{
include("girls.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Boys Apparel')
{
include("boy.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Kids Toys')
{
include("toy.php");
}
}
        if(!($_REQUEST['catg']))
        {
            include("home.php");
        }
        ?>




    </section>

    
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Home</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>

    </footer>
    <!-- ##### Footer Area End ##### -->



    <!-- start section contact -->

    <section>
<button style="width:200px;z-index: 2000" type="submit" name="send" class="btn btn-danger Contact_form" id="show">Send Email Fore US<span  style="float: right;margin-top: 3px" class="fa fa-envelope"></span></button>

    <div class="container-fluied Contact_form" id="hidden" style="z-index: 2000;width: 300px;background-color: white;border-radius: 10px 10px 0 0 ">
      <p align="center" style="background-color: blue;color: white;padding: 10px;border-radius:10px 10px 0 0">Email! <button id="hide" style="float: right;background-color: blue;border:none;" ><span style="color: white"  class="fa fa-minus"></span></button></p>
    <div class="container" style="width: 250px;">
         <p>sorry now we are oflline then we answer fore your massage.

    <form method="post" name="f1" onSubmit="return vali()"  >

       <div class=" form-group">
    
    
      <input type="text" class="form-control input-sm"  placeholder="Name" name="t1" onChange="return name()">
   
  </div>
         <div class=" form-group">
    
    
      <input type="text" class="form-control input-sm" name="t2" onChange="return phone()"  placeholder="Phone Number">
   
  </div>
  <div class="form-group">
   
  
      <input type="email" class="form-control input-sm" id="email" name="t3" onChange="return email()" placeholder="email">
    </div>
         <div class=" form-group">
    
    
      <input type="text" class="form-control input-sm" name="t4" onChange="return subj()"   placeholder="Subject">
   
  </div>
  
  <div class=" form-group">
    
    
      <textarea class="form-control input-sm" rows="5" name="t5"  placeholder="Massage"></textarea>
   
  </div>
    <div class="form-group">
   
  
      <input type="submit" class="form-control  btn btn-primary btn-sm"  name="sub" value="Send">
    </div>
  
 
</form>
  </div>  


</div>



 
</section>


<script>
function name()
{
  var name=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t1.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	} 
		 function phone()
{
  var phone=/^[0-9]{10,15}$/;
   if(document.f1.t2.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	} 
	function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t3.focus();
	 return false;
	 }
	} 
		function subj()
{
 	var subj=/^[a-zA_Z0-9]{5,100}$/;
   if(document.f1.t4.value.search(subj)==-1)
    {
	 alert("enter correct subject");
	 document.f1.t4.focus();
	 return false;
	 }
	} 

	
	
function vali()
{

	var name=/^[a-zA-Z]{4,15}$/;
	var phone=/^[0-9]{10,15}$/;
	 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	 var subj=/^[a-zA_Z0-9]{5,100}$/;
	 var mesg=/^[a-zA_Z0-9]{10,300}$/;
   if(document.f1.t1.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	 
 
  else if(document.f1.t2.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	 


   else if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t3.focus();
	 return false;
	 }
	 
	
   else if(document.f1.t4.value.search(subj)==-1)
    {
	 alert("enter correct subject");
	 document.f1.t4.focus();
	 return false;
	 }
	

 	
   
	 else
	 {
	 return true;
	 }
	}
</script>

<script type="text/javascript">
	$(document).ready(function(){
    $("#hide").click(function(){
        $("#hidden").hide();
    });
    $("#show").click(function(){
        $("#hidden").show();
    });
});
</script>



<?php
include("config.php");
$name=$_REQUEST['t1'];
$phone=$_REQUEST['t2'];
$email=$_REQUEST['t3'];
$subj=$_REQUEST['t4'];
$mesg=$_REQUEST['t5'];

if($_REQUEST['sub'])
 {
 if(mysql_query("insert into fdbk values('$name','$phone','$email','$subj','$mesg')"))
    {
	  echo "<font face='Lucida Handwriting' color='red' size='+1'>Message sent successfully</font>";
     }
 
  }
?>

<!-- end section contact -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>




</body>

</html>