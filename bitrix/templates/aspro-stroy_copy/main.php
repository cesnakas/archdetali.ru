<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?ob_start();?>

<div class="services">
    <div class="c-container">
        <!-- 5 шагов -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "front-banners-small",
            array(
                "IBLOCK_TYPE" => "aspro_stroy_content",
                "IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_stroy_content"]["aspro_stroy_advtsmall"][0],
                "NEWS_COUNT" => "5",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ID",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "LINK",
                    2 => "ICON",
                    3 => "",
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
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_STATUS_404" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
                "PAGER_SHOW_ALL" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "COMPONENT_TEMPLATE" => "front-banners-small",
                "SET_LAST_MODIFIED" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "STRICT_SECTION_CHECK" => "N",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO"
            ),
            false
        );?>

<!-- наши улуги -->
        <?if($bCatalogIndex):?>
            <? /*$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "front-catalog-section-small",
                array(
                        "IBLOCK_TYPE" => "aspro_stroy_catalog",
                        "IBLOCK_ID" => 60,
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_BY2" => "ID",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "arCatalogItemsFilter1",
                        "FIELD_CODE" => array(
                            0 => "NAME",
                            1 => "PREVIEW_PICTURE",
                            2 => "DETAIL_PICTURE",
                            3 => "",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "SHOW_ON_INDEX_PAGE",
                            1 => "STATUS",
                            2 => "PRICE",
                            3 => "PRICEOLD",
                            4 => "ARTICLE",
                            5 => "TAGS",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "CACHE_TYPE" => "Y",
                        "CACHE_TIME" => "3600000",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
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
                        "PAGER_SHOW_ALL" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SHOW_DETAIL_LINK" => "Y",
                    ),
                    false
            );*/?>
        <?endif;?>
    </div>
</div>



<!-- наши проекты -->
<?if($bCatalogFavoritesIndex):?>
    <?$GLOBALS['arCatalogItemsFilter'] = array('!PROPERTY_SHOW_ON_INDEX_PAGE' => false);?>
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "front-catalog", array(
            "IBLOCK_TYPE" => "aspro_stroy_catalog",
            "IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_stroy_catalog"]["aspro_stroy_catalog"][0],
            "NEWS_COUNT" => "82",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "ID",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "arCatalogItemsFilter",
            "FIELD_CODE" => array(
                0 => "NAME",
                1 => "PREVIEW_PICTURE",
                2 => "DETAIL_PICTURE",
                3 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "SHOW_ON_INDEX_PAGE",
                2 => "PRICE",
                3 => "PRICEOLD",
                4 => "STIKERS",
                5 => "SIZE",
                6 => "ARTICLE",
                7 => "APPOINTMENT",
                8 => "COLOR",
                9 => "",
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
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
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
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SHOW_DETAIL_LINK" => "Y",
            "COMPONENT_TEMPLATE" => "front-catalog",
            "SET_LAST_MODIFIED" => "N",
            "SHOW_SECTIONS" => "Y",
            "SHOW_GOODS" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "SHOW_404" => "N",
            "MESSAGE_404" => "",
            "S_DETAIL_PRODUCT" => "Подробнее",
            "SHOW_SLIDE_PROP" => array(
                0 => "",
                1 => "APPOINTMENT",
                2 => "COLOR",
                3 => "",
            ),
            "STRICT_SECTION_CHECK" => "N",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO"
        ),
        false
    );?>
<?endif;?>
    <!-- есть вопросы -->
<?if(true) {?>
    <?$APPLICATION->IncludeComponent("aspro:form.stroy", "banner-form1", Array(
        "IBLOCK_TYPE" => "aspro_stroy_form",	// Тип инфоблока
        "IBLOCK_ID" => "67",	// ID инфоблока
        "USE_CAPTCHA" => "Y",	// Защита от спама в формах (капча)
        "DISPLAY_PROCESSING_NOTE" => "N",	// Необходимо согласие на обработку персональных данных
        "PROCESSING_NOTE_CHECKED" => "N",
        "AJAX_MODE" => "N",	// Включить режим AJAX
        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
        "CACHE_TYPE" => "A",	// Тип кеширования
        "CACHE_TIME" => "100000",	// Время кеширования (сек.)
        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
        "IS_PLACEHOLDER" => "Y",	// Использовать placeholder в input
        "SUCCESS_MESSAGE" => "Спасибо! Ваше сообщение отправлено!",	// Сообщение об успешной отправке
        "SEND_BUTTON_NAME" => "Отправить",	// Название кнопки отправки
        "SEND_BUTTON_CLASS" => "questions-form-btn",	// Класс кнопки отправки
        "DISPLAY_CLOSE_BUTTON" => "Y",	// Отображать кнопку закрытия
        "POPUP" => "Y",
        "CLOSE_BUTTON_NAME" => "Закрыть",	// Название кнопки закрытия
        "CLOSE_BUTTON_CLASS" => "jqmClose btn btn-default bottom-close",	// Класс кнопки закрытия
    ),
        false
    );?>
<? };?>
<!-- наши новости -->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "front-akchii",
    array(
        "IBLOCK_TYPE" => "aspro_stroy_content",
        "IBLOCK_ID" => "95",
        "NEWS_COUNT" => "3",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "DETAIL_PICTURE",
            2 => "DATE_ACTIVE_FROM",
            3 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "slide_right_title",
            1 => "slide_right_text",
            2 => "slide_right_img",
            3 => "",
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
        "COMPONENT_TEMPLATE" => "front-news",
        "SET_LAST_MODIFIED" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => ""
    ),
    false
);?>

<!-- наши новости -->
<?if($bPortfolioIndex):?>
    <?$GLOBALS['arPropertyItemsFilter'] = array('!PROPERTY_SHOW_ON_INDEX_PAGE' => false);?>
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "front-project-s", array(
            "IBLOCK_TYPE" => "aspro_stroy_content",
            "IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_stroy_content"]["aspro_stroy_projects"][0],
            "NEWS_COUNT" => "7",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "arPropertyItemsFilter",
            "FIELD_CODE" => array(
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "PREVIEW_PICTURE",
                3 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "",
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
            "COMPONENT_TEMPLATE" => "front-projects",
            "SET_LAST_MODIFIED" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "SHOW_SECTIONS" => "Y",
            "SHOW_GOODS" => "Y",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "SHOW_404" => "N",
            "MESSAGE_404" => ""
        ),
        false,
        array(
            "ACTIVE_COMPONENT" => "N"
        )
    );?>
<?endif;?>

<!-- как происходит работа -->
<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => $APPLICATION->GetTemplatePath("include_areas/work-stages.php")
    ),
    false
); ?>

<!-- стоимость дизайн-проекта -->
<div class="price">
    <div class="c-container">
        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => $APPLICATION->GetTemplatePath("include_areas/paketnii_predloshenia.php")
            ),
            false
        ); ?>
    </div>
</div>


<!-- калькулятор расчета дизайн-проекта -->
<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => $APPLICATION->GetTemplatePath("include_areas/calc2.php")
    ),
    false
);?>

<!-- о нашей компании -->
<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
    "AREA_FILE_SHOW" => "file",
    "PATH" => $APPLICATION->GetTemplatePath("include_areas/main-text.php")
),
    false
);?>


<?$indexProlog = ob_get_clean();?>

<?ob_start();?>
<?$indexEpilog = ob_get_clean();?>