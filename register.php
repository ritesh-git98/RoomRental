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
      <a class="navbar-brand" href="home.php">RoomRental</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
        <li ><a href="login.php">Login</a></li>
        <li class="active"><a href="register.php">Register</a></li>
          <li><a href="post.php">Post Your Room</a></li>
      </ul>
      </div></div></nav>
   
  <div class="container">
   
  <form class="form-horizontal" action="addData.php" method="post">
     <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
    <hr>
       <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="repwd">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="repwd">Repeat Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="repwd" placeholder="Repeat password" name="repwd">
      </div>
    </div>
      
      <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="form-group">        
      <div class="col-sm-offset-1 col-sm-8">
        <button type="submit" class="btn btn-success">Register</button>
      </div>
    </div>
      <div class="form-group">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>       
  </form>
</div>
  

    <div class="jumbotron text-center" style="background-color:black">
  <p>Follow Us</p>
        <p><i class="fa fa-facebook-official" ></i>  <i class="fa fa-instagram"></i>  <i class="fa fa-twitter"></i></p>
</div>
</body>
</html>
