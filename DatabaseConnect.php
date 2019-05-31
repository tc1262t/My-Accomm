<?php


#~Setting up the database connection

$HOST = ('mysql.cms.gre.ac.uk');
$USER = ('tc1262t');
$PWD = ('tc1262t');
$dbNAME = ('mdb_tc1262t');

// Create connection

//dbc
//$conn = new mysqli($HOST, $USER, $PWD, $dbNAME); 
$conn = mysqli_connect($HOST, $USER, $PWD, $dbNAME); 


//$conn = new mysqli('mysql.cms.gre.ac.uk', 'tc1262t', 'tc1262t', 'mdb_tc1262t');

?>
