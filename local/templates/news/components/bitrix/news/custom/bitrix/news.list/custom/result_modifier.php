<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
/*Make IMPORTANT_NEWS array*/
$arSelect = array("IBLOCK_ID", "ID", "PREVIEW_PICTURE", "DETAIL_PAGE_URL", "NAME", "PROPERTY_DATE");
$arFilter = Array("IBLOCK_ID"=>1, "ACTIVE"=>"Y", "!PROPERTY_IMPORTANT_NEWS" => false);
$res = CIBlockElement::GetList(Array("PROPERTY_DATE"=>"ASC", "ID"=>"ASC"), $arFilter, false, Array("nPageSize"=>"6"), $arSelect);
while($ob = $res->GetNextElement())
{
    $arResult["MAIN_NEWS"][]= $ob->GetFields();
}
?>
