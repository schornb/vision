<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="custom.css">
	<title>Vision</title>
</head>
<body>
	<ul class="nav nav-tabs nav-justified">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="table.php"><b>Home</b></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="groups.html"><b>Groups</b></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="register.php"><b>Account Creation</b></a>		</li>
	</ul>
	<h1>Home</h1>

	<input class="searchBar" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a course (e.g., ECON 0110)..." title="Type in a name">

	<table id="userData" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Courses</th>
				<th scope="col">Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>John Smith</td>
				<td>APMA 1650, ECON 0110</td>
				<td>john_smith@brown.edu</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Jane Doe</td>
				<td>ECON 0110</td>
				<td>jane_doe@brown.edu</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Brad Pitt</td>
				<td>CS 0190</td>
				<td>brad_pitt@brown.edu</td>
			</tr>
		</tbody>
	<?php
		require 'includes/database.php';

		$result = mysqli_query($conn, "SELECT username, email, phoneNumber, classes FROM users");
		$all_property = array();  //declare an array for saving property

		//showing property
		echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
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
