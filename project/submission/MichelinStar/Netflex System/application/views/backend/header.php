<div class="row" style="margin-left:0px; margin-right:0px; margin-top: 20px;">
    <div class="col-md-12 col-sm-12 clearfix " style="background-color:#ffffff; box-shadow: 0px 10px 30px 0px rgba(82,63,105,0.08); border-radius: 5px;">
        <!-- <ul class="list-inline links-list pull-left" style="margin-top:9px;">
            <li>
                <a href="#" target="_blank">
                    <i class="entypo-paper-plane"></i> Website
                </a>
            </li>
        </ul> -->
        <!-- Profile Info -->
        <ul class="list-inline links-list pull-left" style="margin-top:9px;">
            <li>
                <a href="<?php echo site_url();?>" target="_blank">
                    <i class="entypo-paper-plane"></i> Website
                </a>
            </li>
        </ul>
        <ul class="user-info pull-right pull-none-xsm" style="margin-top: 9px;">
            <li class="profile-info dropdown pull-right"><!-- add class "pull-right" if you want to place this from right -->
                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url();?>assets/backend/images/admin.png" alt="" class="img-circle" width="44">
                    <?php
                        $user_id    =   $this->session->userdata('user_id');
                        $user_detail = $this->db->get_where('user',array('user_id'=>$user_id))->row();
                     ?>
                    <?php echo $user_detail->name;?> 
                    

                    <div style="margin-top: -15px;
                                font-size: 10px;
                                text-align: left;
                                padding-left: 53px;
                                color: #707696;">
                        <p style="<?php if($this->session->userdata('login_type') == 1) echo 'margin-top: 0px'; ?>">
                            <?php if($user_detail->type == 1) echo 'Admin';?>
                        </p>
                    </div>
                </a>
                
                <ul class="dropdown-menu">
                    
                    <!-- Reverse Caret -->
                    <li class="caret"></li>
                    
                    <!-- Profile sub-links -->
                    <li>
                        <a href="<?php echo base_url();?>" class="dropdown-item notify-item" target="_blank">
                            <i class="fa fa-arrow-right"></i>
                            <span><?php echo get_phrase('view_frontend'); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php?admin/account" class="dropdown-item notify-item">
                            <i class="fa fa-lock"></i>
                            <span><?php echo get_phrase('my_account'); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php?home/signout" class="dropdown-item notify-item">
                            <i class="fa fa-sign-out"></i>
                            <span><?php echo get_phrase('logout'); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>