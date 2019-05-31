
<?php 
session_start();
require 'TemplateHeader.php'; 
require 'DatabaseConnect.php'; 
include 'css/Table.css'; 
include 'css/Login.css'; ?>
  <html>

<body>
    <?php
    
    $Basket = " ";
    $FontType1 = "serif";
    $FontType2 = "Verdana";
    
    ?>


  
    <h1>Login</h1>
    
    
      
      
   
    <hr>

    
    
      <form action="Query/LoginQuery.php" method="post"/>
  <div class="container">
    
    
    <label for="lblUsername"><b>Username</b></label>
    <input type="text" placeholder="e.g. ''FredBloggs'' " name="txtUser_username" required>

      
    <label for="lblPassword"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="txtUser_password" required>
    <input type="hidden" name="rowID" value= "0"> 
 
      
   
      
      <p> <a href = "Register.php"> Click here for a free account</a> </p>
    
    

    <div class="clearfix">
        
      <button type="submit" class="button button11">Login</button>
       
        
        
        
    </div>
  </div>

</body>
</html>  
 




<?php include 'TemplateFooter.php'; ?> 

