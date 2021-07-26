<!DOCTYPE html>
<html lang="en">
<!-- <?php
include("connection/connect.php");
error_reporting(0); 
session_start(); 
?> -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>myApp</title>
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet"> </head>

<body class="home">
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
 
        <header id="header" class="header-scroll top-header headrom">

            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link" href="index.php">Home </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="restaurants.php">Restaurants </a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="Contactus.php">Contact US</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="reservation_page.php">Reservation</span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"])){
							echo '<li class="nav-item"><a href="login.php" class="nav-link">login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link">Signup</a> </li>';
							}
						else{
							echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link">Your Orders</a> </li>';
						  echo  '<li class="nav-item"><a href="reservation_page.php" class="nav-link">Reservation</a> </li>';

              echo  '<li class="nav-item"><a href="logout.php" class="nav-link">logout</a> </li>';
							}
						?>
           </ul>
						 
              </div>
            </div>
        </nav>
        </header>
        <style>
          .record{
            padding: 100px;
          }
        </style>

        <div class="container font-weight-bold" style="height: 25vh;">
           <?php
 
 
 $Firstname = $_POST["firstname"];  
  
 $lastname = $_POST["lastname"];
 
     
 $email = $_POST["emailid"];
 $code = $_POST["areacode"];

  
 $number = $_POST["telnum"];
  
  

  $message = $_POST["message"]; 
  


 
$link=mysqli_connect("localhost","root","","online_rest");
if($link === false){
  die("ERROR:Could not connect." .mysqli_connect_error());
}

$sql = "INSERT INTO contact (firstname, lastname,emailid,areacode,telnum,message) VALUES ('$Firstname', '$lastname','$email','$code','$number','$message')";
if (mysqli_query($link ,$sql)){
  echo '<div class="record">Records added successfully</div>';

} else {
  echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>
          
        </div>

        <!-- Contact Form -->
     <!--  <div class="container mb-3 p-2 bg-light">
          <div class="display-4 font-weight-bold">Contact With Us </div>
        <form action="contact.php" method="POST">
            <div class="form-group row">
                <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group row">
              <label for="emailid" class="col-md-2 col-form-label">Email</label>
              <div class="col-md-10">
                  <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
              </div>
            </div>
    
            <div class="form-group row">
              <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
              <div class="col-5 col-md-3">
                  <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">
              </div>
              <div class="col-7 col-md-7">
                  <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
              </div>
             </div>
    
             <div class="form-group row">
              <label for="message" class="col-md-2 col-form-label">Message</label>
              <div class="col-md-10">
                  <input type="text-area" class="form-control" id="message" name="message" placeholder="message">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-md-2 col-md-10">
                  <input type="submit" class="btn btn-primary">
              </div>
            </div>
         </form>
      </div> -->


      


      <!-- End Contact Form -->





        <!-- <section class="hero bg-image" data-image-src="images/img/res.jpg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>What are you craving ? </h1>
                    
                    <div class="banner-form">
                      <form class="form-inline">
                       <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">I would like to eat....</label>
                               <div class="form-group">
                              <input type="text" class="form-control form-control-lg" id="exampleInputAmount" placeholder="I would like to eat...."> </div>
                         </div>
                        <button onclick="location.href='restaurants.html'" type="button" class="btn theme-btn btn-lg">Search food</button>
                     </form>
              </div>
                    
                </div>
            </div>
        </section> -->
        <!-- <section class="popular">
            <div class="container">
               <div class="title text-xs-center m-b-30">
              <h2>Popular Dishes of the Month</h2>
             <p class="lead">The easiest way to your favourite food</p>
                </div>
                <div class="row">
						<?php 
						$query_res= mysqli_query($db,"select * from dishes LIMIT 3"); 
									      while($r=mysqli_fetch_array($query_res)){
						                       echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
												<div class="food-item-wrap">
														<div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/'.$r['img'].'">
												</div>
												<div class="content">
														<h5><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
												<div class="product-name">'.$r['slogan'].'</div>			
											</div>	
												</div>
												</div>';		
										  }
						?>
                </div>
            </div>
        </section>
        <section class="featured-restaurants">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="title-block pull-left">
                            <h4>Featured restaurants</h4> </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="restaurants-filter pull-right">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="restaurant-listing">
    
						<?php
						$ress= mysqli_query($db,"select * from restaurant");  
									  while($rows=mysqli_fetch_array($ress)){
									$query= mysqli_query($db,"select * from res_category where c_id='".$rows['c_id']."' ");
										 $rowss=mysqli_fetch_array($query);
										 echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all '.$rowss['c_name'].'">
											<div class="restaurant-wrap">
											<div class="row">
											<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
											<a class="restaurant-logo" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo"> </a>
													</div>
												<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
												<h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>		
												</div>
													</div>
													</div>
													</div>';
								                }
						?>
              </div>
           </div> 
            </div> -->
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
                     <ul>
                           
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
                            <a href="#"> <img src="images/BKash.png" alt="Mastercard"> </a>
                         </li>

                          <li>
                          <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                          </li>
                     </ul>
                     </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                    <h5>Address</h5>
                   <p>block # h, section # 2, mirpur, 1218</p>
                       <h5>Phone: <a href="tel:+8801849977179">01849977179</a></h5>
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