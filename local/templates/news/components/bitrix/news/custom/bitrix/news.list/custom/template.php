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

<!--News slider-->
<h2 class="container__title-news-list container__title-news-list_underline"><?= GetMessage("TITLE_MAIN_NEWS") ?></h2>
<section class="row container__row container__row_color container__row_slider justify-content-between">
    <? foreach ($arResult["MAIN_NEWS"] as $arNews): ?>
        <div class="container__col-4 container__col-4_beetwen">
            <? if ($arParams["DISPLAY_PICTURE"] != "N" && $arNews["PREVIEW_PICTURE"]): ?>
                <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arNews["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <a href="<?= $arNews["DETAIL_PAGE_URL"] ?>">
                        <img class="container__preview-picture container__preview-picture_custom"
                             src="<?= CFile::GetPath($arNews["PREVIEW_PICTURE"]); ?>">
                    </a>
                <? else: ?>
                    <img class="container__preview-picture container__preview-picture_custom"
                         src="<?= CFile::GetPath($arNews["PREVIEW_PICTURE"]); ?>">
                <? endif; ?>
            <? endif; ?>

            <? if ($arParams["DISPLAY_NAME"] != "N" && $arNews["NAME"]): ?>
                <div class="container__item-title container__item-title_custom">
                    <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arNews["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                        <a class="container__item-title-link"
                           href="<? echo $arNews["DETAIL_PAGE_URL"] ?>"><? echo $arNews["NAME"] ?></a>
                        <br/>
                    <? else: ?>
                        <? echo $arNews["NAME"] ?><br/>
                    <? endif; ?>
                </div>
            <? endif; ?>

            <? if ($arNews["PROPERTY_DATE_VALUE"]): ?>
                <div class="container__item-date container__item-date_custom">
                    <?= $arNews["PROPERTY_DATE_VALUE"]; ?>
                </div>
            <? endif; ?>

            <a class="container__detail-link container__detail-link_custom container__detail-link_blue-bg"
               href="<?= $arNews["DETAIL_PAGE_URL"] ?>"><?= GetMessage("LINK_TO_DETAIL") ?></a>
        </div>
    <? endforeach; ?>
</section>

<!--All news-->
<h2 class="container__title-news-list container__title-news-list_underline container__title-news-list_margin"><?= GetMessage("TITLE_ALL_NEWS") ?></h2>
<section class="row container__row container__row_color justify-content-between">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-4 container__col-4 container__col-4_custom" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                        <img class="container__preview-picture container__preview-picture_custom"
                             src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
                    </a>
                <? else: ?>
                    <img class="container__preview-picture container__preview-picture_custom"
                         src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
                <? endif; ?>
            <? endif ?>

            <? if ($arItem["DISPLAY_PROPERTIES"]["DATE"]["VALUE"]): ?>
                <div class="container__item-date container__item-date_margin">
                    <?= $arItem["DISPLAY_PROPERTIES"]["DATE"]["VALUE"]; ?>
                </div>
            <? endif; ?>

            <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                <div class="container__item-title container__item-title_margin">
                    <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                        <a class="container__item-title-link"
                           href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><b><? echo $arItem["NAME"] ?></b></a><br/>
                    <? else: ?>
                        <b><? echo $arItem["NAME"] ?></b><br/>
                    <? endif; ?>
                </div>
            <? endif; ?>

            <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                <div class="container__item-text container__item-text_custom">
                    <? echo $arItem["PREVIEW_TEXT"]; ?>
                </div>
            <? endif; ?>
            <a class="container__detail-link container__detail-link_custom container__detail-link_color"
               href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= GetMessage("LINK_TO_DETAIL") ?></a>
        </div>
    <? endforeach; ?>
    <div class="col-12 container__nav-string container__nav-string_custom">
        <?= $arResult["NAV_STRING"] ?>
    </div>
</section>
