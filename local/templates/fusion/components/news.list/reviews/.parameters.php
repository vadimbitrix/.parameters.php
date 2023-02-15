<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"TEMPLATE_GROUPS" => Array(
		"SLIDER" => Array(
			"NAME" => "Настройки слайдера",
			"SORT" => "100"
		)
	),
	"SLIDER_ID" => Array(
		"PARENT" => "SLIDER",
		"NAME" => "Индентификатор слайдера",
		"TYPE" => "STRING",
		"SORT" => "20",
	),
	"SLIDER_TIME" => Array(
		"PARENT" => "SLIDER",
		"NAME" => "Таймаут",
		"TYPE" => "STRING",
		"SORT" => "20",
		"DEFAULT" => "5000",
	),
	"SLIDER_AUTOPLAY" => Array(
		"PARENT" => "SLIDER",
		"NAME" => "Включить autoplay",
		"TYPE" => "CHECKBOX",
		"SORT" => "20",
		"DEFAULT" => "N",
	),
	"SLIDER_DOTS" => Array(
		"PARENT" => "SLIDER",
		"NAME" => "Включить пагинацию",
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
		"NAME" => "Количество слайдов на странице"
	)
);
?>
