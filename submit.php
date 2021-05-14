<?php
session_start(); 
$host="localhost"; 
$user="root"; 
$password=""; 
$db="user_login_details";
$port="3307"; 
$con=mysqli_connect($host,$user,$password,$db,$port); 
if(isset($_POST['submit'])) 
{ 
$file_name=$_POST['file_name']; 
$id=$_SESSION["id"]; 
$insert_query="insert into file_table(fname,id)values('$file_name','$id'); "; 
$insert_query_result=mysqli_query($con,$insert_query) or die(mys
qli_error($con)); 
$file = $_FILES["file"]; 
$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); 
if($insert_query_result){ 
 
 ?>
 <script>
 alert("Successfully Submitted"); 
 
 </script>
 <?php
 } 
 else{ 
 ?>
 <script>
 alert("Try again"); 
 
 </script>
 <?php
 } 
 
 $sql = "SELECT max(fileid) FROM file_table"; 
 $result = mysqli_query($con,$sql); 
 $row = mysqli_fetch_array($result, MYSQLI_NUM); 
 
 $count = $row[0]; 
 $_SESSION["fid"]=$count; 
 
$name = $count; 
echo $name; 
move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$name.".".$extension); 
 $insert_query="insert into level1_table(fileid)values('$count'); "; 
$insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con)); 
} 
 
?>
 <script>
 alert(<?php echo $message ?>); 
 
 </script>

 
 
 
