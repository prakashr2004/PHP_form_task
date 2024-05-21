<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="./login.php" method="POST">
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>



<?php 
session_start();
print_r($_SESSION);
// Enable error reporting for debugging
// ini_set('display_errors', 1);
// // ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

 require("./DB.php");

echo "pattab";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email  = $_POST["email"];
    $password  = $_POST["password"];
    $query = "SELECT * FROM user_information WHERE email = '$email'";
    $sql = mysqli_query($conn,$query);
    $datafind =$sql->fetch_assoc();
    $userpassword = $datafind["password"];
   if($datafind==0){
     '<script>alert("YOUR DATA NOT FIND");</script>';
   }
   else{
    $verifry = password_verify($password,$userpassword);
    if($verifry){
        header("Location: ./index.php");
    }
    else{
       '<script>alert("PLEASE ENTER CORRECT PASSWORD");</script>';
    }
   }
  
    
}






?>