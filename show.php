<html>    
    <head></head>
    <body>
<?php
// Include the database configuration file
include_once 'config.php';

// Get images from the database
$query = $mysqli->query("SELECT * FROM images ORDER BY id DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'D:/'.$row["file_name"];
?>
        <p> <img src="<?php echo $imageURL; ?>" alt="" /></p>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?> 
        </body>
    </html>