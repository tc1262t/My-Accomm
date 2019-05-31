<?php
session_start();
require ("../DatabaseConnect.php");

 $AccommID = $_POST['rowID'];
 $rowPostcode = $_POST['rowPostcode'];
 $rowPPM = $_POST['rowPPM'];    
 $Day = $_POST['datDays'];  
 $Time = $_POST['datTime'];
 $Username = $_SESSION['user_username'];
 

if (isset($_POST['btnBookViewing'])){
   
    $InsertViewing = "INSERT INTO BookViewing (View_Day, View_Time, AccommodationID, StudentUsername, Confirmation)
VALUES 
('$Day','$Time','$AccommID', '$Username' , 'Awaiting')";
 $result = mysqli_query($conn, $InsertViewing);

    
    echo 
        "Congradulations you have booked a viewing ";
     
     
}

 mysqli_close($conn);
 ?>