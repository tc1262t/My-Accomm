<?php

require('../DatabaseConnect.php');
require('../index.php');


if (isset($_POST['btnInsert'])) {
  
 

 $firstname = $_POST['txtFirstname'];
 $othername = $_POST['txtOthername'];
 $age = $_POST['txtAge'];    
 $user_username = $_POST['txtUsername'];  
 $user_password = $_POST['txtPassword'];
 $course_of_study = $_POST['txtCOS'];
 $email_address = $_POST['txtEmail'];
 $personal_statement = $_POST['txtPersonal'];

    

if ($user_username && $user_password) 
    {

 $InsertStudent = "INSERT INTO Student (first_name, other_name, age, user_username, user_password, course_of_study, email_address, personal_statement)
VALUES 
('$firstname','$othername','$age','$user_username',' ".md5('$user_password')."','$course_of_study','$email_address','$personal_statement')";
    header('location: index.php');
 $result = mysqli_query($conn, $InsertStudent);
    $count = mysqli_num_rows($result);
    
     $message = " You have your own 
     MyAccomm accont username=$user_username";
     
     mail($email_address, "MyAccomm account",$message,"From: DoNotReply@hotmail.com");
     
     echo "Please visit our accommodations";

     
} else {
    echo "Error";
   
}
}

 mysqli_close($conn);

?>