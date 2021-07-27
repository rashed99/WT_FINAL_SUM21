<?php 
require_once 'Models\db_config.php';

function getAlldepartment()
{
$query = "select * from departments";
$rs=get($query);
return $rs;
}
 ?>