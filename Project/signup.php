<?php
session_start();
		$Name="";
		$err_Name="";
		$Username="";
		$err_Username="";
		$Password="";
		$err_Password="";
		$Confirmpassword="";
		$err_Confirmpassword="";
		$Email="";
		$err_Email="";
		$Phone=" ";
		$err_Phone="";
		$Address="";
		$err_Address="";
		$Dob="";
		$err_Dob="";
		$Gender="";
		$err_Gender="";
		$hear=[];
		$err_hear="";
		$Bio="";
		$err_Bio="";
		
		$hasError=false;
		
		$Mon=array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		
		function hearExist($h)
		{
			global $hear;
			foreach($hear as $hr)
			{
				if($h==$hr) return true;
			}
				return false;
		}
		
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				if(empty($_POST["Name"]))
				{
					$hasError=true;
					$err_Name="Name Required";
				}
				elseif(strlen($_POST["Name"])<=2)
				{
					$hasError=true;
					$err_Name="Name must be greater than 2 characters";
				}
				else
				{
					$Name=$_POST["Name"];
				}
				
				
				if(empty($_POST["Username"]))
				{
					$hasError=true;
					$err_Username="Username Required";
				}
				elseif(strlen($_POST["Username"])<=6)
				{
					$hasError=true;
					$err_Username="Username must be contain at least 6 characters";
				}
				elseif(strpos($_POST["Username"], ' ') !== false)
				{
					$hasError=true;
					$err_Username="Username doesn't allow space";
				}
				else
				{
					$Username=$_POST["Username"];
				}
				
				
				if(empty($_POST["Password"]))
				{
					$hasError=true;
					$err_Password="Password Required";
				}
				else if(strlen($_POST["Password"])>= 8 && strpos($_POST["Password"],'#','?') == false && ctype_upper($_POST["Password"]) == false && ctype_lower($_POST["Password"]) == false && Htmlspecialchars($_POST["Password"]) == false)
				{
					$hasError = true;
					$err_Password = "Password Invalid";
				}
				
				else
				{
					$Password=$_POST["Password"];
				}
				
				
				
				if(empty($_POST["Confirmpassword"]))
				{
					$hasError=true;
					$err_Confirmpassword="Confirm Password Required";
				}
				else if(strlen($_POST["Confirmpassword"])>= 8 && strpos($_POST["Confirmpassword"],'#','?') == false && ctype_upper($_POST["Confirmpassword"]) == false && ctype_lower($_POST["Confirmpassword"]) == false && Htmlspecialchars($_POST["Confirmpassword"]) == false)
				{
					$hasError = true;
					$err_Confirmpassword = " Confirm Password Invalid";
				}
				else
				{
					$Confirmpassword=$_POST["Confirmpassword"];
				}
				
				
				
				
				if(empty($_POST["Email"]))
				{
					$hasError=true;
					$err_Email="Email Required";
				}
				elseif(strpos($_POST["Email"],"@")== false && strpos($_POST["Email"],".")== false)
				{
					$hasError = true;
					$err_Email = " Email Invalid Id";
				}
				else
				{
					$Email=$_POST["Email"];
				}
				
				
				
				
				if(empty($_POST["Phone"]))
				{
					$hasError=true;
					$err_Phone="Phone Required";
				}
				else
				{
					$Phone=$_POST["Phone"];
				}
				
				
				
				if(empty($_POST["Address"]))
				{
					$hasError=true;
					$err_Address="Address Required";
				}
				else
				{
					$Address=$_POST["Address"];
				}
				
				
				
				
				
				if(empty($_POST["Dob"]))
				{
					$hasError=true;
					$err_Dob="Date of Birth Required";
				}
				else
				{
					$Dob=$_POST["Dob"];
				}
				
				
				
				
				
				if(!isset($_POST["Gender"]))
				{
					$hasError=true;
					$err_Gender="Gender Required";
				}
				else
				{
					$Gender=$_POST["Gender"];
				}
				
				
				
				
				
				if(empty($_POST["hear"]))
				{
					$hasError=true;
					$err_hear="This information Required";
				}
				else
				{
					$hear=$_POST["hear"];
				}
				
				
				
				
				if(empty($_POST["Bio"]))
				{
					$hasError=true;
					$err_Bio="Bio Required";
				}
				else
				{
					$Bio=$_POST["Bio"];
				}
				
				
				
			
		if(!$hasError)	
			{	
			echo $_POST["Name"]."<br>";
			echo $_POST["Username"]."<br>";
			echo $_POST["Password"]."<br>";
			echo $_POST["Confirmpassword"]."<br>";
			echo $_POST["Email"]."<br>";
			echo $_POST["Phone"]."<br>";
			echo $_POST["Address"]."<br>";
			echo $_POST["Dob"]."<br>";
			echo $_POST["Gender"]."<br>";
			echo $_POST["hear"]."<br>";
			echo $_POST["Bio"]."<br>";
			$arr = $_POST["Dob"];
			
			foreach($arr as $m)
				echo "$m<br>";
			}
		}
	
?>
	

<html>
	<body style="background: blue">
		<form action="" method="post">
		<fieldset>
			<table>
				
			    <tr>
					<td colspan="2" align="center"><h1><b>Customer Registration</b></h1></td>
				</tr>
				   <td align="right">Name</td>
				   <td>:<input name="Name" value="<?php echo $Name;?>" type="text"> <br><span><?php echo $err_Name;?></span></td>
				</tr>
				<tr>
				   <td align="right">Username</td>
				   <td>:<input name="Username" value="<?php echo $Username;?>" type="text"> <br> <span><?php echo $err_Username;?></span> </td>
				</tr>
				<tr>
				   <td  align="right">Password</td>
				   <td>:<input name="Password" value="<?php echo $Password;?>" type="Password"> <br> <span><?php echo $err_Password;?></span></td>
				</tr>
				<tr>
				   <td align="right">Confirm Password</td>
				   <td>:<input name="Confirmpassword" value="<?php echo $Confirmpassword;?>" type="Password"> <br> <span><?php echo $err_Confirmpassword;?></span></td>
				</tr>
				<tr>
				   <td align="right">Email</td>
				   <td>:<input name="Email" value="<?php echo $Email;?>" type="text"> <br><span><?php echo $err_Email;?></span></td>
				</tr>
				
				
				 
				
				
					  
					 
					 
				
				
				
				
				<tr>
				   <td align="right">Gender</td>
				   <td>:<input type="radio" value="Male" <?php if ($Gender == "Male") echo "checked"; ?> name="Gender"> Male <input type="radio" value="Female" <?php if ($Gender == "Female") echo "checked"; ?> name="Gender">Female
				   <br> <span><?php echo $err_Gender;?></span></td>
				</tr>
				
				
				
				
				
				
				<tr> <td> <a href="login.php" target="_blank">
                    <input type="button" value="Register">
                </a>
                 </td>
				   

				</tr>

				
			</table>
		</fieldset>
		</form>
	</body>
</html>
