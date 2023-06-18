<div class="col-lg-12" id="movie_div">
<!-- Video player generator starts -->
	<?php
	 if (video_type($row['url']) == 'youtube'): ?>
		<!------------- PLYR.IO ------------>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

		<div class="plyr__video-embed" id="player">
		    <iframe class="movie_player" src="<?php echo $row['url'];?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
		</div>

		<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
		<script>const player = new Plyr('#player');</script>
		<!------------- PLYR.IO ------------>
	<?php elseif (video_type($row['url']) == 'vimeo'):
		$vimeo_video_id = get_vimeo_video_id($row['url']); ?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

		<div class="plyr__video-embed" id="player">
		    <iframe class="movie_player" src="https://player.vimeo.com/video/<?php echo $vimeo_video_id; ?>?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allowtransparency allow="autoplay"></iframe>
		</div>

		<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
		<script>const player = new Plyr('#player');</script>
	<?php elseif (video_type($row['url']) == 'drive'): ?>

		<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">
		<?php
		//video id generate
		$url_array_1 = explode("/",$row['url'].'/');
		$url_array_2 = explode("=",$row['url']);
		$video_id = null;

		if($url_array_1[4] == 'd'):
			$video_id = $url_array_1[5];
		else:
			$video_id = $url_array_2[1];
		endif; ?>

		<div class="plyr__video-embed" id="player">
			<div class="hidebtn"></div>
			<iframe class="mobile_vedio_player" src="https://drive.google.com/file/d/<?php echo $video_id; ?>/preview" style="border: 0px;" allowfullscreen></iframe>
			<!-- <video class="mobile_vedio_player_html" controls>
				<source src="https://drive.google.com/uc?export=download&id=<?php echo $video_id; ?>" type='video/mp4'>
			</video> -->
		</div>
		<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
		<script>const trailer_url = new Plyr('#player');</script>

	<?php else :?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">
		<video class="movie_player" poster="<?php echo $this->crud_model->get_thumb_url('movie' , $row['movie_id']);?>" id="player" playsinline controls>
		<?php if (get_video_extension($row['url']) == 'mp4'): ?>
			<source src="<?php echo $row['url']; ?>" type="video/mp4">
		<?php elseif (get_video_extension($row['url']) == 'webm'): ?>
			<source src="<?php echo $row['url']; ?>" type="video/webm">
		<?php else: ?>
			<h4><?php get_phrase('video_url_is_not_supported'); ?></h4>
		<?php endif; ?>

		<?php
			$captions = $this->db->get_where('subtitle', array('movie_id' => $movie_id))->result_array();
			foreach($captions as $caption){
		?>

			<!--vedio subtitle-->
			<track kind="captions" label="<?php echo $caption['language'] ?>" src="<?php echo base_url('assets/global/movie_caption/'.$caption['file']); ?>" default>
		<?php
			}
		?>
		</video>
		<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
		<script>const player = new Plyr('#player');</script>

		<!--Start Progress Bar-->
		<?php
			$progreses = $this->db->get_where('progress', array('user_id' => $user_id, 'movie_id' => $row['movie_id'], 'active_user' => $active_user));
			$progress_value = 0;
			if($progreses->num_rows() > 0){
				$progress = $progreses->row();
				$progress_value = $progress->progress_value;
			}
		?>
		<script>
			var counter = 0;
			player.on('canplay', event => {

				if (counter == 0) {
						
				    console.log('player now loaded');
				    player.currentTime = <?php echo $progress_value; ?>;
				    console.log('video time updated');
				}
			    counter++;
			    
			});
			/*$('document').ready(function(){
				player.currentTime = <?php echo $progress_value; ?>
			});*/

			var vid = document.getElementById("player");
			
			vid.onprogress = function() {
				if(player.currentTime != 0){
			 		$.ajax({
						url: '<?php echo base_url().'index.php?browse/movie_progress/'.$user_id.'/'.$row['movie_id'].'/'; ?>' + player.currentTime + '<?php echo '/'.$active_user; ?>'
					});
			 	}
			};
		</script>
		<!--End Progress Bar-->


	<?php endif; ?>
	<!-- Video player generator ends -->

	<?php
	if(video_type($row['url']) == 'vimeo' || video_type($row['url']) == 'youtube'):
		$iframe_embed = $this->crud_model->is_iframe($row['url']);
		if ($iframe_embed == true): ?>
		<!-- loads iframe embed option as video player -->
		<style>
		.intrinsic-container {
		  position: relative;
		  height: 0;
		  overflow: hidden;
		}

		/* 16x9 Aspect Ratio */
		.intrinsic-container-16x9 {
		  padding-bottom: 56.25%;
		}

		/* 4x3 Aspect Ratio */
		.intrinsic-container-4x3 {
		  padding-bottom: 75%;
		}

		.intrinsic-container iframe {
		  position: absolute;
		  top:0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		}
		</style>
		<?php endif;?>
	<?php endif;?>
</div>
<style>
	.hidebtn {
	  width: 110px;
	  height: 70px;
	  background: #00000000;
	  position: absolute;
	  right: 13px;
	  top: 8px;
	}
</style>