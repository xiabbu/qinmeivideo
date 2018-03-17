<?php
/*
Template Name: Tag分类
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
  <div class="row">
    
		<?php 
 		$general_options = get_option('ashuwp_general');
        $the_query = new WP_Query(array(
                                        'orderby' => 'modified',
                                      	'tag_id'=>$general_options['page_select_tag'],
  										'post_type' => 'page'
                                      );
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