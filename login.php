<?php session_start();
$_SESSION['home']="";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php
        include_once('common.php');
        ?>
     <title>RoomRental</title>
    </head>
<body>
 
   <?php include 'navbar.php';?>
  <div class="container">
  <?php 
      if(!empty($_SESSION['log_error'])){
    echo "<font color='red'> email or password is invalid....</font><br>";
}
?>
  <form class="form-horizontal" action="validate.php" method="post">
      <h1>Login</h1>
      <p>Please fill in details to sign-in.</p>
    <hr>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
      
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-6">
        <button type="submit" name="login" value="login" class="btn btn-success">Login</button>
      </div>
    </div>
  </form>
</div>
        
<?php include 'footer.php';?>
   
</body>
</html>
