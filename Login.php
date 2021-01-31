<?php

$WorkPath = "account/";

//function Login()
//{
  //session_start();
  $contenutoFile = file_get_contents($WorkPath . "login.txt"); //mette il contenuto di un file in un array riga per riga.

  $riga = explode(";", $contenutoFile);
  $userfile = trim($riga[0]);
  $pwdfile = trim($riga[1]);

  if(isset($_POST["submit"])){
    // echo "Sto ricevendo tutto!";

      $user = $_POST["uname"];
      $pwd = $_POST["pwd"];

      if($user == $userfile && $pwd == $pwdfile){
        header("Location: home.html");
      } else {
        header("Location: Login.php");
      }
    }

//}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="refresh">
    <meta charset="utf-8">
    <link rel="icon" href="assets/PTFav.png" type="image/x-icon">

    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>

    <title>Login</title>

    <style media="screen">
      body {font-family: Arial, Helvetica, sans-serif;}
      form {border: 3px solid #f1f1f1;}

      header {
        background: #0d47a1;
        color: #eedc00;
        padding: 3px;
      }

      input[type=text], input[type=password] {
      width: 100%;
      /*padding: 12px 20px;*/
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }

      button {
      /*background-color: #0d47a1;
      color: #eedc00;*/
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      }

      button:hover {
      opacity: 0.8;
      }

      .cancelbtn {
      width: auto;
      padding: 10px 18px;
      /*background-color: #6a6a5c;*/
      }

      .imgcontainer {
      text-align: center;
      margin: 14px 0 12px 0;
      }

      img.avatar {
      width: 20%;
      border-radius: 30%;
      }

      .container {
      padding: 16px;
      }

      span.psw {
      float: right;
      padding-top: 16px;
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
       display: block;
       float: none;
      }
      /*.cancelbtn {
       width: 100%;
      }*/
      }
    </style>

  </head>
  <body>

    <header>
      <h1 class="text-center">Login DevOps</h1>
    </header>

<form action="Login.php" method="post">
  <div class="imgcontainer">
    <img src="assets/devops.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" name="pwd" required>

    <button type="submit" class="btn btn-primary" name="submit">Login</button>
    <button type="reset" name="cancelbtn" class="btn btn-secondary cancelbtn">Cancel</button>

  </div>

</form>


  </body>
</html>
