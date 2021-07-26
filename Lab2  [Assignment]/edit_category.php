<?php include 'main_menu.php';
	include 'controllers/CategoryController.php';
	$id = $_GET["id"];
	$c = getCategory($id);
?>
<h3>Edit Category</h3>
<h5><?php echo $err_db;?></h5>
<div>
	<form>
		<div action="" method="post">
			<h4>Name</h4>
			<input type="hidden" name="id" value ="<?php echo $c["id"];?>">
			<input type ="text" name="catName" value="<?php echo $c["catName"];?>" >
		</div>
		
		<div>
			<input type="submit" name="edit_category" value="Edit Category">
		</div>
	</form>
</div>
<?php include 'main_footer.php';?>