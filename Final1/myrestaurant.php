<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: mlogin.html'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Admin Login | FoodMania </title>
	<style>
	* {
        
		background-image: linear-gradient(to right, #00CED1
, #48D1CC, #40E0D0);
		
	}
	</style>
  </head>

  <!--<link rel="stylesheet" type = "text/css" href ="css/myrestaurant.css">-->
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search"  role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="flexbox1.html">FoodMania</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="myrestaurant.php">Home</a></li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"><a href="#">ADMIN CONTROL PANEL</a></li>
            <li><a href="logout_u.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>




<div class="container">
    <div class="jumbotron">
     <h1>Hello Manager! </h1>
     <p>Manage all your food items from here</p>

    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-lg-12" style="text-align: center; font-size: 30px;">

    	<div class="list-group">
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
            <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
    	</div>
    </div>
      </div>


    <!--
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="myrestaurant1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> MY RESTAURANT</h3>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Restaurant's Name" required="">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Restaurant's Email" required="">
          </div>     
          <div class="form-group">
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Your Restaurant's Contact Number" required="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="address" name="address" placeholder="Your Restaurant's Address" required="">
          </div>
          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD RESTAURANT </button>    
      </div>
        </form>
        
        </div>
      
    </div>
</div>
-->
  </body>
</html>