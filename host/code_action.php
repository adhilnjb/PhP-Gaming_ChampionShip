<?php
session_start();
$code=$_POST['code'];
$g=$_GET['id'];
include '../connection.php';
$sql = "insert into game_code(game_id,code) values('$g','$code')";
mysqli_query($con, $sql);
echo"<script>alert('code Added sucessfully');window.location='view_code.php';</script>";

?>