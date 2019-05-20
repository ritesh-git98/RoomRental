<?php session_start();
$_SESSION['home']=1;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php
        include_once('common.php');
    require_once('config.php');
        ?>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    
    var value1 =$("#myInput").val().toLowerCase();
      console.log(value1);
    $("#myDIV .card").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value1) > -1)
    });
  });
});
</script>
  <title>RoomRental</title>
</head>
<body>
    
 <?php  
    if(empty($_SESSION['name'])){
    include 'navbar.php';
    }
    else{
        
        $id=$_SESSION['id'];
        include 'navbar_log.php';
    }
    ?>
    <?php include 'filters.php' ?>
    <div class="row no-gutters" id="myDIV">       
       
  <?php
$sql = "SELECT * FROM advertisement";
        $result = $mysqli->query($sql);
    $rowcount=mysqli_num_rows($result);
    $j=$rowcount;
    while($j--){
        $_SESSION['aid']=$j+1;
    include 'card.php';
 } 
        ?>
    </div>
    
    
   <?php
    echo $_SESSION['aid'];
    include 'footer.php';?>
</body>
</html>