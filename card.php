
    <html>
<head>
    
    </head>
<body>
    <?php  
    $aid=$_SESSION['aid'];    
        include 'adv_data.php';
    ?>
     <div class="col-sm-3 col-sm-offset-1">
          <div class="card" id="card">
              <img src="<?php echo $images ?>" alt="Room" style="width:100%">
              <h1><?php echo $title ?></h1>
              <p class="price"><i class="fa fa-rupee"></i><?php echo  $price  ?></p>
              <p><?php echo $description  ?></p>
              <p><a href="ad.php?aid=<?php echo $aid ?>" class="btn btn-default btn-lg" style="width:100%" role="button">View</a></p>
          </div>
    </div>
        </body>


</html>