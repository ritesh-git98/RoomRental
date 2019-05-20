<html>
    <head>
        </head>
    <body>
        
        <?php
        
        require_once('config.php');
        $aid=$_SESSION['aid'];
        
        
        $sql = "select * from `advertisement` WHERE aid='$aid'";
        $result = $mysqli->query($sql);
       

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
              
             /*   ( `uid`, `type`, `bedrooms`, `bathrooms`, `furnishing`, `listed_by`, `Bachelors_allowed`, `Maintenance`, `Description`, `Ad_title`, `Image`, `Area`, `Floor`, `Car_parking`, `Price`, `Location`, `Contact`)*/
                
                
                
            $title = $row['Ad_title'];
            $locality = $row['Location'];
            $type = $row['type'];
            $bedrooms = $row['bedrooms'];
            $bathrooms = $row['bathrooms'];
            $furnishing = $row['furnishing'];
            $listed = $row['listed_by'];
            $bachelors = $row['Bachelors_allowed'];
            $maintenance = $row['Maintenance'];
            $images = $row['Image'];
            $area = $row['Area'];
            $floor = $row['Floor'];
            $parking = $row['Car_parking'];
            $price = $row['Price'];
            $contact = $row['Contact'];
            $description = $row['Description'];
            $id=$row['uid'];
            }
        }
        
?>  
                
    </body>
</html>