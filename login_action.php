<?php
include 'connection.php';
session_start();


$name=$_POST["username"];
$pass=$_POST["password"];
$str="select * from login where username='$name' and password='$pass'";
$result=  mysqli_query($con, $str);
$data=  mysqli_fetch_array($result);
$_SESSION["login_id"]=$data['login_id'];
$_SESSION["username"]=$data['username'];
 if($data['username']==$name && $data['password']==$pass)

{
   if($data['user_type']=="admin")
    {
    	$_SESSION["login_id"]=$data['login_id'];
        header("location: admin/index.php");
    }
    else if($data['user_type']=="player")
    {
    	$_SESSION["login_id"]=$data['login_id'];
        header("location:player/index.php");
    }
    else if($data['user_type']=="host" && $data['login_status']=="1")
    {
    	$_SESSION["login_id"]=$data['login_id'];
        header("location:host/index.php");
    }

 else {
        echo "<script>alert('not approved');window.location='login.php'</script>";    
    }
}
else
{
    echo "<script>alert('invalid username or password');window.location='login.php'</script>";
}
