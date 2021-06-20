<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <?php use \Bitrix\Main\Page\Asset; ?>
    <? $APPLICATION->ShowHead(); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css"); ?>
    <?php Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">'); ?>
    <?php Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">'); ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js"); ?>
</head>
<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
<header class="header" id="header">
    <div class="container container-head">
        <nav class="head">
            <a href="#" class="head__logo">
                <p>Найди свое</p>
                <p><span>ya</span>rmarka.<span>pro</span></p>
            </a>
            <div class="head__form">
                <form>
                    <label>
                        <select class="trade__piece choice" id="carts" name="carlist">
                            <option value="volvo">Выберите категорию</option>
                            <option value="saab">категорию-1</option>
                            <option value="opel">категорию-2</option>
                            <option value="audi">категорию-3</option>
                        </select>
                        <input type="text" placeholder="Найти...">
                        <select class="trade__piece choice" id="carts" name="carlist">
                            <option value="volvo">Москва</option>
                            <option value="saab">Санкт-Петербург</option>
                            <option value="opel">Казань</option>
                            <option value="audi">Екатеринбург</option>
                        </select>
                    </label>
                    <button class="btn">Найти</button>
                </form>
            </div>
            <div class="head__person">
                <p class="head__name">
                    Константин
                </p>
                <div class="head__photo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/person.png" alt=""/>
                </div>
                <span class="head__more">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/head-more.png" alt="">
                </span>
            </div>
        </nav>
    </div>
</header>

<div class="test_block">
    <hr>
    <li><a href="/">HOME</a></li>
    <li><a href="/new-page.php">new-page.php</a></li>
    <li><a href="/newcatalog">newcatalog</a></li>
    <hr>
</div>