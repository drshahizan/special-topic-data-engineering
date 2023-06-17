<?php
	$plan_detail = $this->db->get_where('plan',array('plan_id'=>$plan_id))->row();
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary">
        	<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('plan'); ?>
				</div>
			</div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/plan_edit/<?php echo $plan_id;?>">
					<!--PACKAGE NAME -->
					<div class="form-group mb-3">
	                    <label for="name">Package Name</label>
	                    <input type="text" class="form-control" id = "name" name="name" value="<?php echo $plan_detail->name;?>">
	                </div>

					<!--PACKAGE PRICE -->
					<div class="form-group mb-3">
	                    <label for="price">Package Price</label>
	                    <input type="text" class="form-control" id = "price" name="price" value="<?php echo $plan_detail->price;?>">
	                </div>

					<!-- PACKAGE STATUS -->
					<div class="form-group mb-3">
	                    <label for="price">Status</label>
						<span class="help">Inactive packages won't show to customer during purchase.</span>
						<select class="form-control" name="status" required>
							<option value="">Select a plan</option>
							<option value="0" <?php if ( $plan_detail->status == 0) echo 'selected';?>>Inactive</option>
							<option value="1" <?php if ( $plan_detail->status == 1) echo 'selected';?>>Active</option>
						</select>
	                </div>

					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Update">
						<a href="<?php echo base_url();?>index.php?admin/plan_list" class="btn btn-black">Go back</a>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
