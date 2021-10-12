<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<?if($arResult['SECTIONS']):?>
	<?
	$qntyItems = count($arResult['SECTIONS']);
	$colmd = ($qntyItems > 1 ? 4 : 12);
	$colsm = 6;
	?>
	<div class="item-views catalog sections">
		<?if($arParams['arSubSectionsGet']){?>
		<div class="s-title-wrapper">
	        <h2 class="s-title"><?=$arParams['arSubSectionsGet']?></h2>
	    </div>
		<?}?>
		<div class="items row">
			<?foreach($arResult['SECTIONS'] as $arItem):?>
				<?
				// edit/add/delete buttons for edit mode
				$arSectionButtons = CIBlock::GetPanelButtons($arItem['IBLOCK_ID'], 0, $arItem['ID'], array('SESSID' => false, 'CATALOG' => true));
				$this->AddEditAction($arItem['ID'], $arSectionButtons['edit']['edit_section']['ACTION_URL'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'SECTION_EDIT'));
				$this->AddDeleteAction($arItem['ID'], $arSectionButtons['edit']['delete_section']['ACTION_URL'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'SECTION_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				// preview picture
				if($bShowSectionImage = in_array('PREVIEW_PICTURE', $arParams['FIELD_CODE'])){
					$bImage = strlen($arItem['PICTURE']);
					$arSectionImage = ($bImage ? CFile::ResizeImageGet($arItem['PICTURE'], array('width' => 265, 'height' => 198), BX_RESIZE_IMAGE_PROPORTIONAL, true) : array());
					$imageSectionSrc = ($bImage ? $arSectionImage['src'] : SITE_TEMPLATE_PATH.'/images/noimage_sections.png');
				}
				?>
				<div class="col-xs-6 col-md-<?=$colmd?> col-sm-<?=$colsm?>">
					<div class="item noborder<?=($bShowSectionImage ? '' : ' wti')?>" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
						<?// icon or preview picture?>
						<?if($bShowSectionImage):?>
							<div class="image" style="background:  linear-gradient(360deg, #000000 11.49%, rgba(0, 0, 0, 0) 27.11%), url(<?=$imageSectionSrc?>) no-repeat center">
								<a href="<?=$arItem['SECTION_PAGE_URL']?>">
									<img src="<?=$imageSectionSrc?>" alt="" title="" class="img-responsive" />
								</a>
							</div>
						<?endif;?>

						<div class="info">
							<?// section name?>
							<?if(in_array('NAME', $arParams['FIELD_CODE'])):?>
								<div class="title">
									<a href="<?=$arItem['SECTION_PAGE_URL']?>">
										<?=$arItem['NAME']?>
									</a>
								</div>
							<?endif;?>
							  <div itemprop="offers" itemtype="https://schema.org/AggregateOffer" itemscope>
        						<link itemprop="url" href="<?=$arItem['SECTION_PAGE_URL']?>" />
						        <meta itemprop="lowPrice" content="260000" />
						        <meta itemprop="highPrice" content="5600000" />
						        <meta itemprop="offerCount" content="6" />
						        <meta itemprop="priceCurrency" content="RUR" />
						      </div>

							<?// section preview text?>
							<?if(strlen($arItem['UF_INFOTEXT'])):?>
								<div class="text">
									<?=$arItem['UF_INFOTEXT']?>
								</div>
							<?endif;?>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
			$('.catalog.item-views.sections .item .title').sliceHeight();
			$('.catalog.item-views.sections .item').sliceHeight();
		});
		</script>
	</div>
<?endif;?>