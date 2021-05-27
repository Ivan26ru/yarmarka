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

        <div class="sidebar_block sb_afisha">
            <p class="sb_title"><?=$arParams["NAME_BLOCK"]?></p>
            <ul class="sb_list">
			<?foreach ($arResult["ITEMS"] as $arElement):?> 
                <li><a href="#"><?=$arElement["NAME"]?></a><span>22 минуты назад</span></li>
			<?endforeach;?>
            </ul>
        </div>
        <!-- .sidebar_block -->
