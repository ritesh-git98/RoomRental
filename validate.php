<?php session_start();
$_SESSION['log_error']="";
 ?>
<html>
<head>
    
    </head>
    <body>
<?php
 require_once('config.php');
        
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['login']))
{
    $sql = "SELECT uid,name,email, password FROM `users` WHERE email='$email' and password ='$password' ";

    $result = $mysqli->query($sql);


   if($result->num_rows > 0)
     {  
        
       while($row = $result->fetch_assoc()){
           $id=$row['uid'];
           $name=$row['name'];
       }
       if(isset($_POST['remember']))
       {
           setcookie('email',$email,time()+60*60*7);
           setcookie('pass',$password,time()+60*60*7);
           
           session_start();
           $_SESSION['id']=$id;
           $_SESSION['name']=$name;
           header("location:home.php") ;
         }
       else{
            session_start();
           $_SESSION['name']=$name;
           $_SESSION['id']=$id;
           header("location:home.php") ;
       }
     }
    else
       {
            $_SESSION['log_error']=1;
           header("location:login.php") ;
       }
}
else
    {
echo"not set";
        

    }

?>
    </body>
</html>