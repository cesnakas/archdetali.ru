<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>
<?if($arResult['ITEMS']):?>
	<?
    $i = 1;
	$qntyItems = count($arResult['ITEMS']);
	?>
	<div class="services-top">
        <div class="services-top-wrapper">
			<?foreach($arResult['ITEMS'] as $arItem):?>
				<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					// preview image
					$bImage = strlen($arItem['DISPLAY_PROPERTIES']['ICON']['VALUE']);
					$arImage = ($bImage ? CFile::ResizeImageGet($arItem['DISPLAY_PROPERTIES']['ICON']['VALUE'], array('width' => 60, 'height' => 60), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true) : array());
					$imageSrc = ($bImage ? $arImage['src'] : false);
					// link
					$bLink = strlen($arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']);
				?>
				<div class="services-top-item services-top-item-<?=$i;?>">
                    <div class="services-top-item-number"><?=sprintf("%'.02d\n", $i); ?></div>
                    <div class="services-top-item-desc">
                        <?if($bLink):?><a href="<?=$arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']?>"><?endif;?>
                        <?=$arItem['NAME']?>
						<?if($bLink):?></a><?endif;?>
                    </div>
                </div>
                <? $i++; ?>
			<?endforeach;?>
		</div>
	</div>
<?endif;?>