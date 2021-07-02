<?php

session_start();
require 'connection.php';
$con = Connect();
//$con = mysqli_connect('localhost','root');


if($con){
	echo "Connection Successful";
} else {
	echo "No Connection";	
}


mysqli_select_db($con, 'foodorder');

$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username'] = $username;

$s = " select * from manager where username = '$username' and password = '$password' ";

	$result = mysqli_query($con, $s);



$num = mysqli_num_rows($result);

if($num == 1){ 

	header('location:myrestaurant.php');
} else {
	echo '<script>alert("Invalid Username or Password! Recheck or register again.")</script>';
		echo '<script>window.location="mlogin.html"</script>';
}



?>