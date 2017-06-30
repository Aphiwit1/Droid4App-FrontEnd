<?php
  require "dbconnect.php";
  session_start();

  if (!empty($_POST['username'])) {
      $username = mysqli_escape_string($DBConect,$_POST['username']);
  }
  if (!empty($_POST['password'])) {
      $password = mysqli_escape_string($DBConect,$_POST['password']);
  }
  if (!empty($username)&&!empty($password)) {
    $sql = "SELECT * FROM data_user WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($DBConect,$sql,MYSQLI_USE_RESULT) or die('DIE');
    $row = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $row['username'];
    echo $_SESSION['user'];
    header('Location:index.php');

  }else {
    header('Location:adminy.php');
  }




 ?>
