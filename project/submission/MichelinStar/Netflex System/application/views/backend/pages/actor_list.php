<div class="row ">
  <div class="col-lg-12">
    <a href="<?php echo base_url();?>index.php?admin/actor_create/" class="btn btn-primary" style="float:right; margin-top: -45px; margin-bottom: 20px;">
	<i class="fa fa-plus"></i>
		Create actor
	</a>
  </div><!-- end col-->
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			<?php echo get_phrase('actor_list'); ?>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered datatable" id="table_export">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th></th>
					<th>Actor Name</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$actors = $this->db->get('actor')->result_array();
					$counter = 1;
					foreach ($actors as $row):
					  ?>
				<tr>
					<td style="vertical-align: middle;"><?php echo $counter++;?></td>
					<td><a href="<?php echo base_url().'index.php?admin/actor_wise_movie_and_series/'.$row['actor_id']; ?>"><img src="<?php echo $this->crud_model->get_actor_image_url($row['actor_id']);?>" style="height: 60px;" /></a></td>
					<td style="vertical-align: middle;"><a href="<?php echo base_url().'index.php?admin/actor_wise_movie_and_series/'.$row['actor_id']; ?>" style="color: #6c757d;"><?php echo $row['name'];?></a></td>
					<td style="vertical-align: middle;">
						<a href="<?php echo base_url();?>index.php?admin/actor_edit/<?php echo $row['actor_id'];?>" class="btn btn-info">
						edit</a>
						<a href="<?php echo base_url();?>index.php?admin/actor_delete/<?php echo $row['actor_id'];?>" class="btn btn-danger" onclick="return confirm('Want to delete?')">
						delete</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>