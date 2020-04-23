<?php
$con=mysqli_connect("localhost","root","","project");
function getCats(){//need to declare it globally
	global $con;
$get_cats="sele
ct * from category";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
   $cat_id=$row_cats["cat_id"];
   $cat_title=$row_cats["cat_title"];
   echo "<li><a href='#'>$cat_title</a></li>";
}
}
?>
<?php
session_start();
if(!isset($_SESSION['username']))
{header('location:login.php');
}
include("Functions/function.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="styles/style2.css" media="all">
</head>
<body>
	<div class="outerclass">
		<div class="menu">
			<div class="leftmenu">
				<div class="bg_image"></div>
				<h4>BEST DEALS</h4>
			</div>
			<div class="rightmenu">
				
				<ul>
					
					<li>WELCOME  <?php echo $_SESSION['username'];?>!!</li>
					<form id="form">
						<form method=post action="result.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Enter product">
						<input type="submit" name="search" value="search">
					</form>
					<li ><a href="logout.php "style="color: white"onmouseover="this.style.backgroundColor='black';this.style.color='#aaaaaa'
                    "</
   onmouseout="this.style.backgroundColor='transparent';this.style.color='inherit'">LOGOUT</a></li>
                   <li><a href="sell.php" style="color: white">SELL A PRODUCT</a></li>
					

				
				</ul>
			</div>
        <div class="sidebar" style="padding-left: 10px; color: purple ;">
        	<br>
         <h4>ACCESSORIES:</h4>
        	<ul id="cats" style="list-style-type: disc;padding-left: 20px;">
        		<?php
        		 getCats();?>
        		 <!--
        		<br>
        	    <br>
        		<li><a href="#" style="color: black ;margin-left: 10px;">BEDDINGS </a></li><br>
        		<li><a href="#"style="color: black;margin-left: 10px;">DAILY ITEMS</a></li><br>
        		<li><a href="#"style="color: black">  CYCLES</a></li><br>
        		<li><h4 style="color: black;">ENGINEERING ITEMS</h4></li><br>
        		  <ul style="list-style-type:disc; padding-left: 15px;"id="sub_cats">
        		  	<li><a href="#" style="padding-left: 20px; color: black">EQUIPMENTS</a></li><br>

        		  	<li><a href="#" style="padding-left: 20px; color: black">LAB COATS</a></li><br>
        		  </ul>-->
        	


        	</ul>
        </div>
        <div class="content">
        	<div class="box" >
        	</div>
        </div>

</body>
</html>