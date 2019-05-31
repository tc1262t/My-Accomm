<?php
session_start();
require ('DatabaseConnect.php');


//Top half of page.
require ('TemplateHeader.php'); 
//require ('javascript/slideshow.js');

//require ('../Accomm/index.php');
?>
 
    
    
   <title> Home</title><br/>
 
   <h1> <header>HOME</header>  </h1>


<hr>



<div class="container-fluid";>
    <div class="row"></div>
    <div align="center" width="48px" class="col-sm-4"> <img src="imagesB\home\UoG.PNG" alt="image"align="auto" width="600" height="300" > </div>
    
  <h3>  <div class="col-sm-4" >
      <u><h2 >Who we are</h2></u>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat posuere arcu nec dignissim. Nunc venenatis sem tincidunt mi bibendum malesuada. Nulla ultrices sollicitudin interdum. Cras et erat vulputate, placerat erat a, molestie dolor.</div> </h3>
    
    <div class="col-sm-4" align="center"> <img  align="auto" src="imagesB\home\agents.jpg" alt="image"> </div><br/>
    
   <h3> <div class="col-sm-4"><br/>
     <u>  <h2>About our Agents</h2></u>
       Donec laoreet tristique dolor, et imperdiet nisl lobortis eu. Nunc egestas imperdiet tortor nec porttitor. Maecenas sit amet purus tellus. Mauris varius justo non metus facilisis, at luctus nisi rhoncus. </div> </h3>
    
     <div class="col-sm-4"> <img src="imagesB\home\property.jpg" align="auto" width="600" height="300" > </div>
    
    
   <h3> <div class="col-sm-4"> 
       
       <u>  <h2>About our Agents</h2></u>
       Donec at nisl pulvinar purus pharetra dapibus. Vestibulum a sem sit amet ligula sagittis convallis et ac eros. Suspendisse sed diam in nisl sollicitudin volutpat ac non orci. Vestibulum nec leo non magna semper aliquam.</div> </h3>
    
    <div class="col-sm-4"> </div>
    
    
  </div>



<?php require('TemplateFooter.php'); ?>