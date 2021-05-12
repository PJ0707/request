<?php
session_start(); 
$host="local host"; 
$user="FTS"; 
$password=""; 
$db="users_login_details"; 
$con=mysqli_connect($host,$user,$password,$db); 
$id=$_SESSION['id']; 
$query="select fname from faculty_table where fid='".$id."'"; 
$result= mysqli_query($con,$query); 
$row = mysqli_fetch_array($result); 
$tname= $row[0]; 
$query="select fileid from $tname where status is null"; 
$result= mysqli_query($con,$query); 
$result1=$result; 
$files=scandir("uploads"); 
set_time_limit(500); 
?>
