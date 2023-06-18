<style>
	.profile_switcher{font-size:25px; color: gray !important; position: relative; }
	.profile_switcher:hover{font-size:25px;color: #fff !important;}
	.profile_switcher_img{height:180px; border: 6px solid #3a3a3a;}
	.profile_switcher img:hover{ border: 6px solid #fff;}
	td{padding:30px;}
	.profile_manage{font-size: 25px;border: 1px solid #ccc;padding: 5px 30px;text-decoration: none;}
	.profile_manage:hover{font-size: 25px;border: 1px solid #fff;padding: 5px 30px;text-decoration: none;color:#fff;}
</style>
<!-- TOP LANDING SECTION -->
<div style="height:100vh;width:100%; background-color: #141414;">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 40px; height: 35px;" />
		</a>
	</div>
	<div style="clear: both; text-align: center; padding-top: 100px;">
		<h1><?php echo get_phrase('Who_is_watching');?>?</h1>
		<table align="center" style="background-color: #141414;">
			<tr>
				<td>
					<a href="<?php echo base_url();?>index.php?browse/doswitch/user1" class="profile_switcher" style="text-decoration: none;">
					<img src="<?php echo $this->crud_model->get_image_url_of_user('user1');?>" class="profile_switcher_img" />
					<br>
					<?php echo $this->crud_model->get_username_of_user('user1');?>
					</a>
				</td>
				<?php
					if ($current_plan_id == 2 || $current_plan_id == 3):
					?>
				<td>
					<a href="<?php echo base_url();?>index.php?browse/doswitch/user2" class="profile_switcher" style="text-decoration: none;">
					<img src="<?php echo $this->crud_model->get_image_url_of_user('user2');?>" class="profile_switcher_img" />
					<br>
					<?php echo $this->crud_model->get_username_of_user('user2');?>
					</a>
				</td>
				<?php endif;?>
				<?php
					if ($current_plan_id == 3):
					?>
				<td>
					<a href="<?php echo base_url();?>index.php?browse/doswitch/user3" class="profile_switcher" style="text-decoration: none;">
					<img src="<?php echo $this->crud_model->get_image_url_of_user('user3');?>" class="profile_switcher_img" />
					<br>
					<?php echo $this->crud_model->get_username_of_user('user3');?>
					</a>
				</td>
				<?php endif;?>
				<?php
					if ($current_plan_id == 3):
					?>
				<td>
					<a href="<?php echo base_url();?>index.php?browse/doswitch/user4" class="profile_switcher" style="text-decoration: none;">
					<img src="<?php echo $this->crud_model->get_image_url_of_user('user4');?>" class="profile_switcher_img" />
					<br>
					<?php echo $this->crud_model->get_username_of_user('user4');?>
					</a>
				</td>
				<?php endif;?>
			</tr>
		</table>
		<br>
		<a href="<?php echo base_url();?>index.php?browse/manageprofile" class="profile_manage">
			<?php echo get_phrase('MANAGE_PROFILES');?></a>
	</div>
</div>
