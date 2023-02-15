<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
foreach($arResult["ITEMS"] as &$arItem){
    $arItem["PREVIEW_TEXT_SMALL"] = TruncateText($arItem["PREVIEW_TEXT"], 140);
}
unset($arItem);