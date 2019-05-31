<?php
session_start();

require('DatabaseConnect.php');
require('TemplateHeader.php');

// Call the page from index in order
// to redirect page to Accessability.
// Opposite way of link label.
if (isset($_POST['btnAccess'])) {
    header('location: Accessability.php');
}


//FF8C00 = orange; FF69B4= Pink; 808000= Yellow




?>

<html>
<body>
  <title><p>Accessability</p></title>
    
    
    <form method="post" action="Query/AccessabilityQuery.php">
        
    <div class="dropdown">    
   <div style="overflow-x:auto;"> 
       
       <h1> Accessability</h1>
       
       <hr>
       
       <h2><p id="myP">Activate background sound: </p> </h2> 
       
       <h4> Unmute and increase your device's volume </h4>
      <h4>   Mute or decrease your device's volume   </h4>

    
       
       <h2><p id="myP">Select background colour:</p> </h2> 
       
       
        <table style= "margin:auto">
        <tr>
            <th><p id="myP">Background Yellow</p></th>
            <th><p id="myP">Background Pink</p></th>
            <th><p id="myP">Background Orange</p></th>
  </tr>
<tr>
    
    <th> <img  src="imagesB/ColourPages/YellowPage.PNG" width="300" height="300" /></th>
    <th> <img src="imagesB/ColourPages/PinkPage.PNG" width="300" height="300" /><br/> </th>
    <th>  <img src="imagesB/ColourPages/OrangePage.PNG" width="300" height="300"/><br/> </th>
    
</tr>
<tr>
     <!----------------- Background colour BUTTON ------------------------->     
    
<th>  <input type="submit" class="button buttonYellow" name="btnYellow" Value="Select Yellow"></th>
    
    <th> <input type="submit" class="button buttonPink" name="btnPink" Value="Select Pink"><br/><br/> </th>
    
    <th> <input type="submit" class="button buttonOrange" name="btnOrange" Value="Select Orange"> </th>
</tr>
      
        </table>
        </div>
        <br/><br/><br/><br/>

        
        
        <h1><p id="myP">Choose font type:</p> </h1> <br/>
        
        
        
   <div style="overflow-x:auto;"> 
       <table style= "margin:auto"> 
          
           
           
           <tr>
               <th><p>Ariel</p></th>
               <th><p>Verdana</p></th>
               <th><p>Courier</p></th>
  </tr>
           <tr>
       <th> <font face="Ariel">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis ipsum ligula, id venenatis erat semper vel</font> </th>
           
        <th> <font face="Verdana"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis ipsum ligula, id venenatis erat semper vel</font> </th>   
           
        <th> <font face="Courier"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis ipsum ligula, id venenatis erat semper vel</font> </th>  
           
           </tr>
           
           <tr>
    <!---------------------- Family font BUTTON ------------------------->     
                
           <th> <input type="submit" class="button buttonGreen" 
                
               Value="Choose Ariel!"> </th>
            
           <th> <input type="submit" class="button buttonGreen" 
          onclick="myFunction()"
             name="btnVerdana"
               Value="Choose Verdana!"> </th>
               
           <th> <input type="submit" class="button buttonGreen" 
            onclick="myFunction()"
            name="btnCourier"
            Value="Choose Courier!"> </th>
               
           </tr>
           
           
       </table>
   </div>
        
        </div>
      
        <h3><font face="verdana">Font type test: The bear ate an apple from an oak tree
outside Park row, where a mellow bee collected its nector from the peace lillies
            placed just in front of the oak tree.
        </font></h3>
        
    </form>
    </body>

</html>

<?php require ("TemplateFooter.php"); ?>