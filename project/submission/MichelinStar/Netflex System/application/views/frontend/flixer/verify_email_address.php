<?php echo $this->session->userdata('is_instructor'); ?>
<section class="category-course-list-area" style="margin-top: 50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 login-form">
                      <div class="content-title-box">
                          <h4><?php echo $page_title; ?></h4>
                          <div class="title"><?php echo get_phrase('enter_the_code_from_your_email'); ?></div>
                          <div class="subtitle"><?php echo get_phrase('let_us_know_that_this_email_address_belongs_to_you'); ?> <?php echo get_phrase('Enter_the_code_from_the_email_sent_to').' '.$this->session->userdata('register_email'); ?>.</div>
                      </div>
                      <form action="javascript:;" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="login-email"><?php echo get_phrase('verification_code'); ?>:</label>
                                      <input type="text" class="form-control" id = "verification_code" required>
                                      <a href="javascript:;" class="text-left p-3" id="resend_mail_button" onclick="resend_verification_code()" style="width: 100%;">
                                        <div class="float-left"><?= get_phrase('resend_mail') ?></div>
                                        <div id="resend_mail_loader" class="float-left pl-2"></div>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <a href="javascript:;" onclick="continue_verify()" class="btn btn-danger"><?php echo get_phrase('continue'); ?></a>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
  function continue_verify() {
    var email = '<?= $this->session->userdata('register_email'); ?>';
    var verification_code = $('#verification_code').val();
    $.ajax({
      type: 'post',
      url: '<?php echo base_url('index.php?home/verify_email_address/'); ?>',
      data: {verification_code : verification_code, email : email},
      success: function(response){
        if(response){
          window.location.replace('<?= base_url('index.php?home/redirect_after_signup'); ?>');
        }else{
          location.reload();
        }
      }
    });
  }
  
  function resend_verification_code() {
    $("#resend_mail_loader").html('<img src="<?= base_url('assets/global/page-loader-3.gif'); ?>" style="width: 25px;">');
    var email = '<?= $this->session->userdata('register_email'); ?>';
    $.ajax({
      type: 'post',
      url: '<?php echo base_url('index.php?home/resend_verification_code/'); ?>',
      data: {email : email},
      success: function(response){
        toastr.success('<?php echo get_phrase('mail_successfully_sent_to_your_inbox');?>');
        $("#resend_mail_loader").html('');
      }
    });
  }
</script>
