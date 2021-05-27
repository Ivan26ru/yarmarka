<div itemscope itemtype="http://schema.org/WPSideBar">
<div style="display:none">
  <span itemprop="name">Боковая колонка</span>
   <span itemprop="description">Боковая колонка с новостями</span>
</div>
<?
for ($i=1;$i<=4;$i++){
$APPLICATION->IncludeComponent(
    "bitrix:advertising.banner",
    "right_banner",
    Array(
        "TYPE" => "RIGHT_BANNER",
        "NOINDEX" => "N",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "180"
    )
);
}
?>
</div>