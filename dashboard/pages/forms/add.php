<?php  
session_start();
include 'connect.php';

if(isset($_POST['submit']))
{
    
   
    $hname = $conn->real_escape_string($_POST['hname']);

    $tvb = $conn->real_escape_string($_POST['tvb']);


            $sql = "UPDATE hdata SET tvb = '$tvb' WHERE hname = '$hname'"; 
             $result=mysqli_query($conn, $sql);
            if($result)
         {
              header("Location: http://localhost/pandemic/dashboard/pages/forms/form.php");
         
        }
          else{
            echo "nhi hua";
        //    header("Location: http://localhost/pandemic/dashboard/pages/forms/basic_elements.html");
          }
        }
    
 else{
     echo "nhi hua";
 }
  mysqli_close($conn);




