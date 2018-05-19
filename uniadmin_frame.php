<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:loginadmin.php');
}
?>
<title>Facluty login
</title>
</head>
<frameset  frameborder="0"  rows = "18%,*">
<frame name="a" src = "uniadmin.z.php">
<frameset frameborder="0" cols ="50%,*">
<frame name="b" src = "uniadmin.x.php" >
<frame name="c" src = "uni_admin.php" scrolling="yes">
</frameset>
</frameset>
<html>