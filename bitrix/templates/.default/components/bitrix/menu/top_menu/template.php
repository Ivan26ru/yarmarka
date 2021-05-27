<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <ul class="wrmt_ul">
<?
$previousLevel = 0;
// var_dump($arResult);
foreach($arResult as $arItem):
?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<li<?if($arItem["CHILD_SELECTED"] !== true):?> class="menu-close"<?endif?>>
				<div class="folder" onClick="OpenMenuNode(this)"></div>
				<div class="item-text"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
				<ul>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
        <li class="wrmt_ul_li">
            <a href="<?=$arItem["LINK"]?>" class="wrmt_ul_li_a">
                <span class="wrmt_ul_li_title"><?=$arItem["TEXT"]?></span>
                <div class="wrmt_container_icon <?=$arItem["PARAMS"]["icon_class"]?>">
                </div>
                <span class="wrmt_ul_li_value">+15</span>
            </a>
            <a class="wrmt_ul_li_a_add" href="#">Предложить</a>
        </li>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>