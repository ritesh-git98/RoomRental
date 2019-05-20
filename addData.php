<?php session_start();
$_SESSION['reg_error']="";
 ?>
<html>
    <head>
        <title>
            Add Data
        </title>
    </head>
    <body>
        <?php
        require_once('config.php');
        
        function testInput($data){
            $data = trim($data);//Strip whitespace (or other characters) from the beginning and end of a string
            $data = stripslashes($data);//Returns a string with backslashes stripped off
            $data = htmlspecialchars($data);//Prevent XSS attacks.
            return $data;
        }

        if(isset($_POST['register'])){//Check if form has been submitted
            $name = testInput($_POST['name']);
            $email = testInput($_POST['email']);
            $password = testInput($_POST['password']);
        }

       
            $sql = "INSERT INTO `users` (name, email, password) VALUES ('$name','$email','$password')";

            if( $mysqli->query($sql) == TRUE){
                header("location:login.php") ;
            }
            else{
                 $_SESSION['reg_error']=1;
           header("location:register.php") ;
            }

        ?>
    </body>
</html>