<?
include("server/handles/Logout.php");

if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
  $sql = "SELECT * FROM energywise WHERE username='$user'";
  $query = mysql_query($sql) or die(mysql_error());
  $row = mysql_fetch_object($query) or die(mysql_error());
 
  $id = htmlspecialchars($row->id);
  $firstName = htmlspecialchars($row->firstname);
  $lastName = htmlspecialchars($row->lastname);
  $username = htmlspecialchars($row->username);
  $password = htmlspecialchars($row->password);
  $mail = htmlspecialchars($row->email);

}

?>
