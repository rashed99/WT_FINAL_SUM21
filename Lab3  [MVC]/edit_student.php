<?php include 'admin_header.php';
	require_once 'controllers/StudentController.php';
	$s_id = $_GET["s_id"];
	$pr= getStudent($s_id);
?>

<div class="center">
<table>
	
	<td>
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="s_name" value ="<?php echo $pr["s_name"];?>" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">ID:</h4> 
			<input type="text" name="s_id" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">DOB:</h4> 
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
				
				<input type="submit" name= "edit_student" class="btn btn-success" value="Edit Student" class="form-control">
			</div>
		</form>
	</td>
</table>				
</div>


<?php include 'admin_footer.php';?>