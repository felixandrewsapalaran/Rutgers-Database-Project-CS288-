<?php

  require 'configure.php';
//create connect from my sql database
  //$con =  mysqli_connect('127.0.0.1', 'root', '');
  $con =  mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

  if(!$con){
    echo 'Not Connected To server';
  }

  //selecting database
  if(!mysqli_select_db($con,'StudentInfo')){
    echo 'Database Not Selected';
  }

  $ID = $_POST['id'];
  $Name = $_POST['username'];
  $Email = $_POST['email'];
  $Phone = $_POST['phone'];
  $Status = $_POST['status'];
  $Starts = $_POST['starts'];
  $Ends = $_POST['ends'];





  $sql = "INSERT INTO Students (ID,Name,Email,Phone,Status,Starts,Ends) VALUES ('$ID','$Name','$Email','$Phone','$Status','$Starts','$Ends')";

  if(!mysqli_query($con,$sql)){
    // echo 'Not Inserted';
    echo '<script type="text/javascript"> alert("Databse NOT found") </script>';
  }else {
    // echo 'Inserted';
    echo '<script type="text/javascript"> alert("Record added to the database") </script>';

  }
  header("refresh:2; url=index.php");
?>
