<?php include 'admin_header.php';
	require_once 'controllers/StudentController.php';
	
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Students</h3>
	<table class="table table-striped">
		<thead>
			<th> Name</th>
			<th> ID</th>
			<th>DOB </th>
			<th> Credit</th>
			<th> CGPA</th>
			<th> Department</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$students = getStudents();
				
				foreach($students as $p){
					echo "<tr>";
						
						echo "<td>".$p["s_name"]."</td>";
						echo "<td>".$p["s_id"]."</td>";
						echo "<td>".$p["s_dob"]."</td>";
						echo "<td>".$p["s_credit"]."</td>";
						echo "<td>".$p["s_cgpa"]."</td>";
						echo "<td>".$p["dept_name"]."</td>";
						echo '<td><a href="editstudent.php?s_id='.$p["s_id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					
				}
			?>
			
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>