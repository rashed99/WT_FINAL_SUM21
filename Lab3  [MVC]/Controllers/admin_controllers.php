<?php 
require_once 'models/db_config.php';
$name="";
$err_name="";
$username="";
$err_username="";
$password="";
$err_password="";
$err_db="";
$hasError=false;
if (isset($_POST["btn_login"])) {
	if (empty($_POST["name"])) {
	    $hasError=true;
	    $err_name="name required";
	}
	else
	{
		$name=$_POST["name"];
	}
	if (empty($_POST["uname"])) {
	    $hasError=true;
	    $err_username=" user name required";
	}
	else
	{
		$username=$_POST["uname"];
	}
	if (empty($_POST["password"])) {
	    $hasError=true;
	    $err_password=" password required";
	}
	else
	{
		$password=$_POST["password"];
	}
	if (!$hasError) {
		if (authenticateUser($name,$username,$password)) {
			header("Location:Dashboard.php");
		}
		$err_db="Name,Username and password invalid";
	}
}
function authenticateUser($name,$username,$password)
{
	$query="select * from admin where name='$name' and username= '$username' and password= '$password'";
	$rs=get($query);
	if (count($rs)>0) {
		return true;
	}
	return false;
}
 ?>