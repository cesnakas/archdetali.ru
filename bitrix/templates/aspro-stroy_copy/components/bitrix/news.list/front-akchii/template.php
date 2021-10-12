<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<? $this->setFrameMode(true); ?>
<? if ($arResult['ITEMS']) { ?>
    <div class="akchii">
        <div class="s-title-wrapper">
            <h2 class="news-title s-title">Наши акции</h2>
        </div>
        <div class="news-slider">
            <? foreach ($arResult['ITEMS'] as $key => $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                $file = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width' => 900, 'height' => 500), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                ?>
                <div class="akchii-item" <? if ($file) {
                    echo 'style="background-image: url(' . $file['src'] . ');"';
                } ?>>
                    <div class="akchii-item-wrapper">
                        <div class="akchii-item-info">
                            <div class="akchii-item-info-left">
                                <div class="akchii-item-info-title">
                                    <? /*<a href="<?= $arItem['DETAIL_PAGE_URL']?>">*/ ?>
                                    <?= $arItem['NAME'] ?>
                                    <? /*</a>*/ ?>
                                </div>
                                <div class="akchii-item-info-desc">
                                    <?= $arItem['~PREVIEW_TEXT'] ?>
                                </div>
                            </div>
                            <div class="akchii-item-info-right">
                                <div class="akchii-item-date">
                                    <? if (isset($arItem["PROPERTIES"]["slide_right_title"])): ?>
                                        <span class="akchii-item-date-title"><?= $arItem["PROPERTIES"]["slide_right_title"]["VALUE"] ?></span>
                                    <? endif; ?>
                                    <? if (isset($arItem["PROPERTIES"]["slide_right_img"])): ?>
                                        <?
                                        $imgFile = CFile::GetFileArray($arItem["PROPERTIES"]["slide_right_img"]["VALUE"]);
                                        $file = CFile::ResizeImageGet($imgFile, array('width' => 250, 'height' => 180), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                                        if ($file) {
                                            echo '<div class="akchii-item-date-img" style="background-image: url(' . $file['src'] . ')"></div>';
                                        } ?>
                                    <? endif; ?>
                                    <? if (!empty($arItem["PROPERTIES"]["slide_right_text"]["~VALUE"]["TEXT"])): ?>
                                        <div class="akchii-item-date-text"><?=$arItem["PROPERTIES"]["slide_right_text"]["~VALUE"]["TEXT"] ?></div>
                                    <? endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
<? } ?>