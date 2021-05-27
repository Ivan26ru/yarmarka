<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
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

<div class="wrc_body">
	<div class="block_news wrap_white">
		<div class="bn_title_container">
			<a href="<?=$arParams["LINK_BLOCK"]?>" class="title18"><?=$arParams["NAME_BLOCK"]?></a>
		</div>
		<div class="bn_container">
			<?foreach ($arResult["ITEMS"] as $arElement):?> 
<!-- 			<pre>
				<?php var_dump($arElement); ?>
			</pre> -->
			<div class="bn_item">
				<div class="bni_container_img">
					<?php if (!$arElement["PREVIEW_PICTURE"]){ ?>
						<img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/img/no_image.jpg" alt="" />
					<?php }else{ ?>
 						<img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" alt="">
					<?php }; ?>
				</div>
				<div class="bni_content">
 					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="title16"><?=$arElement["NAME"]?></a>
					<div class="bni_raiting">
						<?
						$APPLICATION->IncludeComponent(
						    "bitrix:iblock.vote",
						    "my_star",
						    Array(
						        "IBLOCK_TYPE" => $arElement["IBLOCK_TYPE"],
						        "IBLOCK_ID" => $arElement["IBLOCK_ID"],
						        "ELEMENT_ID" => $arElement["ID"],
						        "MAX_VOTE" => $arElement["MAX_VOTE"],
						        "VOTE_NAMES" => $arElement["VOTE_NAMES"],
						        "CACHE_TYPE" => $arElement["CACHE_TYPE"],
						        "CACHE_TIME" => $arElement["CACHE_TIME"],
						        "DISPLAY_AS_RATING" => $arElement["DISPLAY_AS_RATING"],
						    ),
						    $component
						);
						?>
 					<span class="bni_raiting_time"><?=$arElement["ACTIVE_FROM"]?></span>
					</div>
					<p class="bni_text"><?=$arElement["PREVIEW_TEXT"]?></p>
					<p class="bni_tags">
						 Теги: <a href="#">1Лана Дель Рей</a>, <a href="#">The Weeknd</a>
					</p>
					<div class="bni_soc_info">
						<?$APPLICATION->IncludeComponent(
	                        "vasoft:likeit.button",
	                        "my_like",
	                        Array(
	                            "COMPONENT_TEMPLATE" => "my_like",
	                            "ENABLE_ACTION" => "N",
	                            "ID" => $arElement['ID'],
	                            "SHOW_COUNTER" => "Y"
	                        )
	                    );?>
						<span class="bni_repost">0</span>
						<span class="bni_comments"><?echo ($arElement["PROPERTIES"]["FORUM_MESSAGE_CNT"]["VALUE"]) ? $arElement["PROPERTIES"]["FORUM_MESSAGE_CNT"]["VALUE"] : '0';?></span>
						<span class="bni_views"><?echo ($arElement["SHOW_COUNTER"]) ? $arElement["SHOW_COUNTER"] : '0';?></span>
					</div>
				</div>
				
			</div>
			 <!-- .bni_item -->
			 <?endforeach;?>
		</div>
 <a href="<?=$arParams["LINK_BLOCK"]?>" class="bn_read_all">Посмотреть ещё</a>
	</div>
	 <!-- .block_news -->
</div>