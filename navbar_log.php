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
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">RoomRental</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
        <li ><a href="profile.php">Hello <?php echo $_SESSION["name"]  ?></a></li>
           <li><a href="post.php?id=<?php echo $id ?>">Post Your Room</a></li>
          <li><a href="logout.php">Logout</a></li>
      </ul>
        <?php if(!empty($_SESSION['home'])){ ?>
        <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" id="myInput" class="form-control" placeholder="Search Area" name="search">
        
            </div>
    </form><?php } ?>
      </div></div></nav>
         </body>
     </html>