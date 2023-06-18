<div class="row ">
  <div class="col-lg-12">
    <a href="<?php echo base_url();?>index.php?admin/addon/add" class="btn btn-primary" style="float:right; margin-top: -40px; margin-bottom: 20px;">
	<i class="fa fa-plus"></i>
		<?php echo get_phrase('add_new_addon'); ?>
	</a>
  </div><!-- end col-->
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			<?php echo get_phrase('addon_manager'); ?>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered datatable" id="table_export">
			<thead>
				<tr>
					<th>#</th>
                    <th><?php echo get_phrase('name'); ?></th>
                    <th><?php echo get_phrase('version'); ?></th>
                    <th><?php echo get_phrase('status'); ?></th>
                    <th><?php echo get_phrase('actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($addons as $key => $addon): ?>
				<tr>
					<td><?php echo ++$key;?></td>
                    <td><?php echo $addon['name']; ?></td>
                    <td><?php echo $addon['version']; ?></td>
                    <td>
                      <?php if($addon['status'] == 1): ?>
                        <span class="label label-success"><?php echo get_phrase('active'); ?></span>
                      <?php else: ?>
                        <span class="label label-danger"><?php echo get_phrase('deactive'); ?></span>
                      <?php endif; ?>
                    </td>
					<td>
                        <?php if($addon['status'] == 1): ?>
                            <a href="<?php echo base_url();?>index.php?admin/addon/deactivate/<?php echo $addon['id'];?>" class="btn btn-danger" onclick="return confirm('Want to deactivate the addon?')"><?php echo get_phrase('deactivate'); ?></a>
                        <?php else: ?>
                            <a href="<?php echo base_url();?>index.php?admin/addon/activate/<?php echo $addon['id'];?>" class="btn btn-success" onclick="return confirm('Want to activate the addon?')"><?php echo get_phrase('activate'); ?></a>
                        <?php endif; ?>
                        <a href="<?php echo base_url();?>index.php?admin/addon/about/<?php echo $addon['id'];?>" class="btn btn-default"><?php echo get_phrase('about'); ?></a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
