<?php 
$host = "localhost";
$username="root";
$password="";
$db_name="user";
$connection = mysqli_connect($host,$username,$password);
$select_db = mysqli_select_db($connection,$db_name);
if(!$connection){
	die("Database Connection Failed");
}
$select_db = mysqli_select_db($connection,$db_name);
if(!$select_db){
	die("Database selection failed !".mysqli_error($connection));
}
?>
