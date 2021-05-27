<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$curPage = $APPLICATION->GetCurPage(true);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru">
<!--<![endif]-->

<head>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/libs/animate/animate.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/fonts.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/grid.css?1571363063">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/main.css?1571363063">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/media.css?1571363063">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/font-awesome.min.css">
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/libs/modernizr/modernizr.js"></script>

	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
<!-- Здесь пишем код -->
    <!-- шапка -->
    <header class="">
        <div class="wrap">
            <div class="wrap-inner">
                <a class="header_logo" href="https://yarmarka.pro/">
                    <img class="header_logo_img" src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.png">
                    <p class="header_logo_text">
                        <span class="header_logo_text_1">ТОПЗВУК</span>
                        <span class="header_logo_text_2">РОССИЯ</span>
                    </p>
                </a>
                <div class="header_center">
                    <form action="#" class="header_search">
                        <input type="submit" value="Поиск в ТопЗвук" id="h_search_topzvuk" class="h_btn_search">
                        <input type="search" name="q" placeholder="Найти людей,новости, блог...">
                    </form>
                </div>

<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"header_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "header_menu"
	),
	false
);?>

                <div class="header_right">
                    <div class="header_right_user">
                        <a class="hru_name">Константин</a>
                        <div class="hru_avatar_container">
                            <img class="hru_avatar_img" src="<?=SITE_TEMPLATE_PATH?>/assets/img/avatar.png" alt="">
                        </div>
                        <span class="hru_btn_down"><i class="fa fa-caret-down" aria-hidden="true" style="font-size: 20px;"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- .шапка --><div class="wrap">
    <div class=" <? echo ($curPage == '/index.php') ? 'grid_index' : 'grid_page';?>">
    	<div class="gp_1">
<?$APPLICATION->IncludeComponent(
	"bitrix:socialnetwork.user_profile", 
	"sidebar_left_2", 
	array(
		"AVATAR_SIZE" => "220",
		"COMPONENT_TEMPLATE" => "sidebar_left_2",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"ID" => "1",
		"ITEMS_COUNT" => "6",
		"PAGE_VAR" => "",
		"PATH_TO_GROUP" => "",
		"PATH_TO_GROUP_CREATE" => "",
		"PATH_TO_GROUP_EDIT" => "",
		"PATH_TO_GROUP_SEARCH" => "",
		"PATH_TO_LOG" => "",
		"PATH_TO_MESSAGES_CHAT" => "",
		"PATH_TO_MESSAGES_USERS_MESSAGES" => "",
		"PATH_TO_MESSAGE_FORM" => "",
		"PATH_TO_SEARCH" => "",
		"PATH_TO_SEARCH_INNER" => "",
		"PATH_TO_USER" => "",
		"PATH_TO_USER_EDIT" => "",
		"PATH_TO_USER_FEATURES" => "",
		"PATH_TO_USER_FRIENDS" => "",
		"PATH_TO_USER_FRIENDS_ADD" => "",
		"PATH_TO_USER_FRIENDS_DELETE" => "",
		"PATH_TO_USER_GROUPS" => "",
		"PATH_TO_USER_SETTINGS_EDIT" => "",
		"PATH_TO_USER_SUBSCRIBE" => "",
		"SET_NAV_CHAIN" => "N",
		"SET_TITLE" => "N",
		"SHORT_FORM" => "N",
		"SHOW_YEAR" => "Y",
		"SONET_USER_FIELDS_SEARCHABLE" => array(
			0 => "LOGIN",
			1 => "NAME",
			2 => "SECOND_NAME",
			3 => "LAST_NAME",
			4 => "PERSONAL_BIRTHDAY",
			5 => "PERSONAL_PROFESSION",
			6 => "PERSONAL_GENDER",
			7 => "PERSONAL_COUNTRY",
			8 => "PERSONAL_STATE",
			9 => "PERSONAL_CITY",
			10 => "PERSONAL_ZIP",
			11 => "PERSONAL_STREET",
			12 => "PERSONAL_MAILBOX",
			13 => "WORK_COMPANY",
			14 => "WORK_DEPARTMENT",
			15 => "WORK_POSITION",
			16 => "WORK_COUNTRY",
			17 => "WORK_STATE",
			18 => "WORK_CITY",
			19 => "WORK_ZIP",
			20 => "WORK_STREET",
			21 => "WORK_MAILBOX",
		),
		"SONET_USER_PROPERTY_SEARCHABLE" => array(
		),
		"USER_FIELDS_CONTACT" => array(
		),
		"USER_FIELDS_MAIN" => array(
		),
		"USER_FIELDS_PERSONAL" => array(
		),
		"USER_PROPERTY_CONTACT" => array(
		),
		"USER_PROPERTY_MAIN" => array(
		),
		"USER_PROPERTY_PERSONAL" => array(
		),
		"USER_VAR" => ""
	),
	false
);?>	
    </div>
    <!-- .gp_1 -->
    	<div class="gp_2">
        	<div class="wr_menu_top wrap_white">
<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
	</div>

    <? if($curPage !== '/index.php'):?>  
     <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"my_breadcrumd", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "my_breadcrumd"
	),
	false
);?>	
<? endif;?>
</div>

<? if($curPage !== '/index.php'):?>  
<!-- info_block -->
<div class="gp_3">
<div class="grid-info wrap_white">
    <div class="gi_line_1">
        <div class="gi_left">
            <div class="gil_container_img">
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/list_icon.png" class="gii_img">
            </div>   
        </div>
        <!-- .gi_left -->
        <div class="gi_right">
                <p class="gir_date"><span class="gir_calendar">Пн</span> 22.05 <a href="#">Календарь новостей</a></p>
                <p class="gir_title"><i class="fa fa-star" aria-hidden="true"></i> Новости <span class="gir_title_number">99+</span></p>
                        <!-- menu -->
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_news", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "menu_news",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_news"
	),
	false
);?>
        <!-- .menu -->
<!--                 <ul class="gir_ul">
                    <li class="active"><a href="#">Все новости</a></li>
                    <li><a href="#">Мои</a></li>
                    <li><a href="#">Избранное</a></li>
                </ul> -->
        </div>
        <!-- .gi_right -->

    </div>


    <div class="gi_line_2">
        <div class="gil2_left">
            <a href="#" class="gil2_left_add_new">Предложите новость</a>
            <p class="gil2_left_add_rajting">Получить <span>+200</span> к рейтингу</p>
        </div>
        <!-- .gil2_left -->

        <div class="gil2_right">
            <div class="gil2_wrap">
                <div class="gil2_item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                </div>
                <!-- .gil2_item -->
                <div class="gil2_item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                </div>
                <!-- .gil2_item -->
                <div class="gil2_item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                </div>
                <!-- .gil2_item -->
                <div class="gil2_item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                </div>
                <!-- .gil2_item -->
                <div class="gil2_item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                </div>
                <!-- .gil2_item -->
                <div class="gil2_item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                </div>
                <!-- .gil2_item -->
            </div>

            <a href="#" class="gil2_right_dostijeniya">Возможные достижения</a>
        </div>
        <!-- .gil2_left -->
    </div>
    <!-- gi_line_2 -->

</div>        
</div>
<!-- .info_block -->
<? endif;?>
<div class="gp_4">
    <div class="container_content">
        <div class="cc_left">