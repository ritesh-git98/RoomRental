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
        <li><a href="home.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
           <li><a href="post.php">Post Your Room</a></li>
      </ul>
      </div></div></nav>
    <div class="row">
       
    <div class="col-sm-offset-1 col-sm-4">
        
    <div id="myCarousel" class="carousel slide"  data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="room1.jpg" alt="Chania">
      </div>
    
      <div class="item">
        <img src="room2.jpg" alt="Chania">
      </div>

      <div class="item">
        <img src="room3.jpg" alt="Chania">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>    
        </div>
    <div class="col-sm-6"> 
    <div class="container-fluid" style="height:150px"><fieldset><legend>Price</legend>
        <i class="fa fa-rupee"  style="font-size:36px"></i><strong  style="font-size:36px"> 12000</strong><br></fieldset></div> 
        <div class="container-fluid"><fieldset><legend>Seller Info</legend></fieldset>
        <!-- Used to open the Modal -->
<button class="btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Contact seller</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="validate.php" method="post">
     
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
        <button type="submit" class="btn btn-success">Login</button>
      </div>
    </div>
  </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
        <p><a href="register.php">Register</a></p>
      </div>
    </div>
  </div>
</div>
        
        
        </div> 
        <br>
         <div class="container-fluid" style="height:200px"><fieldset><legend>Details</legend></fieldset>
             <div class="table-responsive">          
  <table class="table">
    <tbody>
      <tr>
        <td>Price per ft²</td><td>6.7873303167421 ₹/ft²</td>
          <td>Type</td>
          <td>Apartments</td>
        </tr>
        <tr>
            <td>Bedrooms</td>
          <td>2</td>
          <td>Bathrooms</td>
          <td>2</td>
        </tr>
        <tr>
          <td>Furnishing</td>
          <td>Semi-Furnished</td>
          <td>Listed by</td>
          <td>Dealer</td>
        </tr>
        <tr>
          <td>Super Builtup area (ft²)</td>
          <td>1547</td>
          <td>Carpet Area (ft²)</td>
          <td>1102</td>
        </tr>
    </tbody>
  </table>
  </div>
</div>
    <br>
        <div class="container-fluid" style="height:200px"><fieldset><legend>Description</legend></fieldset><p>2 BHK Flat available on rent in Aakruti Elegance, Jagapur

Near By Godrej Garden City

Call for more details.

Jay Mataji Real Estate

D-169, Sneh Plaza,, Near Karishma Avenue, IOC Road, Chandkheda.

To get My location, Copy below link and open with maps or browsers

https://goo.gl/maps/cut1uk4GuP32

Dixit - 8866551616 - Proprieter

Sudip - 8511288280 - Field Support</p>
    </div>
        </div>
    
    </div>
    <br><br><br>
    <div class="jumbotron text-center" style="background-color:black">
  <p>Follow Us</p>
        <p><i class="fa fa-facebook-official" ></i>  <i class="fa fa-instagram"></i>  <i class="fa fa-twitter"></i></p>
</div>
</body>
</html>
