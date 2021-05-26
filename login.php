<?php  
session_start();
include 'connect.php';
if(isset($_POST['login']))
{
    $User = $conn->real_escape_string($_POST['user']);
    $pass = $conn->real_escape_string($_POST['pass']);
	
	
   
        if(strcmp($User,"admin")==0&&strcmp($pass,"admin")==0) 
        {
	       
           
            $_SESSION["user"] =  $User;
           
            if(isset($_SESSION["user"]))
            {
	            echo "id is found";
	            echo session_id();
                header("Location: http://localhost/pandemic/dashboard/admin.php");
            }
        } 
        else
        {
        
            echo  "user not found";
        }
   
}

?>

