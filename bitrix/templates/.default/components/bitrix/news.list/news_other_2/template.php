<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams *//** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!-- блок прочее -->

    <div class="others_container wrap_white">
        <div class="others_wrap">
            <a href="<?=$arParams["LINK_BLOCK"]?>" class="title18"><?=$arParams["NAME_BLOCK"]?></a>
            <div class="othersw_container">
                <?foreach ($arResult["ITEMS"] as $arElement):?> 
                <div class="onw_item wrap_silver">
                    <div class="onw_container_img">
                        <img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>">
                    </div>

                    <div class="onw_info">
                        <a href="#" class="onw_item_title"><?=$arElement["NAME"]?></a>
                        <p href="#" class="onw_item_text"><?=$arElement["PREVIEW_TEXT"]?></p>
                        <p class="onw_item_time">22 минуты назад</p>
        
                    </div>  
                </div>
                <!-- .onw_item -->
                 <?endforeach;?>               
            </div>
            <!-- .othersw_container -->
        </div>
        <!-- .others_wrap -->
    </div>
<!-- .блок прочее -->
