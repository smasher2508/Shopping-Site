<!DOCTYPE html>/
<html>
<head>
    <title>BEST DEALS WEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes">
    <link rel="stylesheet" href="styles/style2.css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"</script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="super_container">

    <!-- Header -->

    <header class="header trans_300">

        <!-- Top Navigation -->

        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top_nav_left">Find the Best of Deals Here</div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="top_nav_right">
                            <ul class="top_nav_menu">

                               
                                <li class="account">
                                    <a href="#">
                                        My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="account_selection">
                                        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                                        <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="top_nav_bar">
         <img src="Images/LOGO1.png" class="logo">
          <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
        <div class="search-box">
            <form method="get" action="results.php" enctype="multipart/form-data">
            <input type="text" class="form-control">
            <div class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></div >
            </form>
        </div>
            <div class="menu-bar">
                 <ul>
                    <li id="cam" a href="#">Start Selling  <i class="fa fa-camera" aria-hidden="true"></i></li>
                    <li id="cart" a href="#">Add to Basket <i class="fa fa-shopping-basket" aria-hidden="true"></i></li>
                    <li><a data-toggle="modal" href="#myModal" class="button">Login</li>
                </ul>
            </div>
        
    </div>
    <div id="myModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
    
    <section class="header">
        <div class="side-menu" id="side-menu">
            <ul>
                <li>On Sale<i class="fa fa-angle-right" aria-hidden="true"></i>
                    <ul>
                        <li>Sub Menu-1</li>
                        <li>Sub Menu-1</li>
                        <li>Sub Menu-1</li>
                        <li>Sub Menu-1</li>
                    </ul>
                </li>
                <li>Cycles<i class="fa fa-angle-right" aria-hidden="true"></i>
                <ul>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                </ul>
                </li>
                <li>Beddings<i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Daily Items<i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Engineering Items<i class="fa fa-angle-right" aria-hidden="true"></i>
                <ul>
                  <li>Equipments</li>
                  <li>Lab Coats</li>
                </ul>
                </li>
            </ul>
        </div>
    
   
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="Images/11.jpg" alt="">
    </div>
    <div class="item">
      <img src="Images/22.jpg" alt="">
    </div>
    <div class="item">
      <img src="Images/33.jpg" alt="">
    </div>
    <div class="item">
      <img src="Images/44.jpg" alt="">
    </div>
    <div class="item">
      <img src="Images/55.jpg" alt="">
    </div>
    <div class="item">
      <img src="Images/66.jpg" alt="">
    </div>
    <div class="item">
      <img src="Images/77.jpg" alt="">
    </div>
    <div class="item">
      <img src="Images/881.jpg" alt="">
    </div>
    <div class="item">
      <img src="Images/99.jpg" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
  </section>
  <section class="featured-categories">
    <div class="container">
        <div class=row">
            <div class="col-md-4">
                <img src="Images/">
            </div>
        </div>
        
    </div>
      
  </section>  
 

    <script>
        function openmenu()
        {
            document.getElementById("side-menu").style.display="block";
            document.getElementById("menu-btn").style.display="none";
            document.getElementById("close-btn").style.display="block";

        }
        function closemenu()
        {
            document.getElementById("side-menu").style.display="none";
            document.getElementById("menu-btn").style.display="block";
            document.getElementById("close-btn").style.display="none";

        }
    </script>
    

</body>
</html>