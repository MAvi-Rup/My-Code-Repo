<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>food delivery</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>    
                   <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
                       <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
							<?php
						if(empty($_SESSION["user_id"])){
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>';
							}
						else{
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}
						?>
             </ul>
              </div>
              </div>
            </nav>
        </header>
        <div class="page-wrapper">
            <div class="inner-page-hero bg-image" data-image-src="images/img/res.jpeg">
                <div class="container"> </div>
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </div>
            <section class="restaurants-page">
                <div class="container">
                    <div class="row"> 
                    <div class="col">
                      <div class="bg-gray restaurant-entry">
                        <div class="row">
								<?php $ress= mysqli_query($db,"select * from restaurant");
									      while($rows=mysqli_fetch_array($ress)){
													 echo' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
													<div class="entry-logo">
													<a class="img-fluid" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Food logo"></a>
															</div>
														<!-- end:Logo -->
														<div class="entry-dscr">
														<h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].' <a href="#">...</a></span>
														<ul class="list-inline">
															<li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
														<li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
														</ul>
														</div>
														<!-- end:Entry description -->
														</div>
														 ';
										  }
						?>            </div>
                          </div>
                         </div>       
                    </div>
                    </div>
                </div>
            </section>

            <footer class="footer">
            <div class="container">
                <div class="row top-footer">
                     <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                          
                     </div>
                     <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                           <li><a href="#">About us</a> </li>     
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5>How it Works</h5>
                        <ul
                           
                           <li><a href="#">Pay via credit card</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-2 pages color-gray">
                        <h5>Pages</h5>
                        <ul>
                           <li><a href="#">Search results page</a> </li>
                           <li><a href="#">User Sing Up Page</a> </li>
                           <li><a href="#">Pricing page</a> </li>
                           <li><a href="#">Make order</a> </li>
                           
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        
                     </div>
                  </div>
                <div class="row bottom-footer">
                     <div class="container">
                        <div class="row">
                           <div class="col-xs-12 col-sm-3 payment-options color-gray">
                              <h5>Payment Options</h5>
                              <ul>
    
                                 <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                 </li>

                                 <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-xs-12 col-sm-4 address color-gray">
                              <h5>Address</h5>
                              <p>block # h, section # 2, mirpur, 1218</p>
                              <h5>Phone: <a href="tel:+880000012222">01849977179</a></h5>
                           </div>
                           
                        </div>
                     </div>
                  </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>