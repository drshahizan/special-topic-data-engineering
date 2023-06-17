<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('update_profile'); ?>
				</div>
			</div>
			<div class="panel-body">
				<?php
					$user_id	=	$this->session->userdata('user_id');
					$user_detail = $this->db->get_where('user',array('user_id'=>$user_id))->row();
					?>
				<form method="post" action="<?php echo base_url();?>index.php?admin/account" enctype="multipart/form-data">
					<input type="hidden" name="task" value="update_profile" />
					<div class="form-group mb-3">
						<label for="simpleinput1">Your name</label>
						<input type="text" class="form-control" id = "simpleinput1" name="name" value="<?php echo $user_detail->name;?>">
					</div>
					<div class="form-group mb-3">
						<label for="simpleinput2">Your email</label>
						<input type="text" class="form-control" id = "simpleinput2" name="email" value="<?php echo $user_detail->email;?>">
					</div>

					<div class="form-group mb-3">
						<input type="submit" class="btn btn-success" value="Update profile">
					</div>
				</form>
            </div>
        </div>
    </div>

	<div class="col-md-6">
        <div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('change_password'); ?>
				</div>
			</div>
			<div class="panel-body">

				<?php
					$user_id	=	$this->session->userdata('user_id');
					$user_detail = $this->db->get_where('user',array('user_id'=>$user_id))->row();
					?>
				<form method="post" action="<?php echo base_url();?>index.php?admin/account" enctype="multipart/form-data">
					<input type="hidden" name="task" value="update_password" />
					<div class="form-group mb-3">
	                    <label for="simpleinput3">New password</label>
	                    <input type="password" class="form-control" id = "simpleinput3" name="new_password" value="">
	                </div>
					<div class="form-group mb-3">
	                    <label for="simpleinput4">Current password</label>
	                    <input type="password" class="form-control" id = "simpleinput4" name="old_password" value="">
	                </div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Update password">
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
