

<!DOCTYPE html>
<html>
<head>
<title>Insert Form Data In MYSQL Database Using PHP</title>
<style>
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
    <p>Instruction: For new student insert data below and press INSERT</p>

  <form action = "insert.php" method="post">

  ID:  <input type="text" name="id">
          <br/>

  Name: <input type="text" name="username">
        <br/>

  Email: <input type="text" name="email">
              <br/>
  Phone: <input type="phone" name="phone">
              <br/>

  Status: <input type="text" name="status">
              <br/>

  Starts: <input type="text" name="starts">
              <br/>
  Ends: <input type="text" name="ends">
              <br/><br/>

            <input type = "submit" value="Insert">
        <br/><br/><br/><br/>
  </form>
</center>






  <!-- <center>
    <h1> Rutgers University Database </h1>
    <p>Instruction: For new student insert data below and press INSERT</p>

    <form action="insert.php" method="post">

      Name: <input type = "text" name ="username" placeholder="Enter Name"/><br/>
      Email: <input type = "text" name ="email" placeholder="Enter Email"/><br/>
      Phone: <input type = "text" name ="phone" placeholder="Enter Phone number"/><br/>
      Status: <input type = "text" name ="status" placeholder="Enter Status"/><br/>
      Starts: <input type = "text" name ="starts" placeholder="Enter Start date"/><br/>
      Ends: <input type = "text" name ="ends" placeholder="Enter End date"/><br/>

      <input type="submit"  value="Insert"/>
    </form>
  </center> -->

</body>
</html>



<?php

    require 'configure.php';

    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

    // print "Server found"."<BR><BR>";

    $database = "StudentInfo";

    $db_found = mysqli_select_db($db_handle, $database);

    if ($db_found)
    {
        $SQL = "SELECT * FROM students";
        $result = mysqli_query($db_handle, $SQL);

        while ($db_field = mysqli_fetch_assoc($result))
        {
            // print $db_field['ID']."<BR>";
            // print $db_field['Name']."<BR>";
            // print $db_field['Email']."<BR>";
            // print $db_field['Phone']."<BR>";
            // print $db_field['Status']."<BR>";
            // print $db_field['Starts']."<BR>";
            // print $db_field['Ends']."<BR><BR>";

        }
    }
    if ($db_found)
    {
        // $SQL = "INSERT INTO students (id_students, fname, lname, phone, email, status, startdate, enddate)
        // VALUES(6, 'Logan', 'Walker', 7493590239, 'eyes4u@yahoo.com', 'active', '2015-05-15','2020-05-24')";
        //
        // $result = mysqli_query($db_handle, $SQL);



        // echo '<script type="text/javascript"> alert("Record added to the database") </script>';
        // print "Records added to the database";

    }
    else
    {
        // echo '<script type="text/javascript"> alert("Databse NOT found") </script>';
        // print "Database NOT Found";
    }
     mysqli_close($db_handle);

?>
