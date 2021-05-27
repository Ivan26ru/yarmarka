<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_front", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "#SITE_DIR#/news/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "SHOW_COUNTER",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINK_BLOCK" => "/news/",
		"MESSAGE_404" => "",
		"NAME_BLOCK" => "Новости компонент",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "100",
		"PROPERTY_CODE" => array(
			0 => "FORUM_MESSAGE_CNT",
			1 => "vote_count",
			2 => "rating",
			3 => "vote_sum",
			4 => "FORUM_TOPIC_ID",
			5 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news_front"
	),
	false
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"products_front",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "products_front",
		"DETAIL_URL" => "/tovary/?ELEMENT_ID=#ID#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINK_BLOCK" => "tovary/",
		"MESSAGE_404" => "",
		"NAME_BLOCK" => "Другие товары",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "50",
		"PROPERTY_CODE" => array(0=>"",1=>"city",2=>"price",3=>"sity",4=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"specialists_front",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "specialists_front",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "job",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINK_BLOCK" => "spetsialisty/",
		"MESSAGE_404" => "",
		"NAME_BLOCK" => "Другие специалисты",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"city",2=>"experience",3=>"specialty",4=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br>
<div class="wrc_body wrap_white">
	<div class="on2_wrap">
 <a href="#" class="title18">Другие специалисты</a>
		<div class="smb_container">
			 <?
$filter = Array
(
"GROUPS_ID"=> Array()
);

$arParams["SELECT"] = array("UF_*");
$rsUsers = CUser::GetList(
	($by="id"), 
	($order="desc"), 
	$filter,
	$arParams
);

while($arItem = $rsUsers->GetNext())
{
// echo "<pre>";
// var_dump($arItem);
// echo "</pre>";
$FotoUser = CFile::ShowImage(
	$arItem["PERSONAL_PHOTO"], 
	140, 
	140, 
	"", 
	"", 
	false);
	?>
	<div class="smb_item wrap_silver">
    <div class="smbi_left">
        <div class="smbi_container_img">
            <?php if (!$FotoUser){ ?> <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/img/no_image.jpg" alt="">
            <?php }else{ ?>
            <?=$FotoUser?>
            <?php }; ?>
        </div>
        <a href="" class="gil2_left_add_new btn_white">Написать</a>
    </div>

    <div class="smbi_info">
        <a href="" data-bx-app-ex-href="<?=$arItem[" DETAIL_PAGE_URL"]?>
            " class="smbi_title">
            <?=$arItem["NAME"]."&nbsp".$arItem['LAST_NAME']?></a>
        <div class="bni_raiting">
            <table align="center" class="bx_item_detail_rating">
                <tbody>
                    <tr>
                        <td>
                            <div class="bx_item_rating">
                                <div class="bx_stars_container">
                                    <div id="bx_vo_6_51_1Z70s7_stars" class="bx_stars_bg">
                                    </div>
                                    <div id="bx_vo_6_51_1Z70s7_progr" class="bx_stars_progress" style="width: 0%;">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span id="bx_vo_6_51_1Z70s7_rating" class="bx_stars_rating_votes">( 0 )</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <span class="bni_raiting_time">24.02.2012</span>
        </div>
        <ul class="smb_list">
            <li class="smb_list_li"><span class="smb_list_name">Специальность:</span><a href="#" class="smb_list_value">
                    <?=implode(', ', $arItem['UF_SKILL'])?></a></li>
            <li class="smb_list_li"><span class="smb_list_name">Город:</span><a href="#" class="smb_list_value">
                    <?=$arItem["PERSONAL_CITY"]?></a></li>
            <li class="smb_list_li"><span class="smb_list_name">Опыт работы:</span><a href="#" class="smb_list_value">
                    <?=$arItem["UF_WORK_TIME"]?></a></li>
        </ul>
        <div class="smb_content">
            <p class="bni_text">
                <?=$arItem["PREVIEW_TEXT"]?>
            </p>
        </div>
        <div class="bni_soc_info">
            <span class="bni_like">115</span> <span class="bni_repost">0</span> <span class="bni_comments">0</span> <span class="bni_views">1250</span>
        </div>
    </div>
</div>
<!-- .smb_item -->
<!-- .bni_item -->
 <? }; ?>
		</div>
	</div>
	 <!-- .on2_wrap -->
</div>
 <br><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>