<?php
	$genre_detail = $this->db->get_where('genre',array('genre_id'=>$genre_id))->row();
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary">
        	<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('genre'); ?>
				</div>
			</div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/genre_edit/<?php echo $genre_id;?>">
					<div class="form-group mb-3">
	                    <label for="name">Genre Name</label>
						<span class="help">e.g. "Action, Romantic"</span>
	                    <input type="text" class="form-control" id = "name" name="name" value="<?php echo $genre_detail->name;?>">
	                </div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Update">
						<a href="<?php echo base_url();?>index.php?admin/genre_list" class="btn btn-black">Go back</a>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>