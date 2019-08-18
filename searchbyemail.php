<?PHP
  $email = "";
  if (isset($_POST['Submit1'])) {
  require 'configure.php';
  $email = $_POST['email'];
  $database = "rutgers";
  $db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );
  if ($db_found) {
  $SQL = $db_found->prepare('SELECT * FROM members WHERE email = ?');
  $SQL->bind_param('s', $email);

  $SQL->execute();
  $result = $SQL->get_result();
  if ($result->num_rows > 0) {
  while ( $db_eld = $result->fetch_assoc() ) {
    print $db_eld['ID'] . "<BR>";
    print $db_eld['username'] . "<BR>";
    print $db_eld['password'] . "<BR>";
    print $db_eld['email'] . "<BR>";
    }
  }
  else {
    print "No records found";
  }
  $SQL->close();
  $db_found->close();
  }
  else {
  print "Database NOT Found ";
  }
}
?>
