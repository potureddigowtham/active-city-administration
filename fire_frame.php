<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:loginfire.php');
}
?>
<title>Facluty login
</title>
</head>
<frameset  frameborder="0"  rows = "18%,*">
<frame name="a" src = "fire_z.php">
<frameset frameborder="0" cols ="50%,*">
<frame name="b" src = "fire_x.php" >
<frame name="c" src = "fire_report.php" scrolling="yes">
</frameset>
</frameset>
<html>