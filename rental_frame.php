<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:loginrental.php');
}
?>
<title>Rental login
</title>
</head>
<frameset  frameborder="0"  rows = "18%,*">
<frame name="a" src = "rental_z.php">
<frameset frameborder="0" cols ="50%,*">
<frame name="b" src = "rental_x.php" >
<frame name="c" src = "rental_report.php" scrolling="yes">
</frameset>
</frameset>
<html>