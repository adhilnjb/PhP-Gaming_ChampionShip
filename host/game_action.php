<?php
session_start();
$name=$_POST['name'];
$type=$_POST['type'];
$date=$_POST['date'];
$image=$_POST['image'];
$player=$_POST['player'];


include '../connection.php';
$l=$_SESSION['login_id'];
$sql = "insert into game(game_name,game_type,players,date,login_id,image) values('$name','$type','$player','$date','$l','$image')";
mysqli_query($con, $sql);
echo"<script>alert('championship created');window.location='add_game.php';</script>";

?>