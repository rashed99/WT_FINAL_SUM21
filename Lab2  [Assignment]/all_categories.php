<?php include 'main_menu.php';
	include 'controllers/CategoryController.php';
	$categories = getAllCategories();
?>
	
<div>
	<h3>All Category</h3>
	<table>
		<thead>
		<th>S1#</th>
		<th>Name</th>
		<th>Product Count</th>
		<th></th>
		<th></th>
		
		</thead>
		<tbody>
			<?php 
				$i=1;
				foreach($categories as $c){
					$id = $c["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["catName"]."</td>";
						echo '<td><a href = "editcategory.php?id='.$id.'">Edit</a></td>';
						echo '<td>Detele</td>';
					echo "</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>
</div>
<?php include 'main_footer.php';?>