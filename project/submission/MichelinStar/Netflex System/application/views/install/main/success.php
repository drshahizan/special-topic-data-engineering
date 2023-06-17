<div class="row"
  style="margin-top: 30px;">
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-body">
        <div class="panel panel-default" data-collapsed="0"
          style="border-color: #dedede;">
    			<!-- panel body -->
    			<div class="panel-body" style="font-size: 14px;">
            <h3>Success!!</h3>
            <br>
            <p style="font-size: 14px;">
              <strong>Installation was successfull. Please login to continue..</strong>
            </p>
            <br>
            <table>
              <tbody>
                <tr>
                  <td style="padding: 12px;"><strong>Administrator Email |</strong></td>
                  <td style="padding: 12px;"><?php echo $admin_email; ?></td>
                </tr>
                <tr>
                  <td style="padding: 12px;"><strong>Password |</strong></td>
                  <td style="padding: 12px;">Your chosen password</td>
                </tr>
              </tbody>
            </table>
            <br>
            <p>
              <a href="<?php echo site_url('index.php?install/success/login');?>" class="btn btn-info">
                <i class="entypo-login"></i> &nbsp; Log In
              </a>
            </p>
    			</div>
    		</div>
      </div>
    </div>
  </div>
</div>
