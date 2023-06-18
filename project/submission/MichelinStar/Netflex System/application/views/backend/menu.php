<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo collapse icon -->
        <div id="hide_brand1" class="sidebar-collapse" style="margin-top: 0px;">
            <a href="#" class="sidebar-collapse-icon" onclick="hide_brand1()">
                <i class="entypo-menu"></i>
            </a>
        </div>
        <div id="hide_brand2" style="margin-top: 0px; display: none; float: right;">
            <a href="#" class="sidebar-collapse-icon" onclick="hide_brand2()">
                <i class="entypo-menu"></i>
            </a>
        </div>

        <!--Start custom responsive navigation-->
        <script type="text/javascript">
          window.onresize = doALoadOfStuff;
          function doALoadOfStuff() {
            if($(window).width() < 767){
              $('#hide_brand2').hide();
              $('#hide_brand1').hide();
              $('.custom-query').css("padding-left", "8px");
            }
            if($(window).width() > 767 && $(window).width() < 990){
              $('#hide_brand1').show();
              $('.custom-query').css("padding-left", "85px");
            }
            if($(window).width() > 990 ){
              $('#hide_brand1').show();
              $('.custom-query').css("padding-left", "300px");
            }
          }
          function hide_brand1() {
              $('#branding_element').toggle();
              $('#hide_brand2').show();
              $('#hide_brand1').hide();
              if($(window).width() > 767 && $(window).width() < 990){
                $('.custom-query').css("padding-left", "300px");
              }
              if($(window).width() > 990){
                $('.custom-query').css("padding-left", "85px");
              }
          }
          function hide_brand2() {
              $('#branding_element').toggle();
              $('#hide_brand2').hide();
              $('#hide_brand1').show();
              if($(window).width() > 767 && $(window).width() < 990){
                $('.custom-query').css("padding-left", "85px");
              }
              if($(window).width() > 990){
                $('.custom-query').css("padding-left", "300px");
              }
          }
        </script>
        <!--End custom responsive navigation-->

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>
       <!--- Sidemenu -->
    <div style=""></div>
    <ul id="main-menu" class="">
        <div style="text-align: -webkit-center;" id="branding_element">
          <h4 style="color: #a2a3b7;text-align: -webkit-center;margin-bottom: 25px;font-weight: 300;margin-top: 10px;">
              <a href="#"><img class="nav-icon" src="<?php echo base_url('assets/global/logo.png'); ?>" style="max-height:25px;"></a>
          </h4>
        </div>
           <li class="side-nav-item <?php if ($page_name == 'dashboard')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/dashboard" class="side-nav-link <?php if ($page_name == 'dashboard')echo 'active';?>">
                   <i class="fa fa-tachometer"></i>
                   <span> <?php echo get_phrase('dashboard'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'movie_list' || $page_name == 'movie_edit' || $page_name == 'movie_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/movie_list" class="side-nav-link  <?php if ($page_name == 'movie_list' || $page_name == 'movie_edit' || $page_name == 'movie_create')echo 'active';?>">
                   <i class="fa fa-film"></i>
                   <span> <?php echo get_phrase('movies'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'series_list' || $page_name == 'series_create' || $page_name == 'series_edit' || $page_name == 'season_edit')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/series_list" class="side-nav-link <?php if ($page_name == 'series_list' || $page_name == 'series_create' || $page_name == 'series_edit' || $page_name == 'season_edit')echo 'active';?>">
                   <i class="fa fa-ticket"></i>
                   <span> <?php echo get_phrase('TV_series'); ?> </span>
               </a>
           </li>

           <!-- Blogs -->
          <?php if(addon_status('blog')): ?>
            <li class="<?php if ($page_name == 'blogs' || $page_name == 'add_blog_form' || $page_name == 'edit_blog_form') echo 'opened has-sub'; ?>">
                <a href="#">
                    <i class="fa fa-align-left"></i>
                    <span><?php echo get_phrase('blog'); ?></span>
                </a>
                <ul>
                    <li class="<?php if ($page_name == 'blogs') echo 'active'; ?> ">
                        <a href="<?php echo base_url('index.php?addons/admin_blog'); ?>">
                            <span><?php echo get_phrase('posts'); ?></span>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'add_blog_form') echo 'active'; ?> ">
                        <a href="<?php echo base_url('index.php?addons/admin_blog/blog_form/add'); ?>">
                            <span><?php echo get_phrase('add_new_post'); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
          <?php endif; ?>

            <li class="side-nav-item <?php if ($page_name == 'country' || $page_name == 'genre_edit' || $page_name == 'genre_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/country" class="side-nav-link <?php if ($page_name == 'country' || $page_name == 'genre_edit' || $page_name == 'genre_create')echo 'active';?>">
                   <i class="fa fa-globe"></i>
                   <span> <?php echo get_phrase('country'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'genre_list' || $page_name == 'genre_edit' || $page_name == 'genre_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/genre_list" class="side-nav-link <?php if ($page_name == 'genre_list' || $page_name == 'genre_edit' || $page_name == 'genre_create')echo 'active';?>">
                   <i class="fa fa-renren"></i>
                   <span> <?php echo get_phrase('genre'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'director_list' || $page_name == 'director_edit' || $page_name == 'director_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/director_list" class="side-nav-link <?php if ($page_name == 'director_list' || $page_name == 'director_edit' || $page_name == 'director_create')echo 'active';?>">
                   <i class="fa fa-long-arrow-right"></i>
                   <span> <?php echo get_phrase('directors'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'actor_list' || $page_name == 'actor_edit' || $page_name == 'actor_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/actor_list" class="side-nav-link <?php if ($page_name == 'actor_list' || $page_name == 'actor_edit' || $page_name == 'actor_create')echo 'active';?>">
                   <i class="fa fa-user"></i>
                   <span> <?php echo get_phrase('actors'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'user_list' || $page_name == 'user_edit' || $page_name == 'user_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/user_list" class="side-nav-link <?php if ($page_name == 'user_list' || $page_name == 'user_edit' || $page_name == 'user_create')echo 'active';?>">
                   <i class="fa fa-users"></i>
                   <span> <?php echo get_phrase('users'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'plan_list' || $page_name == 'plan_edit')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/plan_list" class="side-nav-link <?php if ($page_name == 'plan_list' || $page_name == 'plan_edit')echo 'active';?>">
                   <i class="fa fa-shopping-cart"></i>
                   <span> <?php echo get_phrase('membership_package'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'report')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/report" class="side-nav-link <?php if ($page_name == 'report')echo 'active';?>">
                   <i class="fa fa-flag-checkered"></i>
                   <span> <?php echo get_phrase('report'); ?> </span>
               </a>
           </li>    

           <li class="side-nav-item <?php if($page_name == 'account')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/account" class="side-nav-link <?php if($page_name == 'account')echo 'active';?>">
                   <i class="fa fa-lock"></i>
                   <span> <?php echo get_phrase('account'); ?> </span>
               </a>
           </li>
       </ul>
       <div class="clearfix"></div>
   </div>
   <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
