<?php

//Connect with mysql
$con = mysqli_connect('localhost','root','root');
//select database
mysqli_select_db($con,'StudentInfo');
//
//select query
$sql = "DELETE  FROM students WHERE ID='$_GET[id]'";


//Execute the query
if(mysqli_query($con,$sql)){
  header("refresh:1; url=indexdelete.php");
  }else{
    echo "Not Deleted";
 }
?>
