<?php
// Connects to your Database
require_once '../config.php'; 
//Adds one to the counter
mysqli_query($link, "UPDATE counter SET counter = counter + 1");
//Retrieves the current count
$count = mysqli_fetch_row(mysqli_query($link, "SELECT counter FROM counter"));
//Displays the count on your site
//echo "$count[0]";
?>