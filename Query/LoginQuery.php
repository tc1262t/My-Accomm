<?php
session_start();

#Call Database
require ('../DatabaseConnect.php');
$user = mysqli_real_escape_string($conn,$_POST['txtUser_username']);
$pass = mysqli_real_escape_string($conn,md5($_POST['txtUser_password']));


#Get the usrname and password from database
$sql="SELECT * from Student WHERE 
user_username = '$user' and user_password='$pass'";
$conf = ['confirm'];

$result = mysqli_query($conn, $sql);


$count = mysqli_num_rows($result);

if ($conf == 1){
    
 header("location: index.php");   
} else if ($conf == 0){
    echo "Error";
}

else if($count == 0) {
$row = mysqli_fetch_row($result);
    
    # Whatever is in the databse, this case MemeberID
    $StudentID = $row['StudentID'];

    
//  $row = $result ['StudentID'];
$_SESSION['user_username'] = $user;


    
    header("location: ../index.php");
    
} 


 else if ($count ==1) {
    
    echo "Username or password do not match.";
     
     
} 
mysqli_close($conn);
?>