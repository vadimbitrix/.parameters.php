<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use \Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);

$arTemplateParameters = array(
	"TEMPLATE_GROUPS" => Array(
		"SLIDER" => Array(
			"NAME" => Loc::getMessage('SLIDER'),
			"SORT" => "100"
		)
	),
	"SLIDER_ID" => Array(
		"PARENT" => "SLIDER",
		"NAME" => Loc::getMessage('SLIDER_ID'),
		"TYPE" => "STRING",
		"SORT" => "20",
	),
	"SLIDER_TIME" => Array(
		"PARENT" => "SLIDER",
		"NAME" => Loc::getMessage('SLIDER_TIME'),
		"TYPE" => "STRING",
		"SORT" => "20",
		"DEFAULT" => "5000",
	),
	"SLIDER_AUTOPLAY" => Array(
		"PARENT" => "SLIDER",
		"NAME" => Loc::getMessage('SLIDER_AUTOPLAY'),
		"TYPE" => "CHECKBOX",
		"SORT" => "20",
		"DEFAULT" => "N",
	),
	"SLIDER_DOTS" => Array(
		"PARENT" => "SLIDER",
		"NAME" => Loc::getMessage('SLIDER_DOTS'),
		"TYPE" => "CHECKBOX",
		"SORT" => "20",
		"DEFAULT" => "N",
	),
	"SET_STATUS_404" => Array(
		"HIDDEN" => "Y"
	),
	"SHOW_404" => Array(
		"HIDDEN" => "Y"
	),
	"MESSAGE_404" => Array(
		"HIDDEN" => "Y"
	),
	"NEWS_COUNT" => Array(
		"PARENT" => "BASE",
		"NAME" => Loc::getMessage('NEWS_COUNT')
	)
);
?>
