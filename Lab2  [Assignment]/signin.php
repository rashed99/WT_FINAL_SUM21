<?php include 'main_header.php';?>
<?php include 'controllers/UserController.php'; ?>

<div>
	<h1>Sign In</h1.
	<h5><?php echo $err_db;?></h5>
	<form action ="" method="post">
		
		<div>
			<h4>Username</h4>
			<input type = "text" name="uname" value="<?php echo $uname;?>">
			<span><?php echo $err_uname;?></span>
		</div>
		<div>
			<h4>Password</h4>
			<input type = "password" name="pass" value="<?php echo $pass;?>">
			<span><?php echo $err_pass;?></span>
		</div>
		
			<input type = "submit" name="sign_in" value="submit"> 
		</div>
	</form>
</div>

<?php include 'main_footer.php';?>