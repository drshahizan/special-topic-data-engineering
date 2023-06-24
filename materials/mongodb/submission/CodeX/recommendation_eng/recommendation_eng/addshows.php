<?php
include("headeruser.php");
include("dbconnect.php");

$showId = $_GET['show_id'];
$showName = urldecode($_GET['show_name']);

?>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="card mx-auto" style="width: 400px;">
			<div class="card-body">
				<form action="addshowsprocess.php" method="post">
					<div class="form-group">
						<label for="show_name">TV Show Name</label>
						<input type="text" name="show_name" id="show_name" class="form-control" value="<?php echo $showName; ?>" readonly>
						<input type="hidden" name="show_id" value="<?php echo $showId; ?>">
					</div>
					<div class="form-group">
						<label for="show_rate">TV Show Rating</label>
						<input type="number" name="show_rate" id="show_rate" class="form-control" min="0" max="5" step="0.1" required>
					</div>

					<div class="form-group">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary" required>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>