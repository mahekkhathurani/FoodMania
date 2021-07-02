<?php
include('session_m.php');
session_start;
if(!isset($login_session)){
header('Location: mlogin.html'); 
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

  <!--<link rel="stylesheet" type = "text/css" href ="css/edit_food_items.css">-->
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
    function display_alert()
    {
      alert("Data Updated Successfully...!!!");
    }
  </script>

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
            <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="#">ADMIN CONTROL PANEL</a></li>
            <li><a href="logout_u.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out </a></li>
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

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit.php" class="list-group-item active">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
        <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
    	</div>
    </div>
    
    
    

<div class="col-xs-3">

  <div class="form-area" style="padding: 10px 10px 110px 10px; ">
  
    <div style="text-align: center;">
      <h3>Click On Menu <br><br></h3>
    </div>
    <?php
   
 

    if (isset($_GET['submit'])) {
    $F_ID = $_GET['dfid'];
    $name = $_GET['dname'];
    $price = $_GET['dprice'];
    $images_path=$_GET['images_path'];
    $options = $_GET['options'];

    $query = mysqli_query($conn, "UPDATE appetizers set
    name='$name', price='$price',
    options='$options' where F_ID='$F_ID'");
    } 
    $query = mysqli_query($conn, "SELECT * FROM appetizers ORDER BY F_ID");
      
    while ($row = mysqli_fetch_array($query)) {

      ?>

      <div class="list-group" style="text-align: center;">
        <?php
      echo "<b><a href='edit.php?update= {$row['F_ID']}'>{$row['name']}</a></b>";
        /*echo "<b><a href='edit.php?update= {$row2['F_ID']}'>{$row2['name']}</a></b>";
        echo "<b><a href='edit.php?update= {$row3['F_ID']}'>{$row3['name']}</a></b>";
        echo "<b><a href='edit.php?update= {$row4['F_ID']}'>{$row4['name']}</a></b>";
        echo "<b><a href='edit.php?update= {$row5['F_ID']}'>{$row5['name']}</a></b>";
        echo "<b><a href='edit.php?update= {$row6['F_ID']}'>{$row6['name']}</a></b>";
        echo "<b><a href='edit.php?update= {$row7['F_ID']}'>{$row7['name']}</a></b>";*/
        ?>
      </div>


    <?php
    }
    ?>
    

    <?php
    if (isset($_GET['update'])) {
    $update = $_GET['update'];
        //if ($update>=1 && $update<=8)
    $query1 = mysqli_query($conn, "SELECT * FROM appetizers WHERE F_ID=$update");
       /* else if ($update>=17 && $update<=20)
            $query1 = mysqli_query($conn, "SELECT * FROM beverages WHERE F_ID=$update");
        else if ($update>=32 && $update<=34)
            $query1 = mysqli_query($conn, "SELECT * FROM breads WHERE F_ID=$update");
        else if ($update>=35 && $update<=41)
            $query1 = mysqli_query($conn, "SELECT * FROM desserts WHERE F_ID=$update");
        else if ($update>=9 && $update<=16)
            $query1 = mysqli_query($conn, "SELECT * FROM fastfood WHERE F_ID=$update");
        else if ($update>=17 && $update<=20)
            $query1 = mysqli_query($conn, "SELECT * FROM appetizers WHERE F_ID=$update");
        else if ($update>=17 && $update<=20)
            $query1 = mysqli_query($conn, "SELECT * FROM appetizers WHERE F_ID=$update");*/
    while ($row1 = mysqli_fetch_array($query1)) {

    ?>
</div>
</div>



<div class="container">
<div class="col-md-6">
 <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="edit.php" method="GET">
        <div class="form-group">
            <input class='input' type='hidden' name="dfid" value=<?php echo $row1['F_ID'];  ?> />
          </div>
            
            
          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Name: </label>
            <input type="text" class="form-control" id="dname" name="dname" value=<?php echo $row1['name'];  ?> placeholder="Your Food name" required="">
          </div>     

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Price: </label>
            <input type="text" class="form-control" id="dprice" name="dprice" value=<?php echo $row1['price'];  ?> placeholder="Your Food Price (INR)" required="">
          </div>
            
            <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Image_path: </label>
            <input type="text" class="form-control" id="images_path" name="images_path" value=<?php echo $row1['images_path'];  ?> placeholder="image_path.extension" required="">
          </div>
            
            <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Availability:</label>
            <input type="text" class="form-control" id="options" name="options" value=<?php echo $row1['options'];  ?> placeholder="Food Availability" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box" > Update </button>    
      </div>
        </form>



    <?php
}
}


  ?>
      
  </div>




</div>


<?php
mysqli_close($conn);
?>
</div>
</div>

  </body>
<br>
</html>