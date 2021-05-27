<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="header_icons">
    <ul class="hi_ul">
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
        <li class="hi_li">
            <a href="<?=$arItem["LINK"]?>" class="hi_a <?=$arItem["PARAMS"]["icon_class"]?>"></a>
        </li>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

    </ul>
</div>
<?endif?>