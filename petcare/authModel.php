<?php

require_once("../../Models/appointmentModel.php");

$appoinments = GetAllAppointment();


?> 
Doctors appointment controller
 
Agula porjonto thakbe controller a
 
<?php

require_once("db.php");

function register_doctor($name,$email,$password,$phone)

{

    $role = "doctor";

    $con = connection();

    $sql1 = "INSERT INTO doctor(name,email,password,phone)

            VALUES('$name','$email','$password','$phone')";


    $status1 = mysqli_query($con,$sql1);

    if($status1){

        return true;

    }

    else{

        return false;

    }

}

function register_admin($name,$email,$password,$phone)

{

    $role = "admin";

    $con = connection();

    $sql1 = "INSERT INTO admin(name,email,password,phone,role)

             VALUES('$name','$email','$password','$phone','$role')";

    $status1 = mysqli_query($con,$sql1);

    if($status1 ){

        return true;

    }

    else{

        return false;

    }

}

function register_customer($name,$email,$password,$phone)

{

    $role = "customer";

    $con = connection();

    $sql1 = "INSERT INTO customer(name,email,password,phone,role)

             VALUES('$name','$email','$password','$phone','$role')";

    $status1 = mysqli_query($con,$sql1);

    if($status1){

        return true;

    }

    else{

        return false;

    }

}   

function login($email,$password)

{

    $con = connection();

    $sql1 = "SELECT * 

    FROM admin

    WHERE email = '$email' AND password = '$password'";

    $sql2 ="SELECT * 

    FROM doctor

    WHERE email = '$email' AND password = '$password'";

    $sql3 ="SELECT * 

    FROM customer

    WHERE email = '$email' AND password = '$password'";

    $rowAdmin = mysqli_query($con,$sql1);

    $rowCustomer = mysqli_query($con,$sql2);

    $rowDoctors = mysqli_query($con,$sql3);

    if(mysqli_num_rows($rowAdmin)>0)

    {

        return mysqli_fetch_assoc($rowAdmin);

    }

    else if(mysqli_num_rows($rowDoctors)> 0)

    {

        return mysqli_fetch_assoc($rowDoctors);

    }

    else if(mysqli_num_rows($rowCustomer)> 0)

    {

        return mysqli_fetch_assoc($rowCustomer);

    }

    else{

        return false;

    }

}

?> 