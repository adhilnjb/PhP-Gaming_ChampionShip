<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];

include 'connection.php';
$query = "insert into login(username,password,user_type,login_status) values('$username','$password','player','1')";
mysqli_query($con, $query) or die(mysqli_error($con));
$logid=mysqli_insert_id($con);

  $sql = "insert into player(p_name,phone,email,login_id) values('$name','$phone','$email','$logid')";
mysqli_query($con, $sql);
echo"<script>alert('Registration Sucessfull');window.location='login.php';</script>";

?>