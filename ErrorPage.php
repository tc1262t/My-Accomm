<?php 
session_start();
require ('TemplateHeader.php'); ?>
<html>

<title>Error Page</title>

    <h1><p id="myP">Dear student, you must create an
        account or sign in
        </p></h1>

    
    
    
    
      <a  href="Login.php" onmouseover="playNoEntry();"> 
        
    <img src="imagesB\noEntry.jpg" 
         alt="login" 
         title="Dear student, you must login
        
        or create a free account"
         class="w3-bar-item w3-button"> 
        
      </a>  

</html>



<audio id="NoEntryID" src="responsiveSound/Navigation/NoEntry.mp3">
</audio>

<div id="sounddiv"><bgsound id="sound"></div>

<?php require_once 'TemplateFooter.php'; ?>