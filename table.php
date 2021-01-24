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
<<<<<<< HEAD:index.html
			<a class="nav-link" href="register.php"><b>Account Creation</b></a>
=======
			<a class="nav-link" href="account-creation.html"><b>Account Creation</b></a>
>>>>>>> 86084c2152cd03d4b07b486451f43caa292fc872:table.php
		</li>
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
		$conn = mysql_connect("localhost", "root", "", "company");
		if ($conn->connect_error) {
			die("Connection failed:". $conn->connect_error);
		}
		$sql = "SELECT Name, Courses, Email from profiles";
		$result = $conn->query($sql);
		if ($result-> num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>". $row["#"] ."</td><td>". $row["1"]. "</td><td>".
				$row["2"] ."</td><td>". $row["3"] ."</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 result";
		}
		$conn->close();
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
