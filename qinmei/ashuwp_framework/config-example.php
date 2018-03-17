<?php
/**
*Author: Ashuwp
*Author url: http://www.ashuwp.com
*Version: 6.0
**/

/**
*
*post meta test
*
**/

/**
*
*Tab style
*
**/

$tab_conf = array(
  'title' => 'qinmei设置',
  'id'=>'tab_box',
  'page'=>array('page'),
  'context'=>'normal',
  'priority'=>'low',
  'tab'=>true
);

$tab_meta = array();

/**first tab**/
$tab_meta[] = array(
  'name' => '页面设置',
  'id'   => 'tab_first',
  'type' => 'open'
);

$tab_meta[] = array(
  'name' => '关联目录',
  'id'   => 'page_cat',
  'desc' => '此为详情页专用目录，适合底部有播放集数的',
  'std'  => 'threness',
  'subtype' => 'category',
  'type' => 'select'
);

$tab_meta[] = array(
  'name'    => 'Tag标签',
  'id'      => 'page_select_tag',
  'desc'    => '选中的tag标签下的所有页面循环出现，适合主页模块的拓展，即点击进来展示列表',
  'std'     => 'fourness',
  'subtype' => 'post_tag',
  'type'    => 'select'
);

$tab_box = new ashuwp_postmeta_feild($tab_meta, $tab_conf);


/**
*
*Optinos page
*
**/
/**General options**/
$page_info = array(
  'full_name'  => '主题设置',
  'optionname' => 'general',
  'child'      => false,
  'desc'       => '<a href="http://www.ashuwp.com/framework/down">Ashuwp Framework 5.8</a>',
  'filename'   => 'generalpage'
);

$ashu_options = array();

$ashu_options[] = array(
  'name' => '主页轮播图数量',
  'id'   => 'index_roll_num',
  'desc' => '建议5张左右即可',
  'std' => '5',
  'subtype' => array(
    '1'      => '1',
    '3'    => '3',
    '5' => '5',
    '8'    => '8'
  ),
  'type'    => 'select'
);

$ashu_options[] = array(
  'name'    => '主页轮播图标签',
  'id'      => 'index_roll_tag',
  'desc'    => '',
  'std'     => 'thirdness',
  'subtype' => 'post_tag',
  'type'    => 'select'
);

$ashu_options[] = array(
  'name'    => '轮播图旁置顶标签',
  'id'      => 'index_top_tag',
  'desc'    => '标签内页面最少8个，多于8个将随机出现',
  'std'     => 'thirdness',
  'subtype' => 'post_tag',
  'type'    => 'select'
);
$ashu_options[] = array(
  'name'    => '热播模块标题',
  'id'      => 'index_hot_title',
  'desc'    => '左侧的顶部标题，如站长推荐，最近上架等等',
  'std'     => 'thirdness',
  'std'  => '',
  'type' => 'text'
);

$ashu_options[] = array(
  'name'    => '热播模块链接',
  'id'      => 'index_hot_link',
  'desc' => '按钮点击后跳转的链接',
  'std'  => '',
  'type' => 'text'
);

$ashu_options[] = array(
  'name' => '热播模块设置',
  'id'   => 'index_hot_modules',
  'desc' => '热播模块，可以用来设置按时间更新或者分类等等，在手机上会隐藏中间的分类,分类建议不要超过8个',
  'subtype' => array(
    array(
      'name' => '分节标题',
      'id'   => 'index_hot_list_title',
      'desc' => '可根据更新时间分为一周等等',
      'std'  => '',
      'type' => 'text'
    ),
    array(
      'name' => 'tag分类',
      'id'   => 'index_hot_tag',
      'desc' => '该标签下的页面将会在这展示',
      'std'  => '',
      'subtype' => 'post_tag',
      'type' => 'select'
    ),
    array(
      'name' => '该分节下展示图文数量',
      'id'   => 'index_hot_list_num',
      'desc' => '建议单节不要超过8个',
      'std'  => '',
      'subtype' => array(
        '4'      => '4',
        '8'    => '8',
        '12' => '12',
        '16'    => '16'
        ),
      'type' => 'select'
     ),
  ),
  'multiple' => true,
  'type' => 'group'
);

$ashu_options[] = array(
  'name' => '主页模块添加',
  'id'   => 'index_modules',
  'desc' => '目前只有一种样式，其他的等以后开发',
  'subtype' => array(
    array(
      'name' => '标题',
      'id'   => 'index_modules_title',
      'desc' => '分节的标题',
      'std'  => '',
      'type' => 'text'
    ),
    array(
      'name' => '按钮定向链接',
      'id'   => 'index_modules_link',
      'desc' => '点击后跳转的链接',
      'std'  => '',
      'type' => 'text'
    ),
    array(
      'name' => 'tag分类',
      'id'   => 'index_modules_tag',
      'desc' => '被勾选标签内的页面将会展示在里面',
      'std'  => '',
      'subtype' => 'post_tag',
      'type' => 'select'
    ),
    array(
        'name' => '自定义颜色',
        'id'   => 'index_modules_color',
        'desc' => '标题颜色与按钮颜色一致,格式如#ce669b',
        'std'  => '',
        'type' => 'text'
    ),
    array(
      'name' => '该模块下展示图文数量',
      'id'   => 'index_modules_num',
      'desc' => '',
      'std'  => '',
      'subtype' => array(
        '6'      => '6',
        '12'    => '12',
        '18' => '18',
        '24'    => '24',
        '30'    => '30'
        ),
      'type' => 'select'
     ),
  ),
  'multiple' => true,
  'type' => 'group'
);

$ashu_options[] = array(
  'name' => '底部链接',
  'id'   => 'index_footer_link',
  'desc' => '底部的支持我们链接',
  'std'  => 'https://qinmei.video',
  'type' => 'text'
);

$option_page = new ashuwp_options_feild($ashu_options, $page_info);

