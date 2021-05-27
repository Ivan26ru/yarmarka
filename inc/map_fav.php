<?
require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
$otvet=array();
$id=(int)$_GET['id'];
if ($id<1) exit;
$otvet['f_id']=$id;
if (!$USER->IsAuthorized()) {
$otvet['f_what']="add";
$otvet=json_encode($otvet);
echo $otvet;
exit;	
}

$ai=CUser::GetUserGroup(intval($USER->GetID()));
$arF["ID"] = intval($USER->GetID());
$arP["SELECT"] = array("UF_MAP_FAV");
$rsUsers = CUser::GetList(($by="ID"), ($order="asc"), $arF,$arP); // выбираем пользователей
$res=$rsUsers->Fetch();
$res["UF_MAP_FAV"]=trim($res["UF_MAP_FAV"]);
if (empty($res["UF_MAP_FAV"])){
$otvet['f_what']="add";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}
$otvet['f_what']="add";
$ii=explode(",",$res["UF_MAP_FAV"]);
foreach ($ii as $i){
$i=(int)$i;	
if ($i==$id) {
	$otvet['f_what']="del";
	break;
}
}


$otvet=json_encode($otvet);
echo $otvet;
exit;
?>