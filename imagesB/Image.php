<?php
require 'DatabaseConnect.php';

if (isset($_POST['upload'])) {
    
    $target ="images/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    
    $InsertImage = "INSERT INTO images (name,image) VALUES ('$image','$text')";
    
     $result = mysqli_query($conn, $InsertImage);
    
    if (move_uploaded_files($_FILES['name']['tmp_name'], $target)) {
        echo "Image uploaded successfully";
    }else{
        echo "There was a problem uploading image";
    }
    
    
    
}


?>