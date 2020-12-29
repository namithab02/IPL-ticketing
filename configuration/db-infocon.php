<?php


$dbServername = "127.0.0.1:3307";
$dbUsername = "root";
$dbPassword = "";
$dbname = "ipl-2";
    
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname) or die("Connect failed: %s\n". $conn -> error);


?>