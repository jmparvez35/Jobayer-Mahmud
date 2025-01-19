<?php
// <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
function component($productname, $productprice, $productimg,$productid) {
   $element = "
<form method=\"post\">
<img src=\"$productimg\" alt=\"pic1\" width=\"200\" height=\"200\"><br>
<h2>$productname</h2>
<h3>$$productprice</h3><br>
<button type=\"submit\" name=\"add\" value=\"\">Add to cart</button><br>
<hr><br>
<input type=\"hidden\" name=\"product_id\" value=\"$productid\">
</form>
   ";
   echo $element;
}
function cartITEMS($productimg,$productname,$productprice,$productid){
   $element = "
<form action=\"../../Views/customer/cart.php?action=remove&id=$productid\" method=\"post\">
<img src=\"$productimg\" alt=\"pic1\"> <br>
<h3>$productname</h3> <br>
<h5>$$productprice</h5> <br>
<button type=\"submit\">save for later</button> <br>
<button type=\"submit\" name=\"remove\">remove</button> <br><hr>
</form>
   ";
   echo $element;
}

?>