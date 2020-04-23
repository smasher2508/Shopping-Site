<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <style >.error{color:red;}</style>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
  <div id="errMsg" style="color: red; text-align:center;
   font-size: 30px;">
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?>


    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Login form</h2>
          <p><span class="error">* required field</span></p>
          <form action="validation.php" method="post">
            <div class="form-group">
              <label>USERNAME*</label>
              <input type="text" name="username" class="form-control"required>
            </div>

            <div class="form-group">
              <label>PASSWORD*</label>
              <input type="Password" name="password" class="form-control"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>
            <button class="button1" type="submit" style=" background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px ;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;">LOGIN</button>
          </form>
        </div>
    <div class="col-lg-6">
     <h2>Sign up form</h2>
          <p><span class="error">* required field</span></p>
          <form action="registration.php" method="post">
           <div id="Msg" style="color: purple; text-align:right;
   font-size: 20px;">
            <?php if(!empty($_SESSION['Msg'])) { echo $_SESSION['Msg']; } ?>
        </div>
        <?php unset($_SESSION['Msg']); ?>
            <div class="form-group">
              <label>Name*</label>
              <input type="text" name="name" class="form-control"required>
            </div>
            <div class="form-group">
              <label>USERNAME*</label>
              <input type="text" name="username" class="form-control"required>
            </div>
            <div class="form-group">
              <label>Email-id*</label>
              <input type="text" name="email" class="form-control"required>
            </div>
            <div class="form-group">
              <label>CONTACT*</label>
              <input type="text" name="contact" class="form-control"required>
            </div>

            <div class="form-group">
              <label>PASSWORD*</label>
              <input type="Password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>
            <button class="button1" type="submit" style=" background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;">SUBMIT</button>
          </form>
        </div>
</body>
</html>