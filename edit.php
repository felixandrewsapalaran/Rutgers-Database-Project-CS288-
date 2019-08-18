<html>
<head>
  <title>Update</title>
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
      <p>Instruction: Select ID then edit the information associated with that ID</p>

      <form action="" method="POST">
        <input type = "text" name ="ID" placeholder="Enter ID"/><br/>
        <input type = "text" name ="Name" placeholder="Enter Name"/><br/>
        <input type = "text" name ="Email" placeholder="Enter Email"/><br/>
        <input type = "text" name ="Phone" placeholder="Enter Phone number"/><br/>
        <input type = "text" name ="Status" placeholder="Enter Status"/><br/>
        <input type = "text" name ="Starts" placeholder="Enter Start date"/><br/>
        <input type = "text" name ="Ends" placeholder="Enter End date"/><br/>

        <input type="submit" name ="update" value="UPDATE DATA"/>
      </form>
    </center>
  </body>
  </html>


  <?php
  	$conn = mysqli_connect('localhost','root','root');
  	$db   = mysqli_select_db($conn, 'StudentInfo');

  	if(isset($_POST['update'])){
  		$ID = $_POST['ID'];


  		$query = "UPDATE students SET Name='$_POST[Name]',Email='$_POST[Email]',Phone='$_POST[Phone]',Status='$_POST[Status]',Starts='$_POST[Starts]',Ends='$_POST[Ends]' where ID='$_POST[ID]'";
  		$query_run = mysqli_query($conn,$query);
  	}

  		if($query_run){
  			echo '<script type="text/javascript"> alert("Data Updated") </script>';
  		}else{
  			echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
  		}

  ?>
