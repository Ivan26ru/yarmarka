<?
   $rsUser = CUser::GetByID($USER->GetID());
   $arUser = $rsUser->Fetch();
   $rsFile = CFile::GetByID($arUser['PERSONAL_PHOTO']);
   $arFile = $rsFile->Fetch();
?>
<?if ($USER->IsAuthorized()):?>
<a href="/blog/user/<?echo $USER->GetID();?>/"><img class="fw-social-avatar" src="<?='/upload/'.$arFile['SUBDIR'].'/'.$arFile['FILE_NAME'];?>" alt="Ваше фото" /></a> 
<?endif?>
<?if (!$USER->IsAuthorized()):?>
<a href="javascript:void(0)" onclick="openAuthorizePopup()"><img class="fw-social-avatar" src="/upload/no-avatar-blue.png" alt='Зарегистрируйтесь' /></a>
<?endif?>
<?if ($USER->IsAuthorized()):?>
<ul class="fw-social-menu">
<li><a href="/blog/log/">Живая лента</a>
<li><a href="/blog/user/<?echo $USER->GetID();?>/blog/">Моя стена</a></li>
<li><a href="/blog/user/<?echo $USER->GetID();?>/friends/">Мои друзья</a></li>
<li><a href="/blog/group/search/?filter_my=Y">Мои группы</a></li>
<li><a href="/blog/user/<?echo $USER->GetID();?>/photo/">Мои фотографии</a></li>
<div class="cherta"></div>
<li><a href="/afisha/favorite/">Избранные афиши</a></li>                     
<li><a href="/news/favorite/">Избранные новости</a></li>                     
<li><a href="/user-rss/favorite_rss/">Избранные каналы</a></li>
<li><a href="/mus_community/favorite/">Избранные посты</a></li>                   
<li><a href="/find-muz/favorite/">Избранные специалисты</a></li>                  
<li><a href="/muzshop/favorite/">Избранные товары</a></li>                       
<li><a href="/obuchenie/favorite/">Избранные статьи</a></li>                   
<div class="cherta"></div>
<li><a href="/personal/">Личные данные</a></li>
<div class="cherta"></div>
	<li><a href="/blog/messages/chat/" onclick="if (typeof(BX) != 'undefined' &amp;&amp; BX.IM) { BXIM.openMessenger(<?=$arResult['CREATED_BY']?>); return false; } else { window.open('/blog/messages/chat/<?=$arResult['CREATED_BY']?>/', '', 'location=yes,status=no,scrollbars=yes,resizable=yes,width=700,height=550,top='+Math.floor((screen.height - 550)/2-14)+',left='+Math.floor((screen.width - 700)/2-5)); return false; }"><img style="float: left;" src="/fw-messages.png"> Сообщения</a>
</li>
</ul>
<?endif?>
<?if (!$USER->IsAuthorized()):?>
<ul class="fw-social-menu">
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Живая лента</a>
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Моя стена</a></li>
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Мои друзья</a></li>
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Мои группы</a></li>
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Мои фотографии</a></li>
<div class="cherta"></div>
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Избранные афиши</a></li>                     
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Избранные новости</a></li>                     
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Избранные каналы</a></li>
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Избранные посты</a></li>                   
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Избранные специалисты</a></li>                  
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Избранные товары</a></li>                       
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Избранные статьи</a></li>                   
<div class="cherta"></div>
<li><a href="javascript:void(0)" onclick="openAuthorizePopup()">Личные данные</a></li>
</ul>
<?endif?>