<?php include 'main_header.php';?>
<?php include 'controllers/UserController.php'; ?>

<div>
	<h1>Sign Up</h1.
	<h5><?php echo $err_db;?></h5>
	<form action ="" method="post">
		<div>
			<h4>Name</h4>
			<input type = "text" name="name" value="<?php echo $name;?>">
			<span><?php echo $err_name;?></span>
		</div>
		<div>
			<h4>Username</h4>
			<input type = "text" name="uname" value="<?php echo $uname;?>">
			<span><?php echo $err_uname;?></span>
		</div>
		<div>
			<h4>Email</h4>
			<input type = "text" name="email" value="<?php echo $email;?>" >
			<span><?php echo $err_email;?></span>
		</div>
		<div>
			<h4>Password</h4>
			<input type = "password" name="pass" value="<?php echo $pass;?>">
			<span><?php echo $err_pass;?></span>
		</div>
		<div>
			<input type = "submit" name="sign_up" value="submit"> 
		</div>
		<a href = "signin.php">Already have an account? Click here</a>
	</form>
</div>

<?php include 'main_footer.php';?>