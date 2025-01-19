<!DOCTYPE html>
<html>
<head>
<title>Welcome to our page</title>
</head>
<body>
<form method="post" action="../../Views/customer/cart.php">
<button type="submit" name="cart" value="cart">cart
<?php
// session_start();
if(isset($_SESSION['cart'])){
   $count = count($_SESSION['cart']);
   echo "$count";
}else{
   echo "0";
}
?>
</button>
</form>
</body>
</html>