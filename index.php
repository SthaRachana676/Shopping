<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
$id=intval($_GET['id']);
if(isset($_SESSION['cart'][$id])){
$_SESSION['cart'][$id]['quantity']++;
}else{
$sql_p="SELECT * FROM products WHERE id={$id}";
$query_p=mysqli_query($con,$sql_p);
if(mysqli_num_rows($query_p)!=0){
$row_p=mysqli_fetch_array($query_p);
$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
header('location:index.php');
}else{
$message="Product ID is invalid";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Shopping Portal Home Page
    </title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/green.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css">
    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
  </head>
  <body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">
      <?php include('includes/top-header.php');?>
      <?php include('includes/main-header.php');?>
      <?php include('includes/menu-bar.php');?>
    </header>
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
      <div class="container">
        <div class="furniture-container homepage-container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
              <!-- ================================== TOP NAVIGATION ================================== -->
              <?php include('includes/side-menu.php');?>
              <!-- ================================== TOP NAVIGATION : END ================================== -->
            </div>
            <!-- /.sidemenu-holder -->	
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
              <!-- ========================================== SECTION – HERO ========================================= -->
              <div id="hero" class="homepage-slider3">
                <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                  <div class="full-width-slider">	
                    <div class="item" style="background-image: url(assets/images/sliders/11.jpg);">
                      <!-- /.container-fluid -->
                    </div>
                    <!-- /.item -->
                  </div>
                  <!-- /.full-width-slider -->
                  <div class="full-width-slider">
                    <div class="item full-width-slider" style="background-image: url(assets/images/sliders/12.jpg);">
                    </div>
                    <!-- /.item -->
                  </div>
                  <div class="full-width-slider">
                    <div class="item full-width-slider" style="background-image: url(assets/images/sliders/13.jpg);">
                    </div>
                  </div>
                  <div class="full-width-slider">
                    <div class="item full-width-slider" style="background-image: url(assets/images/sliders/14.jpg);">
                    </div>
                  </div>
                  <div class="full-width-slider">
                    <div class="item full-width-slider" style="background-image: url(assets/images/sliders/15.webp);">
                    </div>
                  </div>
                  <div class="full-width-slider">
                    <div class="item full-width-slider" style="background-image: url(assets/images/sliders/16.webp);">
                    </div>
                  </div>
                  <div class="full-width-slider">
                    <div class="item full-width-slider" style="background-image: url(assets/images/sliders/17.webp);">
                    </div>
                  </div>
                  <div class="full-width-slider">
                    <div class="item full-width-slider" style="background-image: url(assets/images/sliders/18.png);">
                    </div>
                  </div>
                  <div class="full-width-slider">
                    <div class="item full-width-slider" style="background-image: url(assets/images/sliders/19.png);">
                    </div>
                  </div>
                  
                  <!-- /.full-width-slider -->
                </div>
                <!-- /.owl-carousel -->
              </div>
              <!-- ========================================= SECTION – HERO : END ========================================= -->	
              <!-- ============================================== INFO BOXES ============================================== -->
              <div class="info-boxes wow fadeInUp">
                <div class="info-boxes-inner">
                  <div class="row">
                    <div class="col-md-6 col-sm-4 col-lg-4">
                      <div class="info-box">
                        <div class="row">
                          <div class="col-xs-2">
                            <i class="icon fa fa-dollar">
                            </i>
                          </div>
                          <div class="col-xs-10">
                            <h4 class="info-box-heading green">money back
                            </h4>
                          </div>
                        </div>	
                        <h6 class="text">30 Day Money Back Guarantee.
                        </h6>
                      </div>
                    </div>
                    <!-- .col -->
                    <div class="hidden-md col-sm-4 col-lg-4">
                      <div class="info-box">
                        <div class="row">
                          <div class="col-xs-2">
                            <i class="icon fa fa-truck">
                            </i>
                          </div>
                          <div class="col-xs-10">
                            <h4 class="info-box-heading orange">free shipping
                            </h4>
                          </div>
                        </div>
                        <h6 class="text">free ship-on oder over Rs. 600.00
                        </h6>	
                      </div>
                    </div>
                    <!-- .col -->
                    <div class="col-md-6 col-sm-4 col-lg-4">
                      <div class="info-box">
                        <div class="row">
                          <div class="col-xs-2">
                            <i class="icon fa fa-gift">
                            </i>
                          </div>
                          <div class="col-xs-10">
                            <h4 class="info-box-heading red">Special Sale
                            </h4>
                          </div>
                        </div>
                        <h6 class="text">All items-sale up to 20% off 
                        </h6>	
                      </div>
                    </div>
                    <!-- .col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.info-boxes-inner -->
              </div>



              <!-- /.info-boxes -->
              <!-- ============================================== INFO BOXES : END ============================================== -->		
            </div>


            <!-- /.homebanner-holder -->
          </div>
 <!--shop bar show ====================================================================================== -->
<style>

.mainn-raised {
margin: px 0px 0px;
border-radius: 6px;
box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
  .mainn {
background: #C9D6FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #E2E2E2, #C9D6FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #E2E2E2, #C9D6FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
position: relative;
z-index: 3;

}
.shop {
  position: relative;
  overflow: hidden;
  margin: 20px 0px;
}
.shop:before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0px;
  width: 60%;
  background: #12c2e9;  /* fallback for old browsers */
 background: -webkit-linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  opacity: 0.9;
  -webkit-transform: skewX(-45deg);
  -ms-transform: skewX(-45deg);
  transform: skewX(-45deg);
}
.shop:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 1px;
  width: 100%;
 background: #12c2e9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  opacity: 0.9;
  -webkit-transform: skewX(-45deg) translateX(-100%);
  -ms-transform: skewX(-45deg) translateX(-100%);
  transform: skewX(-45deg) translateX(-100%);
}
.shop .shop-img {
  position: relative;
  background-color: #E4E7ED;
  z-index: -1;
}
.shop .shop-img>img {
  width: 100%;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}
.shop:hover .shop-img>img {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
.shop .shop-body {
  position: absolute;
  top: 0;
  width: 75%;
  padding: 30px;
  z-index: 10;
}
.shop .shop-body h3 {
  color: #FFF;
}

.shop .shop-body .cta-btn {
  color: #FFF;
  text-transform: uppercase;
}
</style>

<br>
<br>
<br>

  <div class="section mainn mainn-raised">
    <!-- container -->
    <div class="container">
    
      <!-- row -->
      <div class="row">
        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <a href="product-details.php?pid=64"><div class="shop">
            <div class="shop-img">
              <img src="./img/S.jpg" alt="">
            </div>
            <div class="shop-body">
              <h3>Samsung<br>Collection</h3>
              <a href="product-details.php?pid=64" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div></a>
        </div>
        <!-- /shop -->

        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <a href="product-details.php?pid=67"><div class="shop">
            <div class="shop-img">
              <img src="./img/p.jpg" alt="">
            </div>
            <div class="shop-body">
              <h3>Poco<br>Collection</h3>
              <a href="product-details.php?pid=67" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div></a>
        </div>
        <!-- /shop -->

        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <a href="product-details.php?pid=65"><div class="shop">
            <div class="shop-img">
              <img src="img/R.jpeg" alt="">
            </div>
            <div class="shop-body">
              <h3>RealMe<br>Collection</h3>
              <a href="product-details.php?pid=65" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
            </div>
                          </div></a>
        </div>
        <!-- /shop -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <br>
  <br>
  <br>
 <!-- shop bar end ======================================================================================== -->
          <!-- /.row -->
          <!-- ============================================== SCROLL TABS ============================================== -->
          <div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
            <div class="more-info-tab clearfix">
              <h3 class="new-product-title pull-left">Featured Products
              </h3>
              <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                <li class="active">
                  <a href="#all" data-toggle="tab">All
                  </a>
                </li>
                <li>
                  <a href="#Samsung" data-toggle="tab">Samsung
                  </a>
                </li>
                <li>
                  <a href="#Redmi" data-toggle="tab">Redmi
                  </a>
                </li>
              </ul>
              <!-- /.nav-tabs -->
            </div>
            <div class="tab-content outer-top-xs">
              <div class="tab-pane in active" id="all">			
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                    <?php
$ret=mysqli_query($con,"select * from products");
while ($row=mysqli_fetch_array($ret)) 
{
# code...
?>
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">		
                          <div class="product-image">
                            <div class="image">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt="">
                              </a>
                            </div>
                            <!-- /.image -->			
                          </div>
                          <!-- /.product-image -->
                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <?php echo htmlentities($row['productName']);?>
                              </a>
                            </h3>
                            <div class="rating rateit-small">
                            </div>
                            <div class="description">
                            </div>
                            <div class="product-price">	
                              <span class="price">
                                Rs.
                                <?php echo htmlentities($row['productPrice']);?>			
                              </span>
                              <span class="price-before-discount">Rs.
                                <?php echo htmlentities($row['productPriceBeforeDiscount']);?>	
                              </span>
                            </div>
                            <!-- /.product-price -->
                          </div>
                          <!-- /.product-info -->
                          <div class="action">
                            <a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart
                            </a>
                          </div>
                        </div>
                        <!-- /.product -->
                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->
                    <?php } ?>
                  </div>
                  <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
              </div>
              <div class="tab-pane" id="books">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <?php
$ret=mysqli_query($con,"select * from products where category=3");
while ($row=mysqli_fetch_array($ret)) 
{
# code...
?>
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">		
                          <div class="product-image">
                            <div class="image">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt="">
                              </a>
                            </div>
                            <!-- /.image -->			
                          </div>
                          <!-- /.product-image -->
                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <?php echo htmlentities($row['productName']);?>
                              </a>
                            </h3>
                            <div class="rating rateit-small">
                            </div>
                            <div class="description">
                            </div>
                            <div class="product-price">	
                              <span class="price">
                                Rs. 
                                <?php echo htmlentities($row['productPrice']);?>			
                              </span>
                              <span class="price-before-discount">Rs.
                                <?php echo htmlentities($row['productPriceBeforeDiscount']);?>
                              </span>
                            </div>
                            <!-- /.product-price -->
                          </div>
                          <!-- /.product-info -->
                          <div class="action">
                            <a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart
                            </a>
                          </div>
                        </div>
                        <!-- /.product -->
                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->
                    <?php } ?>
                  </div>
                  <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
              </div>
              <div class="tab-pane" id="furniture">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <?php
$ret=mysqli_query($con,"select * from products where category=5");
while ($row=mysqli_fetch_array($ret)) 
{
?>
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">		
                          <div class="product-image">
                            <div class="image">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt="">
                              </a>
                            </div>		
                          </div>
                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <?php echo htmlentities($row['productName']);?>
                              </a>
                            </h3>
                            <div class="rating rateit-small">
                            </div>
                            <div class="description">
                            </div>
                            <div class="product-price">	
                              <span class="price">
                                Rs.
                                <?php echo htmlentities($row['productPrice']);?>			
                              </span>
                              <span class="price-before-discount">Rs.
                                <?php echo htmlentities($row['productPriceBeforeDiscount']);?>
                              </span>
                            </div>
                          </div>
                          <div class="action">
                            <a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================== TABS ============================================== -->
          <div class="sections prod-slider-small outer-top-small">
            <div class="row">
              <div class="col-md-6">
                <section class="section">
                  <!-- <h3 class="section-title"> Men
</h3> -->
                  <div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
                    <?php
$ret=mysqli_query($con,"select * from products where category=4 and subCategory=4");
while ($row=mysqli_fetch_array($ret)) 
{
?>
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">		
                          <div class="product-image">
                            <div class="image">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300">
                              </a>
                            </div>
                            <!-- /.image -->			                        		   
                          </div>
                          <!-- /.product-image -->
                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <?php echo htmlentities($row['productName']);?>
                              </a>
                            </h3>
                            <div class="rating rateit-small">
                            </div>
                            <div class="description">
                            </div>
                            <div class="product-price">	
                              <span class="price">
                                Rs. 
                                <?php echo htmlentities($row['productPrice']);?>			
                              </span>
                              <span class="price-before-discount">Rs.
                                <?php echo htmlentities($row['productPriceBeforeDiscount']);?>
                              </span>
                            </div>
                          </div>
                          <div class="action">
                            <a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php }?>
                  </div>
                </section>
              </div>
              <div class="col-md-6">
                <section class="section">
                  <!-- <h3 class="section-title">Women
</h3> -->
                  <div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
                    <?php
$ret=mysqli_query($con,"select * from products where category=4 and subCategory=6");
while ($row=mysqli_fetch_array($ret)) 
{
?>
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">		
                          <div class="product-image">
                            <div class="image">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="300" height="300">
                              </a>
                            </div>
                            <!-- /.image -->			                        		   
                          </div>
                          <!-- /.product-image -->
                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <?php echo htmlentities($row['productName']);?>
                              </a>
                            </h3>
                            <div class="rating rateit-small">
                            </div>
                            <div class="description">
                            </div>
                            <div class="product-price">	
                              <span class="price">
                                Rs .
                                <?php echo htmlentities($row['productPrice']);?>			
                              </span>
                              <span class="price-before-discount">Rs.
                                <?php echo htmlentities($row['productPriceBeforeDiscount']);?>
                              </span>
                            </div>
                          </div>
                          <div class="action">
                            <a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php }?>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <!-- ============================================== TABS : END ============================================== -->
          <section class="section featured-product inner-xs wow fadeInUp">
            <!-- <h3 class="section-title">Kids
</h3> -->
            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
              <?php
$ret=mysqli_query($con,"select * from products where category=6");
while ($row=mysqli_fetch_array($ret)) 
{
# code...
?>
              <div class="item">
                <div class="products">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-6">
                          <div class="product-image">
                            <div class="image">
                              <a href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-lightbox="image-1" data-title="<?php echo htmlentities($row['productName']);?>">
                                <img data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="170" height="174" alt="">
                                <div class="zoom-overlay">
                                </div>
                              </a>					
                            </div>
                            <!-- /.image -->
                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-6">
                          <div class="product-info">
                            <h3 class="name">
                              <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                <?php echo htmlentities($row['productName']);?>
                              </a>
                            </h3>
                            <div class="rating rateit-small">
                            </div>
                            <div class="product-price">	
                              <span class="price">
                                Rs. 
                                <?php echo htmlentities($row['productPrice']);?>
                              </span>
                            </div>
                            <!-- /.product-price -->
                            <div class="action">
                              <a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add To Cart
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </section>
          <?php include('includes/brands-slider.php');?>
        </div>
      </div>
      <?php include('includes/footer.php');?>
      <script src="assets/js/jquery-1.11.1.min.js">
      </script>
      <script src="assets/js/bootstrap.min.js">
      </script>
      <script src="assets/js/bootstrap-hover-dropdown.min.js">
      </script>
      <script src="assets/js/owl.carousel.min.js">
      </script>
      <script src="assets/js/echo.min.js">
      </script>
      <script src="assets/js/jquery.easing-1.3.min.js">
      </script>
      <script src="assets/js/bootstrap-slider.min.js">
      </script>
      <script src="assets/js/jquery.rateit.min.js">
      </script>
      <script type="text/javascript" src="assets/js/lightbox.min.js">
      </script>
      <script src="assets/js/bootstrap-select.min.js">
      </script>
      <script src="assets/js/wow.min.js">
      </script>
      <script src="assets/js/scripts.js">
      </script>
      <!-- For demo purposes – can be removed on production -->
      <script src="switchstylesheet/switchstylesheet.js">
      </script>
      <script>
        $(document).ready(function(){
          $(".changecolor").switchstylesheet( {
            seperator:"color"}
                                            );
          $('.show-theme-options').click(function(){
            $(this).parent().toggleClass('open');
            return false;
          }
                                        );
        }
                         );
        $(window).bind("load", function() {
          $('.show-theme-options').delay(2000).trigger('click');
        }
                      );
      </script>
      <!-- For demo purposes – can be removed on production : End -->
      </body>
    </html>
