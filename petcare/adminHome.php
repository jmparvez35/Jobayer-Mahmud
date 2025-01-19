<?php
session_start();
echo ($_SESSION['id']);
echo ($_SESSION['name']);
echo ($_SESSION['email']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
</head>
<body>
<a href="URL">search prpduct from product list</a><br>
<a href="../auth/doctorSignup.php">Add Doctor</a><br>
<a href="URL">can see product list </a><br>
<a href="URL">can see order</a><br>
<a href="appointment.php">can see doctor's appointment</a><br>
<a href="URL">can see salon's appointment</a><br>
<a href="updateAdmin.php">update profile</a><br>
<a href="../../Controllers/logout.php">logout</a>
</body>
</html>