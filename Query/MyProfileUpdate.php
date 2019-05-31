<?php
session_start();
require('index.php');
 require('DatabaseConnect.php'); 
 
if(isset($_POST['btnUpdate'])){    
        
 $othername = $_POST['txtOthername'];  
 $age = $_POST['txtAge'];
 $COS = $_POST['txtCOS'];
 $emailaddress = $_POST['txtEmail'];
 $personal = $_POST['txtPersonal'] ;
 $Sessions = $_SESSION['user_username'];
//txtOthername
    $UpdateStudent= "UPDATE Student SET  other_name ='$othername', age = '$age', course_of_study = '$COS', email_address = '$emailaddress', personal_statement = '$personal'";
    
   $result = mysqli_query($conn, $UpdateStudent) or die(mysqli_error($conn)); 
    
    header ('location: MyProfile.php');
}


    
   
mysql_close($conn); 
require('footer.php');
?>