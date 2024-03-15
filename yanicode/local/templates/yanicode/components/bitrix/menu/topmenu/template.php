<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID;?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta class="js-meta-viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php $APPLICATION->ShowTitle();?></title>
    <?php $APPLICATION->ShowHead();?>
    <link rel="stylesheet" href="../assets/template_styles.css">
</head>

<body>
<div id="panel"><?=$APPLICATION->ShowPanel()?></div>
<header class="header">
    <div class="container">
        <div class="header-wrapper">
            <a href="./index.php" class="header__logo">
                <img width="300" height="92" src="../assets/images/svg/logo-yanicode.svg" alt="yanicode">
            </a>
            <div class="header__burger header__burger_close">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>
            <div class="header-nav">
                <nav class="nav-list">
                    <a href="./index.php" class="nav-list__item">ГЛАВНАЯ</a>
                    <a href="./services.php" class="nav-list__item">УСЛУГИ</a>
                </nav>
                <div class="header__phone">
                    <a href="tel:+79114510616">+79114510616</a>
                </div>
            </div>
        </div>
    </div>
</header>
