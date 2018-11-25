<?php global $redux_demo; ?>
<div class="main_content_bottom_area fix column">
	<div class="main_content_bottom">
	
		<?php if($redux_demo['photo-gallery-switch'] ==1 && $redux_demo['photo-gallery-slider']) : ?>
		<div class="single_main_content_bottom floatleft">
			<h2><?php _e('Our Photo Gallery', 'edu_text_domain');?></h2>
			<div class="photos_gallery" id="photos_gallery">	
				<?php if($redux_demo['photo-gallery-slider']) : ?>
				<?php 
					$photoslider = $redux_demo['photo-gallery-slider'];
					foreach ($photoslider as $photo_gallery_slider) {
						echo '<div class="item"><img title="'.$photo_gallery_slider['title'].'" src="'.$photo_gallery_slider['image'].'" alt="'.$photo_gallery_slider['title'].'"></div>';
					}
				?>						
				<?php endif; ?>
			</div>
			<a href="<?php echo $redux_demo['photo-gallery-more-link']?>" class="photos_gallery_readmore"><?php _e('More Photos', 'edu_text_domain');?></a>
		</div>
		<?php endif; ?>
		
		<?php if($redux_demo['video-gallery-switch'] == 1 && $redux_demo['video-gallery-slider']) : ?>
		<div class="single_main_content_bottom floatright">
			<h2><?php _e('Our Videos Gallery', 'edu_text_domain');?></h2>
			<div class="single_main_content_video" id="videos_gallery">
				<?php if ($redux_demo['video-gallery-slider']) : ?>
				<?php 
					$videoslider = $redux_demo['video-gallery-slider'];
					foreach ($videoslider as $video_gallery_slider) {
						echo '<div class="item"><iframe src="https://www.youtube.com/embed/'.$video_gallery_slider['url'].'" frameborder="0" allowfullscreen></iframe></div>';
					}
				?>	
				<?php endif; ?>
			</div>
			<a href="<?php echo $redux_demo['video-gallery-more-link']; ?>" class="photos_gallery_readmore"><?php _e('More Videos', 'edu_text_domain');?></a>
		</div>
		<?php endif; ?>
		
	</div>
</div>