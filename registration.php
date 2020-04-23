<?php 
session_start();
$con=mysqli_connect('localhost','root');
if($con)
	{echo "Connection established";
}
else
	{echo "No connection";}
mysqli_select_db($con,'project');
$name=$_POST['name'];
$uname=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$passw=$_POST['password'];
$q="select * from sign_up where username='$uname' && password='$passw'";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1)
{
	echo "Username already exists";}
else
{    
	$qy="insert into sign_up(name,username,email,contact,password)value('$name','$uname','$email','$contact','$passw')";

mysqli_query($con,$qy);
$_SESSION['Msg']="SUCCESSFULLY INSERTED..LOGIN NOW!!";
     echo $_SESSION['Msg'];
     header('location:login.php'); 
}
?> 