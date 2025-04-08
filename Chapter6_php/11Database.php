<?php
$servername="localhost";
$username="root";
$password="";
$database="bsc_csit_5th_sem";

$conn= new mysqli($servername, $username, $password,$database);

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
echo "Database Connected Successfully";
?>