<?php
session_start();
unset($_SESSION["username"]);

header("Location: user_login.php");
?>