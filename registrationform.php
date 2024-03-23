<?php

  include "connection.php";

  if(empty($_POST['namelbl']) || empty($_POST['usernamelbl']) || empty($_POST['emaillbl'])){
    header("Location: signup.php?Empty Fields");
  }else{

    $first_name = $_POST['namelbl'];
    $date_of_birth = $_POST['doblbl'];
    $user_name = $_POST['usernamelbl'];
    $user_email = $_POST['emaillbl'];
    $password = $_POST['passwordlbl'];
    $confpassword = $_POST['confpasswordlbl'];

    $uname_sql = "SELECT uname from login_cred where uname='$user_name'";
    $result = mysqli_query($conn,$uname_sql);
    if(mysqli_num_rows($result) != 1){
      if($password == $confpassword){

        $sql = "INSERT into registration (first_name,dob,email,user_name) values ('$first_name','$date_of_birth','$user_email','$user_name')";
        $loginsql = "INSERT INTO login_cred (uname,pword) values ('$user_name','$password')";

        $run = mysqli_query($conn,$sql) or die (mysqli_error());
        $run_login = mysqli_query($conn,$loginsql) or die (mysqli_error());

          if ($run && $run_login) {
            header("Location: signup.php?New Record Created");
          }

    }else{
        header("Location: signup.php?Password Not Matching");
    }
    }else{
      header("Location: signup.php?Username already Exits");
    }

  }

mysqli_close($conn);
 ?>
