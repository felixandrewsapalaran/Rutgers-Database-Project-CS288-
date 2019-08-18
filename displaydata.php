<?php

    require 'configure.php';

    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

    print "Server found"."<BR><BR>";

    $database = "StudentInfo";

    $db_found = mysqli_select_db($db_handle, $database);

    if ($db_found)
    {
        $SQL = "SELECT * FROM students";
        $result = mysqli_query($db_handle, $SQL);

        while ($db_field = mysqli_fetch_assoc($result))
        {
            print $db_field['ID']."<BR>";
            print $db_field['Name']."<BR>";
            print $db_field['Email']."<BR>";
            print $db_field['Phone']."<BR>";
            print $db_field['Status']."<BR>";
            print $db_field['Starts']."<BR>";
            print $db_field['Ends']."<BR><BR>";

        }
    }
    if ($db_found)
    {
        // $SQL = "INSERT INTO students (id_students, fname, lname, phone, email, status, startdate, enddate)
        // VALUES(6, 'Logan', 'Walker', 7493590239, 'eyes4u@yahoo.com', 'active', '2015-05-15','2020-05-24')";
        //
        // $result = mysqli_query($db_handle, $SQL);
        //
        //

        print "Records added to the database";
    }
    else
    {
        print "Database NOT Found";
    }
     mysqli_close($db_handle);

?>
