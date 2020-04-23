<!DOCTYPE html>
<html>
<head>
	<title>Best Dealer Website</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"
	media="all"/>
</head>
<body >
	<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

	<div class="bgimage">
		<div class="menu">
			<div class="leftmenu">
				<h4>BEST DEALS</h4>
			</div>
			<div class="rightmenu">
				
				<ul>
					<li>Contact us</li>
					<li onclick="location:"#myModal>About us</li>
					<li>Feedback</li>
					<li style="text-decoration: none;color: white;"><a href="login.php">LOGIN</a></li>
				</ul>
			</div>
		 
		</div>
		<div class="text">
			<h4>SELL--BUY--SHARE</h4>
			<h1>HAPPY SHOPPING</h1>
			<h3>We are proud to be different</h3>
			<!--<button id="button1" onclick="location. href='signup.php';">SIGN UP</button>-->
			<button id="button2" onclick="location.href='login.php';">LOGIN</button>
		</div>
    </div>

</body>
</html>