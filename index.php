<?
include("src/fg.php");
include("src/connect.php");
include("server/handles/HandleLogin.php");
include("server/handles/HandleRegister.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Energywise Home</title>
<link rel="stylesheet" href="css/constant.css">
<link rel="stylesheet" type="text/css" href="http://flambon.xtgem.com/fmb/natur.css" media="all,handheld"/>
<script src="js/fg.js"></script>
</head>
<style>
 .center-main{
  background-color:#0d0d0d;
  border-color:white;
  border-style:solid;
  box-shadow: 10px 10px 5px #888888;
  width:300px;
 }
 
 body{
 background-color:#000000;
 }
 
 img{
 text-align:center;
 }
 
 p{
 color:#006600;
 text-align:center;
 font-size: 20px;
 }
 
 b{
 color:#006600;
 text-align:center;
 font-size:30px;
 }

 
</style>
<body>
<header>

</header>
<nav>
<?
 if(isset($_SESSION['user'])){
  include("server/constants/nav.php");
 } else{?>
  <div class="form">
  <input type="button" id="displayLoginForm" onclick="showLogin()" value="Login">
  <input type="button" id="displayRegisterForm" onclick="showRegister()" value="Register">
   <div id="loginSection" style="display:none">
  <?  include("server/display/LoginForm.php") ?>
   </div>
   <? } ?>
   <div id="registerSection" style="display:none">
   <?  include("server/display/RegisterForm.php") ?>
   </div>
  </div>
</nav>
<main>
  <p>Welcome to Energy Wise at the Middle Collge at GTCC High Point. If you click the image below it will take you to 
  MCHP's energy wise opportunity, just log in and you will be able to log your hours twice as fast as you usally would be able to.</p>
  <br>
  <a href="https://www.noblehour.com/opportunities/54500b36-9b80-432f-b352-05220a7efa73">
  <img src="EW.jpg" alt="Service learning" style="width:304px;height:228px;">
  </a>
  <br>
  <br>
  <b>Important dates and annoucments</b>
 </div>
</center>

</div>
</main>
<footer>
</footer>
</body>
</html>
