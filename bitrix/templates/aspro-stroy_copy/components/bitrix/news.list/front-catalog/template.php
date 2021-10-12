<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<?
$frame = $this->createFrame()->begin();
$frame->setAnimation(true);
?>
<?if($arResult['ITEMS']):?>
	<?
    $quantity_projects = 1;
//	$qntyItems = count($arResult['ITEMS']);
    $qntyItems = 1959;
	$bShowImage = in_array('PREVIEW_PICTURE', $arParams['FIELD_CODE']);
	?>
	<div class="projects">
        <div class="">
            <div class="s-title-wrapper">
                <h2 class="s-title">¬ыполненные проекты</h2>
                <a href="<?=str_replace('#SITE'.'_DIR#', SITE_DIR, $arResult['LIST_PAGE_URL'])?>" class="projects-btn">—мотреть все</a>
            </div>
        </div>
		<div class="projects-wrapper">
            <div class="<?= $APPLICATION->GetCurPage() == '/' ? 'c-container' : '' ?>">
                <div class="projects-item-wrapper">
					<?foreach($arResult["ITEMS"] as $i => $arItem):?>
                    <?if ($quantity_projects < 8):?>
						<?
						// edit/add/delete buttons for edit mode
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						// use detail link?
						$bDetailLink = $arParams['SHOW_DETAIL_LINK'] != 'N' && (!strlen($arItem['DETAIL_TEXT']) ? $arParams['HIDE_LINK_WHEN_NO_DETAIL'] !== 'Y' : true);
						// preview image


						if($bShowImage){
							$bImage = strlen($arItem['PROPERTIES']['BIG_PHOTOS']['VALUE'][1]);
							$arImage = ($bImage ? CFile::ResizeImageGet($arItem['PROPERTIES']['BIG_PHOTOS']['VALUE'][1], array('width' => 500, 'height' => 500), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true) : array());
							$imageSrc = ($bImage ? $arImage['src'] : SITE_DIR . SITE_TEMPLATE_PATH.'/images/noimage_product.png');
							$imageDetailSrc = ($bImage ? $arItem['FIELDS']['DETAIL_PICTURE']['SRC'] : false);
						}
						?>
						<a class="projects-item" href="<?=$arItem['DETAIL_PAGE_URL']?>" itemprop="url">
                            <div class="projects-item-wrapper-item">
                                <div class="projects-item-img" style="background-image: url(<?=$imageSrc?>)" itemprop="image"></div>
                                <div class="projects-item-info">
                                    <?if(strlen($arItem['FIELDS']['NAME'])):?>
                                        <div class="projects-item-title" itemprop="name">
                                            <?=$arItem['NAME']?>
                                        </div>
                                    <?endif;?>
                                    <div class="projects-item-info-bottom">
                                        <?
                                        $isSizes=($arItem['DISPLAY_PROPERTIES']['SIZE']['VALUE'] ? true : false);
                                        $isPrices=(strlen($arItem['DISPLAY_PROPERTIES']['PRICE']['VALUE']) ? true : false);
                                        ?>
                                        <?php if(false && intval($arItem['DISPLAY_PROPERTIES']['SIZE']['VALUE']) > 0): ?>
                                            <div class="projects-item-days">??
                                                <?
                                                    $price_1 = intval($arItem['DISPLAY_PROPERTIES']['SIZE']['VALUE']) * 1100;
                                                    $srok = intval($arItem['DISPLAY_PROPERTIES']['SIZE']['VALUE'] / 45);
                                                ?>
                                                <?php if($srok > 1 AND $srok < 5): ?>
                                                    <?php echo $srok;?> мес€ца.
                                                <?php endif; ?>
                                                <?php if($srok == 1 OR $srok < 1): ?>
                                                    1 мес€ц.
                                                <?php endif; ?>
                                                <?php if($srok > 4): ?>
                                                    <?php echo $srok;?> мес€цев.
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                        <? if($price_1):?>
                                            <div class="projects-item-cost">?? <?php echo number_format($price_1, 2, ',', ' ');  ?> ???.</div>
                                        <? endif;?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <? $quantity_projects++;?>
                    <? endif; ?>
					<?endforeach;?>
                    <div class="projects-item-more">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/projects-more-icon.png" alt="">
                        <a href="<?=str_replace('#SITE'.'_DIR#', SITE_DIR, $arResult['LIST_PAGE_URL'])?>dizayn-proekty-kvartir/" class="projects-item-more-link">—мотреть остальные <?=$qntyItems?> выполненных проектов</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?endif;?>

<?$frame->end();?>
