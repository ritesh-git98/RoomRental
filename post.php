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
    $id=$_GET['id'];
    if(empty($_SESSION['name'])){
    include 'navbar.php';
    }
    else{
        include 'navbar_log.php';
    }
    
    ?>  
 <div class="container">
  <form class="form-horizontal" action="addAdv.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
    <h1>Post Your Add</h1>
      <font color='red'>* required fields</font><br>
      <hr>
       <div class="form-group">
      <label class="control-label col-sm-2" for="title">Ad Title* :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="title" placeholder="Title for ad (max 15 characters)" name="title" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="locality">Locality* :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="locality" placeholder="locality" name="locality" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="type">Type* :</label>
      <div class="col-sm-6">
       <label class="radio-inline"><input type="radio" name="type"  value="Appartment/Flats">Appartment/Flats</label>
<label class="radio-inline"><input type="radio" name="type" value="Independent House/Villa">Independent House/Villa</label>
<label class="radio-inline"><input type="radio" name="type" value="PG">PG</label>
   </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="bedrooms">Bedrooms* :</label>
      <div class="col-sm-6">  
  <select class="form-control" name="bedrooms" id="bedrooms" required >
    <option selected disabled value="">bedrooms</option>
      <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3+">3+</option>
  </select>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="bathrooms">Bathrooms* :</label>
      <div class="col-sm-6">  
  <select class="form-control" id="bathrooms" name="bathrooms"  required>
    <option selected disabled value="">Bathrooms</option>
      <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3+">3+</option>
  </select>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="furnishing">Furnishing* :</label>
      <div class="col-sm-6">
       <label class="radio-inline"><input type="radio" name="furnishing" value="Fully-Furnished" >Fully Furnished</label>
<label class="radio-inline"><input type="radio" name="furnishing" value="Semi-Furnished">Semi-Furnished</label>
<label class="radio-inline"><input type="radio" name="furnishing" value="Un-furnished">Un-furnished</label>
   </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="listed">Listed by*  :</label>
      <div class="col-sm-6">
       <label class="radio-inline"><input type="radio" name="listed" value="owner">Owner</label>
<label class="radio-inline"><input type="radio" name="listed" value="dealer">Dealer</label>
   </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="bachelors" >Bachelors allowed* :</label>
      <div class="col-sm-6">
<label class="radio-inline"><input type="radio" name="bachelors"  value="yes">Yes</label>
<label class="radio-inline"><input type="radio" name="bachelors" value="no">No</label>
   </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="maintenence">Maintenance* :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="maintenence" required placeholder="Monthly Maintanence" name="maintenence">
      </div>
    </div>
        
          <div class="form-group">
      <label class="control-label col-sm-2" for="images">Images* (upto 10):</label>
      <div class="col-sm-6">          
        <input type="file" multiple class="form-control" name="images[]">
      </div>
    </div>
          <div class="form-group">
      <label class="control-label col-sm-2" for="area">Area* :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="area" placeholder="area in ft2" required name="area">
      </div>
    </div>
          <div class="form-group">
      <label class="control-label col-sm-2" for="floor">Floor* :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="floor" required placeholder="Floor no" name="floor">
      </div>
    </div>
          <div class="form-group">
      <label class="control-label col-sm-2" for="parking">Car Parking * :</label>
       <div class="col-sm-6">
<label class="radio-inline"><input type="radio" name="parking" value="yes">yes</label>
<label class="radio-inline"><input type="radio" name="parking" value="no">No</label>
   </div>
    </div>
    
          <div class="form-group">
              <label class="control-label col-sm-2" for="price">Price* :</label>
      <div class="col-sm-6">   
        <input type="number" class="form-control" id="price" placeholder="Price" required name="price">
      </div>
    </div>
          <div class="form-group">
      <label class="control-label col-sm-2" for="contact">Contact Number* :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" maxlength="10" id="contact" placeholder="mobile number" name="contact" required>
      </div>
    </div>
      <div class="form-group">
  <label class="control-label col-sm-2" for="description">Desciption* :</label>
 <div class="col-sm-6">          
        <textarea class="form-control" rows="6" id="description" required name="description"></textarea>
      </div> 
</div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-success" name="post">Post</button>
      </div>
    </div>
  </form>
</div>
  <?php
        include 'footer.php';
        ?>
    </body>
</html>
