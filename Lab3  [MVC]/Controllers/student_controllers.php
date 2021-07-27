<?php 
require_once 'Models/db_config.php';
$name="";
$err_name="";
$id="";
$err_id="";
$dob="";
$err_dob="";
$credit="";
$err_credit="";
$cgpa="";
$err_cgpa="";
$deptid="";
$err_deptid="";
 $hasError=false;
$err_db="";
if (isset($_POST["add_student"]))
{
	if(empty($_POST["name"])) {
	    $hasError=true;
	    $err_name="name required";
	}
	else
	{
		$name=$_POST["name"];
	}
	
	if(empty($_POST["dob"])) {
	    $hasError=true;
	    $err_dob="Date of birth required";
	}
	else
	{
		$dob=$_POST["dob"];
	}
	if(empty($_POST["credit"])) {
	    $hasError=true;
	    $err_credit="credit required";
	}
	else
	{
		$credit=$_POST["credit"];
	}
	if(empty($_POST["cgpa"])) {
	    $hasError=true;
	    $err_cgpa="cgpa required";
	}
	else
	{
		$cgpa=$_POST["cgpa"];
	}
	if(empty($_POST["deptid"])) {
	    $hasError=true;
	    $err_deptid="department required";
	}
	else
	{
		$deptid=$_POST["deptid"];
	}

	$rs=insertStudent($_POST["name"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["dept_id"]);
	if ($rs === true) {
		header("Location:Allstudents.php");
	}
	$err_db=$rs;
}
elseif (isset($_POST["edit_student"])) {
	if(empty($_POST["name"])) {
	    $hasError=true;
	    $err_name="name required";
	}
	else
	{
		$name=$_POST["name"];
	}
	
	if(empty($_POST["dob"])) {
	    $hasError=true;
	    $err_dob="Date of birth required";
	}
	else
	{
		$dob=$_POST["dob"];
	}
	if(empty($_POST["credit"])) {
	    $hasError=true;
	    $err_credit="credit required";
	}
	else
	{
		$credit=$_POST["credit"];
	}
	if(empty($_POST["cgpa"])) {
	    $hasError=true;
	    $err_cgpa="cgpa required";
	}
	else
	{
		$cgpa=$_POST["cgpa"];
	}
	if(empty($_POST["dept_id"])) {
	    $hasError=true;
	    $err_deptid="department required";
	}
	else
	{
		$deptid=$_POST["dept_id"];
	}
	if(!$hasError)
		{
			$rs = updateStudents($name,$dob,$credit,$cgpa,$deptid,$_POST["id"]);
			if($rs === true)
			{
				header("Location: Allstudents.php");
			}
			$err_db = $rs;
		}

	
}
function insertStudent($name,$dob,$credit,$cgpa,$deptid)
{
$query="insert into students values(NULL,'$name','$dob',$credit,$cgpa,$deptid)";
return execute($query);
}
function getallStudents()
{
$query = "select s.* ,d.name as 'd_name' from students s LEFT JOIN departments d on s.dept_id=d.id";
$rs=get($query);
return $rs;
}
function getStudentsid($id)
{
$query="select * from students where id=$id";
$rs=get($query);
return $rs[0];
}
function updateStudents($name,$dob,$credit,$cgpa,$deptid,$id)
{
$query="update students set name='$name',dob='$dob',credit=$credit,cgpa=$cgpa,dept_id=$deptid where id = $id";
return execute($query);
}
 ?>