<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:loginpolice.php');
}
?>
<title>Police login
</title>
</head>
<frameset  frameborder="0"  rows = "18%,*">
<frame name="a" src = "police.z.php">
<frameset frameborder="0" cols ="50%,*">
<frame name="b" src = "police.x.php" >
<frame name="c" src = "police_report.php" scrolling="yes">
</frameset>
</frameset>
<html>