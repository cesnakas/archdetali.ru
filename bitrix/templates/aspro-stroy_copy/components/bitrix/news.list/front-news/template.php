<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>
<?if($arResult['ITEMS']){?>
<div class="news">
    <div class="s-title-wrapper">
        <div class="news-title s-title">
            <?if($arParams['PAGER_SHOW_ALL']):?>
                <a href="<?=str_replace('#SITE'.'_DIR#', SITE_DIR, $arResult['LIST_PAGE_URL'])?>">
            <?endif;?>
            Наши новости
            <?if($arParams['PAGER_SHOW_ALL']):?>
                </a>
            <?endif;?>
        </div>
    </div>

	<div class="news-slider">
		<?foreach($arResult['ITEMS'] as $key => $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			$arItem['DETAIL_PAGE_URL'] = str_replace('#YEAR#/', '', $arItem['DETAIL_PAGE_URL']);
			// use detail link?
			$bDetailLink = $arParams['SHOW_DETAIL_LINK'] != 'N' && (!strlen($arItem['DETAIL_TEXT']) ? $arParams['HIDE_LINK_WHEN_NO_DETAIL'] !== 'Y' : true);
			// preview image
			$bImage = strlen($arItem['FIELDS']['PREVIEW_PICTURE']['SRC']);
			$arImage = ($bImage ? CFile::ResizeImageGet($arItem['FIELDS']['PREVIEW_PICTURE']['ID'], array('width' => 105, 'height' => 70), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true) : array());
			$imageSrc = ($bImage ? $arImage['src'] : false);
			$bActiveDate = strlen($arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE']) || ($arItem['DISPLAY_ACTIVE_FROM'] && in_array('DATE_ACTIVE_FROM', $arParams['FIELD_CODE']));
			if ($bActiveDate) {
			    if(strlen($arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE'])) {
                    $dateNews = $arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE'];
                } else {
                    $dateNews = $arItem['DISPLAY_ACTIVE_FROM'];
                }
            };
			if ($dateNews) $arDateNews = explode(' ', $dateNews);
			?>
			<div class="news-item">
				<?if(!$bImage):?>
					<img src="<?=$imageSrc?>" alt="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" class="news-item-img" />
                <?else:?>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/news-item-img-1.jpg" alt="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" class="news-item-img" />
				<?endif;?>
                <div class="news-item-info">
                    <div class="news-item-info-left">
                        <?if(in_array('NAME', $arParams['FIELD_CODE']) && strlen($arItem['NAME'])):?>
                            <div class="news-item-info-title">
                                <?if($bDetailLink):?>
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                                <?endif;?>
                                <?=$arItem['NAME']?>
                                <?if($bDetailLink):?>
                                    </a>
                                <?endif;?>
                            </div>
                        <?endif;?>
                        <?if(strlen($arItem['FIELDS']['PREVIEW_TEXT'])):?>
                            <div class="news-item-info-desc">
                                <?=$arItem['FIELDS']['PREVIEW_TEXT']?>
                            </div>
                        <?endif;?>
                    </div>

                    <?if($bActiveDate):?>
                        <div class="news-item-info-right">
                            <div class="news-item-date">
                                <span><?=$arDateNews[0];?></span>
                                <div><?=$arDateNews[1];?></div>
                            </div>
                        </div>
                    <?endif;?>
                </div>
    		</div>
		<?endforeach;?>
	</div>
</div>
<?}?>