<?php include 'admin_header.php';
	require_once 'controllers/StudentController.php';
	
	
?>
<!--addproduct starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="s_name" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">ID:</h4> 
			<input type="text" name="s_id" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">Date of Birth:</h4> 
			<input type="text" name="s_dob" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Credit:</h4> 
			<input type="text" name="s_credit" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">CGPA:</h4> 
			<input type="text" name="s_cgpa" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">Department ID:</h4> 
			<input type="text" name="dept_id" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="add_student" class="btn btn-success" value="Add Student" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>