<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form_task</title>
  <style>
    body {
      background-color: rgb(234, 206, 206);
      margin: 0px;
      padding: 0px;
    }

    .nav {
      margin-top: 0px;
      width: 100%;
      height: 100px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 248px;
      background-color: rgb(184, 170, 170);
    }

    .para {

      margin-top: 30px;
      text-align: center;
    }

    button {
      background-color: rgb(242, 165, 74);
      width: 200px;
      height: 30px;
      border: 1px solid black;

    }

    .para {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 70vh;
    }

    .login {
      margin-left: 200px;
    }

    button {
      margin-top: 100px;
    }

    p {
      font-size: 18px;
    }
  </style>
</head>

<body>
  <div class="nav">
    <h3>HOGWARTS UNIVERSITY</h3>
    <?php if (isset($_SESSION['email'])) : ?>
    <h3 class="login">Logout</h3>
    <?php else : ?>
      <h3 class="login">LOGIN</h3>
    <?php endif; ?>
  </div>
  <div class="para">
    <p>Dear learners,summer courese regstration are open now.please entrol if not already</p>
    <?php if (isset($_SESSION['email'])) : ?>
      <a href="./form.php"><button>View Course</button></a>
    <?php else : ?>
      <a href="./form.php"><button>Register Now</button></a>
    <?php endif; ?>
  </div>
</body>

</html>





<?php



// $str = "Prakash Ramachandran";


// $hash = password_hash($str, PASSWORD_DEFAULT);


// $b = "Prakash Ramachandran";


// $hash2 = password_hash($b,PASSWORD_DEFAULT);


// $encript = '$2y$10$mIwZfmv42wIxAJ6JNPySK.4vEe8.GZ2RI.wj0YelsWnUugrUfLnQu';



// $verify = password_verify('prakash',$hash2);
// // echo $verify;
// if($verify){
//   echo "PASSWORD MATCHED";
// }
// else{
//   echo "PASSWORD NOT MATCHED";
// }














?>