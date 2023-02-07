<?php
include('db.php');
session_start();
unset($_SESSION['identity']);
header('Location: ../home.php');
exit;
?>