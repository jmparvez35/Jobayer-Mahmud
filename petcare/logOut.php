<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location:../../PetCare/Views/auth/login.php");
exit;
?>