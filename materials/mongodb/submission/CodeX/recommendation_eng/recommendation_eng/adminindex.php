<?php
include("headeradmin.php");
include("dbconnect.php");

$query = "SELECT show_id, show_name FROM tb_show";
$result = mysqli_query($con, $query);
?>



<style>
	.container-fluid-n {
		margin: 50px;
		margin-right: 100px;
		margin-left: 100px;
		padding: 'center';
	}
</style>

<!-- Add New Show Modal -->
<div class="modal fade" id="addNewShowModal" tabindex="-1" role="dialog" aria-labelledby="addNewShowModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addNewShowModalLabel">Add New Show</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="adminnewshow.php">
					<div class="form-group">
						<label for="show_name">Show Name</label>
						<input type="text" name="show_name" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Add Show</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid-n">
	<div class="container">
		<div class="text-right mb-3">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewShowModal">Add New Show</button>
		</div>
		<br>
		<div class="card" style="border: 1px solid #ccc;">
			<div class="card-body">
			<h2>TV Shows Table</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th style="width: 100px; font-size: 22px;">Number</th>
								<th style="width: 200px; font-size: 22px;">Show Name</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($row = mysqli_fetch_assoc($result)) {
								$showId = $row['show_id'];
								$showName = $row['show_name'];
							?>
								<tr>
									<td style="width: 100px; font-size: 20px;"><?php echo $showId; ?></td>
									<td style="width: 200px; font-size: 20px;"><?php echo $showName; ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include 'footer.php'; ?>