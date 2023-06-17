<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary">
        	<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('actor'); ?>
				</div>
			</div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/actor_create" enctype="multipart/form-data">
					<div class="form-group mb-3">
	                    <label for="name">Actor Name</label>
						<span class="help">e.g. "Leonardo di Caprio"</span>
	                    <input type="text" class="form-control" id = "name" name="name">
	                </div>
					<div class="form-group mb-3">
	                    <label for="name">Image</label>
	                    <input type="file" class="form-control" name="thumb">
	                </div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Create">
						<a href="<?php echo base_url();?>index.php?admin/actor_list" class="btn btn-black">Go back</a>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
