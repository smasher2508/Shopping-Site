<?php 
session_start();
$con=mysqli_connect('localhost','root');
if($con)
	{echo "Connection established";}
else
	{echo "No connection";}
mysqli_select_db($con,'project');
$uname=$_POST['username'];
$passw=$_POST['password'];
$q="select * from sign_up where username='$uname' && password='$passw'";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{$_SESSION['username']=$uname;
echo $_SESSION['username'];
 header('location:home.php');
 }
else
{  $_SESSION['errMsg'] = "YOU MUST REGISTER FIRST!!";
   echo $_SESSION['errMsg'];
   
   header('location:login.php');
}

?>