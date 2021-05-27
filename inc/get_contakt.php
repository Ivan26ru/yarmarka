<?
require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
$otvet=array();

if (!isset($_GET['id'])){
$otvet["f_err"]="Неуказан ID анкеты";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}
$id=(int)$_GET['id'];

if ($id<1){
$otvet["f_err"]="Неверный ID анкеты";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}


if (!CModule::IncludeModule('iblock')) die ('No iblock');
if ($res=CIBlockElement::GetList(array("ID"=>"ASC"),array('IBLOCK_ID'=>15,"ID"=>$id,"ACTIVE"=>"Y"),false,false,array("ID","NAME","PROPERTY_CONTAKT","CREATED_BY"))->GetNext()){
$cont=trim($res["PROPERTY_CONTAKT_VALUE"]);
if ($cont==="") $cont="Контактная информация не указана.\nСвяжитесь с пользователем через <a href='/blog/user/{$res["CREATED_BY"]}/'>личные сообщения</a>.";
$cont=str_replace("\n","<br/>",$cont);
$otvet["f_aja"]=$cont;
$otvet=json_encode($otvet);
echo $otvet;
exit;
}
else{
$otvet["f_err"]="Нет анкеты с данным ID";
$otvet=json_encode($otvet);
echo $otvet;
exit;	
}

exit;
?>