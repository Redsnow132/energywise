<?
 if(isset($_POST['Login'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];
  
  $sql = "SELECT * FROM energywise WHERE username='$user'";
  $query = mysql_query($sql);
  $row = mysql_fetch_object($query);
 
  $id = htmlspecialchars($row->id);
  $firstName = htmlspecialchars($row->firstname);
  $lastName = htmlspecialchars($row->lastname);
  $username = htmlspecialchars($row->username);
  $password = htmlspecialchars($row->password);
  $mail = htmlspecialchars($row->email);
  
  if(empty($id)){
   echo 'Account does not exist';
  } elseif($pass != $password){
   echo 'Passwords do not match';
  } else{
   session_start();
   $_SESSION['user'] = $id;
   header("Location: index.php");
  }
 }
?>
