<?php
session_start();
$new_pass="";
$err_new_pass="";
$confirm_pass="";
$err_confirm_pass="";

$hasError=false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    if(empty($_POST["new_pass"])){
        $hasError=true;
        $err_new_pass="-Password Required-";
    }
    elseif (strlen($_POST["new_pass"]) <=8)
    {
        $hasError = true;
        $err_new_pass = "-Password must be greater than 8 characters-";
    }
    else if(strpos($_POST["new_pass"],"#"||"?"))
    {
        $err_new_pass = "-Dont use those special characters in your password-";
    }	
    else
    {
        $new_pass = $_POST["new_pass"];
    }

    
		if(empty($_POST["confirm_pass"]))
		{
			$hasError=true;
			$err_confirm_pass="-Required-";
		}

		elseif($pass != $confirm_pass)
		{
			$hasError=true;	
   			$err_confirm_pass ="-Password and Confirm password should not be different-";  
		}
}
?>
<html>
    <body style="background: yellow">
    
    <fieldset>

        <p><h1>Change Password</h1></p><hr>
        <table>
                <tr>
					<td align="center">New Password</td>
					<td>:<input name="new_pass" value="<?php echo $new_pass;?>" type="new_pass"><br>
					<span style="color:red;"><?php echo $err_new_pass;?></span></td>
				</tr>

                <tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirm_pass" value="<?php echo $confirm_pass;?>" type="password"><br>
					<span style="color:red;"><?php echo $err_confirm_pass;?></span></td>
				</tr>
                <tr> <td> <a href="login.php" target="_blank">
                    <input type="button" value="Submit">
                </a>
                 
				</tr>
        </table>
    </fieldset>
    </body>
</html>