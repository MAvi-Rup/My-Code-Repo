<?php
if(isset($_POST["submit"])){
	header("refresh:1;url=contact.php");
 }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- External stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>Restaurant</title>
  </head>
  <body>
    <!-- Navbar Of the Restaurant -->
    <div>
        <nav class="navbar navbar-dark navbar-expand-sm bg-dark mb-3">
          <div class="container">
            <a class="navbar-brand m-auto" href="#"><img src="#" height="30" width="41"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="Navbar">
                  <ul class="navbar-nav ml-auto">
                          <li class="nav-item"><a class="nav-link"  href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                          <li class="nav-item"><a class="nav-link"  href="about.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                          <li class="nav-item"><a class="nav-link"   href="#"><span class="fa fa-list fa-lg"></span> Menu</a></li>
                          <li class="nav-item active"><a class="nav-link"  href="contact.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                          <li class="nav-item"><a class="nav-link"  href="./Login/login.php"><span class="fa fa-sign-in"></span>Login</a></li>
                  </ul>
            <!--       <span class="navbar-text">
                      <button class="btn btn-small" id="login">
                      <span class="fa fa-sign-in"></span> Login</button>
                  </span> -->
              </div>
          </div>
      </nav>
      </div>
      <!-- End Navbar Of the Restaurant -->

      <!-- Contact Form -->
      <div class="container mb-3 p-2 bg-light">
          <div class="display-4 font-weight-bold">Contact With Us </div>
        <form action="./Php/contact.php" method="POST">
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
      </div>


      


      <!-- End Contact Form -->



      <!-- Footer of Restaurant -->
     <footer class="footer bg-light">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                      121, Clear Water Bay Road<br>
                      Clear Water Bay, Kowloon<br>
                      HONG KONG<br>
                      <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                      <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                      <i class="fa fa-envelope fa-lg"></i>: 
                      <a href="mailto:confusion@food.net">confusion@food.net</a>
               </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>Project Web Application</p>
                </div>
           </div>
        </div>
     </footer>
      



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>