<?php
session_start(); 
$host="localhost"; 
$user="root"; 
$password=""; 
$db="user_login_details"; 
$port="3307";
$con=mysqli_connect($host,$user,$password,$db,$port); 
$id=$_SESSION['id']; 
$query="select * from file_table where id='".$id."'"; 
$result= mysqli_query($con,$query); 
set_time_limit(500); 
?>
