<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @var CMain $APPLICATION
 * @var CUser $USER
 */
CUtil::InitJSCore(array('ajax', 'fx', 'viewer'));
// ************************* Input params***************************************************************
$arParams["SHOW_LINK_TO_FORUM"] = ($arParams["SHOW_LINK_TO_FORUM"] == "N" ? "N" : "Y");
$arParams["FILES_COUNT"] = intval(intval($arParams["FILES_COUNT"]) > 0 ? $arParams["FILES_COUNT"] : 1);
$arParams["IMAGE_SIZE"] = (intval($arParams["IMAGE_SIZE"]) > 0 ? $arParams["IMAGE_SIZE"] : 100);
if (LANGUAGE_ID == 'ru'):
	$path = str_replace(array("\\", "//"), "/", dirname(__FILE__)."/ru/script.php");
	include($path);
endif;
// *************************/Input params***************************************************************
// РАБОТАЮ КНОПКИ
// Все урезано
if (!empty($arResult["MESSAGES"])):
if ($arResult["NAV_RESULT"] && $arResult["NAV_RESULT"]->NavPageCount > 1):
?>
<div class="reviews-navigation-box reviews-navigation-top">
	<div class="reviews-page-navigation">
		<?=$arResult["NAV_STRING"]?>
	</div>
	<div class="reviews-clear-float"></div>
</div>
<?
endif;

?>
<div class="reviews-block-container reviews-reviews-block-container" id="<?=$arParams["FORM_ID"]?>container">
	<div class="onc_wrap wrap_silver">
		<div class="onc_container">
<?
$iCount = 0;
foreach ($arResult["MESSAGES"] as $res):
	$iCount++;
	?>
<div class="onc_item">
	<div class="onc_container_img">
		<? if ($arParams["SHOW_AVATAR"] != "N")
		{

			if(is_array($res["AVATAR"]) && array_key_exists("HTML", $res["AVATAR"])): ?><?=$res["AVATAR"]["HTML"]?><?
				else: ?><img src="/bitrix/components/bitrix/forum.topic.reviews/templates/.default/images/noavatar.gif" border="0" /><? endif;

		} ?>
	</div>

	<div class="onc_info">
		<a href="#" class="onc_item_title"><?
			if (intval($res["AUTHOR_ID"]) > 0 && !empty($res["AUTHOR_URL"])):
				?><a href="<?=$res["AUTHOR_URL"]?>"><?=$res["AUTHOR_NAME"]?></a><?
			else:
				?><?=$res["AUTHOR_NAME"]?><?
			endif;
			?>
		</a>

        <div class="onc_item_text text_dark reviews-text"  id="message_text_<?=$res["ID"]?>">
        	<?=$res["POST_MESSAGE_TEXT"]?>
        </div>

	<table cellspacing="0" border="0" bx-author-id="<?=$res["AUTHOR_ID"]?>" bx-author-name="<?=$res["AUTHOR_NAME"]?>" id="message<?=$res["ID"]?>">
	<tbody>

	<tr class="reviews-actions">
		<td>
			<!-- кнопки -->
		<div class="reviews-post-reply-buttons onc_item_time">
			<noindex>
				<span class='message-post-date'><?=$res["POST_DATE"]?></span>
<?
	if ($arResult["SHOW_POST_FORM"] == "Y")
	{
		?>
			<a href="#review_anchor" title="<?=GetMessage("F_NAME")?>" class="reviews-button-small" bx-act="reply"><?=GetMessage("F_NAME")?></a>
<?			if ($arResult["FORUM"]["ALLOW_QUOTE"] == "Y")
			{
				?>
				
				<a href="#review_anchor" title="<?=GetMessage("F_QUOTE_HINT")?>" class="reviews-button-small" bx-act="quote"><?=GetMessage("F_QUOTE_FULL")?></a><?
			}
			if ($arResult["PANELS"]["MODERATE"] == "Y")
			{
				?>
				
				<a rel="nofollow" href="<?=htmlspecialcharsbx($res["URL"]["~MODERATE"])?>" class="reviews-button-small" bx-act="moderate"><?=GetMessage((($res["APPROVED"] == 'Y') ? "F_HIDE" : "F_SHOW"))?></a><?
			}
			if ($arResult["PANELS"]["DELETE"] == "Y")
			{
				?>
				
				<a rel="nofollow" href="<?=htmlspecialcharsbx($res["URL"]["~DELETE"])?>" class="reviews-button-small" bx-act="del"><?=GetMessage("F_DELETE")?></a>
<?			} ?>
<?	} ?>
			</noindex>
		</div>

		</td>
	</tr>
	</tbody>
	</table>

	</div>	
</div>
<!-- .onc_item -->


	<?
endforeach;
?>

</div>

	</div>	
</div>

<?

endif;

?>

<!-- form -->
<script type="text/javascript">
	BX.ready(function(){
		BX.message({
			no_topic_name : '<?=GetMessageJS("JERROR_NO_TOPIC_NAME")?>',
			no_message : '<?=GetMessageJS("JERROR_NO_MESSAGE")?>',
			max_len : '<?=GetMessageJS("JERROR_MAX_LEN")?>',
			f_author : ' <?=GetMessageJS("JQOUTE_AUTHOR_WRITES")?>:\n',
			f_cdm : '<?=GetMessageJS("F_DELETE_CONFIRM")?>',
			f_show : '<?=GetMessageJS("F_SHOW")?>',
			f_hide : '<?=GetMessageJS("F_HIDE")?>',
			f_wait : '<?=GetMessageJS("F_WAIT")?>',
			MINIMIZED_EXPAND_TEXT : '<?=CUtil::addslashes($arParams["MINIMIZED_EXPAND_TEXT"])?>',
			MINIMIZED_MINIMIZE_TEXT : '<?=CUtil::addslashes($arParams["MINIMIZED_MINIMIZE_TEXT"])?>'
		});
		BX.viewElementBind(BX('<?=$arParams["FORM_ID"]?>container'), {},
			function(node){
				return BX.type.isElementNode(node) && (node.getAttribute('data-bx-viewer') || node.getAttribute('data-bx-image'));
			}
		);
	});
</script>
<?
include(__DIR__."/form.php");
?>