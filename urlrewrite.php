<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/information/links/([a-zA-Z0-9_]+)/\\?{0,1}(.*)$#',
    'RULE' => '/information/links/index.php?SECTION_CODE=\\1&\\2',
    'ID' => '',
    'PATH' => '',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => '',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  23 => 
  array (
    'CONDITION' => '#^/video/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => 'bitrix:im.router',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/board/([a-zA-Z0-9_]+)/\\?{0,1}(.*)$#',
    'RULE' => '/board/index.php?SECTION_CODE=\\1&\\2',
    'ID' => '',
    'PATH' => '',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/nationalnews/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/nationalnews/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/job/vacancy/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/job/vacancy/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/job/resume/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/job/resume/index.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/profiles/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork',
    'PATH' => '/profiles/index.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#^/social/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork',
    'PATH' => '/social.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/themes/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/themes/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/photo/#',
    'RULE' => '',
    'ID' => 'bitrix:photogallery_user',
    'PATH' => '/photo/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/blogs/#',
    'RULE' => '',
    'ID' => 'bitrix:blog',
    'PATH' => '/blogs/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/forum/#',
    'RULE' => '',
    'ID' => 'bitrix:forum',
    'PATH' => '/forum/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/user/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork',
    'PATH' => '/user/index.php',
    'SORT' => 100,
  ),
  21 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'my:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  22 => 
  array (
    'CONDITION' => '#^/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork',
    'PATH' => '/blog/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork',
    'PATH' => '/uset.php',
    'SORT' => 100,
  ),
);
