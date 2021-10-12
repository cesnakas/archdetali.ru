<?
// get all subsections of PARENT_SECTION or root sections
$arSectionsFilter = array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y', 'GLOBAL_ACTIVE' => 'Y', 'ACTIVE_DATE' => 'Y');
if ($arParams['PARENT_SECTION']) {
    $arSectionsFilter = array_merge($arSectionsFilter, array('SECTION_ID' => $arParams['PARENT_SECTION'], '>DEPTH_LEVEL' => '1'));
} else {
    $arSectionsFilter['DEPTH_LEVEL'] = '1';
}
$arResult['SECTIONS'] = CCache::CIBLockSection_GetList(array('SORT' => 'ASC', 'NAME' => 'ASC', 'CACHE' => array('TAG' => CCache::GetIBlockCacheTag($arParams['IBLOCK_ID']), 'GROUP' => array('ID'), 'MULTI' => 'N')), $arSectionsFilter, false, array('ID', 'NAME', 'IBLOCK_ID', 'DEPTH_LEVEL', 'SECTION_PAGE_URL', 'PICTURE', 'DETAIL_PICTURE', 'UF_INFOTEXT', 'DESCRIPTION'), array('nTopCount' => $arParams['NEWS_COUNT']));
// get goods with property SHOW_ON_INDEX_PAGE == Y
$arResult['PTAGS'] = [];
if ($arResult['ITEMS']) {

    foreach ($arResult['ITEMS'] as $i => $arItem) {

        if (isset($arItem['PROPERTIES']['PTAGS']) && $arItem['PROPERTIES']['PTAGS']['VALUE']) {
            foreach ($arItem['PROPERTIES']['PTAGS']['VALUE_ENUM_ID'] as $k => $id) {

                $arResult['PTAGS'][$id] = $arItem['PROPERTIES']['PTAGS']['VALUE'][$k];
            }

        }

        if ($arItem['PROPERTIES']['SHOW_ON_INDEX_PAGE']['VALUE_XML_ID'] !== 'YES') {
            unset($arResult['ITEMS'][$i]);
            unset($arResult['ELEMENTS'][$i]);
        } else {
            $arGoodsSectionsIDs[] = $arItem["IBLOCK_SECTION_ID"];
        }
    }

    // get good`s section name
    if ($arGoodsSectionsIDs) {
        $arGoodsSectionsIDs = array_unique($arGoodsSectionsIDs);
        $arGoodsSections = CCache::CIBLockSection_GetList(array('CACHE' => array('TAG' => CCache::GetIBlockCacheTag($arParams['IBLOCK_ID']), 'GROUP' => array('ID'), 'MULTI' => 'N', 'RESULT' => array('NAME'))), array('ID' => $arGoodSectionsIDs), false, array('ID', 'NAME'));
        if ($arGoodsSections) {
            foreach ($arResult['ITEMS'] as $i => $arItem) {
                $arResult['ITEMS'][$i]['SECTION_NAME'] = $arGoodsSections[$arItem["IBLOCK_SECTION_ID"]];
            }
        }
    }

    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL", 'PROPERTY_PTAGS');//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
    $arFilter = Array("IBLOCK_ID" => IntVal(60), "ACTIVE" => "Y");
    $res = CIBlockElement::GetList([], $arFilter, false, Array("nTopCount" => 20), $arSelect);
    $items = [];
    while ($item = $res->Getnext()) {
        $items[] = $item;
    }

    foreach ($items as $arItem) {
        $arResult['SECTIONS'][$arItem['ID']] = $arItem;
        $arResult['SECTIONS'][$arItem['ID']]['PICTURE'] = $arItem["PREVIEW_PICTURE"];
        $arResult['SECTIONS'][$arItem['ID']]['SECTION_PAGE_URL'] = $arItem["DETAIL_PAGE_URL"];
    }
}


