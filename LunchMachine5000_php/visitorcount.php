<?php

session_start();

// Connects to your Database
require_once '../config.php'; 
//Adds one to the counter
mysqli_query($link, "UPDATE counter SET clickcounter = clickcounter + 1");
//Retrieves the current count
$clickcount = mysqli_fetch_row(mysqli_query($link, "SELECT clickcounter FROM counter"));
//Displays the count on your site
?>