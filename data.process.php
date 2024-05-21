<?php
session_start();
require("./DB.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
    $course = $_POST["course"];
    $_SESSION["email"] = $email;
}




$query = "INSERT INTO user_information VALUES('$name','$email','$password','$course')";

if(!mysqli_query($conn,$query)){
    echo "DATA NOT INSERT";
}
else{
    header("Location: ./login.php");
}


?>