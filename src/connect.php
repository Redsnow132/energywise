<?
session_start();
$host = "localhost";
$user = "deathcrow";
$pass = "Glitchking12345";
$db = "my_deathcrow";

dbConnect($host,$user,$pass,$db) or die(mysql_error());
?>
