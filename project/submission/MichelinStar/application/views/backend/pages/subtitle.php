
<div class="row justify-content-center mt-3">
    <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12">
    	<a href="<?php echo base_url();?>index.php?admin/movie_list" class="btn btn-black float-left" style="margin-bottom: 20px;">
			Go back
		</a>
    	<a href="<?php echo base_url();?>index.php?admin/add_subtitle/<?php echo $movie_id; ?>" class="btn btn-primary float-right" style="margin-bottom: 20px;">
			<i class="mdi mdi-plus"></i>
			Add Subtitle
		</a>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			<?php echo get_phrase('subtitle'); ?>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered datatable" id="table_export">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>Language</th>
					<th>Caption file</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$subtitles = $this->db->get_where('subtitle', array('movie_id' => $movie_id))->result_array();
					$counter = 1;
					foreach ($subtitles as $row):
					  ?>
				<tr>
					<td><?php echo $counter++;?></td>
					<td style="text-transform: uppercase;"><?php echo $row['language'];?></td>
					<td><?php echo $row['file'];?></td>
					<td>
						<a href="<?php echo base_url();?>index.php?admin/edit_subtitle/<?php echo $row['id'];?>/<?php echo $row['movie_id'];?>" class="btn btn-info">
						edit</a>
						<a href="<?php echo base_url();?>index.php?admin/delete_subtitle/<?php echo $row['id'];?>/<?php echo $row['movie_id'];?>" class="btn btn-danger" onclick="return confirm('Want to delete?')">
						delete</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
		            