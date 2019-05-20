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
<?php  
    if(empty($_SESSION['name'])){
    include 'navbar.php';
    }
    else{
        include 'navbar_log.php';
    }
    $i=$_GET['aid'];
    echo $i;
    $_SESSION['aid']=$i;
        
    include 'adv_data.php';
    ?>
    
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
        <img src="<?php echo $images ?>" alt="Chania">
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
    <div class="container-fluid" style="height:100px"><fieldset><legend>Price</legend>
        <i class="fa fa-rupee"  style="font-size:36px"></i><strong  style="font-size:36px"> <?php echo $price ?></strong><br></fieldset></div> 
        <div class="container-fluid"><fieldset><legend>Seller Info</legend></fieldset>
        <!-- Used to open the Modal -->
<button class="btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Contact seller</button>

<?php if(empty($_SESSION['name'])){
    include 'modal.php';
    }
            else{
                include 'contact.php';
            }
?>
</div> 
        <br>
         <div class="container-fluid" style="height:270px"><fieldset><legend>Details</legend></fieldset>
             <div class="table-responsive">          
  <table class="table">
    <tbody>
      <tr>
        
          <td>Type</td>
          <td><?php echo $type ?></td>
          <td>Bedrooms</td>
          <td><?php echo $bedrooms ?></td>
        </tr>
        <tr>
           <td>Bathrooms</td>
          <td><?php echo $bathrooms ?></td>
            <td>Location</td>
          <td><?php echo $locality ?></td>
        </tr>
        <tr>
          <td>Furnishing</td>
          <td><?php echo $furnishing ?></td>
          <td>Listed by</td>
          <td><?php echo $listed ?></td>
        </tr>
        <tr>
          <td>Super Builtup area (ft²)</td>
          <td><?php echo $area ?></td>
          <td>Bachelors Allowed</td>
          <td><?php echo $bachelors ?></td>
        </tr>
        <tr>
          <td>Maintenance</td>
          <td><?php echo $maintenance ?></td>
          <td>Car Parking</td>
          <td><?php echo $parking ?></td>
        </tr>
        <tr>
          <td>Floor</td>
          <td><?php echo $floor ?></td>
          
        </tr>
    </tbody>
  </table>
  </div>
</div>
    <br>
        <div class="container-fluid" style="height:200px"><fieldset><legend>Description</legend></fieldset><p>
          <?php echo $description ?></p>
    </div>
        </div>
    
    </div>
    <br><br><br>
     
   <?php include 'footer.php';?>
</body>
</html>
