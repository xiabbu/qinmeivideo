<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="Shortcut Icon" href="favicon.ico">
    <link rel="Bookmark" href="favicon.ico">
	<title><?php if ( is_home() ) {
		bloginfo('name'); echo " - "; bloginfo('description');
	} elseif ( is_category() ) {
		single_cat_title(); echo " - "; bloginfo('name');
	} elseif (is_single() ) {
  		$category = get_the_category();
		single_post_title(); echo " - ";echo get_category_parents($category[0],false,'');
	} elseif (is_search() ) {
		echo "搜索结果"; echo " - "; bloginfo('name');
	} elseif (is_404() ) {
		echo '页面未找到!';
  	} elseif (is_page() ) {
  		single_post_title();echo " - "; bloginfo('name');
	} else {
		wp_title('',true);
	} ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<link href="<?php bloginfo('template_url'); ?>/extents/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
<script  src="<?php bloginfo('template_url'); ?>/js/lib/jquery-1.12.0.min.js"></script>
<script  src="<?php bloginfo('template_url'); ?>/js/lib/video.min.js"></script>
<script  src="<?php bloginfo('template_url'); ?>/js/lib/videojs.hotkeys.js"></script>
<script  src="<?php bloginfo('template_url'); ?>/js/lib/sweetalert.min.js"></script>
<script  src="<?php bloginfo('template_url'); ?>/js/lib/touchswipe.js"></script>
<script  src="<?php bloginfo('template_url'); ?>/js/app/qinmei.js"></script>
</head>
<body>
<?php $general_options = get_option('ashuwp_general');var_dump($general_options);?>
  <div class="phone-pic">
		<div class="phone-logo"></div>  
  </div>
	<div class="container">
		<div class="row">
			<div class="col-md-2 hidden-xs hidden-sm nav-sidebar">
				<?php wp_nav_menu(array(            
                  'theme_location' => 'primary',//register_nav_menus()中指定的主键key，跟后台的菜单相对应        
                  'container'=> 'ul',//指定导航菜单的最外层包裹元素,可取值为 div 和 nav ;若不需要该包裹元素可设置其值为false 即可        
                  'container_class' => 'nav-menu',        
                  'container_id'=> '',                   
                  'menu_id'=>'dropdownmenu', //菜单ul标签id        
                  'menu_class' => 'nav-list'        ));      ?>
			</div>
			<div class="col-md-10 main-section">
				<div class="row">