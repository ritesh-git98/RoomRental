<!DOCTYPE html>
<html lang="en">
<head>
     <?php
        include_once('common.php');
        ?>
  <title>RoomRental</title>
  </head>
<body>
<div class="jumbotron text-center">
    
  <h1 style="color:white">ROOM RENTAL</h1>
    <p>Accomodation Solution</p>
    </div>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
           <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">RoomRental</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
        <li class="active"><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
          <li><a href="post.php">Post Your Room</a></li>
      </ul>
      </div></div></nav>
  <div class="container">
  
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
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
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
        <button type="submit" class="btn btn-success">Login</button>
      </div>
    </div>
  </form>
</div>
        

    <div class="jumbotron text-center" style="background-color:black">
  <p>Follow Us</p>
        <p><i class="fa fa-facebook-official" ></i>  <i class="fa fa-instagram"></i>  <i class="fa fa-twitter"></i></p>
</div>
</body>
</html>
