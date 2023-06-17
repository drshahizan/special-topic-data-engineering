<div class="col-lg-12 hidden" id="trailer_div">

<!-- Video player generator starts -->
<?php if (video_type($row['trailer_url']) == 'youtube'): ?>
	<!------------- PLYR.IO ------------>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

	<div class="plyr__video-embed" id="trailer_url">
	    <iframe src="<?php echo $row['trailer_url'];?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
	</div>

	<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
	<script>const trailer_url = new Plyr('#trailer_url');</script>
	<!------------- PLYR.IO ------------>
<?php elseif (video_type($row['trailer_url']) == 'vimeo'):
	$vimeo_video_id = get_vimeo_video_id($row['trailer_url']); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

	<div class="plyr__video-embed" id="trailer_url">
	    <iframe src="https://player.vimeo.com/video/<?php echo $vimeo_video_id; ?>?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allowtransparency allow="autoplay"></iframe>
	</div>

	<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
	<script>const trailer_url = new Plyr('#trailer_url');

	</script>
<?php elseif (video_type($row['trailer_url']) == 'drive'): ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">
	<?php
	//video id generate
	$url_array_1 = explode("/",$row['trailer_url'].'/');
	$url_array_2 = explode("=",$row['trailer_url']);
	$video_id = null;

	if($url_array_1[4] == 'd'):
		$video_id = $url_array_1[5];
	else:
		$video_id = $url_array_2[1];
	endif; ?>

	<div class="plyr__video-embed" id="player">
		<iframe class="mobile_vedio_player" src="https://drive.google.com/file/d/<?php echo $video_id; ?>/preview" style="border: 0px;" allowfullscreen></iframe>
		<!-- <video class="mobile_vedio_player_html" controls>
			<source src="https://drive.google.com/uc?export=download&id=<?php echo $video_id; ?>" type='video/mp4'>
		</video> -->
	</div>
	<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
	<script>const trailer_url = new Plyr('#trailer_url');</script>
<?php else :?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">
	<video poster="<?php echo $this->crud_model->get_thumb_url('movie' , $row['movie_id']);?>" id="trailer_url" playsinline controls>
	<?php if (get_video_extension($row['trailer_url']) == 'mp4'): ?>
		<source src="<?php echo $row['trailer_url']; ?>" type="video/mp4">
	<?php elseif (get_video_extension($row['trailer_url']) == 'webm'): ?>
		<source src="<?php echo $row['trailer_url']; ?>" type="video/webm">
	<?php else: ?>
		<h4><?php get_phrase('video_url_is_not_supported'); ?></h4>
	<?php endif; ?>
	</video>

	<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
	<script>const trailer_url = new Plyr('#trailer_url');</script>
<?php endif; ?>
<!-- Video player generator ends -->
<?php
	if(video_type($row['trailer_url']) == 'vimeo' || video_type($row['trailer_url']) == 'youtube'):
		$iframe_embed = $this->crud_model->is_iframe($row['trailer_url']);
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