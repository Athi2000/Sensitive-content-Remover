<?php
session_start();
  include "connection.php";

  $uname = $pword = "";
  $error = $unameerror = $pworderror = "";


  if(empty($_POST['user_name']) && empty($_POST['pass_word'])){
    header("Location:login.php?Username and Password Required");
  }else if (empty($_POST['user_name'])){
    header("Location:login.php?Username required");
  }else if(empty($_POST['pass_word'])){
    header("Location:login.php?password Required");
  }else{
    $uname = $_POST['user_name'];
    $pword = $_POST['pass_word'];
    $_POST['errormsg'] = $error;

    $sql="SELECT * from login_cred where uname='$uname' AND pword='$pword'";

    $result = mysqli_query($conn,$sql);


    if(mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if($row['uname'] === $uname && $row['pword'] === $pword){
        echo "Logged In";
        $_SESSION['uname'] = $row['uname'];
        header("Location:courses.php");
        exit();
      }else{
        header("Location:login.php?error=Incorrect username and password");
        exit();
      }
    }else{
      header("Location:login.php");
      exit();
    }
  }

 ?>
