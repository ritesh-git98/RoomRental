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
     <h1>ROOM RENTAL</h1>
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
      <a class="navbar-brand">RoomRental</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
           <li class="active"><a href="post.php">Post Your Room</a></li>
      </ul>
      </div></div></nav>    
 <div class="container">
   
  <form class="form-horizontal" action="addData.php" method="post">
    <hr>
      <div class="form-group">
      <label class="control-label col-sm-2" for="type">Type:</label>
      <div class="col-sm-6">
       <label class="radio-inline"><input type="radio" name="optradio" checked>Option 1</label>
<label class="radio-inline"><input type="radio" name="optradio">Option 2</label>
<label class="radio-inline"><input type="radio" name="optradio">Option 3</label>
   </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Bedrooms:</label>
      <div class="col-sm-6">  
  <select class="form-control" id="sel1" >
    <option selected disabled>bedrooms</option>
      <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
      <option>4+</option>
  </select>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Bedrooms:</label>
      <div class="col-sm-6">  
  <select class="form-control" id="sel1" >
    <option selected disabled>Bathrooms:</option>
      <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
      <option>4+</option>
  </select>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="type">Furnishing:</label>
      <div class="col-sm-6">
       <label class="radio-inline"><input type="radio" name="optradio3" checked>Option 1</label>
<label class="radio-inline"><input type="radio" name="optradio3">Option 2</label>
<label class="radio-inline"><input type="radio" name="optradio3">Option 3</label>
   </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="type">Listed by:</label>
      <div class="col-sm-6">
       <label class="radio-inline"><input type="radio" name="optradio2" checked>Option 1</label>
<label class="radio-inline"><input type="radio" name="optradio2">Option 2</label>
<label class="radio-inline"><input type="radio" name="optradio2">Option 3</label>
   </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="type">Bachelors allowed:</label>
      <div class="col-sm-6">
       <label class="radio-inline"><input type="radio" name="optradio1" checked>Option 1</label>
<label class="radio-inline"><input type="radio" name="optradio1">Option 2</label>
<label class="radio-inline"><input type="radio" name="optradio1">Option 3</label>
   </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Maintanence:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="pwd" placeholder="Repeat password" name="repwd">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="ima">ima:</label>
      <div class="col-sm-6">          
        <input type="file" class="form-control" id="ima" placeholder="Repeat password" name="repwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-1 col-sm-8">
        <button type="submit" class="btn btn-success">Register</button>
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
