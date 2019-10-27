<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['loggedTime']);
header("Location:index.php");
?>
