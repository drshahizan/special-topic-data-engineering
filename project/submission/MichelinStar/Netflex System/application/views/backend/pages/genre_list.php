<div class="row ">
  <div class="col-lg-12">
    <a href="<?php echo base_url();?>index.php?admin/genre_create/" class="btn btn-primary" style="float:right; margin-top: -40px; margin-bottom: 20px;">
	<i class="fa fa-plus"></i>
		Create genre
	</a>
  </div><!-- end col-->
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			<?php echo get_phrase('genre_list'); ?>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered datatable" id="table_export">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>Genre Name</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$genres = $this->crud_model->get_genres();
					$counter = 1;
					foreach ($genres as $row):
					  ?>
				<tr>
					<td><?php echo $counter++;?></td>
					<td style="text-transform: uppercase;"><?php echo $row['name'];?></td>
					<td>
						<a href="<?php echo base_url();?>index.php?admin/genre_edit/<?php echo $row['genre_id'];?>" class="btn btn-info">
						edit</a>
						<a href="<?php echo base_url();?>index.php?admin/genre_delete/<?php echo $row['genre_id'];?>" class="btn btn-danger" onclick="return confirm('Want to delete?')">
						delete</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>