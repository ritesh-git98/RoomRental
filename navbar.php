 <html><head></head>
     
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
         
      </button>
      <a class="navbar-brand" href="#">RoomRental</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>     
      </ul>
        <?php if(!empty($_SESSION['home'])){
        ?>
        <form class="navbar-form navbar-right" action="fap.php">
      <div class="form-group">
        <input type="text" id="myInput" class="form-control" placeholder="Search Area" name="search" >
      </div>
    </form><?php } ?>
      </div></div></nav>
         </body>
     </html>