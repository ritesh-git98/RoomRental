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
      if(!empty($_SESSION['reg_error'])){
    echo "<font color='red'> account already exists.... </font><a onclick='setError()'>Sign in</a><br>";
}
?>
  <form class="form-horizontal" action="addData.php" method="post">
     <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <font color='red'>* required fields</font><br>
    <hr>
       <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name* :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email* :</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password* :</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
    </div>
      
      

    <div class="form-group">        
      <div class="col-sm-offset-1 col-sm-8">
          <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="btn btn-success" name="register">Register</button>
         <br><br> <p>Already have an account? <a href="login.php">Sign in</a>.</p>
      </div>
    </div>      
  </form>
</div>
  <?php include 'footer.php';?>
<script>
    function setError(){
        <?php $_SESSION['reg_error']=""; ?>
         window.location.href = "http://localhost/room/login.php";  
        
    }
    
    </script>
</body>
</html>
