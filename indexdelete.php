<html>
<head>
  <title>Delete Records From Database</title>
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
    <table  border = 1 cellpadding = 1 cellspacing=1>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Starts</th>
        <th>Ends</th>
      </tr>
      <?php
        //Connect with mysql
        $con = mysqli_connect('localhost','root','root');
        //select database
        mysqli_select_db($con,'StudentInfo');
        //
        //select query
        $sql = "SELECT * FROM students";
        //
        //Execute the query
        $records = mysqli_query($con,$sql);

        while($row = mysqli_fetch_array($records)){
          echo "<tr>";
          echo "<td>".$row['ID']."</td>";
          echo "<td>".$row['Name']."</td>";
          echo "<td>".$row['Email']."</td>";
          echo "<td>".$row['Phone']."</td>";
          echo "<td>".$row['Status']."</td>";
          echo "<td>".$row['Starts']."</td>";
          echo "<td>".$row['Ends']."</td>";
          echo "<td><a href=delete.php?id=".$row['ID'].">Delete</a></td>";

        }
      ?>
    </table>
  </center>
</body>
</html>
