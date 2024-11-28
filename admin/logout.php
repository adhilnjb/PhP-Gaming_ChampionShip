<?php
session_start();
unset($_SESSION["login_id"]);
unset($_SESSION["username"]);
header("location:../index.php");
?>