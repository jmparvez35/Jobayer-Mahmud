<?php
require_once("../../Models/adminModel.php");
session_start();
//utility functions
function validateAdminData($adminData)
{
   foreach ($adminData as $key => $value) {
       if ($value === null || $value === "") {
           "$key cannot be empty";
           return false;
       }
   }
   return true;
}
if (isset($_POST["submit"])) {
   $id = $_POST["id"];
   $name = $_POST["name"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $phone = $_POST["phone"];

   if (updateAdmin($id, $name, $email, $password, $phone)) {
       echo "Updated Successfully";
   } else {
       echo "Update Failed";
   }
}


?>