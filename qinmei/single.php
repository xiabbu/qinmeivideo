<?php get_header(); ?>
<!-- Column 1 /Content -->
	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<?php
		$current_category=get_the_category();//获取当前文章所属分类ID
		$now_cat = get_category_parents($current_category[0],false,'</a></div>
  						<div class="video-title-block"><a>');
		$prev_post = get_previous_post($current_category,'');//与当前文章同分类的上一篇文章
		$next_post = get_next_post($current_category,'');//与当前文章同分类的下一篇文章
	?>
<div class="col-md-12 video-title">
						<div class="video-title-block"><a href="<?php bloginfo('url'); ?>">主页</a></div>
						<div class="video-title-block"><a class="page-link"><?php echo $now_cat; ?><?php the_title(); ?></a></div>
					</div>
					<div class="col-md-12 margin-top">
						<div class="video-html5">
							 <video  id="video1" class="video-js vjs-big-play-centered" data-setup="{}">
                              <source src="<?php $path = get_the_content();echo $path; ?>" type='video/mp4'>
                          	 </video>
                          		<div class="smallicon smallicon-volume">
                                    <div class="icon-image">
                                        <img src="<?php bloginfo('template_url'); ?>/images/volume-up.svg" alt="">
                                    </div>
                                    <div class="volumn-bar">
                                        <div class="volumn-show">
                                        </div>
                                    </div>
                                </div>
                          <div class="url-content" style="display:none"><?php echo get_the_content(); ?></div>
						</div>
					</div>

					<div class="col-md-12 margin-top video-nav-bar">
                      <?php if (!empty( $prev_post )): ?>
						<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><div class="video-nav button-left"><i><</i><p><?php echo $prev_post->post_title; ?></p></div></a><?php endif; ?>
                      <?php if (!empty( $next_post )): ?>
						<a href="<?php echo get_permalink( $next_post->ID ); ?>"><div class="video-nav button-right"><p><?php echo $next_post->post_title; ?></p><i>></i></div></a>
					</div><?php endif; ?>
                      
<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>	