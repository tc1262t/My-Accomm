
<!-- FF8C00 = orange; FF69B4= Pink; 808000= Yellow  -->
<?php 
session_start(); ?>

<html>
    

<?php
    
//$_SESSION['orange'] = "#FF8C00";
$pink = "#FF69B4";
$yellow = "#808000";
$orange = "#FF8C00";  

    
    
    
//* ----------- Change background colour-----------  
if(isset($_POST['btnPink'])) {$_SESSION['pink'] = "OliveBackground";
 
 $_SESSION['BackgroundColour'] = "pink";   $_SESSION['NavigationColour'] =  "pink";                        
                             }

else if(isset($_POST['btnYellow'])) {$_SESSION['yellow'] = "YellowBackground";

$_SESSION['BackgroundColour']= $_SESSION['yellow'];  
$_SESSION['NavigationColour']= "yellow"; 
                               }

else if(isset($_POST['btnOrange'])) {$_SESSION['orange'] = "OrangeBackground";

$_SESSION['BackgroundColour']= $_SESSION['orange'];
$_SESSION['NavigationColour']= "orange";                                 
      
                               }
  header('location: ../Accessability.php');
//* ----------- Change background colour-----------  
?>
    
<!-- ----- Change background Family Font ------- -->  
  
  
 <?php   
   
 if (isset($_POST['btnAriel'])) {
      $_SESSION["fontFamily"] = "Ariel";}
    else if(isset($_POST['btnCourier'])) {
        $_SESSION["fontFamily"] = "Courier";}
    else if(isset($_POST['btnVerdana'])) {
       $_SESSION["fontFamily"] = "Verdana";}
 
    ?>
    
    
    
<!-- ----- Change background Family Font ------- -->  
    
    </html>

