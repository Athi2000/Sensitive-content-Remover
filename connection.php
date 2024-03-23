<?php
  $servername = "localhost";
  $username =  "root";
  $password = "";
  $db_name = "project_prof";
  $post_num = 3306;

  $conn = mysqli_connect($servername,$username,$password,$db_name,$post_num);

  if(!$conn){
    echo "Connection Failed";
  }else{
    echo "Connection Successful";
  }

 ?>
