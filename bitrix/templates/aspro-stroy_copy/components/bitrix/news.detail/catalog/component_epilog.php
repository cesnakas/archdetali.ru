<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

if ($arResult['DISPLAY_PROPERTIES']['SIZE']['VALUE']) {
	$GLOBALS['FLOOR_SPACE'] = $arResult['DISPLAY_PROPERTIES']['SIZE']['VALUE'];
}
?>

<?$APPLICATION->AddViewContent('meta_no_index','<meta name="robots" content="noindex, nofollow" />');?>