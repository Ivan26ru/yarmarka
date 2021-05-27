<?
require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
$otvet=array();
$id=$_GET['id']*1;
ob_start();
if ($id>0){
$APPLICATION->IncludeComponent(
			"bitrix:iblock.vote",
			"map_ajax",
			array(
				"IBLOCK_TYPE" => "information",
				"IBLOCK_ID" => "7",
				"ELEMENT_ID" => $id,
				"ELEMENT_CODE" => "",
				"MAX_VOTE" => "5",
				"VOTE_NAMES" => array("1", "2", "3", "4", "5"),
				"SET_STATUS_404" => "N",
				"DISPLAY_AS_RATING" => "rating",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "180"
			),
			$component,
			array("HIDE_ICONS" => "Y")
		);
}		
		
$otvet["f_aja"]=ob_get_contents();
ob_end_clean();
$otvet=json_encode($otvet);
echo $otvet;
exit;
?>