<?php if(get_settings('recaptcha')): ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>

<!-- TOP LANDING SECTION -->
<div style="height:93vh;width:100%; clear: both; background-image: url(<?php echo base_url().'assets/frontend/'.$selected_theme;?>/images/login_bg.jpg)">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 40px; height: 50px;" />
		</a>
	</div>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4" style="clear: both;">
			<div style="background-color: #f3f3f3; padding: 30px;">
				<?php 
					if ($this->session->flashdata('signin_result') == 'failed'):
					?>
				<!-- ERROR MESSAGE -->
				<div class="alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<?php echo get_phrase('Login_failed! Please_try_again.');?>
				</div>
				<?php endif;?>
				<form method="post" action="<?php echo base_url();?>index.php?home/signin">
					<h3 class="black_text"><?php echo get_phrase('sign_in');?></h3>
					<div class="black_text">
						<?php echo get_phrase('Email');?> 
					</div>
					<div class="black_text">
						<input type="email" name="email" style="padding: 10px; width:100%;" />
					</div>
					<div class="black_text" style="margin-top: 20px;">
						<?php echo get_phrase('Password');?>
					</div>
					<div class="black_text">
						<input type="password" name="password" style="padding: 10px; width:100%;" />
					</div>
					<?php if(get_settings('recaptcha')): ?>
	                    <div class="form-group" style="margin:10px 0px 5px;">
	                      <div class="g-recaptcha" data-sitekey="<?php echo get_settings('recaptcha_sitekey'); ?>"></div>
	                    </div>
	                <?php endif; ?>
					<button class="btn btn-danger" style=" width: 100%; margin: 20px 0px;"> <?php echo get_phrase('sign_in');?> </button>
				</form>
				<hr>
				<a href="<?php echo base_url();?>index.php?home/forget"><?php echo get_phrase('Forget_password');?>?</a>
				|
				<a href="<?php echo base_url();?>index.php?home/signup"><?php echo get_phrase('Sign_up');?></a>
			</div>
		</div>
	</div>
</div>
<!-- MIDDLE TAB SECTION -->
<div class="container">
	<?php include 'footer.php';?>
</div>