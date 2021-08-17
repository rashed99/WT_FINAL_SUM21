<?php
session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
    $email="";
    $err_email="";
 
	
	
	$hasError=false;
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
    
		

        if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="Information Required*";
		}
		elseif (strlen($_POST["uname"]) <=6)
		{
			$hasError = true;
			$err_uname = "User Name must be greater than 4 characters*";
		}
		else if(strpos($_POST["uname"]," "))
		{
			$err_uname = "no space is allowed*";
		}	
		else
		{
			$uname = $_POST["uname"];
		}

        if(empty($_POST["pass"])){
			$hasError=true;
			$err_pass="Password Required*";
		}
		elseif (strlen($_POST["pass"]) <=8)
		{
			$hasError = true;
			$err_pass = "Password must be greater than 5 characters*";
		}
		
		else
		{
			$pass = $_POST["pass"];
		}


		


        if(empty($_POST["email"]))
		{
			$hasError=true;
			$err_email="Email is Required*";
		}
		else if(!strpos($_POST["email"],"@"))
		{
			$err_email = "Invalid Email*";
		}
		else
		{
			$email = $_POST["email"];
		}


		if(!$hasError){
		
			echo $_POST["username"]."<br>";
			echo $_POST["pass"]."<br>";
            echo $_POST["email"]."<br>";
           

			}
		}
?>


<html>
        <body style="background: green">
		<form action="" method="post">
        
         
			<table>
				<tr>
                      <td align="Center" colspan="3">
                      <h1>
                           Customer Login
                      </h1>
                      </td>
                  </tr>

				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" value="<?php echo $uname;?>" type="text"placeholder="Your User Name"><br>
					<span style="color:cyan;"><?php echo $err_uname;?></span></td>
				</tr>

				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass" value="<?php echo $pass;?>" type="password"placeholder="Password"><br>
					<span style="color:cyan;"><?php echo $err_pass;?></span></td>
				</tr>

			

				<tr>
					<td><input type="submit" value="Login"></td>
				</tr>
			</table>
			
			
			<label><a href="reset_password.php">Forgot Password?</a> </label>
			<br><br><label>Dont Have An Account? <a href="signup.php">Sign Up</a> </label>

            </fieldset>
		</form>
	</body>
</html>