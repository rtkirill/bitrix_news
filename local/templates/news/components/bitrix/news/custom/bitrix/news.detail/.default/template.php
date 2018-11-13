<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!--News detail page-->
<section class="row container__row container__row_color justify-content-center">
    <div class="col-10">
        <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
            <h2 class="container__title-news-list container__title-news-list_underline"><?= $arResult["NAME"] ?></h2>
        <? endif; ?>
    </div>

    <div class="col-10">
        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
            <img class="detail-picture container__detail-picture container__detail-picture_custom"
                 src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>">
        <? endif ?>
    </div>

    <div class="col-3">
        <? if ($arResult["AUTHOR_NAME"]): ?>
            <div class="container__item-author-name">
                <?= GetMessage("AUTHOR_NEWS") ?>: <?= $arResult["AUTHOR_NAME"] ?>
            </div>
        <? endif; ?>
    </div>

    <div class="col-7">
        <? if ($arResult["DISPLAY_PROPERTIES"]["DATE"]["VALUE"]): ?>
            <div class="container__item-date">
                <?= $arResult["DISPLAY_PROPERTIES"]["DATE"]["VALUE"] ?>
            </div>
        <? endif; ?>
    </div>

    <div class="col-10 container__item-text container__item-text_detail-custom">
        <? if (strlen($arResult["DETAIL_TEXT"]) > 0): ?>
            <? echo $arResult["DETAIL_TEXT"]; ?>
        <? else: ?>
            <? echo $arResult["PREVIEW_TEXT"]; ?>
        <? endif ?>
    </div>

    <div class="col-10 container__show-counter container__show-counter_custom">
        <?= GetMessage("VIEWS_COUNT") ?>: <?= $arResult["SHOW_COUNTER"] ?>
    </div>

    <div class="col-10">
        <a class="container__detail-link container__detail-link_detail-custom container__detail-link_color"
           href="<?= $arResult["PROPERTIES"]["LINK"]["VALUE"] ?>"><?= GetMessage("SOURCE_LINK") ?></a>
    </div>

    <div class="col-10 container__share container__share_custom">
        <span class="container__share_title container__share_title_custom"><?= GetMessage("SHARE") ?></span>
        <a href="#" class="container__share-item container__share-item_custom">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/twitter-logo-silhouette.png">
        </a>
        <a href="#" class="container__share-item container__share-item_custom">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/facebook-logo.png">
        </a>
        <a href="#" class="container__share-item container__share-item_custom">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/vk-social-network-logo.png">
        </a>
    </div>
</section>