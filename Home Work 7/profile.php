<?php 
include'process.php';
$sql = "SELECT * FROM task";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Profile Page</title>
	<link rel="stylesheet" href="style.css">
	<style>
		.table-body {
			margin-top: 10%;
		}
		a{
	text-decoration: none;
	list-style: none;
}
	</style>

</head>

<body>
	<header>
		<h2 class="logo">logo</h2>
		<ul class="navlist">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Service</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<div class="top-btn" id="topBtn">
			<a href="logout.php" class="h-btn" id="hBtn">Logout</a>

		</div>
	</header>
	<div class="container col-8 bg-light p-3 table-body ">
		<form action="" method="post" id="taskForm">
			<div class="d-flex justify-content-center align-content-center">
				<small id="taskError" class="text-danger"></small>
			</div>
			<div class="mb-3 mt-3 d-flex justify-content-center align-content-center">
				
                <input type="text" name="task" id="task" class="form-control w-75 me-1" placeholder="Enter your Task">
				<input type="submit" name="task_add" value="Add" class="btn btn-primary">
            </div>
			
		</form>
		<h2 class="mb-2 text-center">Task List</h2>
		<table class="table table-bordered table-striped">
		<thead class="table-light">
			<tr class="text-center">
				<th>ID</th>
				<th class=" w-75">Task</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr>
							<td>{$row['id']}</td>
							<td>{$row['task']}</td>
							<td>
								<a href='edit.php?id={$row['id']}' class='btn btn-sm btn-primary'>Edit</a>
								<a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>
							</td>
						</tr>";
				}
			} else {
				echo "<tr><td colspan='3' class='text-center'>No Data Found</td></tr>";
			}
			?>
		</tbody>
	</table>
	</div>

<script src="script.js"></script>
</body>

</html>