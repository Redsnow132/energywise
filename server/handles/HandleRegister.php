<?
include("server/arrays/teacherArray.php");

if(isset($_POST['Register'])){
 $fname = $_POST['first'];
 $lname = $_POST['last'];
 $email = $_POST['email'];
 $user = $_POST['username'];
 $pass = $_POST['password'];
 $cpass = $_POST['cpass'];
 $teacherCode = $_POST['teacherCode'];
 
 if(empty($teacherCode)){
  $isTeacher = "false";
 } elseif(!empty($teacherCode)){
  if(!in_array($teacherCode,$teacherCodeArray)){
   echo 'You have entered an incorrect teacher code';
   exit;
  } elseif(in_array($teacherCode,$teacherCodeArray)){
   $isTeacher = "true";
   // Open for profile referencing
  }
 }
 
 if($cpass != $pass){
  echo 'Passwords do not match';
  exit;
 } elseif(empty($fname)){
  echo 'You must enter a first name';
  exit;
 } elseif(empty($lname)){
  echo 'You must enter a last name';
  exit;
 } elseif(empty($email)){
  echo 'You must enter an email';
  exit;
 } elseif(empty($user)){
  echo 'You must enter a username';
  exit;
 } elseif(empty($pass)){
  echo 'You must enter a password';
  exit;
 } elseif(empty($cpass)){
  echo 'You must confirm your password';
  exit;
 }
 

 
 $sql = "SELECT * FROM energywise WHERE username='$user'";
 $query = mysql_query($sql);
 $row = mysql_fetch_object($query);
 
 $id = htmlspecialchars($row->id);
 $firstName = htmlspecialchars($row->firstname);
 $lastName = htmlspecialchars($row->lastname);
 $username = htmlspecialchars($row->username);
 $password = htmlspecialchars($row->password);
 $mail = htmlspecialchars($row->email);
 
 if(empty($id) && empty($username) && empty($mail)){
  $sql = "INSERT INTO energywise SET firstname='$fname', lastname='$lname', username='$user', password='$pass', email='$email', isTeacher='$isTeacher',teachercode='$teacherCode'";
  $query = mysql_query($sql);
  header("Location: index.php?registration='success'");
 }
}
?>
