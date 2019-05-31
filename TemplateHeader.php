
<html>


<body>

    
 <!--    <form method="post" action="Logout.php">
     <p> <button class="button buttonRed" name ="btnLogout" href= "Dyslexic.php" type="submit">Logout</button> </p>
    </form>  
    
     <form method="post" action="Accessability.php">
 <p><button class="button buttonYellow" name="btnAccess" href= "Acessability.php" type="submit">Accessability</button></p>
    </form>  -->

    
       
<?php  
    
    if(!isset($_SESSION['user_username']) || empty($_SESSION ['user_username']))
    {
         
        echo' Welcome Guest.'; 
    }     
    
    else if(isset($_SESSION['user_username'])) 
    {
        echo 'Welcome ' . $_SESSION['user_username'];
     
    }
    ?> 
        
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/StyleSheet1.css">
    <link rel="stylesheet" href="css/StyleSheet2.css">
    

    <!-- Header / Home-->
    <header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
    </header>

 
    <!--nav Change NavigationBar colour whilst background colour is selected-->
<div class="w3-bottom w3-hide-small">
<?php if(!isset($_SESSION['user_username'])) { ?>
     <div class="w3-bar DefaultNav w3-center w3-padding w3-opacity-min w3-hover-opacity-off"/>
<?php }else if(isset($_SESSION['yellow'])) {   ?>
  <div class="w3-bar YellowNav w3-center w3-padding w3-opacity-min w3-hover-opacity-off"/>
      
<?php }else if (isset($_SESSION['orange'])) {  ?>
      <div class="w3-bar OrangeNav w3-center w3-padding w3-opacity-min w3-hover-opacity-off"/>
          
   <?php }else if (isset($_SESSION['pink'])) { ?>    
          <div class="w3-bar PinkNav w3-center w3-padding w3-opacity-min w3-hover-opacity-off"/>
          
    <?php } ?>
          
<!--nav Change NavigationBar colour whilst background colour is selected-->
  
    
<!-- Responsive sound. play sound. hover sound                    -->       
   <script type="text/javascript" src="responsiveSound/sound-mouseover.js"></script> 
    
    
    <a  href="index.php" onmouseover="playHomePage();">
      <img src="imagesB\navigation\home.png" 
         alt="homepage" 
         title ="Home page"
         class="w3-bar-item w3-button"   width="100%" height="90" >
        
      </a>  
          
    <a  href="Login.php" onmouseover="playLogin();"> 
        
    <img src="imagesB\navigation\login.png" 
         alt="login" 
         title="Sign in or create a free account"
         class="w3-bar-item w3-button"   width="100%" height="90"> 
        
      </a>  
          
    <a  href="Accommodationv2.php" onmouseover="playAccommodation();">   
    <img src="imagesB\navigation\accommodationv2.PNG" 
         alt="login" 
         title="Search for accommodation"
         class="w3-bar-item w3-button"   width="100%" height="110"> 
      </a>  
  <!--  <a href="Accommodationv2.php" style="width:35%" class="w3-bar-item w3-button"><b>Accommodations</b></a> -->
     
    
 <!--   <a  href="MyProfile.php" style="width:20%" class="w3-bar-item w3-button"><b>My Profile</b></a> -->
       <a  href="MyProfile.php" onmouseover="playMyProfile();">   
    <img src="imagesB\navigation\myprofile.png" 
         alt="myprofile" 
         title ="My profile"
         class="w3-bar-item w3-button"   width="90" height="90"> 
      </a>  
             
  
<!--    <a href="SavedPages.php" style="width:25%" class="w3-bar-item w3-button w3-hover-black"><b>Saved Pages</b></a> -->
        <a  href="BookedViewing.php" onmouseover="playBookedViewing();">   
    <img src="imagesB\navigation\savedpages.PNG" 
         alt="myprofile"
         title="Booked Viewings"
         class="w3-bar-item w3-button"   width="90" height="90"> 
      </a>  
       
        <a  href="Logout.php" onmouseover="playLogout();">   
    <img src="imagesB\navigation\logout.PNG" 
         alt="logout"
         title="logout"
         class="w3-bar-item w3-button"   width="90" height="90"> 
      </a>  
       
       <a  href="Accessability.php" onmouseover="playAccessability();">   
    <img src="imagesB\navigation\accessability.PNG" 
         alt="Accessability"
         title="Accessability"
         class="w3-bar-item w3-button"   width="90" height="90"> 
      </a>  
          
       
       <div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">

  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#portfolio" class="w3-bar-item w3-button">Login</a>
  <a href="#contact" class="w3-bar-item w3-button">Accommodation</a>
  <a href="#portfolio" class="w3-bar-item w3-button">My Profile</a>
  <a href="#contact" class="w3-bar-item w3-button">Saved pages</a>
  <a href="#contact" class="w3-bar-item w3-button">Accessability</a>
    
</div>
       
  </div>
          
</div>
    </div>


      
      
      
    <!-- Update/customise/change/alter Background colour
w3-pale-red-->
    
<?php if(isset($_SESSION['yellow'])) {   ?>
    
    <div class="w3-container YellowBackground w3-padding-64  w3-grayscale-min" id="us"/>
<?php }else if (isset($_SESSION['orange'])) {  ?>
          <div class="w3-container OrangeBackground w3-padding-64  w3-grayscale-min" id="us"/>
<?php }else if (isset($_SESSION['pink'])) { ?>
      <div class="w3-container PinkBackground w3-padding-64  w3-grayscale-min" id="us"/>  <?php } ?>
      
<!-- Update/customise/change/alter Background colour
w3-pale-red-->
      
      

        <div class="w3-content"/>


            <h1 class="w3-center w3-text-grey">

                <asp:ContentPlaceHolder ID="Main" runat="server" />
            </h1>



            <br>
            

        <!-- Audio files -->
<audio id="HomePageID" src="responsiveSound/Navigation/HomePage.mp3">
</audio>
    
<audio id="LoginID" src="responsiveSound/Navigation/Login.mp3">
</audio>

<audio id="AccommodationID" src="responsiveSound/Navigation/Accommodation.mp3">
</audio>

<audio id="MyProfileID" src="responsiveSound/Navigation/MyProfile.mp3">
</audio>
    
<audio id="BookedViewingID" src="responsiveSound/Navigation/BookedViewings.mp3">
</audio>
    
<audio id="LogoutID" src="responsiveSound/Navigation/LogOut.mp3">
</audio>
    
<audio id="AccessabilityID" src="responsiveSound/Navigation/Accessability.mp3">
</audio>

<div id="sounddiv"><bgsound id="sound"></div>
                
    
    
   



</body>
</html>