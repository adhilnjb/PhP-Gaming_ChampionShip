<?php
session_start();
$code=$_POST['code'];
$c=$_GET['id'];
include '../connection.php';
$sql = "update game_code set code='$code' where game_id='$c'";
mysqli_query($con, $sql);
echo"<script>alert('Game update sucessfully');window.location='index.php';</script>";

?>