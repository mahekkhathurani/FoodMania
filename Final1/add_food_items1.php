<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: mlogin.html'); 
}


$category = $conn->real_escape_string($_POST['category']);
$name = $conn->real_escape_string($_POST['name']);
$price = $conn->real_escape_string($_POST['price']);


// Storing Session
$user_check=$_SESSION['username'];
$R_IDsql = "SELECT MANAGER.ID FROM MANAGER WHERE MANAGER.USERNAME='$user_check'";
$R_IDresult = mysqli_query($conn,$R_IDsql);
$R_IDrs = mysqli_fetch_array($R_IDresult, MYSQLI_BOTH);
$R_ID = $R_IDrs['ID'];

$images_path = $conn->real_escape_string($_POST['images_path']);

if (strtolower($category)=='appetizers'){
$query = "INSERT INTO APPETIZERS(name,price,images_path,options) VALUES('" . $name . "','" . $price . "','" . $images_path . "','".'ENABLE'."')";
$success = $conn->query($query);
}
else if (strtolower($category)=='beverages'){
$query = "INSERT INTO BEVERAGES(name,price,images_path,options) VALUES('" . $name . "','" . $price . "','" . $images_path . "','".'ENABLE'."')";
$success = $conn->query($query);
}
else if (strtolower($category)=='breads'){
$query = "INSERT INTO BREADS(name,price,images_path,options) VALUES('" . $name . "','" . $price . "','" . $images_path . "','".'ENABLE'."')";
$success = $conn->query($query);
}
else if (strtolower($category)=='desserts'){
$query = "INSERT INTO DESSERTS(name,price,images_path,options) VALUES('" . $name . "','" . $price . "','" . $images_path . "','".'ENABLE'."')";
$success = $conn->query($query);
}
else if (strtolower($category)=='fastfood'){
$query = "INSERT INTO FASTFOOD(name,price,images_path,options) VALUES('" . $name . "','" . $price . "','" . $images_path . "','".'ENABLE'."')";
$success = $conn->query($query);
}
else if (strtolower($category)=='rice'){
$query = "INSERT INTO RICE(name,price,images_path,options) VALUES('" . $name . "','" . $price . "','" . $images_path . "','".'ENABLE'."')";
$success = $conn->query($query);
}
else if (strtolower($category)=='main'){
$query = "INSERT INTO MAIN(name,price,images_path,options) VALUES('" . $name . "','" . $price . "','" . $images_path . "','".'ENABLE'."')";
$success = $conn->query($query);
}

if (!$success){

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	<link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <style>
	 * {
         
		background-image: linear-gradient(to right, #00CED1
, #48D1CC, #40E0D0);
		
	}
	</style>
	</head>
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

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
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
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="#">ADMIN CONTROL PANEL</a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>


	<div class="container">
    <div class="jumbotron">
     <h1>Oops...!!! </h1>
     <p>Kindly Login before adding food items.</p>
     <p><a href="mlogin.html"> Click Me </a></p>

    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
	
	</html>

	<?php
	
}
else {
	echo '<script>alert("SUCCESS")</script>';
	header('Location: add_food_items.php');
}

$conn->close();


?>