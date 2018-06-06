<?php
/* First lets make some constants to connect mysql database. Server is localhost at the time, and user is lunchmachine with a password lunchmachine. Databese is lunchmachine */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'jae');
define('DB_PASSWORD', 'lunchmachine5000');
define('DB_NAME', 'LunchMachine5000');
 
/*Connect to mysql database*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check if any errors
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>