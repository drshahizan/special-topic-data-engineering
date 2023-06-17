<?php
	$country_details = $this->db->get_where('country',array('country_id'=>$country_id))->row();
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary">
        	<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('country'); ?>
				</div>
			</div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/country_edit/<?php echo $country_id;?>">
					<div class="form-group mb-3">
	                    <label for="name"><?php echo get_phrase('country_name'); ?></label>
	                    <input type="text" class="form-control" id = "name" name="name" value="<?php echo $country_details->name;?>">
	                </div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="<?php echo get_phrase('update'); ?>">
						<a href="<?php echo base_url();?>index.php?admin/country" class="btn btn-black"><?php echo get_phrase('go_back'); ?></a>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
