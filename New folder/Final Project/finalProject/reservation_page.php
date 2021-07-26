<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #ff3300;
	  }
	  </style>
  
</head>

<body>
<?php
include("connection/connect.php"); 
error_reporting(0); 
session_start(); 
if(isset($_POST['submit'] )) {
  if(empty($_POST['restaurant']) || empty($_POST['phone'])|| 
    empty($_POST['num_of_people']) ||  empty($_POST['date'])||empty($_POST['name'])){
      $message = "All fields must be Required!";
    }
  else{
  $check_phone= mysqli_query($db, "SELECT phone FROM reservations where phone = '".$_POST['phone']."' ");
  if(strlen($_POST['phone']) < 10)  {
  $message = "invalid phone number!";
  }elseif(mysqli_num_rows($check_phone) > 0){
  $message = 'Reservation Already Made';
  }else{
  $mql = "INSERT INTO reservations(customerName,phone,restaurant,orderDate,num_of_people) VALUES('".$_POST['name']."','".$_POST['phone']."','".$_POST['restaurant']."','".$_POST['date']."','".$_POST['num_of_people']."')";
  mysqli_query($db, $mql);
    $success = "Reservation made successfully! <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
                            <script type='text/javascript'>
                            function countdown() {
                              var i = document.getElementById('counter');
                              if (parseInt(i.innerHTML)<=0) {
                                location.href = 'index.php';
                              }
                              i.innerHTML = parseInt(i.innerHTML)-1;
                            }
                            setInterval(function(){ countdown(); },1000);
                            </script>'";
      header("refresh:5;url=index.php");
    }
  }
  }
?>
<div class="pen-title">
  <h1>Reservation</h1>
</div>
<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2>Make a Reservation</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="reservation.php" method="post">
      <input type="text" placeholder="name"  name="name"/>
      <select type="text" class="selectpicker" name="restaurant" style="padding-right: 80px; padding-top: 10px; padding-bottom: 10px; margin-bottom: 15px;">
        <option value="" disabled selected hidden>Choose a restaruant</option>
        <option value="Cozy Sizzler">Cozy Sizzler</option> 
        <option value="Hot Oven Bangladesh">Hot Oven Bangladesh</option> 
        <option value="bbq Bangladesh">bbq Bangladesh</option> 
        <option value="Hirajheel Hotel">Hirajheel Hotel</option> 
        <option value="Fish & Co. Bangladesh">Fish & Co. Bangladesh</option> 
        <option value="Nirob Hotel">Nirob Hotel</option> 
     </select> 
      <input type="tel" class="form-control" placeholder="Phone Number" name="phone"/>
      <input type="tel" class="form-control" placeholder="Number of People" name="num_of_people"/>
      <input type="date" id="date" name="date">
      <input type="submit" id="buttn" name="submit" value="Make Reservation" />
    </form>
  </div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>