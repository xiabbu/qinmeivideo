<?php get_header(); ?>
<!-- Column 1 / Content -->
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="col-md-12 video-title">
	<div class="video-title-block"><a href="<?php bloginfo('url'); ?>">主页</a></div>
	<div class="video-title-block"><a><?php the_title(); ?></a></div>
</div>

<div class="col-md-12 margin-top-10">
  <div class="page-main-pic">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
	</div>
</div>



<div class="col-md-12 margin-top p16">
	<?php the_content(); ?>
</div>

<div class="col-md-12 margin-top margin-bottom">
		<div class="row border page-playlist">
				<div class="col-md-12 index-underline page-cat-num">
                  <div class="page-cat-num-con">
                     <?php $meta_value = get_post_meta($post->ID,'page_cat',true);
$categories_shop = get_categories(array(
		'child_of' => $meta_value,
		'orderby' => 'id',
		'order' => 'ASC',
		'hide_empty' => 1,
		'hierarchical' => 1,
		'exclude' => '',
		'include' => '',
		'number' => '',
		'taxonomy' => 'category',
		'pad_counts' => false
	));
foreach($categories_shop as $category) {
  $page_cat_arr[] = $category->cat_ID;
  $page_cat_title_arr[] = $category->cat_name;
};?>
                  <?php foreach($page_cat_title_arr as $page_cat_title){ ?>
						<div class="col-md-2 col-sm-2 col-xs-2 no-padding">
								<div class="text-center index-hot-play">
									 <?php	echo $page_cat_title;?>
								</div>
								<div class="index-trangle center-block"></div>
						</div>
                  <?php	} ?>
                    </div>
				</div>

		<div class="col-md-12 margin-top-30 index-play-page page-display">		

         <?php foreach($page_cat_arr as $page_cat){ ?>
            <div class="row">
				<?php query_posts("cat=$page_cat&orderby=title&order=ASC&posts_per_page=-1");?>
                  <?php while (have_posts()) : the_post(); ?>
					<div class="col-md-2 col-sm-2 col-xs-3">
						<a href="<?php the_permalink() ?>">
                    		<div class="playlist-border"><p><?php the_title(); ?></p></div>
                    	</a>
					</div>
            <?php endwhile; ?>
			</div>
           <?php wp_reset_query(); ?> 
         <?php } ?> 	
    </div>
</div>
</div>
<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>