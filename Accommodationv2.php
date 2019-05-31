<!-- 0 = false
     1= True  -->

<?php
session_start();
if (!isset($_SESSION['user_username'])){
    header ('location: ErrorPage.php'); } 
require ('DatabaseConnect.php');


//Top half of page.
require ('TemplateHeader.php'); 
//require ('javascript/slideshow.js');

//require ('../Accomm/index.php');
?>

<!-- If user has not logged in -->
<?php if (!isset($_SESSION['user_username'])){
    header ('location: ErrorPage.php'); } 
?>
<html>
<head>
<meta charset="UTF-8">
<title>View Accommodation</title> 
<!-- Text on browser Tab bar -->
<!-- Get the nicely set accomm table.css-->
<link rel="stylesheet" href="css/MyAccomm.css">


</head>
<body>
    
    
<!-- Change family font -->
    
    <div class="container" style="width:60%;">
	<h2 align="center"><p style="fontFamily"> Book a viewing </p> </h2>
        <hr>
    <?php
	$SelectProduct = "SELECT * FROM Accommodation";
	$result = mysqli_query($conn, $SelectProduct);
        
    if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result)){  ?>
        <div class="col-md-8" class="img-responsive"> <!--    Table    -->
            <form method="post" action="Query/AccommodationQuery.php?action=add&id=<?php echo $row["AccommodationID"];
                  
            $_SESSION['AccommID'] =  $row["AccommodationID"];
                  ?>">
           
                
    <!-- ...................Slide show..................... -->
   <form method="post" action="AccommodationQuery.php?action=add&id=<?php echo $row["AccommodationID"]; ?>"> <!-- Capture product ID on URL of  webpage. -->
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="imagesB/Locations/<?php echo $row["image"]; ?>" class="img-responsive"> <!-- Get the image source from the varChar value from field image in table productC -->
                
 <!-- ...........End of file slide show.................-->
                
  <!-- H5 is being used like a label, but H5 is much shorter to code than label. -->
                
    
                <h4><b><u><p>Property details: </p></u></b></h4>
                <h4><p style="fontFamily"><?php echo $row["Full_address"].", " . $row["Postcode"].", " .$row["City"] .", " .$row["County"] ; ?></p></h4><br>
                
                
                
             
         
                <h4><b><u><p>Rent per month: </p></u></b></h4>
                <h4><p style="fontFamily">£ <?php echo $row["PricePerMonth"]; ?></p></h4>
                
             <h4><b><u><p>Viewing availability: </p></u></b></h4>
                <h4><p style="fontFamily"><?php echo $row["Availability"]; ?></p></h4>
                
                 <h4><b><u><p>Select viewing date: </p></u></b></h4>
               <input type="date" name="datDays"> 
                
                
                <h4><b><u><p>Select viewing time: </p></u></b></h4>
             <input type="time" name="datTime">
                
                
                <br/>
<!--Agents work from 9am till 5 pm -->
            <input type="hidden" name="rowID" value="<?php echo $row["AccommodationID"]; ?>">    
            <input type="hidden" name="rowPostcode" value="<?php echo $row["Postcode"]; ?>">
                
            
            <input type="hidden" name="rowPPM" value="<?php echo $row["PricePerMonth"]; ?>">
            <input type="submit" name="btnBookViewing" style="margin-top:5px;" class="button buttonYellow" value="Book viewing"> <!-- Button for the product itself -->
                
                
                
                <!-- Button for the product itself -->
      
       </div>
            </form>
            </form>
            </div>
        <?php
		}
	}
	?>
       
        
        
        
    
        <br/>
     
        
   
    </div>
 </body>
</html>

<?php require ('TemplateFooter.php');