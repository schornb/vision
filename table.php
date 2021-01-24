<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="custom.css">
	<title>Vision</title>
</head>
<body>
	<ul class="nav nav-tabs nav-justified">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="table.php"><b>Vision</b></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="groups.html"><b>Groups</b></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="register.php"><b>Account Creation</b></a>		</li>
	</ul>
	<h1>Vision</h1>

	<input class="searchBar" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a course (e.g., ECON 0110)..." title="Type in a name">

	<table id="userData" class="table table-bordered table-striped">
		<tbody>
			<?php
				require 'includes/database.php';

				$result = mysqli_query($conn, "SELECT username, classes, phoneNumber, email FROM users");
				$all_property = array();  //declare an array for saving property

				while ($property = mysqli_fetch_field($result)) {
		    	echo '<td>' . $property->name . '</td>';  //get field name for header
		    	array_push($all_property, $property->name);  //save those to array
				}
				echo '</tr>'; //end tr tag

				//showing all data
				while ($row = mysqli_fetch_array($result)) {
		    	echo "<tr>";
		    	foreach ($all_property as $item) {
		        	echo '<td>' . $row[$item] . '</td>'; //get items using property value
		    }
		    echo '</tr>';
			}
		echo "</table>";
		?>
		</tbody>
	</table>

	<script>
		function myFunction() {
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("userData");
			tr = table.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
	</script>
</body>
</html>
