<?php include 'main_menu.php';?>
<?php include 'controllers/CategoryController.php';?>


<h3>Add Category</h3>
	<h5><?php echo $err_db;?></h5>
	<form action ="" method="post">
		<div>
			<h4>Category Name</h4>
			<input type = "text" name="catName" value="<?php echo $catName;?>">
			<span><?php echo $err_catName;?></span>
		</div>
		
		<div>
			<input type = "submit" name="add_Cat" value="submit"> 
		</div>
	</form>
</div>

<?php include 'main_footer.php';?>