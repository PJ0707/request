<?php
session_start(); 
$host="localhost"; 
$user="root"; 
$password=""; 
$db="user_login_details"; 
$con=mysqli_connect($host,$user,$password,$db); 
$id=$_SESSION['rid']; 
$query="select status from file_table where fileid='".$id."'"; 
$result= mysqli_query($con,$query); 
$row = mysqli_fetch_assoc($result); 
$check = (int)$row["status"]; 
if($check == -1 ){ 
 
 $stat1="notactive"; 
 $stat2="inactive"; 
}elseif($check == 1 ){ 
 $stat1="active"; 
 $stat2="inactive"; 
}elseif($check == 2) 
{ 
 $stat1="active"; 
 $stat2="active"; 
}elseif($check == -2) 
{ 
 $stat1="active"; 
 $stat2="notactive"; 
}elseif(is_null($row["status"])) 
{ 
 $stat1="inactive"; 
 $stat2="inactive"; 
} 
?>
 