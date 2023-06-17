<style>
	.profile_switcher{font-size:25px; color: gray !important; position:relative; }
	.profile_switcher:hover{font-size:25px;color: #fff !important;}
	.profile_switcher img:hover{ border: 6px solid #fff;}
	td{padding:30px;}
	.profile_manage_done{font-size: 25px;padding: 5px 30px;text-decoration: none;background-color: #fff; color: #000;}
	.profile_manage_done:hover{font-size: 25px;padding: 5px 30px;text-decoration: none;background-color: #c00; color:#fff;}
	.profile_switcher_img{height:180px; border: 6px solid #3a3a3a; opacity: 0.5;}
	.profile_switcher_edit{position: absolute; top:0px; left:66px; color:#fff;}
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
		<h1><?php echo get_phrase('Manage_Profiles');?></h1>
		<table align="center" style="background-color: #141414;">
			<tr>
				<td>
					<a href="<?php echo base_url();?>index.php?browse/editprofile/user1"
						class="profile_switcher" style="text-decoration: none;">
						<img src="<?php echo $this->crud_model->get_image_url_of_user('user1');?>" class="profile_switcher_img" />
						<br>
						<span class="fa-stack fa-sm profile_switcher_edit">
						<i class="fa fa-square-o fa-stack-2x"></i>
						<i class="fa fa-pencil fa-stack-1x"></i>
						</span>
						<?php echo $this->crud_model->get_username_of_user('user1');?>
					</a>
				</td>
				<?php
					if ($current_plan_id == 2 || $current_plan_id == 3):
					?>
				<td>
					<a href="<?php echo base_url();?>index.php?browse/editprofile/user2"
						class="profile_switcher" style="text-decoration: none;">
						<img src="<?php echo $this->crud_model->get_image_url_of_user('user2');?>" class="profile_switcher_img" />
						<br>
						<span class="fa-stack fa-sm profile_switcher_edit">
						<i class="fa fa-square-o fa-stack-2x"></i>
						<i class="fa fa-pencil fa-stack-1x"></i>
						</span>
						<?php echo $this->crud_model->get_username_of_user('user2');?>
					</a>
				</td>
				<?php endif;?>
				<?php
					if ($current_plan_id == 3):
					?>
				<td>
					<a href="<?php echo base_url();?>index.php?browse/editprofile/user3"
						class="profile_switcher" style="text-decoration: none;">
						<img src="<?php echo $this->crud_model->get_image_url_of_user('user3');?>" class="profile_switcher_img" />
						<br>
						<span class="fa-stack fa-sm profile_switcher_edit">
						<i class="fa fa-square-o fa-stack-2x"></i>
						<i class="fa fa-pencil fa-stack-1x"></i>
						</span>
						<?php echo $this->crud_model->get_username_of_user('user3');?>
					</a>
				</td>
				<?php endif;?>
				<?php
					if ($current_plan_id == 3):
					?>
				<td>
					<a href="<?php echo base_url();?>index.php?browse/editprofile/user4"
						class="profile_switcher" style="text-decoration: none;">
						<img src="<?php echo $this->crud_model->get_image_url_of_user('user4');?>" class="profile_switcher_img" />
						<br>
						<span class="fa-stack fa-sm profile_switcher_edit">
						<i class="fa fa-square-o fa-stack-2x"></i>
						<i class="fa fa-pencil fa-stack-1x"></i>
						</span>
						<?php echo $this->crud_model->get_username_of_user('user4');?>
					</a>
				</td>
				<?php endif;?>
			</tr>
		</table>
		<br>
		<a href="<?php echo base_url();?>index.php?browse/switchprofile" class="profile_manage_done"><?php echo get_phrase('DONE');?></a>
	</div>
</div>
