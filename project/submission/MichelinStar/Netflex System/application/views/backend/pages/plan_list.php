<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			<?php echo get_phrase('plan_list'); ?>
		</div>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>Package Name</th>
					<th>Available Screen</th>
					<th>Price</th>
					<th>Status</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$plans = $this->db->get('plan')->result_array();
					$counter = 1;
					foreach ($plans as $row):
					  ?>
				<tr>
					<td><?php echo $counter++;?></td>
					<td style="text-transform: uppercase;"><?php echo $row['name'];?></td>
					<td style="text-transform: uppercase;"><?php echo $row['screens'];?></td>
					<td style="text-transform: uppercase;"> <?php echo currency($row['price']);?></td>
					<td style="text-transform: uppercase;">
						<?php
							if ($row['status'] == 1)
							{
								echo 'active';
							}
							else
							{
								echo 'inactive';
							}
							?>
					</td>
					<td>
						<a href="<?php echo base_url();?>index.php?admin/plan_edit/<?php echo $row['plan_id'];?>" class="btn btn-info">
						edit</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
