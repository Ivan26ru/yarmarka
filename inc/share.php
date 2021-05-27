<style type="text/css">
.share_text{
font-size: 16px;
line-height: 20px;
margin-bottom: 7px;
}
.share_text a{
color:#4776b3;
font-weight:bold;
}
</style>
<?
global $USER;
if (!$USER->IsAuthorized()){
?>
<div class="share_text">
Для комментирования <a href="javascript:void(0)" onclick="openAuthorizePopup()" class="site_login_open">АВТОРИЗУЙТЕСЬ</a> или войдите через <a href="javascript:void(0)" onclick="openAuthorizePopup()" class="site_login_open">социальные сети</a>.<br>
Или поделитесь прочитанным со своими друзьями:
</div>
<?
}
else {
?>
<div class="share_text">
Поделитесь прочитанным со своими друзьями:
</div>
<? } ?>
<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>