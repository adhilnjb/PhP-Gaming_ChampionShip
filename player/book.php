<?php
session_start();
$g=$_GET['id'];


include '../connection.php';
$l=$_SESSION['login_id'];
$s="select * from game where game_id=$g";
$r=mysqli_query($con,$s);
$row = mysqli_fetch_assoc($r);
$h=$row['login_id'];
$i=$row['players'];
// $i=10;

$y="select * from booking where game_id=$g";
$x=mysqli_query($con,$y);
$k=0;
while($z = mysqli_fetch_assoc($x)){
    $k=$k+1;
}
// $k=count($z = mysqli_fetch_assoc($x));
if($k<$i)
{
$sql = "insert into booking(player_id,game_id,host_id,participants,game_status) values('$l','$g','$h','1','active')";
mysqli_query($con,$sql);
$k=$k+1;
if($k==$i)
{
    $p="UPDATE booking set game_status='ready'where game_id=$g";
    mysqli_query($con,$p);
    }
echo"<script>alert('applied ');window.location='index.php';</script>";
}
else
{
    echo"<script>alert('game registration closed');window.location='index.php';</script>";

}
?>