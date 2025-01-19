<?php
require_once("../../Controllers/Admin/adminUpdateController.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../auth/auth.css">
<title>Update Profile</title>
</head>
<body>
<div class="container">
<div class="form-container">
<form action="../../Controllers/Admin/adminUpdateController.php" method="POST">
<div class="form-control mb">
                   Id:
<input type="text" name="id" >
</div>
<div class="form-control mb">
                   Name:
<input type="text" name="name" >
</div>
<div class="form-control mb">
                   Email:
<input type="email" name="email" >
</div>
<div class="form-control mb">
                   Password:
<input type="password" name="password" >
</div>
<div class="form-control mb">
                   Phone:
<input type="password" name="phone" >
</div>
<div class="form-control mb">
<input type="submit" name="submit">
<input type="reset" name="reset">
</div>
</form>
</div>
</div>

</body>
</html>