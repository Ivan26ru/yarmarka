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
<!-- ------------- -->

    <div class="on_container wrap_white">
        
        <div class="on_comments">
            <p class="onc_title title18">Комментарии</p>
            <!-- onc_wrap -->
            <div class="onc_wrap wrap_silver">
                <div class="onc_container">

<?
$iCount = 0;
foreach ($arResult["MESSAGES"] as $res):
	$iCount++;
	?>
                    <div class="onc_item">
                        <div class="onc_container_img reviews-post-table <?=($iCount == 1 ? "reviews-post-first " : "")?><?
		?><?=($iCount == count($arResult["MESSAGES"]) ? "reviews-post-last " : "")?><?
		?><?=($iCount%2 == 1 ? "reviews-post-odd " : "reviews-post-even ")?><?
		?><?=(($res["APPROVED"] == 'Y') ? "" : "reviews-post-hidden")
		?>" bx-author-id="<?=$res["AUTHOR_ID"]?>" bx-author-name="<?=$res["AUTHOR_NAME"]?>" id="message<?=$res["ID"]?>">

	<? if ($arParams["SHOW_AVATAR"] != "N")
		{

			if(is_array($res["AVATAR"]) && array_key_exists("HTML", $res["AVATAR"])): ?><?=$res["AVATAR"]["HTML"]?><?
				else: ?><img src="/bitrix/components/bitrix/forum.topic.reviews/templates/.default/images/noavatar.gif" border="0" /><? endif;

		} ?>	
                        </div>

                        <div class="onc_info">
                        	<?
                    		if ($arParams["SHOW_RATING"] == "Y")
		{
			?>
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
                            <p class="onc_item_time"><span class='message-post-date'><?=$res["POST_DATE"]?></span>


<!-- ! -->
<?
	if ($arResult["SHOW_POST_FORM"] == "Y")
	{
		?>

			<!--  -->
<?
			if ($arResult["FORUM"]["ALLOW_QUOTE"] == "Y")
			{
				?>
				<a href="#review_anchor" title="<?=GetMessage("F_QUOTE_HINT")?>" class="comments_answer" bx-act="quote"><?=GetMessage("F_QUOTE_FULL")?></a><?
			}

			if ($arResult["PANELS"]["MODERATE"] == "Y")
			{
				?>
				<a rel="nofollow" href="<?=htmlspecialcharsbx($res["URL"]["~MODERATE"])?>" class="comments_answer" bx-act="moderate"><?=GetMessage((($res["APPROVED"] == 'Y') ? "F_HIDE" : "F_SHOW"))?></a><?
			}

			if ($arResult["PANELS"]["DELETE"] == "Y")
			{
				?>
				<a rel="nofollow" href="<?=htmlspecialcharsbx($res["URL"]["~DELETE"])?>" class="comments_answer" bx-act="del"><?=GetMessage("F_DELETE")?></a>
<?			}
?>
		<!--  -->

<?
	}
?>
<!-- ! -->
                            	<!-- <span class="bni_like">115</span> -->
                            </p>
<div class="review-rating rating_vote_graphic<?=($arResult["isIntranetInstalled"] ? ' review-rating-react' : '')?>"><?

				$voteEntityType = "FORUM_POST";
				$voteEntityId = $res["ID"];

				$voteId = $voteEntityType.'_'.$voteEntityId.'-'.(time()+rand(0, 1000));
				$emotion = (!empty($res['RATING']["USER_REACTION"]) ? strtoupper($res['RATING']["USER_REACTION"]) : 'LIKE');

				$likeTemplate = (
					$arResult["isIntranetInstalled"]
					? 'like_react'
					: $arParams["RATING_TYPE"]
				);

				$arRatingParams = Array(
					"COMMENT" => "Y",
					"ENTITY_TYPE_ID" => $voteEntityType,
					"ENTITY_ID" => $voteEntityId,
					"OWNER_ID" => $res["AUTHOR_ID"],
					"PATH_TO_USER_PROFILE" => strlen($arParams["PATH_TO_USER"]) > 0? $arParams["PATH_TO_USER"]: $arParams["~URL_TEMPLATES_PROFILE_VIEW"],
					"VOTE_ID" => $voteId
				);

				if (!isset($res['RATING']))
				{
					$res['RATING'] = array(
						"USER_VOTE" => 0,
						"USER_HAS_VOTED" => 'N',
						"TOTAL_VOTES" => 0,
						"TOTAL_POSITIVE_VOTES" => 0,
						"TOTAL_NEGATIVE_VOTES" => 0,
						"TOTAL_VALUE" => 0
					);
				}

				if ($arResult["isIntranetInstalled"])
				{
					?><span id="bx-ilike-button-<?=htmlspecialcharsbx($voteId)?>" class="feed-inform-ilike feed-new-like"><?
						?><span class="bx-ilike-left-wrap<?=(isset($res['RATING']["USER_HAS_VOTED"]) && $res['RATING']["USER_HAS_VOTED"] == "Y" ? ' bx-you-like-button' : '')?>"><a href="#like" class="bx-ilike-text"><?=\CRatingsComponentsMain::getRatingLikeMessage($emotion)?></a></span><?
					?></span><?
				}

				$arRatingParams = array_merge($arRatingParams, $res['RATING']);
				$APPLICATION->IncludeComponent(
					"bitrix:rating.vote",
					$likeTemplate,
					$arRatingParams,
					$component,
					array("HIDE_ICONS" => "Y")
				);
				?>
			</div>
		<?
		}
		?>


	</td></tr>
	</thead>
	<tbody>
	<tr><td>
		
