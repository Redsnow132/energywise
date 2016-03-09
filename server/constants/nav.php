<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/navigation.css">
<script src="js/nav.js"></script>
<?
include("server/handles/Logout.php");
?>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'>Home</a></li>
   <li><a href='calender.php'>Calender</a></li>
   <li><a href='locations.php'>Locations</a></li>
   <li><a href='#'>Placeholder</a></li>
   
   <form method="post">
   <li><input type="submit" name="logout" value="Logout"></li>
   </form>
</ul>
