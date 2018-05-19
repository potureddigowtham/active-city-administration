<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:loginhospital.php');
}
?>
<title>Hospital login
</title>
</head>
<frameset  frameborder="0"  rows = "18%,*">
<frame name="a" src = "hospital_z.php">
<frameset frameborder="0" cols ="50%,*">
<frame name="b" src = "hospital_x.php" >
<frame name="c" src = "hospital_report.php" scrolling="yes">
</frameset>
</frameset>
<html>