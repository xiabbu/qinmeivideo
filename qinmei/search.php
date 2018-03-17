<?php
/**
 * The template for displaying search results pages.
 *
 */

get_header(); ?>
<!-- Column 1 / Content -->

<div class="col-md-12 video-title">
	<div class="video-title-block"><a href="<?php bloginfo('url'); ?>">主页</a></div>
</div>

<div class="col-md-12 margin-top">
  <div class="row">
    
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 xs-margin-bottom">
					<a href="<?php the_permalink() ?>"><div class="index-table-list"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div></a>
										<p class="index-table-list-title text-center"><?php the_title(); ?></p>	
				</div>			
				<?php
			endwhile;

		else :
			echo'<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 xs-margin-bottom">暂无结果</div>';

		endif;
		?>
							
                 
</div>
<?php get_footer(); ?>