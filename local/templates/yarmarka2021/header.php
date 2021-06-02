<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">


</head>
<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>
<h1>header</h1>