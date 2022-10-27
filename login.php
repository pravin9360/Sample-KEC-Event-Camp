<?php

  $UserId = $_POST[''];
  $Password = $_POST['Password'];
   

    $con = new mysqli('localhost','root','','login');
  if($con->connect_error)
  {
      die("Failed to connect:".$con->connect_error);
  }else {
      $stmt = $con->prepare("insert into info (UserId,Password)
      values(?,?)");
      $stmt->bind_param("ss", $UserId,$Password);
      $stmt->execute();
      echo "Successfully";
      $stmt->close();
      $con->close();
  }

?>