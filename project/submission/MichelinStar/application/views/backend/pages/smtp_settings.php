<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title"><?php echo get_phrase('edit_smtp_settings');?></div>
            </div>
            <div class="panel-body">                
                <form class="required-form" action="<?php echo base_url('index.php?admin/smtp_settings/update'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="smtp_protocol"><?php echo get_phrase('protocol'); ?><span class="required">*</span></label>
                        <input type="text" name = "protocol" id = "smtp_protocol" class="form-control" value="<?php echo get_settings('protocol');  ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="smtp_host"><?php echo get_phrase('smtp_host'); ?><span class="required">*</span></label>
                        <input type="text" name = "smtp_host" id = "smtp_host" class="form-control" value="<?php echo get_settings('smtp_host');  ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="smtp_port"><?php echo get_phrase('smtp_port'); ?><span class="required">*</span></label>
                        <input type="text" name = "smtp_port" id = "smtp_port" class="form-control" value="<?php echo get_settings('smtp_port');  ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="smtp_user"><?php echo get_phrase('smtp_username'); ?><span class="required">*</span></label>
                        <input type="text" name = "smtp_user" id = "smtp_user" class="form-control" value="<?php echo get_settings('smtp_user');  ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="smtp_pass"><?php echo get_phrase('smtp_password'); ?><span class="required">*</span></label>
                        <input type="password" name = "smtp_pass" id = "smtp_pass" class="form-control" value="<?php echo get_settings('smtp_pass');  ?>" placeholder="<?php echo get_phrase('your_email_password'); ?>">
                    </div>

                    <button type="submit" class="btn btn-primary"><?php echo get_phrase('save'); ?></button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
    	<div class="alert alert-info" role="alert">
            <h4 class="alert-heading"><?php echo get_phrase('heads_up'); ?>!</h4>
            <p><?php echo get_phrase('use_an_SSL_supported_server_to_get_better_performance'); ?>.</p>
        </div>
    </div>
</div>
