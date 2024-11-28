<?php
include '../connection.php';
$id=$_GET['id'];
$query = "UPDATE login SET login_status='1' WHERE login_id='$id'";
mysqli_query($con, $query) or die(mysqli_error($con));

echo"<script>alert(host approved');window.location='view_host.php';</script>";
?>