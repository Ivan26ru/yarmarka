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
        <div class=" sidebar_left grid-sidebar_left ">
            <div class="wrap_left wrap_white">
                
            
            <div class="sl_user_info">
                <p class="slui_user_fio">
                    <span class="slui_user_fio_name">Константин</span>
                    <span class="slui_user_fio_family">Константинов</span>
                </p>
                <div class="slui_avatar">
                    <div class="slui_avatar_wrap">
                        <div class="slui_avatar_container">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/avatar.png" alt="">
                            <span class="slui_avatar_info sluai_lvl">1LVL</span>
                            <span class="slui_avatar_info sluai_rajting">1500 / 19 615</span>
                            <span class="slui_avatar_info sluai_new">NEW</span>
                        </div>
                    </div>
                    <a href="#" class="slui_avatar_view-rajting">Посмотреть рейтинг</a>
                </div>
                <div class="slui_list">
                    <ul class="sluil_1">
                        <li><a href="#" class="slui_home">Моя страница<span class="slui_number">99+</span></a></li>
                        <li><a href="#" class="slui_mgs">Мои сообщения<span class="slui_number">99+</span></a></li>
                        <li><a href="#" class="slui_friend">Мои друзья<span class="slui_number">99+</span></a></li>
                        <!-- <li><a href="#" class="slui_people">Мои группы<span class="slui_number">99+</span></a></li> -->
                        <li><a href="#" class="slui_photo">Мои фотографии<span class="slui_number">99+</span></a></li>
                    </ul>
                </div>
                <!-- .slui_list -->
                <div class="slui_list">
                    <ul class="sluil_2">
                        <li><a href="#" class="slui_news">Мои новости<span class="slui_number">99+</span></a></li>
                        <li><a href="#" class="slui_search">Мои вакансии<span class="slui_number">99+</span></a></li>
                        <li><a href="#" class="slui_guitar">Мои товары<span class="slui_number">99+</span></a></li>
                        <li><a href="#" class="slui_book">Мои статьи<span class="slui_number">99+</span></a></li>
                    </ul>
                </div>
                <!-- .slui_list -->
                <div class="slui_list">
                    <ul class="sluil_3">
                        <li><a href="#" class="slui_setting">Личные награды<span class="slui_number">99+</span></a></li>
                    </ul>
                </div>
                <!-- .slui_list -->
            </div>
            <!-- .sl_user_info -->
            <div class="sl_my_reward s_block">
                <p class="sidebar_title">Мои награды<span>8</span></p>
                <div class="slmr_wrap">
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/nagrada.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                </div>
                <!-- .slmr_wrap -->
                <a href="#" class="sidebar_view_all">Посмотреть все</a>
            </div>
            <!-- .sl_my_reward -->

            <div class="sl_my_reward s_block sl_my_photo">
                <p class="sidebar_title">Мои фотографии<span>80</span></p>
                <div class="slmr_wrap">
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/girl2.jpg" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/girl2.jpg" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/girl2.jpg" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/girl2.jpg" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/girl2.jpg" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmr_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/girl2.jpg" alt="">
                    </div>
                    <!-- .slmr_item -->
                </div>
                <!-- .slmr_wrap -->
                <a href="#" class="sidebar_view_all">Посмотреть все</a>
            </div>
            <!-- .sl_my_reward -->
            <div class="sl_my_frends s_block">
                <p class="sidebar_title">Мои друзья<span>144</span></p>
                <div class="slmf_wrap">
                    <div class="slmf_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/avatar1.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmf_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/avatar2.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmf_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/avatar3.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmf_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/avatar1.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmf_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/avatar2.png" alt="">
                    </div>
                    <!-- .slmr_item -->
                    <div class="slmf_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/avatar3.png" alt="">
                    </div>
                </div>
                <!-- .slmr_item -->
                <a href="#" class="sidebar_view_all">Посмотреть все</a>
            </div>
            <!-- .sl_my_frends -->
</div>
        </div> <!-- .sidebar_left -->    	
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
                <ul class="gir_ul">
                    <li class="active"><a href="#">Все новости</a></li>
                    <li><a href="#">Мои</a></li>
                    <li><a href="#">Избранное</a></li>
                </ul>
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