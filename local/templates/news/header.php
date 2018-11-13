<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
    <html>
    <head>
        <? $APPLICATION->ShowHead(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/bootstrap/css/bootstrap.css");?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/fonts/GothamPro/stylesheet.css");?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/slick/slick.css");?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/template_style.css");?>

        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery.min.js");?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery-migrate.min.js");?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/slick/slick.min.js");?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/main.js");?>

        <title><? $APPLICATION->ShowTitle() ?></title>
    </head>

<body>

<? $APPLICATION->ShowPanel() ?>