<?php
include("headeruser.php");
include("dbconnect.php");

$query = "SELECT show_id, show_name FROM tb_show";
$result = mysqli_query($con, $query);
?>

<style>
	.container {
		margin: 20px;
		padding: 20px;
	}

	.panel-default {
		border: 1px solid #ddd;
		border-radius: 4px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

	}

	.panel-body {
		padding: 15px;
	}

	.table {
		width: 100%;
		border-collapse: collapse;
	}

	.table th,
	.table td {
		padding: 8px;
		text-align: left;
	}

	.table th {
		background-color: #f5f5f5;
	}

	.btn-primary {
		background-color: #007bff;
		color: #fff;
		border: none;
		padding: 8px 16px;
		border-radius: 4px;
	}

	.btn-primary:hover {
		background-color: #0069d9;
	}
</style>


<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h2>TV Shows Table</h2>
			<table class="table">
				<thead>
					<tr>
						<th>Show ID</th>
						<th>Show Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($row = mysqli_fetch_assoc($result)) {
						$showId = $row['show_id'];
						$showName = $row['show_name'];
					?>
						<tr>
							<td><?php echo $showId; ?></td>
							<td><?php echo $showName; ?></td>
							<td>
								<a href="addshows.php?show_id=<?php echo $showId; ?>&show_name=<?php echo urlencode($showName); ?>" class="btn btn-primary">Rate</a>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>



<?php include 'footer.php'; ?>