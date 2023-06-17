<div class="row ">
  <div class="col-lg-12">
    <a href="<?php echo base_url();?>index.php?admin/user_create/" class="btn btn-primary" style="float:right; margin-top: -45px; margin-bottom: 20px;">
	<i class="fa fa-plus"></i>
		Create user
	</a>
  </div><!-- end col-->
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			<?php echo get_phrase('user_list'); ?>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered datatable" id="table_export">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>User Email</th>
					<th>Subscribed Package</th>
					<th>Manage</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$users = $this->db->get_where('user', array('type'=>0))->result_array();
					$counter = 1;
					foreach ($users as $row):
					  ?>
				<tr>
					<td><?php echo $counter++;?></td>
					<td style="text-transform: uppercase;"><?php echo $row['email'];?></td>
					<td>
						<?php
							$plan_id	=	$this->crud_model->get_active_plan_of_user($row['user_id']);
							if ($plan_id != false)
							{
								$plan_name	=	$this->db->get_where('plan', array('plan_id' => $plan_id))->row()->name;
								echo $plan_name;
							}
							?>
					</td>
					<td>
						<a href="<?php echo base_url();?>index.php?admin/user_edit/<?php echo $row['user_id'];?>" class="btn btn-info">
						edit</a>
						<a href="<?php echo base_url();?>index.php?admin/user_delete/<?php echo $row['user_id'];?>" class="btn btn-danger" onclick="return confirm('Want to delete?')">
						delete</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>