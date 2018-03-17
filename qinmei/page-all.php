<?php
/*
Template Name: 所有番剧
*/
?>
<?php get_header(); ?>
<!-- Column 1 / Content -->
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>

<div class="col-md-12 video-title">
	<div class="video-title-block"><a href="<?php bloginfo('url'); ?>">主页</a></div>
	<div class="video-title-block"><a><?php the_title(); ?></a></div>
</div>

<div class="col-md-12 margin-top">
  <div class="row index-category">
								<div class="col-md-2 col-xs-4">
									<a href="<?php bloginfo('url'); ?>/Fun"><div class="index-category-list text-center">
										<p>搞笑</p>
									</div></a>
								</div>
								<div class="col-md-2 col-xs-4">
									<a href="<?php bloginfo('url'); ?>/Fight"><div class="index-category-list text-center">
										<p>战斗</p>
									</div></a>
								</div>
								<div class="col-md-2 col-xs-4">
									<a href="<?php bloginfo('url'); ?>/Daily"><div class="index-category-list text-center">
										<p>日常</p>
									</div></a>
								</div>
								<div class="col-md-2 col-xs-4">
									<a href="<?php bloginfo('url'); ?>/Thriller"><div class="index-category-list text-center">
										<p>致郁</p>
									</div></a>
								</div>
								<div class="col-md-2 col-xs-4">
									<a href="<?php bloginfo('url'); ?>/Cry"><div class="index-category-list text-center">
										<p>治愈</p>
									</div></a>
								</div>
								<div class="col-md-2 col-xs-4">
									<a href="<?php bloginfo('url'); ?>/World"><div class="index-category-list text-center">
										<p>异界</p>
									</div></a>
								</div>
							</div>
  
  <div class="row margin-top">
    
		<?php 
        $the_query = new WP_Query( array( 'post_type' => 'page','orderby' => 'title','category__not_in' => array( 168 )));?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 xs-margin-bottom">
					<a href="<?php the_permalink() ?>"><div class="index-table-list"><img src="<?php the_post_thumbnail_url(thumbnail); ?>" alt=""></div></a>
										<p class="index-table-list-title text-center"><?php the_title(); ?></p>	
				</div>						
                  <?php endwhile; ?>
             <?php wp_reset_postdata();; ?> 
</div>
</div>
		
  						
<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>