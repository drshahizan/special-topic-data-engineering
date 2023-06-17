<div class="row ">
  <div class="col-lg-12">
    <a href="<?php echo base_url();?>index.php?admin/faq_create/" class="btn btn-primary" style="float:right; margin-top: -45px; margin-bottom: 20px;">
	<i class="fa fa-plus"></i>
		Create faq
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
        <table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>FAQ Question</th>
					<th>Operation</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$faqs = $this->db->get('faq')->result_array();
					$counter = 1;
					foreach ($faqs as $row):
					  ?>
				<tr>
					<td><?php echo $counter++;?></td>
					<td style="text-transform: uppercase;"><?php echo $row['question'];?></td>
					<td>
						<a href="<?php echo base_url();?>index.php?admin/faq_edit/<?php echo $row['faq_id'];?>" class="btn btn-info">
						edit</a>
						<a href="<?php echo base_url();?>index.php?admin/faq_delete/<?php echo $row['faq_id'];?>" class="btn btn-danger" onclick="return confirm('Want to delete?')">
						delete</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
        </table>
    </div>
</div>
