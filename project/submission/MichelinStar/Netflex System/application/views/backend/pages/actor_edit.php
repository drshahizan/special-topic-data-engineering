<?php
	$actor_detail = $this->db->get_where('actor',array('actor_id'=>$actor_id))->row();
?>
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
				<form method="post" action="<?php echo base_url();?>index.php?admin/actor_edit/<?php echo $actor_id;?>" enctype="multipart/form-data">
					<div class="form-group mb-3">
	                    <label for="name">Actor Name</label>
	                    <input type="text" class="form-control" id = "name" name="name" value="<?php echo $actor_detail->name;?>">
	                </div>
					<div class="form-group mb-3">
	                    <label for="thumb">Image</label>
	                    <input type="file" class="form-control" name="thumb">
	                </div>
					
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Update">
						<a href="<?php echo base_url();?>index.php?admin/actor_list" class="btn btn-black">Go back</a>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
