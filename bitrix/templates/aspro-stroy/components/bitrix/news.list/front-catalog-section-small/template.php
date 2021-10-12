<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);


?>
<?if($arResult['SECTIONS']):?>
	<?
	$qntyItems = count($arResult['SECTIONS']);
    $colmd = 4;
    $colsm = 6;
    $colxs = 6;
	?>
        <div id="tag_main" class="tag_main">
            <a class="tag btn btn-default white transparent" href="#all">Все услуги</a>
            <?foreach ($arResult['PTAGS'] as $id => $tag) {?>
                <a class="tag btn btn-default white transparent" href="#id_<?=$id?>"><?=$tag?></a>
            <?}?>
        </div><br><br>

	<div class="js-tags_main item-views catalog-small catalog sections front catalog-front-custom1" style="display:none;">
		<div class="items row">
			<?
            $count = 1;
            foreach($arResult['SECTIONS'] as $arItem):



				// edit/add/delete buttons for edit mode
				$arSectionButtons = CIBlock::GetPanelButtons($arItem['IBLOCK_ID'], 0, $arItem['ID'], array('SESSID' => false, 'CATALOG' => true));
				$this->AddEditAction($arItem['ID'], $arSectionButtons['edit']['edit_section']['ACTION_URL'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'SECTION_EDIT'));
				$this->AddDeleteAction($arItem['ID'], $arSectionButtons['edit']['delete_section']['ACTION_URL'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'SECTION_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				// preview picture
				if($bSectionImage = strlen($arItem['PICTURE']) && in_array('PREVIEW_PICTURE', $arParams['FIELD_CODE'])){
					// $arSectionImage = CFile::ResizeImageGet($arItem['PICTURE'], array('width' => 361, 'height' => 254), BX_RESIZE_IMAGE_EXACT, true);
					$arSectionImage = CFile::ResizeImageGet($arItem['PICTURE'], array('width' => 500, 'height' => 500), BX_RESIZE_IMAGE_PROPORTIONAL, true);
					$imageSectionSrc = $arSectionImage['src'];
				}
				?>
				<div  class="<?=$count>20 ? 'hide_item ': ''?><?if($arItem['PROPERTY_PTAGS_VALUE']){?>id_<?=implode(' id_', array_keys($arItem['PROPERTY_PTAGS_VALUE']))?> <?}?> col-20 col-md-<?=$colmd?> col-sm-<?=$colsm?> col-xs-<?=$colxs?>">
					<div class="item<?=($bSectionImage ? '' : ' wti')?> wline" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
						<a href="<?=$arItem['SECTION_PAGE_URL']?>" class="dark_block_animate"></a>
						<?// icon or preview picture?>
						
						<?/*if($bSectionImage):?>
							<div class="image scale_block_animate">
								<a href="<?=$arItem['SECTION_PAGE_URL']?>">
									<img src="<?=$imageSectionSrc?>" alt="<?=$arItem['NAME']?>" title="<?=$arItem['NAME']?>" class="img-responsive" />
								</a>
							</div>
						<?endif;*/?>
						<div class="img_block scale_block_animate" style="background-image: url('<?=$imageSectionSrc;?>');"></div>
						<div class="info">
							<?// section name?>
							<?if(in_array('NAME', $arParams['FIELD_CODE'])):?>
								<div class="title">
									<span class="   wrap_outer titles">
										<a href="<?=$arItem['SECTION_PAGE_URL']?>" class="outer_text">
											<span class="inner_text"><?=strip_tags($arItem["~NAME"], "<br><br/>");?></span>
										</a>
									</span>
								</div>
							<?endif;?>

							<?// section preview text?>
							<?if(strlen($arItem['UF_INFOTEXT'])):?>
								<div class="text">
									<?=$arItem['UF_INFOTEXT']?>
								</div>
							<?endif;?>
						</div>
					</div>
				</div>
			<?$count++;endforeach;?>
		</div>
	</div>
<?endif;?>

<script type="text/javascript">
$(document).ready(function() {
	try{
		if(arStroyOptions.THEME.CATALOG_INDEX == 'Y'){
			$('.catalog.item-views.sections.front').show();
		}
		else{
			$('.catalog.item-views.sections.front').remove();
		}
	}
	catch(e){}
});
</script>