<?
	foreach ($res["FILES"] as $arFile):
	?><div class="reviews-message-img"><?
		?><?$GLOBALS["APPLICATION"]->IncludeComponent(
			"bitrix:forum.interface", "show_file",
			Array(
				"FILE" => $arFile,
				"WIDTH" => $arResult["PARSER"]->image_params["width"],
				"HEIGHT" => $arResult["PARSER"]->image_params["height"],
				"CONVERT" => "N",
				"FAMILY" => "FORUM",
				"SINGLE" => "Y",
				"RETURN" => "N",
				"SHOW_LINK" => "Y"),
			null,
			array("HIDE_ICONS" => "Y"));
	?></div><?
	endforeach;
?>
	</td></tr>
	<tr class="reviews-actions">
		<td>

                        </div>

                    </div>
                    <!-- .onc_item -->
     <?
endforeach;
?>
                </div>
                <!-- .onc_container -->

<!--                 <form action="#" class="on_comments_form">
                    <textarea name="" id="" placeholder="Написать комментарий..."></textarea>
                    <input type="submit" value="Отправить">
                </form> -->

<?

if (strlen($arResult["NAV_STRING"]) > 0 && $arResult["NAV_RESULT"]->NavPageCount > 1):
?>
<div class="reviews-navigation-box reviews-navigation-bottom">
	<div class="reviews-page-navigation">
		<?=$arResult["NAV_STRING"]?>
	</div>
	<div class="reviews-clear-float"></div>
</div>
<?
endif;

endif;

if (empty($arResult["ERROR_MESSAGE"]) && !empty($arResult["OK_MESSAGE"])):
?>
<div class="reviews-note-box reviews-note-note">
	<a name="reviewnote"></a>
	<div class="reviews-note-box-text"><?=ShowNote($arResult["OK_MESSAGE"]);?></div>
</div>
<?
endif;

if ($arResult["SHOW_POST_FORM"] != "Y"):
	return false;
endif;


if (!empty($arResult["MESSAGE_VIEW"])):
?>
<div class="reviews-preview">
<div class="reviews-header-box">
	<div class="reviews-header-title"><a name="postform"><span><?=GetMessage("F_PREVIEW")?></span></a></div>
</div>

<div class="reviews-info-box reviews-post-preview">
	<div class="reviews-info-box-inner">
		<div class="reviews-post-entry">
			<div class="reviews-post-text"><?=$arResult["MESSAGE_VIEW"]["POST_MESSAGE_TEXT"]?></div>
<?
		if (!empty($arResult["REVIEW_FILES"])):
?>
			<div class="reviews-post-attachments">
				<label><?=GetMessage("F_ATTACH_FILES")?></label>
<?
			foreach ($arResult["REVIEW_FILES"] as $arFile):
?>
				<div class="reviews-post-attachment"><?
				?><?$GLOBALS["APPLICATION"]->IncludeComponent(
					"bitrix:forum.interface", "show_file",
					Array(
						"FILE" => $arFile,
						"WIDTH" => $arResult["PARSER"]->image_params["width"],
						"HEIGHT" => $arResult["PARSER"]->image_params["height"],
						"CONVERT" => "N",
						"FAMILY" => "FORUM",
						"SINGLE" => "Y",
						"RETURN" => "N",
						"SHOW_LINK" => "Y"),
					null,
					array("HIDE_ICONS" => "Y"));
				?></div>
<?
			endforeach;
?>
			</div>
<?
		endif;
?>
		</div>
	</div>
</div>
<div class="reviews-br"></div>
</div>
<?
endif;
?>
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

            </div>
            <!-- .onc_wrap -->
        </div>
    </div>
    
<!-- ------------- -->