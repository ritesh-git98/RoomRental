<?php session_start();
$_SESSION['post_error']="";

 ?>
<html>
    <head>
    </head>
    <body>
        <?php
        require_once('config.php');
         // File upload configuration
        function testInput($data){
            $data = trim($data);//Strip whitespace (or other characters) from the beginning and end of a string
            $data = stripslashes($data);//Returns a string with backslashes stripped off
            $data = htmlspecialchars($data);//Prevent XSS attacks.
            return $data;
        }
        
        if(isset($_POST['post'])){//Check if form has been submitted          
            
            
            $name=$_SESSION['name'];
            $title = testInput($_POST['title']);
            $locality = testInput($_POST['locality']);
            $type = testInput($_POST['type']);
            $bedrooms = testInput($_POST['bedrooms']);
            $bathrooms = testInput($_POST['bathrooms']);
            $furnishing = testInput($_POST['furnishing']);
            $listed = testInput($_POST['listed']);
            $bachelors = testInput($_POST['bachelors']);
            $maintenance = testInput($_POST['maintenence']);
            
            $area = testInput($_POST['area']);
            $floor = testInput($_POST['floor']);
            $parking = testInput($_POST['parking']);
            $price = testInput($_POST['price']);
            $contact = $_POST['contact'];
            $description = testInput($_POST['description']);
            $id=$_GET['id'];
            
        }
  
        $sql = "INSERT INTO `advertisement` ( `uid`, `name`,`type`, `bedrooms`, `bathrooms`, `furnishing`, `listed_by`, `Bachelors_allowed`, `Maintenance`, `Description`, `Ad_title`, `Image`, `Area`, `Floor`, `Car_parking`, `Price`, `Location`, `Contact`) VALUES ('$id','$name','$type','$bedrooms','$bathrooms','$furnishing','$listed','$bachelors','$maintenance','$description','$title','$fileName','$area','$floor','$parking','$price','$locality','$contact')";

            if( $mysqli->query($sql) == TRUE){
                header("location:home.php") ;
            }
            else{
                 $_SESSION['post_error']=1;
           header("location:post.php") ;
            }

        ?>
        
    </body>
</html>