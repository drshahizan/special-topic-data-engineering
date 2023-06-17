<?php
$curl_enabled = function_exists('curl_version');
?>

<div class="gallery-env">

  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="panel-title">
              <?php echo get_phrase('software_details'); ?>
            </div>
          </div>
          <div class="panel-body">
          <article class="album">
            <footer>
              <div class="album-images-count" style="width: 50%;">
                <i class="entypo-right-bold"></i> <?php echo get_phrase('version'); ?>
              </div>
              <div class="album-options" style="font-weight: bold; width: 50%; text-align: right;">
                <?php echo get_settings('version'); ?>
              </div>
            </footer>

            <footer>
              <div class="album-images-count" style="width: 50%;">
                <i class="entypo-right-bold"></i> <?php echo get_phrase('check_update'); ?>
              </div>
              <div class="album-options" style="font-weight: bold; width: 50%; text-align: right;">
                <a href="https://codecanyon.net/user/creativeitem/portfolio"
                target="_blank" style="color: #343a40;">
                  <i class="entypo-tag"></i>
                  <?php echo get_phrase('check_update'); ?>
                </a>
              </div>
            </footer>

            <footer>
              <div class="album-images-count" style="width: 50%;">
                <i class="entypo-right-bold"></i> <?php echo get_phrase('php_version'); ?>
              </div>
              <div class="album-options" style="font-weight: bold; width: 50%; text-align: right;">
                <?php echo phpversion(); ?>
              </div>
            </footer>

            <footer>
              <div class="album-images-count" style="width: 50%;">
                <i class="entypo-right-bold"></i> <?php echo get_phrase('curl_enable'); ?>
              </div>
              <div class="album-options" style="font-weight: bold; width: 50%; text-align: right;">
                <?php echo $curl_enabled ? '<span class="label label-success">'.get_phrase('enabled').'</span>' : '<span class="label label-danger">'.get_phrase('disabled').'</span>'; ?>
              </div>
            </footer>

            <footer>
              <div class="album-images-count" style="width: 50%;">
                <i class="entypo-right-bold"></i> <?php echo get_phrase('purchase_code'); ?>
              </div>
              <div class="album-options" style="font-weight: bold; width: 50%; text-align: right;">
                <?php echo get_settings('purchase_code'); ?>
              </div>
            </footer>

            <footer>
              <div class="album-images-count" style="width: 50%;">
                <i class="entypo-right-bold"></i> <?php echo get_phrase('purchase_code_status'); ?>
              </div>
              <div class="album-options" style="font-weight: bold; width: 50%; text-align: right;">
                <?php if (strtolower($application_details['purchase_code_status']) == 'expired'): ?>
                  <span class="label label-danger"><?php echo $application_details['purchase_code_status']; ?></span>
                <?php elseif (strtolower($application_details['purchase_code_status']) == 'valid'): ?>
                  <span class="label label-success"><?php echo $application_details['purchase_code_status']; ?></span>
                <?php else: ?>
                  <span class="label label-danger"><?php echo ucfirst($application_details['purchase_code_status']); ?></span>
                <?php endif; ?>
              </div>
            </footer>

            <footer>
              <div class="album-images-count" style="width: 50%;">
                <i class="entypo-right-bold"></i> <?php echo get_phrase('support_expiry_date'); ?>
              </div>
              <div class="album-options" style="font-weight: bold; width: 50%; text-align: right;">
                <?php if ($application_details['support_expiry_date'] != "invalid"): ?>
                  <span class="float-right"><?php echo $application_details['support_expiry_date']; ?></span>
                <?php else: ?>
                  <span class="float-right"><span class="badge badge-danger-lighten"><?php echo ucfirst($application_details['support_expiry_date']); ?></span></span>
                <?php endif; ?>
              </div>
            </footer>

            <footer>
              <div class="album-images-count" style="width: 50%;">
                <i class="entypo-right-bold"></i> <?php echo get_phrase('customer_name'); ?>
              </div>
              <div class="album-options" style="font-weight: bold; width: 50%; text-align: right;">
                <?php if ($application_details['customer_name'] != "invalid"): ?>
                  <span class="float-right"><?php echo $application_details['customer_name']; ?></span>
                <?php else: ?>
                  <span class="float-right"><span class="badge badge-danger-lighten"><?php echo ucfirst($application_details['customer_name']); ?></span></span>
                <?php endif; ?>
              </div>
            </footer>

            <footer>
              <div class="album-images-count" style="width: 50%;">
                <i class="entypo-right-bold"></i> <?php echo get_phrase('get_customer_support'); ?>
              </div>
              <div class="album-options" style="font-weight: bold; width: 50%; text-align: right;">
                <a href="http://support.creativeitem.com" target="_blank" style="color: #343a40;"> <i class="entypo-help-circled"></i> <?php echo get_phrase('customer_support'); ?> </a>
              </div>
            </footer>

          </article>

        </div>
      </div>
    </div>
  </div>
</div>
