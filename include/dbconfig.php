<?php
session_start(); 
date_default_timezone_set('Asia/Manila');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "board";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
 mysqli_set_charset($mysqli, "utf8");   
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
?>