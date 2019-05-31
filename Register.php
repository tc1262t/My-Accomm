<?php 

require ('DatabaseConnect.php'); 
require ('css/Table.css'); 
require ('TemplateHeader.php');
require('css/Login.css');
?>

<html>
<body>
    
<form method="post" action="Query/RegisterQuery.php"/>  
    
    
    <label for="lblFirstname"><b>First name: </b></label>
         <input type="text" name="txtFirstname">
 
    
    <label for="lblOthername"><b>Other name: </b></label>
         <input type="text" name="txtOthername">
    
    <label for="lblage"><b>Age</b></label>
         <input type="text" name="txtAge" >
    
    <label for="lblusername"><b>Username</b></label>
         <input type="text" name="txtUsername" >
    
     <label for="lblpassword"><b>Password</b></label>
    
         <input type="password" name="txtPassword" >
    
    <label for="lblCOS"><b>Course of study</b></label>
         <input type="text" name="txtCOS" ><br/>
    
    <label for="lblCity"><b>Email address</b></label>
         <input type="text" name="txtEmail"><br/>
    
    
    <label for="lblCity"><b>Personal statement</b></label>
         <input type="text" name="txtPersonal"> <br/>
    
  
    
    Captcha:<br>
     <img src="capstring.php" /> <br><br>
<input type="text" name="captcha" /> <br>
    
    
    
    
     <button type="submit" name="btnInsert">Create my account</button>
    
    </body>
    
 
</html>

<?php 

require ('TemplateFooter.php'); 

?>