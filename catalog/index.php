<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "���������");
$APPLICATION->SetPageProperty("description","���������. �������� ������ ��������� ����� ��������� �� �������� Arch Detali");
$APPLICATION->SetTitle("���������");
?>
<div class="catalog_wrap">
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"catalog", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"COUNT_IN_LINE" => "3",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_BRAND_PROP_CODE" => array(
			0 => "TIZERS",
			1 => "",
		),
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "��������",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "FORM_QUESTION",
			1 => "FORM_ORDER",
			2 => "PRICE",
			3 => "PRICEOLD",
			4 => "ARTICLE",
			5 => "TYPE",
			6 => "SIZE",
			7 => "COLOR",
			8 => "SIZE_ZHILAYA",
			9 => "SIZE_KUXNI",
			10 => "LINK_PROJECTS",
			11 => "SLEEP_ROOM",
			12 => "APPOINTMENT",
			13 => "STIKERS",
			14 => "GARAGE",
			15 => "STATUS",
			16 => "BRAND",
			17 => "DOCUMENTS",
			18 => "PLANIROVKA",
            19 => "ROOMS_COUNT",
            20 => "PRICE_UNDER_KEY",
            21 => "PRICE_ADAPTATION",
            22 => "TIME_REPAIRS",
            23 => "PRICE_REPAIR_WORK",
            24 => "PRICE_MATERIALS",
			25 => "PRICE_CHIST_MATERIALS",
            26 => "PRICE_CHERN_MATERIALS",
            27 => "TIME_DESIGN",
            28 => ""
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array(
			0 => "FILTER_PRICE",
			1 => "SIZE",
			2 => "COLOR",
			3 => "SIZE_ZHILAYA",
			4 => "SIZE_KUXNI",
			5 => "SLEEP_ROOM",
			6 => "APPOINTMENT",
			7 => "GARAGE",
			8 => "",
		),
		"FILTER_URL_TEMPLATE" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "70",
		"IBLOCK_TYPE" => "aspro_stroy_catalog",
		"IMAGE_POSITION" => "top",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "TYPE_BUILDINGS",
			1 => "FORM_QUESTION",
			2 => "FORM_ORDER",
			3 => "SHOW_ON_INDEX_PAGE",
			4 => "PRICE",
			5 => "PRICEOLD",
			6 => "FILTER_PRICE",
			7 => "ARTICLE",
			8 => "TYPE",
			9 => "SIZE",
			10 => "COLOR",
			11 => "SIZE_ZHILAYA",
			12 => "SIZE_KUXNI",
			13 => "LINK_PROJECTS",
			14 => "SLEEP_ROOM",
			15 => "APPOINTMENT",
			16 => "STIKERS",
			17 => "GARAGE",
			18 => "TIZERS",
			19 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "21",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "�������",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROP_1" => "SIZE",
		"PROP_2" => "FILTER_PRICE",
		"PROP_3" => "TYPE_BUILDINGS",
		"SEF_FOLDER" => "/catalog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DETAIL" => "Y",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_IMAGE" => "Y",
		"SHOW_NAME" => "Y",
		"SHOW_SLIDE_PROP" => array(
			0 => "COLOR",
			1 => "SIZE_ZHILAYA",
			2 => "SLEEP_ROOM",
			3 => "GARAGE",
            4 => "SIZE",
            5 => "ROOMS_COUNT",
            6 => "PRICE_UNDER_KEY",
            7 => "PRICE_ADAPTATION",
            8 => "TIME_REPAIRS",
            9 => "PRICE_REPAIR_WORK",
            10 => "PRICE_MATERIALS",
            11 => "PRICE_CHIST_MATERIALS",
            12 => "PRICE_CHERN_MATERIALS",
            13 => "TIME_DESIGN",
            14 => ""
		),
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_DIRECTION" => "asc",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"SORT_PROP" => array(
			0 => "sort",
			1 => "SIZE",
		),
		"SORT_PROP_DEFAULT" => "sort",
		"STRICT_SECTION_CHECK" => "N",
		"S_ASK_QUESTION" => "",
		"S_DETAIL_PRODUCT" => "���������",
		"S_ORDER_PRODUCT" => "�������� ��������� ������",
		"T_CHARACTERISTICS" => "",
		"T_DOCS" => "",
		"T_GALLERY" => "",
		"T_PLANS" => "���������� ���������",
		"T_PROJECTS" => "",
		"T_VIDEO" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y",
		"VIEW_TYPE" => "table",
		"COMPONENT_TEMPLATE" => "catalog",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
<div class="maxwidth-theme important_maxwidth-theme">
    <div class="content-md">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"front-catalog",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "front-catalog",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_PICTURE",2=>"DETAIL_PICTURE",3=>"",),
		"FILTER_NAME" => "arCatalogItemsFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_stroy_catalog"]["aspro_stroy_catalog"][0],
		"IBLOCK_TYPE" => "aspro_stroy_catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "30",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "�������",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"SHOW_ON_INDEX_PAGE",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_GOODS" => "Y",
		"SHOW_SECTIONS" => "Y",
		"SHOW_SLIDE_PROP" => array(0=>"",1=>"",),
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"S_DETAIL_PRODUCT" => "���������"
	)
);?>
</div>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>