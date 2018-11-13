<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
/*Push AUTHOR name*/
$rsUser = CUser::GetByID($arResult["PROPERTIES"]["AUTHOR"]["VALUE"]);
$arUser = $rsUser->Fetch();
$arResult["AUTHOR_NAME"] = $arUser["NAME"]." ".$arUser["LAST_NAME"];
?>
