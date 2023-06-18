<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary">
        	<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('users'); ?>
				</div>
			</div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/user_create" enctype="multipart/form-data">
					<div class="form-group mb-3">
	                    <label for="name">User's Name</label>
	                    <input type="text" class="form-control" id = "name" name="name">
	                </div>

					<div class="form-group mb-3">
	                    <label for="email">User's Email</label>
	                    <input type="email" class="form-control" id = "email" name="email">
	                </div>
					<div class="form-group mb-3">
	                    <label for="password">User's Password</label>
	                    <input type="password" class="form-control" id = "password" name="password">
	                </div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Create">
						<a href="<?php echo base_url();?>index.php?admin/user_list" class="btn btn-black">Go back</a>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
