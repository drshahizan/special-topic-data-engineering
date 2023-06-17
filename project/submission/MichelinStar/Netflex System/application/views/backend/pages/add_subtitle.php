<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo get_phrase('subtitle'); ?>
                </div>
            </div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/add_subtitle/<?php echo $movie_id; ?>" enctype="multipart/form-data">
					<div class="form-group mb-2">
	                    <label for="name">Language</label>
	                    <input type="text" class="form-control" id = "name" name="language">
	                </div>

	                <div class="form-group mb-2">
                        <label for="file">Vtt file</label>
                        <div class="form-group">
                            <input type="file" name="file" class="form-control" id="file">
                        </div>
                    </div>

					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Submit">
						<a href="<?php echo base_url();?>index.php?admin/subtitle/<?php echo $movie_id; ?>" class="btn btn-black">Go back</a>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>