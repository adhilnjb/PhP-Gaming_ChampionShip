<?php
session_start();
$name=$_POST['name'];
$type=$_POST['type'];
$date=$_POST['date'];
$player=$_POST['player'];
$g=$_GET['id'];
include '../connection.php';
$l=$_SESSION['login_id'];
$sql = "update game set game_name='$name',game_type='$type',players='$player',date='$date' where login_id='$l' and game_id='$g'";
mysqli_query($con, $sql);
echo"<script>alert('Game update sucessfully');window.location='add_game.php';</script>";

?>