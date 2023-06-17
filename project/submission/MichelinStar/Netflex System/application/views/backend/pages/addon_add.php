<div class="row" style="margin-top: 50px;">
	<div class="col-md-6">
		<?php echo form_open(site_url('index.php?admin/addon/install') , array('class' => 'form-horizontal form-groups-bordered', 'enctype' => 'multipart/form-data'));?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">
						<?php echo get_phrase('install_addon'); ?>
					</div>
				</div>
				<div class="panel-body" style="margin: 20px;">
					<div class="form-group">
                        <label><?php echo get_phrase('upload_addon_zip_file'); ?></label>
                    	<input type="file" class="form-control" name="addon_zip" id="addon_zip" data-label="<i class='fa fa-file'></i> Browse" required/>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="<?php echo get_phrase('install_addon'); ?>" />
                    </div>

				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>
