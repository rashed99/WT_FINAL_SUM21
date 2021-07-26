<?php
	include 'models/db_config.php';
	
	$name = "";
	$err_name = "";
	$uname = "";
	$err_uname = "";
	$email = "";
	$err_email = "";
	$pass = "";
	$err_pass = "";
	$err_db = "";
	
	$hasError = false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
            $hasError = true;
            $err_name = "*Name Required";
        }
        
        else{
            $name = $_POST["name"];
        }
		if(empty($_POST["uname"])){
            $hasError = true;
            $err_uname = "*Username Required";
        }
        
        else{
            $uname = $_POST["uname"];
        }
		
		if(empty($_POST["email"])){
               $err_email="*Please enter email";
            }

        else{
			$s=strpos($_POST["email"],"@");
            if($s!=false){
            $t=strpos($_POST["email"],".", $s+1);
                if($t!=false){
                    $email=$_POST["email"];
                }
                else{
                        $err_email="*Invalid email";
                }
            }
            else{
                    $err_email="*Invalid email";
            }
        }
		
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "*Password Required";
		}
		else if(strlen($_POST["pass"]) <= 4){
			$hasError = true;
			$err_password = "*Password must be at least 4 characters";
		}
		else{
			$pass = $_POST["pass"];
		}
		if(!$hasError){
			$rs = insertUser($name,$uname, $email, $pass);
			if($rs === true){       
				header("Location: signin.php");
			}
			$err_db = $rs;
		}
		
	}
	elseif(isset($_POST["sign_in"])){
		
		if(empty($_POST["uname"])){
            $hasError = true;
            $err_uname = "*Username Required";
        }
        
        else{
            $uname = $_POST["uname"];
        }
		
		
		
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "*Password Required";
		}
		
		else{
			$pass = $_POST["pass"];
		}
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: addcategory.php");
			}
			$err_db = "Username and password invalid";
		}
		
	}
		function insertUser($name, $uname, $email, $pass){
			$query = "insert into users values (1, '$name','$uname','$email','$pass')";
		return execute($query);
		}
		
		function authenticateUser($uname,$pass){
			$query = "select * from users where username='$uname' and password='$pass'";
			$rs = array(get($query));
			if(count($rs)>0){
				return true;
			}
			return false;
		}
			
?>