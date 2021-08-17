<?php
session_start();
$username = "";
$err_username = "";
$email = "";
$err_email = "";
$hasError=false;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	
	if(empty($_POST["username"]))
	{
		$hasError = true;
		$err_username = "Username required";
	}
	else if(strlen($_POST["username"])< 5)
	{
		$hasError = true;
		$err_username = "Username must be at least 5 characters";
	}
	else if(strpos($_POST["username"], ' ') !== false)
	{
		$hasError = true;
		$err_username = "Username doesn't allow spaces";
	}
	else
	{
		$_SESSION["loggeduser"] = $username;
		$username = $_POST["username"];
	}
	
	
	if(empty($_POST["email"]))
	{
		$hasError = true;
		$err_email = "Email required";
	}
	else if(strpos($_POST["email"],"@") && strpos($_POST["email"],".") )
	{
		$email = $_POST["email"];
	}
	else
	{
		$hasError = true;
		$err_email = "Email format not correct";
	}
	

	
	if(!$hasError)
	{
	echo $_POST["username"]."<br>";
	echo $_POST["email"]."<br>";
	}
	
}

?>

    <html>
       <body style="background: pink">
         <form action="Reset_Password.php" method="post">
         	
              <table align="center">
                  <tr>
                      <td align="Center" colspan="3">
                      <h1>
                           Reset Password
                      </h1>
                      </td>
                  </tr>
                  <tr>
                   <td rowspan="2"> </td>

                   <td><h4> 

                       Please enter your <br>
                       email and username <br>
                       to reset your password

                   </h4></td>

                    <td>
                    <b>Email</b>  <br>
                    <input type="text" name="email" id="email" value = "<?php echo $email;?>" placeholder="Enter your email" >
                    <span> <br> <?php echo $err_email;?></span><br>
                    <b>Username</b>  <br>
                    <input type="text" name="username" id="username"  value = "<?php echo $username;?>" placeholder="Enter your username">
                    <span> <br><?php echo $err_username;?> </span>
                </td>

            </tr>
            
            <tr>
                <td> <a href="login.php" target="_blank">
                    <input type="button" value="Back To Login">
                </a>
                 </td>
                 <td> <a href="change_password.php" target="_blank">
                    <input type="button" value="Submit">
                </a>
                 </td>
                 
                <?php  
               
                echo    "<form  action='Reset_Password.php' method='post'>";
               
                echo    "</form>";
                    ?>
                 </td>
            </tr>
           </table>
       </form> 

        
    </body>
</html>