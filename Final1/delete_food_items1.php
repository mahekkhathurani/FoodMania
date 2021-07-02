<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: mlogin.html'); 
}




$cheks = implode("','", $_POST['checkbox']);
$sql = "UPDATE APPETIZERS SET `options` = 'DISABLE' WHERE F_ID in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('Location: delete_food_items.php');
$conn->close();


?>