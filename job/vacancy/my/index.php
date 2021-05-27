<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?><?$APPLICATION->IncludeComponent("bitrix:iblock.element.add", ".default", array(
	"NAV_ON_PAGE" => "10",
	"USE_CAPTCHA" => "Y",
	"USER_MESSAGE_ADD" => "Ваша вакансия добавлена",
	"USER_MESSAGE_EDIT" => "Ваша вакансия сохранена",
	"DEFAULT_INPUT_SIZE" => "30",
	"RESIZE_IMAGES" => "N",
	"IBLOCK_TYPE" => "job",
	"IBLOCK_ID" => "5",
	"PROPERTY_CODES" => array(
		0 => "NAME",
		1 => "DATE_ACTIVE_TO",
		2 => "IBLOCK_SECTION",
		3 => "DETAIL_TEXT",
		4 => "15",5 => "16",6 => "17",7 => "18",8 => "19",9 => "20",10 => "21",11 => "22",12 => "23",13 => "24",14 => "25",15 => "26",
	),
	"PROPERTY_CODES_REQUIRED" => array(
		0 => "NAME",
		1 => "DATE_ACTIVE_TO",
		2 => "IBLOCK_SECTION",
		3 => "22", 4 => "24",  5 => "25", 
	),
	"GROUPS" => array(
		0 => "1",
		1 => "6",
	),
	"STATUS" => "ANY",	"STATUS_NEW" => "N",
	"ALLOW_EDIT" => "Y",
	"ALLOW_DELETE" => "Y",
	"ELEMENT_ASSOC" => "CREATED_BY",
	"MAX_USER_ENTRIES" => "20",
	"MAX_LEVELS" => "1",
	"LEVEL_LAST" => "Y",
	"MAX_FILE_SIZE" => "0",
	"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
	"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/job/vacancy/my/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CUSTOM_TITLE_NAME" => "Название вакансии",
	"CUSTOM_TITLE_TAGS" => "",
	"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
	"CUSTOM_TITLE_DATE_ACTIVE_TO" => "Срок публикации до",
	"CUSTOM_TITLE_IBLOCK_SECTION" => "Категория",
	"CUSTOM_TITLE_PREVIEW_TEXT" => "",
	"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
	"CUSTOM_TITLE_DETAIL_TEXT" => "Дополнительно",
	"CUSTOM_TITLE_DETAIL_PICTURE" => "",
	"SEND_EMAIL" => "Y",
	"EMAIL_TO" => "it-1ivan@yandex.ru",
	"SUBJECT" => "Добавлена новая вакансия",
	"EVENT_MESSAGE_ID" => array(),
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
