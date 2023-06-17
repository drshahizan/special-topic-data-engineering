<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-6">
		<a href="<?php echo base_url();?>index.php?admin/series_edit/<?php echo $series_id;?>"
			class="btn btn-primary" style="clear:both;margin-bottom: 20px;" >
			<i class="mdi mdi-arrow-left-drop-circle-outline"></i>
			Back to series
		</a>
		<a href="<?php echo base_url();?>index.php?browse/playseries/<?php echo $series_id.'/'.$season_id;?>"
			class="btn btn-primary" style="clear:both;margin-bottom: 20px;" target="_blank">
			<i class="mdi mdi-arrow-top-right"></i>
			Visit <?php echo $season_name;?>
		</a>
	</div>
	<div class="col-md-6 col-sm-6 col-xs-6">
		<a href="#" onClick="load_create_form()"
			class="btn btn-primary pull-right" style="clear:both;margin-bottom: 20px;">
		<i class="fa fa-plus"></i>
		Create episode
		</a>
	</div>
</div>
<div class="row">
	<!-- BASIC INFORMATION UPDATE -->
	<div class="col-md-6 col-sm-12 col-xs-12">
		<div class="panel">
			<h4 style="margin-left: 20px;">Episode list</h4>
			<div class="panel-body">
				<?php
					$episodes	=	$this->crud_model->get_episodes_of_season($season_id);
					?>
				<table class="table table-hover table-bordered table-centered mb-0" width="100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$counter	=	1;
							foreach ($episodes as $row):
							$episode_id	=	$row['episode_id'];
							?>
						<tr>
							<td>
								<?php echo 'Episode '.$counter++;?>
							</td>
							<td>
								<?php echo $row['title'];?>
							</td>
							<td>
								<a href="#" onClick="load_edit_form(<?php echo $series_id.','.$season_id.','.$episode_id;?>)"
									class="btn btn-info">
								edit</a>
								<a href="<?php echo base_url();?>index.php?admin/episode_delete/<?php echo $series_id.'/'.$season_id.'/'.$episode_id;?>" 
									class="btn btn-danger" onclick="return confirm('Want to delete?')">
								delete</a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
	<script>
		function load_edit_form(series_id,season_id,episode_id)
		{
			document.getElementById("form_holder").innerHTML = document.getElementById("edit_episode_form_"+episode_id).innerHTML;
		}
		
		// LOAD THE CREATE EPISODE FORM AT FIRST
		window.onload = function ()
		{
			load_create_form()
		}
		
		function load_create_form()
		{
			document.getElementById("form_holder").innerHTML = document.getElementById("create_episode_form").innerHTML;
		}
	</script>
	<!-- MANAGE SEASONS & EPISODES -->
	<div class="col-md-6 col-sm-12 col-xs-12" id="form_holder">
	</div>
</div>
<!-- CREATE EPISODE FORM -->
<div id="create_episode_form" style="display: none;">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title">Create a new episode</div>
		</div>
		<div class="panel-body">
			<form method="post" action="<?php echo base_url();?>index.php?admin/episode_create/<?php echo $series_id.'/'.$season_id;?>"
				enctype="multipart/form-data">
				<div class="form-group">
					<label class="form-label">Title</label>
					<span class="help"></span>
					<div class="controls">
						<input type="text" class="form-control" name="title" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="form-label">Video Url</label>
					<span class="help">- youtube or any hosted video</span>
					<div class="controls">
						<input type="text" class="form-control" name="url" id="url">
					</div>
				</div>
				<div class="form-group">
					<label class="form-label">Thumbnail</label>
					<span class="help">- icon image of the movie</span>
					<div class="controls">
						<input type="file" class="form-control" name="thumb">
					</div>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Create episode">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- EDIT EPISODE FORM -->
<?php
	foreach ($episodes as $row):
	$episode_id	=	$row['episode_id'];
	?>
<div id="edit_episode_form_<?php echo $row['episode_id'];?>" style="display: none;">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title">Edit episode</div>
		</div>
		<div class="panel-body">
			<form method="post" action="<?php echo base_url();?>index.php?admin/episode_edit/<?php echo $series_id.'/'.$season_id.'/'.$episode_id;?>"
				enctype="multipart/form-data">
				<div class="form-group">
					<label class="form-label">Title</label>
					<span class="help"></span>
					<div class="controls">
						<input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
					</div>
				</div>
				<div class="form-group">
					<label class="form-label">Video Url</label>
					<span class="help">- youtube or any hosted video</span>
					<div class="controls">
						<input type="text" class="form-control" name="url" id="url" value="<?php echo $row['url'];?>">
					</div>
				</div>
				<div class="form-group">
					<label class="form-label">Thumbnail</label>
					<span class="help">- icon image of the movie</span>
					<div class="controls">
						<input type="file" class="form-control" name="thumb">
					</div>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Update episode">
				</div>
			</form>
		</div>
	</div>
</div>
<?php endforeach;?>