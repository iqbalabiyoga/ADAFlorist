<?php

session_start(); 
include 'connect.php';
$id = $_SESSION['id'];

$del = $_GET['del'];

mysqli_query($connect,"DELETE FROM tanaman WHERE ID_Tanaman='$del'") or die ('Error: ' . mysqli_error($con));

header("location:dateup.php");

?>