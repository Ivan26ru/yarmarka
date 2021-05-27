<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if ($arResult["NEED_AUTH"] == "Y")
{
    $APPLICATION->AuthForm("");
}
elseif (strlen($arResult["FatalError"]) > 0)
{
    ?><span class='errortext'><?=$arResult["FatalError"]?></span><br /><br /><?
}
else
{
    if(strlen($arResult["ErrorMessage"])>0)
    {
        ?><span class='errortext'><?=$arResult["ErrorMessage"]?></span><br /><br /><?
    }

    ?>
<div class=" sidebar_left grid-sidebar_left ">
    <div class="wrap_left wrap_white">

    
    <div class="sl_user_info">
        <p class="slui_user_fio">
            <span class="slui_user_fio_name"><?=$arResult["User"]["NAME"]?></span>
            <span class="slui_user_fio_family"><?=$arResult["User"]["LAST_NAME"]?></span>
        </p>
        <div class="slui_avatar">
            <div class="slui_avatar_wrap">
                <div class="slui_avatar_container">
                    <!-- <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/avatar.png" alt=""> -->
                            <?=$arResult["User"]["PersonalPhotoImg"]?>
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
                <li><a href="#" class="slui_mgs">Мои сообщения<span class="slui_number">
                     <!-- messages -->
<?$arFilter = array(
      "TO_USER_ID" => $GLOBALS["USER"]->GetID(),
      "DATE_VIEW" => "",
      "TO_DELETED" => "N"
   );
      
$dbUserRequests = CSocNetMessages::GetList(
   array(),
   $arFilter,
   array("TO_USER_ID"),
   false,
   array("COUNT" => "ID")
);
if ($arUserRequests = $dbUserRequests->Fetch())
{
$arResult["ITEMS_TOTAL"] += intval($arUserRequests["CNT"]);
$arResult["ITEMS_MESSAGES"] += intval($arUserRequests["CNT"]);
}

// var_dump($arResult["ITEMS_MESSAGES"]);
?>
<!-- .messages -->
                </span></a></li>
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
 <!-- gallery -->
 <?
// if ($arParams["FATAL_ERROR"] == "Y"):
//     if (!empty($arParams["ERROR_MESSAGE"])):
//         ShowError($arParams["ERROR_MESSAGE"]);
//     else:
//         ShowNote($arParams["NOTE_MESSAGE"], "notetext-simple");
//     endif;
//     return false;
// endif;

?>

<?
// $result = $APPLICATION->IncludeComponent(
//     "bitrix:photogallery.user",
//     "",
//     Array(
//         "IBLOCK_TYPE" => $arParams["PHOTO_USER_IBLOCK_TYPE"],
//         "IBLOCK_ID" => $arParams["PHOTO_USER_IBLOCK_ID"],
//         "PAGE_NAME" => "INDEX",
//         "USER_ALIAS" => $arResult["VARIABLES"]["GALLERY"]["CODE"],
//         "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
//         "PERMISSION" => $arResult["VARIABLES"]["PERMISSION"],

//         "SORT_BY" => $arParams["PHOTO"]["ALL"]["SECTION_SORT_BY"],
//         "SORT_ORD" => $arParams["PHOTO"]["ALL"]["SECTION_SORT_ORD"],

//         "INDEX_URL" => $arResult["~PATH_TO_USER_PHOTO"],
//         "GALLERY_URL" => $arResult["~PATH_TO_USER_PHOTO"],
//         "GALLERIES_URL" => $arResult["~PATH_TO_USER_PHOTO_GALLERIES"],
//         "GALLERY_EDIT_URL" => $arResult["~PATH_TO_USER_PHOTO_GALLERY_EDIT"],
//         "SECTION_EDIT_URL" => $arResult["~PATH_TO_USER_PHOTO_SECTION_EDIT"],
//         "SECTION_EDIT_ICON_URL" => $arResult["~PATH_TO_USER_PHOTO_SECTION_EDIT_ICON"],
//         "UPLOAD_URL" => $arResult["~PATH_TO_USER_PHOTO_ELEMENT_UPLOAD"],

//         "ONLY_ONE_GALLERY" => $arParams["PHOTO"]["ALL"]["ONLY_ONE_GALLERY"],
//         "GALLERY_GROUPS" => $arParams["PHOTO"]["ALL"]["GALLERY_GROUPS"],
//         "GALLERY_SIZE" => $arParams["PHOTO"]["ALL"]["GALLERY_SIZE"],

//         "RETURN_ARRAY" => "Y",
//         "SET_TITLE" => "N",
//         "SET_NAV_CHAIN" => "N",
//         "CACHE_TYPE" => $arParams["CACHE_TYPE"],
//         "CACHE_TIME" => $arParams["CACHE_TIME"],
//         "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],

//         "GALLERY_AVATAR_SIZE"   =>  $arParams["GALLERY_AVATAR_SIZE"]
//     ),
//     $component,
//     array("HIDE_ICONS" => "Y")
// );
?>
<br />

<?if ($arParams["PERMISSION"] >= "U"):?>
<noindex>
    <div class="photo-top-controls">
        <a rel="nofollow" href="<?=$result["ALL"]["GALLERY"]["LINK"]["~NEW"]?>" onclick="EditAlbum('<?= CUtil::JSEscape($result["ALL"]["GALLERY"]["LINK"]["~NEW"])?>'); return false;"><?=GetMessage("P_ADD_ALBUM")?></a>
        <a rel="nofollow" href="<?=$result["ALL"]["GALLERY"]["LINK"]["UPLOAD"]?>" target="_self"><?=GetMessage("P_UPLOAD")?></a>
    </div>
</noindex>
<?endif;?>

<?
// $APPLICATION->IncludeComponent(
//     "bitrix:photogallery.section.list",
//     "",
//     Array(
//         "IBLOCK_TYPE" => $arParams["PHOTO_USER_IBLOCK_TYPE"],
//         "IBLOCK_ID" => $arParams["PHOTO_USER_IBLOCK_ID"],
//         "BEHAVIOUR" => "USER",
//         "USER_ALIAS" => $arResult["VARIABLES"]["GALLERY"]["CODE"],
//         "PERMISSION" => $arResult["VARIABLES"]["PERMISSION"],
//         "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
//         "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],

//         "SORT_BY" => $arParams["PHOTO"]["ALL"]["SECTION_SORT_BY"],
//         "SORT_ORD" => $arParams["PHOTO"]["ALL"]["SECTION_SORT_ORD"],

//         "DETAIL_URL" => $arResult["~PATH_TO_USER_PHOTO_ELEMENT"],
//         "GALLERIES_URL" => $arResult["~PATH_TO_USER_PHOTO_GALLERIES"],
//         "GALLERY_URL" => $arResult["~PATH_TO_USER_PHOTO"],
//         "SECTION_URL" => $arResult["~PATH_TO_USER_PHOTO_SECTION"],
//         "SECTION_EDIT_URL" => $arResult["~PATH_TO_USER_PHOTO_SECTION_EDIT"],
//         "SECTION_EDIT_ICON_URL" => $arResult["~PATH_TO_USER_PHOTO_SECTION_EDIT_ICON"],
//         "UPLOAD_URL" => $arResult["~PATH_TO_USER_PHOTO_ELEMENT_UPLOAD"],
//         "PAGE_ELEMENTS" => $arParams["PHOTO"]["ALL"]["SECTION_PAGE_ELEMENTS"],
//         "PAGE_NAVIGATION_TEMPLATE" => $arParams["PHOTO"]["ALL"]["PAGE_NAVIGATION_TEMPLATE"],
//         "DATE_TIME_FORMAT" => $arParams["PHOTO"]["ALL"]["DATE_TIME_FORMAT_SECTION"],
//         "ALBUM_PHOTO_THUMBS_SIZE"   =>  $arParams["PHOTO"]["ALL"]["ALBUM_PHOTO_THUMBS_SIZE"],
//         "ALBUM_PHOTO_SIZE"  =>  $arParams["PHOTO"]["ALL"]["ALBUM_PHOTO_SIZE"],
//         "GALLERY_SIZE" => $arParams["PHOTO"]["ALL"]["GALLERY_SIZE"],
//         "CACHE_TYPE" => $arParams["CACHE_TYPE"],
//         "CACHE_TIME" => $arParams["CACHE_TIME"],
//         "SET_TITLE" => ($arResult["VARIABLES"]["SECTION_ID"] > 0 ? $arParams["SET_TITLE"] : "N"),
//         "ADD_CHAIN_ITEM" => "N",
//         "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
//         "DISPLAY_AS_RATING" => $arParams["PHOTO"]["ALL"]["DISPLAY_AS_RATING"],
//         "SHOW_TAGS" => $arParams["SHOW_TAGS"],
//         "USE_COMMENTS" => $arParams["PHOTO"]["ALL"]["USE_COMMENTS"],
//         "SHOW_COMMENTS" => $arParams["PHOTO"]["ALL"]["USE_COMMENTS"],
//         "COMMENTS_TYPE" => $arParams["PHOTO"]["ALL"]["COMMENTS_TYPE"],
//         "MAX_VOTE" => $arParams["PHOTO"]["ALL"]["MAX_VOTE"],
//         "VOTE_NAMES" => $arParams["PHOTO"]["ALL"]["VOTE_NAMES"],
//         "COMMENTS_COUNT" => $arParams["PHOTO"]["ALL"]["COMMENTS_COUNT"],
//         "PATH_TO_SMILE" => $arParams["PHOTO"]["ALL"]["PATH_TO_SMILE"],
//         "FORUM_ID" => $arParams["PHOTO"]["ALL"]["FORUM_ID"],
//         "USE_CAPTCHA" => $arParams["PHOTO"]["ALL"]["USE_CAPTCHA"],
//         "POST_FIRST_MESSAGE" => $arParams["PHOTO"]["ALL"]["POST_FIRST_MESSAGE"],
//         "PREORDER" => $arParams["PHOTO"]["ALL"]["PREORDER"],
//         "SHOW_LINK_TO_FORUM" => "N",
//         "BLOG_URL" => $arParams["PHOTO"]["ALL"]["BLOG_URL"],
//         "PATH_TO_BLOG" => $arParams["PHOTO"]["ALL"]["PATH_TO_BLOG"],
//         "PATH_TO_USER" => $arParams["PHOTO"]["ALL"]["PATH_TO_USER"],
//         "NAME_TEMPLATE" => $arParams["PHOTO"]["ALL"]["NAME_TEMPLATE"],
//         "SHOW_LOGIN" => $arParams["PHOTO"]["ALL"]["SHOW_LOGIN"],
//         "DISPLAY_AS_RATING" => $arParams["PHOTO"]["ALL"]["DISPLAY_AS_RATING"]
//     ),
//     $component,
//     array("HIDE_ICONS" => "Y")
// );
?>

 <!-- .gallery -->



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
<?
}
?>