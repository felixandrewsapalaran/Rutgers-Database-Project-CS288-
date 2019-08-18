<?php

require 'configure.php';

$conn =  mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

if(isset($_POST['search'])){
  $valueToSearch = $_POST['valueToSearch'];
  $query = "SELECT * FROM `students` WHERE CONCAT(`ID`, `Name`, `Email`, `Phone`, `Status`, `Starts`, `Ends`) LIKE '%".$valueToSearch."%'";
  $search_result = filterTable($query);

}else{
  $query = "SELECT * FROM `students`";
  $search_result = filterTable($query);
}

function filterTable($query){
  require 'configure.php';
  $connect =  mysqli_connect(DB_SERVER, DB_USER, DB_PASS,"StudentInfo");

  $filter_Result = mysqli_query($connect,$query);
  return $filter_Result;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP HTML TABLE DATA SEARCH</title>
    <!-- <style>
          table,tr,th,td{
            border: 1px solid black;
          }
    </style> -->
    <style>

    table,tr,th,td{
      border: 1px solid black;
    }
      body{
        background: red;
      }

      input{
        width: 40%;
        height: 5%;
        border: 1px;
        border-radius: 05px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px ;

      }
      </style>
  </head>
  <body>
    <center>
        <h1> Rutgers University Database </h1>
        <form action = "indexsearch.php" "search.php" method = "post">
      <!-- <input type="text" name="valueToSearch" placeholder = "Enter student info"> -->
        <input type = "text" name ="valueToSearch" placeholder="Enter student Information"/><br/>
      <!-- <input type = "submit" name="search" value="Search"><br><br> -->
        <input type="submit"  name="search" value="SEARCH"/>

      <p>Note: To search student by ID enter their 4 digits ID number</p>
      <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Status</th>
          <th>Starts</th>
          <th>Ends</th>
        </tr>
        <?php while($row = mysqli_fetch_array($search_result)):?>
          <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Phone'];?></td>
            <td><?php echo $row['Status'];?></td>
            <td><?php echo $row['Starts'];?></td>
            <td><?php echo $row['Ends'];?></td>
          </tr>
        <?php endwhile;?>
      </table>
    </form>
  </center>
  </body>
</html>
