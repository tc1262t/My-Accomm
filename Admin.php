<?php 
require ('DatabaseConnect.php'); 
require ('css/Table.css'); 
require ('TemplateHeader.php');
require('css/Login.css');
?>

<html>
<body>
  <div id="content">  
    <form enctype="multipart/form-data" action="Query/AdminQuery.php" method="post"/>  
    
      
      
         <label for="lblpostocde"><b>Postcode:</b></label>
         <input type="text" name="txtpostcode">
 
    <label for="lblFullAddress"><b>Full address:</b></label>
         <input type="text" name="txtfulladdress">
    
    <label for="lblstreetaddress"><b>City:</b></label>
         <input type="text" name="txtcity">
    
    <label for="lblCity"><b>County:</b></label>
         <input type="text" name="txtcounty">
      
      
    <input type="hidden" name="size" value="1000000">
    </div>
  
    
     <label for="lblImage"><b>Select property image:</b></label><br/>
    <input type="file" name="image" />
        <br/> <br/>
    
    <?php 
    if(isset($_POST['submit'])){
        $Postcode =  " ";
        $Fulladdress = " ";
        $City = " ";
        $County = " ";
        
        
    }
    
    ?>
    
    
          <button type="submit" name="submit">Upload</button>
       
    

    
    
    </body>
    
    <?php require ('TemplateFooter.php'); ?>
    
</html>
