<?php
	//session_start()
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
    $hasError=false;

	
	$hasError=false;

    $users = array("mutasim18"=>"1234","tawsef19"=>"123");
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
         //User name//
         if(empty($_POST["uname"]))
         {
			$hasError=true;
			$err_uname="-User Name Required-";
		}
        else
        {
            $uname=$_POST["uname"];
        }

        //password
        if(empty($_POST["pass"]))
         {
			$hasError=true;
			$err_pass="-Password Required-";
		}
        else
        {
            $pass=$_POST["pass"];
        }

        if(!$hasError)
        {
            foreach($users as $u=>$p)
            {
                if($uname == $u && $pass==$p)
                {
                    //$_SESSION["loggeduser"] = $uname;
                    setcookie("loggeduser",$uname,time()+120);
                    header("Location: dashboard.php");
                }
            }
            echo "Invalid Username";
        }

    }
?>

<html>
    <body>
        <form action="login.php" method="post">
        <fieldset>
        <legend>LogIn Page</legend>
			<table>

				<tr>
					<td align="right">Username</td>
					<td>:<input name="username" value="<?php echo $uname;?>" type="text"><br>
					<span style="color:red;"><?php echo $err_uname;?></span></td>
				</tr>

				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" value="<?php echo $pass;?>" type="password"><br>
					<span style="color:red;"><?php echo $err_pass;?></span></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
				</tr>
			</table>
            </fieldset>
        </form>
    </body>
</html>