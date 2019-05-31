<?php 
//$messagebox = "";
session_start();
//ini_set('mysql.connect_timeout',300);
//ini_set('default_socket_timeout',300);
require ('DatabaseConnect.php'); 
require ('index.php'); 




    if(isset($_POST['submit'])){
        
        $imageName = mysql_real_escape_string ($_FILES["image"]["name"]);
        $imageData = mysql_real_escape_string ($_FILES["image"]["name"]);
        
        $Postcode =  $_POST['txtpostcode'];
        $Fulladdress = $_POST['txtfulladdress'];
        $City =  $_POST['txtcity'];
        $County =  $_POST['txtcounty'];
        $target ="images/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        
        
        $InsertImage="INSERT INTO Accommodation (Postcode, Full_address, City, County, image)
        VALUES  
        ('$Postcode','$Fulladdress','$City', '$County','$image')";
        
        
        header ('location: Admin.php');
        
    $result =  mysqli_query($conn, $InsertImage);
        }
       
    ?>