<?
require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
$otvet=array();

if (!isset($_GET['id'])){
$otvet["f_err"]="Нехватка данных";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}
$otvet['id']=trim($_GET['id']);

if (!$USER->IsAuthorized()){
//$otvet["f_err"]="Действие доступно только авторизованным.";
$otvet["f_login"]="Действие доступно только авторизованным.";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}
$user_id=intval($USER->GetID());


$act=explode("_",trim($_GET['id']));
if (count($act)!=3){
$otvet["f_err"]="Нехватка данных";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}

$type=trim($act[0]);
$id=$act[1]*1;
$act=trim($act[2]);
$ret_act=array("add"=>"del","del"=>"add");

if (($type!="el" && $type!="sec") || $id<1 || ($act!="add" && $act!="del")){
$otvet["f_err"]="Нехватка данных";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}

$rss_use=false;
$rss_num=0;
$sec_id=array(12=>"UF_RSS_FAV");
$el_id=array(14=>"UF_MUS_FAV",6=>"UF_AFISHA_FAV",10=>"UF_OB_FAV",15=>"UF_SP_FAV",5=>"UF_NEWS_FAV",11=>"UF_TOVAR",7=>"UF_MAP_FAV");

if (!CModule::IncludeModule('iblock')) die ('No iblock');

if ($type==="sec"){
$res = CIBlockSection::GetByID($id);
if(!$ar_res = $res->GetNext()){
$otvet["f_err"]="Раздел не найден";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}
if (!isset($sec_id[$ar_res['IBLOCK_ID']])){
$otvet["f_err"]="Неизвестный тип блока";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}
$kuda=$sec_id[$ar_res['IBLOCK_ID']];
if ($ar_res['IBLOCK_ID']==12) $rss_use=true;
}
else{
$res = CIBlockElement::GetByID($id);
if(!$ar_res = $res->GetNext()){
$otvet["f_err"]="Элемент не найден";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}
if (!isset($el_id[$ar_res['IBLOCK_ID']])){
$otvet["f_err"]="Неизвестный тип блока";
$otvet=json_encode($otvet);
echo $otvet;
exit;
}
$kuda=$el_id[$ar_res['IBLOCK_ID']];
}


$arF["ID"] = $user_id;
$arP["SELECT"] = array($kuda);
$rsUsers = CUser::GetList(($by="ID"), ($order="asc"), $arF,$arP); // выбираем пользователей
$res=$rsUsers->Fetch();

$n_p_a=array();
$new_pole_array=array();
$new_pole=trim($res[$kuda]);
if (!empty($new_pole)) $new_pole_array=explode(",",$new_pole);

if ($act==="del"){
if (in_array($id,$new_pole_array)){
foreach ($new_pole_array as $i=>$ii){
if ($ii!=$id) $n_p_a[]=$ii;
}
if ($rss_use) $rss_num=-1;
}
}
else {
if (!in_array($id,$new_pole_array)){
$n_p_a=$new_pole_array;
$n_p_a[]=$id;
if ($rss_use) $rss_num=1;
}
}
$n_p_a=implode(",",$n_p_a);

$user = new CUser;
$fields = Array(
$kuda=>$n_p_a,
 );
$user->Update($user_id, $fields);

if ($rss_use){
$res_rss=CIBlockSection::GetList(Array("ID"=>"ASC"),Array("IBLOCK_ID"=>12,"GLOBAL_ACTIVE"=>"Y","ID"=>$id),false,Array("NAME","ID","UF_PODPISKA"),false);
if ($res1=$res_rss->GetNext()){
$new_pod=(int)$res1['UF_PODPISKA']+$rss_num;
if ($new_pod<0) $new_pod=0;
$arFields = Array("UF_PODPISKA"=>$new_pod);
global $USER_FIELD_MANAGER;
$USER_FIELD_MANAGER->Update( 'IBLOCK_12_SECTION', $id,$arFields);
}
}
		
$otvet["f_aja"]=$type."_".$id."_".$ret_act[$act];
$otvet=json_encode($otvet);
echo $otvet;
exit;
?>