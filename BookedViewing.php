<?php session_start();
if (!isset($_SESSION['user_username'])){
    header ('location: ErrorPage.php'); } 
?>
<?php require('DatabaseConnect.php'); ?>
<?php require ('css/Table.css'); ?>

<?php include ('TemplateHeader.php'); ?>


<?php if (!isset($_SESSION['user_username'])){
    header ('location: ErrorPage.php'); } 
   
?>


<html>

    <h1>Booked viewings</h1>
    
    
    
<table  margin:auto;>
    

   
<?php

$user = $_SESSION['user_username'] ;
    
    
$SelectQuery = "SELECT * FROM BookViewing WHERE StudentUsername =
'$user' "; 

$result = mysqli_query($conn, $SelectQuery);

while($row = mysqli_fetch_array($result)) {
    
    echo"<tr>";
   
    echo "<th>" ."Day ". "</th>";
    echo "<th>"."Time ". "</th>";
    echo "<th>"."AccommodationID". "</th>";
    echo "<th>"."Confirmation". "</th>";
    echo "<th>"."</th>";
    
    
    echo"</tr>";
    
    echo "<tr>";
    echo "<td>".$row['View_Day']."</td>";
    echo "<td>".$row['View_Time']."</td>";
    echo "<td>".$row['AccommodationID']."</td>";
    echo "<td>".$row['Confirmation']."</td>";
    echo "<td>". "<input type='submit' name='btnCancel' style='margin-top:5px;' class='button buttonRed' value='Cancel Viewing'>" ."</td>";

    echo "</tr>";
}  

?>
    
    



</table>
        
        
        
        
<a href = "Logout.php">Log out</a>


</html>

<?php mysqli_close($conn); ?>
<?php include 'TemplateFooter.php'; ?>
