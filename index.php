<?php 
include "connection/dbconnect.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cheerflex</title>
    <meta name="description" content="Phone and Accessories, Computers and Accessories, Clothing, Food at cheerflexx.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Click now to get your phone and original phone accessories at best price ever">
    <meta property="og:url" content="https://www.cheerflexx.com/">
    <meta property="og:image" content="images/icons/cheerflex2.png">
    <meta property="og:type" content="Online Store"> 
    <meta property="og:locale" content="en_GB">   
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="images/icons/cheerflex2.png">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/custom2.css">
        <link rel="stylesheet" type="text/css" href="css/custom3.css">
                <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
            <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">

        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">

        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">


<style type="text/css">
  /*-- 18. Preloader --*/

.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #a1c4fd;
    background: -webkit-gradient(linear, left top, right top, from(#a1c4fd), to(#c2e9fb));
    background: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a1c4fd', endColorstr='#c2e9fb', GradientType=1);
    z-index: 999999;
}

.spinner {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 40px;
    height: 40px;
    margin-left: -20px;
    margin-top: -20px;
    background-color: #ffffff;
    -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
    animation: sk-rotateplane 1.2s infinite ease-in-out;
}

@-webkit-keyframes sk-rotateplane {
    0% {
        -webkit-transform: perspective(120px)
    }
    50% {
        -webkit-transform: perspective(120px) rotateY(180deg)
    }
    100% {
        -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg)
    }
}

@keyframes sk-rotateplane {
    0% {
        transform: perspective(120px) rotateX(0deg) rotateY(0deg);
        -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
    }
    50% {
        transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
        -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
    }
    100% {
        transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
        -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    }
}

/*
.preloader {
  overflow: hidden;
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 100000;
  background-color: #006cff; }

.spinner {
  -webkit-animation: 2000ms linear 0s normal none infinite running medilife-load;
  animation: 2000ms linear 0s normal none infinite running medilife-load;
  background: transparent;
  border-color: #ffffff;
  border-top-color: #006cff;
  border-left-color: #006cff;
  border-right-color: #006cff;
  border-radius: 50%;
  border-style: solid;
  border-width: 2px;
  height: 50px;
  left: calc(50% - 25px);
  position: relative;
  top: calc(50% - 25px);
  width: 50px;
  z-index: 9; }

@-webkit-keyframes medilife-load {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }
@keyframes medilife-load {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

*/
</style>
</head>

<body>

     <!--Preloader
    <div class="preloader" id="preloader">
        <div class="spinner"></div>
    </div>
     -->
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- Begin Body Wrapper -->
  <div class="body-wrapper">
  <?php include "header.php" ?>
  <?php include "banner.php" ?>

        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>

        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>

        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>

        <!-- Main/Activator js -->
        <script src="js/main.js"></script>


<div class="container-fluid" style="background: #ecf0f5;">

  <div class="row" style="background: #fff">
  <div class="col-xs-12 col-sm-2">
   <div style="text-align: center; padding-top:40px;">
    <h2 class="view-text">Trending Now</h2>
    <br>
    <div>
      Swipe Left or Right to view Other Related Product
      <p style="font-weight: 600">Note: Automatic swipe is given to all related prodct category</p>
    </div>
        <br><br>
    </div>

</div>
  <div class="col-xs-12 col-sm-10">

     <?php include "product.php" ?>
  </div>
</div>
</div>



<!-- deals of the week -->
<div class="container-fluid" style="background: #eff5f9; padding-top: 10px; padding-bottom: 10px">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-4">

<?php include "dealbox.php" ?>

</div>

<div class="col-xs-12 col-sm-6 col-md-8">
    <br><br>
    <div style="position: relative; left: 40px; font-size: 18px;font-weight: 500;color: #000000;">Recommended for you</div>
    <?php include "productdeals.php";?>
</div>
</div>
</div>


<!-- Recommended for you -->
<div class="container-fluid" style="padding-top: 10px; padding-bottom: 10px">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
<div style="padding-left: 20px; font-size: 18px;font-weight: 500;color: #000000;">Best Sold Product</div>
<?php include "product2.php" ?>
        </div>
    </div>
</div>

    <!-- Blog-area -->
    <section style="background: #eff5f9" style="padding-top: 10px">
<div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-5 wow fadeInUp">
                    <div class="blog-box">
                        <div class="blog-image" style="padding-top: 10px">
                            <img src="images/icons/ca.jpg" alt="">
                        </div>
                        <div class="blog-details" style="background: #010028;">
<?php
$tt = "";
$dt1 = "";
$query = "SELECT * FROM info WHERE uid='a' LIMIT 1";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){
$tt = $row['tt'];
$dt1 = $row['dt1'];
   }
}
?>
                            <h4><a href="#"><?php echo $tt ?></a></h4>
                            <p style="color: white"><?php echo $dt1 ?></p>

                        </div>
                        <br>
                        <?php include 'product4.php' ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-7">
                   <?php include 'product3.php' ?>
                   <?php include 'product3a.php' ?>

                   <div class="blog-box">
                        <div class="blog-details" style="background: #bebec6; padding: 15px; color: #010028">
<?php
$tt = "";
$dt1 = "";
$query = "SELECT * FROM info WHERE uid='b' LIMIT 1";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){
$tt = $row['tt'];
$dt1 = $row['dt1'];
   }
}
?>
                            <h4><a href="#" style="color: #010028"><?php echo $tt ?></a></h4>
                            <p style="color: black"><?php echo $dt1 ?></p>

                        </div>
                    </div>

                </div>
            </div>
          </div>
    </section>

<div class="container-fluid" style="margin-top: 16px">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
<div style="padding-left:20px;font-size: 18px;font-weight: 500;color: #000000;">More Product To Consider</div>
    <?php include 'product5.php'; ?>
        </div>
    </div>
</div>

</div>

<?php include "modal.php" ?>

<?php include "footer.php" ?>


<script type="text/javascript">

function addToCart(id){
var data = new FormData();
var ajax = new XMLHttpRequest();

data.append("id",id);

ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
            var result = ajax.responseText;
            //var div = document.getElementById("view_id");
            //div.innerHTML = result;
            alert(result);
             }
        }

ajax.open("post", "cart.php", true);
ajax.send(data);
}

window.addEventListener('load', function(){
  document.getElementById("preloader").style.display = "none";
});

    function butProduct(message){
var data = new FormData();
var ajax = new XMLHttpRequest();

data.append("vid",message);

ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
            var result = ajax.responseText;
            var div = document.getElementById("view_id");
            div.innerHTML = result;
             }
        }

ajax.open("post", "AI.php", true);
ajax.send(data);
    }
</script>


</body>

</html>