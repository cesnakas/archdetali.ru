<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("� ��������");
$APPLICATION->SetPageProperty("title", "������� ����������� ������ Arch Detali");
$APPLICATION->SetPageProperty("description", "�������� ������� ����������� ���������� ������ ������� ��������� Arch Detali � ������.");
?>
<? $GLOBALS['arCompanyItemsFilter'] = array('!PROPERTY_COMPANY_BLOCK' => false); ?>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "company-detail",
    array(
        "IBLOCK_TYPE" => "aspro_stroy_content",
        "IBLOCK_ID" => "74",
        "NEWS_COUNT" => "1",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "arCompanyItemsFilter",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "DETAIL_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "property3",
            1 => "property1",
            2 => "property2",
            3 => "property4",
            4 => "FORM_ORDER",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600000",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "N",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "j F Y",
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "PAGER_TEMPLATE" => ".default",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
        "PAGER_SHOW_ALL" => "Y",
        "AJAX_OPTION_ADDITIONAL" => "",
        "SHOW_DETAIL_LINK" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "COMPONENT_TEMPLATE" => "company-detail",
        "SET_LAST_MODIFIED" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "DETAIL_BRAND_USE" => "Y",
        "DETAIL_BRAND_PROP_CODE" => array(
            0 => "PROFIT",
            1 => "",
        ),
        "T_PROFIT" => "",
        "T_STAT" => "",
        "T_GALLERY" => ""
    ),
    false
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>