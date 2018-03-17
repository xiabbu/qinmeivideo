<?php get_header(); ?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<div class="col-md-12">
  <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <input class="search-kuang" type="text" placeholder="serach" name="s" autocomplete="off">
</form>
						</div>
						<div class="col-md-8">
							<div class="main-pic-container">
								<div class="main-picture">
									<ul>
                                      
                                      <?php
					 $general_options = get_option('ashuwp_general');
					$query_post = array(
                                        'orderby' => 'rand',
                                      	'tag_id'=>$general_options['index_roll_tag'],
                      					'showposts' => $general_options['index_roll_num'],
  										'post_type' => 'page'
                                      );
                                      query_posts($query_post);
                                      ?>
<?php while(have_posts()):the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" ></a></li>
                                      <?php endwhile; ?>
<?php
wp_reset_query();?>
                                    
									</ul>
								</div>
								<div class="main-list">
									<ul>
									</ul>
								</div>
							</div>
						</div>
                          
						<div class="col-md-4" style="margin-top:14px">
							<div class="row row-left" >
                              <?php 
        $the_query = new WP_Query( array( 'post_type' => 'page',
                                         'tag'=>'top',
                                        'orderby' => 'rand',
                                         'showposts' => 8 ));?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 list-left">
										<a href="<?php the_permalink() ?>"><div class="main-side-list"><img src="<?php the_post_thumbnail_url(thumbnail); ?>" alt=""><p><?php the_title(); ?></p></div></a>
									</div>
								<?php endwhile; ?>
					
             <?php wp_reset_postdata();; ?> 	
							</div>	
						</div>
                          
						<div class="col-md-12 margin-top">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-6 index-title" style="padding-right: 0"><a><?php  $general_options = get_option('ashuwp_general');echo $general_options['index_hot_title']; ?></a></div>
								<div class="col-md-8 col-sm-8 hidden-xs index-underline index-hot-js-width">
                                   <?php 
                                     $general_options = get_option('ashuwp_general');
                                    foreach($general_options['index_hot_modules'] as $hot) {?>
									<div class="col-md-3 col-sm-3">
										<div class="text-center index-hot-play">
											<?php echo $hot['index_hot_list_title'];?>
										</div>
										<div class="index-trangle center-block"></div>
									</div>
								<?php }; ?> 
								</div>
								<div class="col-md-2 col-sm-2 col-xs-6 index-button"><a href="<?php  $general_options = get_option('ashuwp_general');echo $list['index_hot_link']; ?>">查看更多<span style="display:none"><?php echo $list['index_modules_color']; ?></span></a></div>
							</div>
						</div>
                            
						<div class="col-md-12 margin-top index-play-page index-play hidden-xs">
                           <?php 
                               $general_options = get_option('ashuwp_general');
                                    foreach($general_options['index_hot_modules'] as $hot) {?>
							<div class="row">
                               <?php 
        $the_query = new WP_Query( array( 'post_type' => 'page',
                                         'tag_id'=>$hot['index_hot_tag'],
                                         'showposts' => $hot['index_hot_list_num'],
                                        'orderby' => 'modified'
                                        ));?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
										<a href="<?php the_permalink() ?>">
                                          <div class="index-table-list">
                                            <img src="<?php the_post_thumbnail_url(thumbnail); ?>" alt="">
                                            <?php if(get_post_meta($post->ID,"new",true)){
          										echo'<p class="index-left-top">'.get_post_meta($post->ID,"new",true).'</p>';
        										};?>
                                          </div>
                                      	</a>
										<p class="index-table-list-title text-center"><?php the_title(); ?></p>	
									</div>
									<?php endwhile; ?>
             						<?php wp_reset_postdata();; ?> 
							</div>
						<?php }; ?> 
						</div>
                          
                    <div class="col-md-12 margin-top index-play-page index-play visible-xs-*">
                          <div class="row">
    
		<?php 
        $the_query = new WP_Query( array( 'post_type' => 'page','orderby' => 'modified','showposts' => 8,'tag'=> 'hot1,hot2,hot3,hot4'));?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
										<a href="<?php the_permalink() ?>"><div class="index-table-list"><img src="<?php the_post_thumbnail_url(thumbnail); ?>" alt=""><p class="index-left-top"><?php echo get_post_meta($post->ID,"new",true);?></p></div></a>
										<p class="index-table-list-title text-center"><?php the_title(); ?></p>	
									</div>				
                  <?php endwhile; ?>
					
             <?php wp_reset_postdata();; ?> 
                          </div>
                          </div>
 <?php 
 $general_options = get_option('ashuwp_general');
foreach($general_options['index_modules'] as $list) {?>
                           <div class="col-md-12 margin-top index-color-setting">
							<div class="row">
								<div class="col-md-2 col-xs-6 index-title"><a style="color:<?php echo $list['index_modules_color']; ?>"><?php echo $list['index_modules_title']; ?></a></div>
								<div class="col-md-8"></div>
								<div class="col-md-2 col-xs-6 index-button"><a style="color:<?php echo $list['index_modules_color']; ?>;border: 1px solid <?php echo $list['index_modules_color']; ?>;" href="<?php echo $list['index_modules_link']; ?>">查看更多<span style="display:none"><?php echo $list['index_modules_color']; ?></span></a></div>
						    </div>
                          <div class="row margin-top row-left">
									<?php 
        $the_query = new WP_Query( array( 'post_type' => 'page',
                                         'showposts' => $list['index_modules_num'],
                                         'tag_id'=>$list['index_modules_tag'],
                                        'orderby' => 'time'
                                        ));?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
									<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 list-left">
										<a href="<?php the_permalink() ?>"><div class="index-table-list"><img src="<?php the_post_thumbnail_url(thumbnail); ?>" alt=""></div></a>
										<p class="index-table-list-title text-center"><?php the_title(); ?></p>	
									</div>
									<?php endwhile; ?>
             						<?php wp_reset_postdata(); ?> 
							</div>
                          </div>
<?php }; ?> 
                          
<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>