<?php
	$movie_detail = $this->db->get_where('movie',array('movie_id'=>$movie_id))->row();
?>

<div class="row">
    <div class="col-md-6">
    	<form method="post" action="<?php echo base_url();?>index.php?admin/movie_edit/<?php echo $movie_id;?>" enctype="multipart/form-data">
	        <div class="panel panel-primary">
	        	<div class="panel-heading">
	        		<div class="panel-title">
	        			Edit Movie
	        		</div>
	        	</div>
	            <div class="panel-body">
					<div class="form-group mb-3">
	                    <label for="simpleinput1">Movie Title</label>
	                    <input type="text" class="form-control" id = "simpleinput1" name="title" value="<?php echo $movie_detail->title;?>">
	                </div>
					<div class="form-group mb-3">
	                    <label for="url">Movie Trailer Url</label>
						<span class="help">- youtube or any hosted video</span>
	                    <input type="text" class="form-control" name="trailer_url" id="trailer_url" value="<?php echo $movie_detail->trailer_url;?>">
	                </div>
					<div class="form-group mb-3">
	                    <label for="url">Video Url</label>
						<span class="help">- youtube or any hosted video</span>
	                    <input type="text" class="form-control" name="url" id="url" value="<?php echo $movie_detail->url;?>">
	                </div>

					<div class="form-group mb-3">
	                    <label for="">Thumbnail</label>
						<span class="help">- icon image of the movie</span>
	                    <input type="file" class="form-control" name="thumb">
	                </div>

					<div class="form-group mb-3">
	                    <label for="">Poster</label>
						<span class="help">- large banner image of the movie</span>
	                    <input type="file" class="form-control" name="poster">
	                </div>

	                <div class="form-group mb-3">
                        <label for="duration">Duration</label>
                        <div class="input-group">

                        	<!--Convert secoend -> H, M, S  -->
                        	<?php
                        		$seconds = $movie_detail->duration % 60;
                        		$minutes = (($movie_detail->duration - $seconds)/60)%60;
                        		$hours	 = intval(($movie_detail->duration / 60) / 60);
                        	?>
                        	
								<input type="text" name="duration" class="form-control timepicker" data-template="dropdown" value="<?php echo $hours . ':' . $minutes . ':' . $seconds; ?>" data-show-seconds="true" data-show-meridian="false" data-minute-step="1" data-second-step="1" placeholder="Hour : Minutes : Seconds" />
								
								<div class="input-group-addon">
									<a href="#"><i class="entypo-clock"></i></a>
								</div>
                        </div>
                    </div>

					<div class="form-group mb-3">
						<label for="description_long">Long description</label>
						<textarea class="form-control" id="description_long" name="description_long" rows="6"><?php echo $movie_detail->description_long;?></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="description_short">Short description</label>
						<textarea class="form-control" id="description_short" name="description_short" rows="6"><?php echo $movie_detail->description_short;?></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="director">Director</label>
						<span class="help">- select single director</span>

						<?php $movie_of_director = $movie_detail->director;?>
						
						<select class="form-control select2" id="director" name="director" required>
							<option value="">Select an Director</option>
							<?php
								$directors	=	$this->db->get('director')->result_array();

								foreach ($directors as $row3):?>
							<option value="<?php echo $row3['director_id'];?>" <?php if( $movie_of_director == $row3['director_id'])echo 'selected';?>>
								<?php echo $row3['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="actors">Actors</label>
						<span class="help">- select multiple actors</span>
						<select class="form-control select2" id="actors" multiple name="actors[]">
							<?php
								$actors	=	$this->db->get('actor')->result_array();
								foreach ($actors as $row2):?>
							<option
								<?php
									$actors	=	$movie_detail->actors;
									if ($actors != '')
									{
										$actor_array	=	json_decode($actors);
										if (in_array($row2['actor_id'], $actor_array))
											echo 'selected';
									}
									?>
								value="<?php echo $row2['actor_id'];?>">
								<?php echo $row2['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="country_id">Country</label>
						<select class="form-control select2" id="country_id" name="country_id" required>
							<?php
								$countries	=	$this->crud_model->get_countries();
								foreach ($countries as $country):?>
								<option value="<?php echo $country['country_id'];?>" <?php if($country['country_id'] == $movie_detail->country_id) echo 'selected'; ?>>
									<?php echo $country['name'];?>
								</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="genre_id">Genre</label>
						<span class="help">- genre must be selected</span>
						<select class="form-control select2" id="genre_id" name="genre_id">
							<?php
								$genres	=	$this->crud_model->get_genres();
								foreach ($genres as $row2):?>
							<option
								<?php if ( $movie_detail->genre_id == $row2['genre_id']) echo 'selected';?>
								value="<?php echo $row2['genre_id'];?>">
								<?php echo $row2['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="year">Publishing Year</label>
						<span class="help">- year of publishing time</span>
						<select class="form-control select2" id="year" name="year">
							<?php for ($i = date("Y"); $i > 2000 ; $i--):?>
							<option
								<?php if ( $movie_detail->year == $i) echo 'selected';?>
								value="<?php echo $i;?>">
								<?php echo $i;?>
							</option>
							<?php endfor;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="rating">Rating</label>
						<span class="help">- star rating of the movie</span>
						<select class="form-control" id="rating" name="rating">
							<?php for ($i = 0; $i <= 5 ; $i++):?>
							<option
								<?php if ( $movie_detail->rating == $i) echo 'selected';?>
								value="<?php echo $i;?>">
								<?php echo $i;?>
							</option>
							<?php endfor;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="featured">Featured</label>
						<span class="help">- featured movie will be shown in home page</span>
						<select class="form-control" id="featured" name="featured">
							<option value="0" <?php if ( $movie_detail->featured == 0) echo 'selected';?>>No</option>
							<option value="1" <?php if ( $movie_detail->featured == 1) echo 'selected';?>>Yes</option>
						</select>
					</div>
					<div class="row mt-3">
			        	<div class="col-md-6 text-center">
							<input type="submit" class="btn btn-success w-100" value="Update Movie">
			        	</div>
			        	<div class="col-md-6 text-center">
			        		<a href="<?php echo base_url();?>index.php?admin/movie_list" class="btn btn-black w-100">Go back</a>
			        	</div>
			        </div>
	            </div>
	        </div>
	    </form>
	</div>
	<div class="col-md-6">
		<div class="panel">
			<div class="panel-body">
				<div class="form-group">
					<label class="form-label">Preview:</label>

					<!-- Video player generator starts -->
					<?php if (video_type($movie_detail->url) == 'youtube'): ?>
						<!------------- PLYR.IO ------------>
						<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

						<div class="plyr__video-embed" id="player">
						    <iframe src="<?php echo $movie_detail->url;?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
						</div>

						<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
						<script>const player = new Plyr('#player');</script>

						<!------------- PLYR.IO ------------>
					<?php elseif (video_type($movie_detail->url) == 'vimeo'):
						$vimeo_video_id = get_vimeo_video_id($movie_detail->url); ?>
						<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

						<div class="plyr__video-embed" id="player">
						    <iframe src="https://player.vimeo.com/video/<?php echo $vimeo_video_id; ?>?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allowtransparency allow="autoplay"></iframe>
						</div>

						<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
						<script>const player = new Plyr('#player');</script>
					<?php elseif (video_type($movie_detail->url) == 'drive'): ?>
		
						<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">
						<?php //video id generate
						$url_array_1 = explode("/",$movie_detail->url.'/');
						$url_array_2 = explode("=",$movie_detail->url);
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
						<video poster="<?php echo $this->crud_model->get_thumb_url('movie' , $movie_detail->movie_id);?>" id="player" playsinline controls>
						<?php if (get_video_extension($movie_detail->url) == 'mp4'): ?>
							<source src="<?php echo $movie_detail->url; ?>" type="video/mp4">
						<?php elseif (get_video_extension($movie_detail->url) == 'webm'): ?>
							<source src="<?php echo $movie_detail->url; ?>" type="video/webm">
						<?php else: ?>
							<h4><?php get_phrase('video_url_is_not_supported'); ?></h4>
						<?php endif; ?>
						</video>

						<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
						<script>const player = new Plyr('#player');</script>
					<?php endif; ?>
					<!-- Video player generator ends -->

				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="panel">
				<div class="panel-body">
					<div class="form-group">
						<label class="form-label">Trailer:</label>

						<!-- Video player generator starts -->
						<?php if (video_type($movie_detail->trailer_url) == 'youtube'): ?>
							<!------------- PLYR.IO ------------>
							<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

							<div class="plyr__video-embed" id="trailer_player">
							    <iframe src="<?php echo $movie_detail->trailer_url;?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
							</div>

							<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
							<script>const trailer = new Plyr('#trailer_player');</script>

							<!------------- PLYR.IO ------------>
						<?php elseif (video_type($movie_detail->trailer_url) == 'vimeo'):
							$vimeo_video_id = get_vimeo_video_id($movie_detail->trailer_url); ?>
							<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">

							<div class="plyr__video-embed" id="trailer_player">
							    <iframe src="https://player.vimeo.com/video/<?php echo $vimeo_video_id; ?>?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allowtransparency allow="autoplay"></iframe>
							</div>

							<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
							<script>const trailer = new Plyr('#trailer_player');</script>
						<?php elseif (video_type($movie_detail->trailer_url) == 'drive'): ?>
		
							<link rel="stylesheet" href="<?php echo base_url();?>assets/global/plyr/plyr.css">
							<?php //video id generate
							$url_array_1 = explode("/",$movie_detail->trailer_url.'/');
							$url_array_2 = explode("=",$movie_detail->trailer_url);
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
							<video poster="<?php echo $this->crud_model->get_thumb_url('movie' , $movie_detail->movie_id);?>" id="trailer_player" playsinline controls>
							<?php if (get_video_extension($movie_detail->trailer_url) == 'mp4'): ?>
								<source src="<?php echo $movie_detail->trailer_url; ?>" type="video/mp4">
							<?php elseif (get_video_extension($movie_detail->trailer_url) == 'webm'): ?>
								<source src="<?php echo $movie_detail->url; ?>" type="video/webm">
							<?php else: ?>
								<h4><?php get_phrase('video_url_is_not_supported'); ?></h4>
							<?php endif; ?>
							</video>

							<script src="<?php echo base_url();?>assets/global/plyr/plyr.js"></script>
							<script>const trailer = new Plyr('#trailer_player');</script>
						<?php endif; ?>
						<!-- Video player generator ends -->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
