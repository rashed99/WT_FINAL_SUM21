<?php
	include 'models/db_config.php';

	$catName = "";
	$err_catName="";
	$err_db="";
	$hasError = false;
	if(isset($_POST["add_Cat"])){
		if(empty($_POST["catName"])){
            $hasError = true;
            $err_name = "*Category name Required";
        }
        
        else{
            $catName = $_POST["catName"];
        }
	
	if(!$hasError){
			$rs = insertCategory($catName);
			if($rs === true){       
				header("Location: addcategory.php");
			}
			$err_db = $rs;
		}
	}
	else if (isset($_POST["edit_category"])){
		if(empty($_POST["catName"])){
            $hasError = true;
            $err_name = "*Category name Empty";
        }
        
        else{
             $catName = $_POST["catName"];
        }
		if(!$hasError){
			$rs = updateCategory($_POST["catName"],$_POST["id"]);
			if($rs===true){
				header("Location : allcategories.php");
			}
			$err_db = $rs;
        }
            
	
	}
	
	function insertCategory($catName){
			$query = "insert into category values (NULL, '$catName')";
		return execute($query);
		}
	function getAllCategories(){
		$query = "select * from category";
		$rs = get($query);
		return $rs;
	}
	function getCategory($id){
		$query = "select * from category where id = $id";
		$rs = get($query);
		return $rs[0];
	}
	
	function undateCategory($catName, $id)
	{
		$query= "update category set catName='$catName' where id = $id";
		return execute($query);
	}
	
	
?>