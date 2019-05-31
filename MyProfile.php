<?php session_start();
if (!isset($_SESSION['user_username'])){
    header ('location: ErrorPage.php'); } 
else {
 require('DatabaseConnect.php');
 require ('css/Table.css'); 
require ('TemplateHeader.php');
require ('css/Login.css'); }
    ?>


<html>

    <h1>My Profile</h1>
    <hr>
   <div style="overflow-x:auto;"> 
    
<table  margin:auto;>
    
<tr>

    <td><u><b>First name</b></u></td>
    <td><u><b>Other name/e</b></u></td>
    <td><u><b>Age</b></u></td>
    <td><u><b>Course of study</b></u></td>
    <td><u><b>Email addres</b></u></td>
    <td><u><b>Personal statement</b></u></td>
    

</tr>
    
<?php

$username = $_SESSION['user_username'];
$SelectQuery = "SELECT * FROM Student 
WHERE user_username = ('$username')"; 

$result = mysqli_query($conn, $SelectQuery);

while($row = mysqli_fetch_array($result)) {
    
    
    echo "<tr>";
    echo "<td>".$row['first_name']."</td>";
    echo "<td>".$row['other_name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['course_of_study']."</td>";
    echo "<td>".$row['email_address']."</td>";
    echo "<td>".$row['personal_statement']."</td>";
    
    
    
    echo "</tr>";
}  
?>
</table>
       </div>
    <br/>
    <form action="Query/MyProfileUpdate.php" method="post"> 
  <br/>
 <?php
    
    echo '<label for="lblOthername"><b>Other name</b></label>';
    echo  '<input type="text" name="txtOthername value'.$row['other_name'].'> <br/> <br/>';
    
  echo  '<label for="lblage"><b>Age</b></label>';
    echo     '<input type="text" name="txtAge" value'.$row['age'].'> <br/> <br/>';
    
    
    
 echo   '<label for="lblCOS"><b>Course of study</b></label>';
  echo   '<input type="text" name="txtCOS" ><br/> <br/>';
    
 echo   '<label for="lblEmail"><b>Email address</b></label>';
  echo  '<input type="text" name="txtEmail" ><br/> <br/>';
  
    
  echo  '<label for="lblPersonalStaement" ><b>Personal statement</b></label>';
    echo '<textarea name="txtPersonal" cols="45" rows="15" ></textarea><br/>';
    ?>
        
     <button type="submit" class="submit" name="btnUpdate">Update</button>
    </form>

</html>

<?php mysqli_close($conn); ?>
<?php include 'TemplateFooter.php'; ?>
