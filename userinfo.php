<?php 
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'kmnh_userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$type = $_POST['type'];
$comment = $_POST['comment'];

$query = " INSERT INTO userinfo (`user`, `email`, `mobile`, `type`, `comment`) VALUES ('$user', '$email', '$mobile', '$type', '$comment') ";

mysqli_query($con, $query);
header('location:success.php');
?>