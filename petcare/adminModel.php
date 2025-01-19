<?php
require_once("db.php");
function updateAdmin($id, $name, $email, $password, $phone)
{
   $con = connection();
   $sql=  "UPDATE admin SET name='$name',
   email='$email',
   password='$password',
   phone = '$phone'
   WHERE id=$id";
   $status = mysqli_query($con, $sql);
   return $status? true : false;
}
function getAdminById(int $id)
{
   $con = connection();
   $sql = "SELECT * FROM admin WHERE id = '$id'";
   $query = mysqli_query($con, $sql);
   if($query)
   {
       return mysqli_fetch_array($query);
   }
   else
   {
       return false;
   }
}
?>