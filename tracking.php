<?php
session_start(); 
$host="local host"; 
$user="FTS"; 
$password=""; 
$db="users_login_details"; 
$con=mysqli_connect($host,$user,$password,$db); 
$id=$_SESSION['id']; 
$query="select * from file_table where id='".$id."'"; 
$result= mysqli_query($con,$query); 
set_time_limit(500); 
?>
