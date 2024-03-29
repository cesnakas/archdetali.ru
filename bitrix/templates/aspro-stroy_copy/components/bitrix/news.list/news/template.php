<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>
<div class="item-views list <?=($arParams['IMAGE_POSITION'] ? 'image_'.$arParams['IMAGE_POSITION'] : '')?> <?=($templateName = $component->{'__parent'}->{'__template'}->{'__name'})?>">
	<?// top pagination?>
	<?if($arParams['DISPLAY_TOP_PAGER']):?>
		<?=$arResult['NAV_STRING']?>
	<?endif;?>

	<?if($arResult['ITEMS']):?>
		<div class="items row">
			<?// show section items?>
			<?foreach($arResult['ITEMS'] as $i => $arItem):?>
				<?
				// edit/add/delete buttons for edit mode
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				// use detail link?
				$bDetailLink = $arParams['SHOW_DETAIL_LINK'] != 'N' && (!strlen($arItem['DETAIL_TEXT']) ? $arParams['HIDE_LINK_WHEN_NO_DETAIL'] !== 'Y' : true);
				// preview picture
				$bImage = strlen($arItem['FIELDS']['PREVIEW_PICTURE']['SRC']);
				$imageSrc = ($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['SRC'] : false);
				$imageDetailSrc = ($bImage ? $arItem['FIELDS']['DETAIL_PICTURE']['SRC'] : false);
				$bActiveDate = strlen($arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE']) || ($arItem['DISPLAY_ACTIVE_FROM'] && in_array('DATE_ACTIVE_FROM', $arParams['FIELD_CODE']));
				?>
				<?ob_start();?>
					<?// element name?>
					<?if(strlen($arItem['FIELDS']['NAME'])):?>
						<div class="title">
							<?if($bDetailLink):?><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?endif;?>
								<?=$arItem['NAME']?>
							<?if($bDetailLink):?></a><?endif;?>
						</div>
					<?endif;?>

					<?// date active period?>
					<?if($bActiveDate):?>
						<div class="period pull-left">
							<?if(strlen($arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE'])):?>
								<span class="label color_bg"><?=$arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE']?></span>
							<?else:?>
								<span class="label color_bg"><?=$arItem['DISPLAY_ACTIVE_FROM']?></span>
							<?endif;?>
						</div>
					<?endif;?>

					<?// section title?>
					<?if(strlen($arResult['SECTIONS'][$arItem['IBLOCK_SECTION_ID']]['NAME'])):?>
						<span class="section_name pull-left">
							//&nbsp;<?=$arResult['SECTIONS'][$arItem['IBLOCK_SECTION_ID']]['NAME']?>
						</span>
					<?endif;?>

					<div class="clearfix" style="display:block;"></div>

					<?// element preview text?>
					<?if(false):?>
					<?//if(strlen($arItem['FIELDS']['PREVIEW_TEXT'])):?>
						<?if($arItem["PREVIEW_TEXT_TYPE"] == "text"):?>
							<p><?=$arItem["FIELDS"]["PREVIEW_TEXT"]?></p>
						<?else:?>
							<?=$arItem["FIELDS"]["PREVIEW_TEXT"]?>
						<?endif;?>
					<?endif;?>

					<?// element display properties?>
					<?if($arItem['DISPLAY_PROPERTIES']):?>
						<div class="properties">
							<?foreach($arItem['DISPLAY_PROPERTIES'] as $PCODE => $arProperty):?>
								<?if(in_array($PCODE, array('PERIOD', 'TITLE_BUTTON', 'LINK_BUTTON'))) continue;?>
								<div class="property">
									<?if($arProperty['XML_ID']):?>
										<i class="fa <?=$arProperty['XML_ID']?>"></i>&nbsp;
									<?else:?>
										<?=$arProperty['NAME']?>:&nbsp;
									<?endif;?>
									<?if(is_array($arProperty['DISPLAY_VALUE'])):?>
										<?$val = implode('&nbsp;/&nbsp;', $arProperty['DISPLAY_VALUE']);?>
									<?else:?>
										<?$val = $arProperty['DISPLAY_VALUE'];?>
									<?endif;?>
									<?if($PCODE == 'SITE'):?>
										<!--noindex-->
										<?=str_replace("href=", "rel='nofollow' target='_blank' href=", $val);?>
										<!--/noindex-->
									<?elseif($PCODE == 'EMAIL'):?>
										<a href="mailto:<?=$val?>"><?=$val?></a>
									<?else:?>
										<?=$val?>
									<?endif;?>
								</div>
							<?endforeach;?>
						</div>
					<?endif;?>
					<?//if($bDetailLink):?>
					<?if(false):?>
						<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="btn btn-default transparent white"><span><?=GetMessage('TO_ALL')?></span></a>
					<?endif;?>
				<?$textPart = ob_get_clean();?>

				<?if($bImage):?>
					<?ob_start();?>
						<div class="image" >
							<?if($bDetailLink):?><a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="blink">
							<?elseif($arItem['FIELDS']['DETAIL_PICTURE']):?><a href="<?=$imageDetailSrc?>" alt="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" class="img-inside fancybox">
							<?endif;?>
								<img src="<?=$imageSrc?>" alt="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" class="img-responsive" />
							<?if($bDetailLink):?></a>
							<?elseif($arItem['FIELDS']['DETAIL_PICTURE']):?><span class="zoom"><i class="fa fa-16 fa-white-shadowed fa-search"></i></span></a>
							<?endif;?>
						</div>
					<?$imagePart = ob_get_clean();?>
				<?endif;?>
				<div class="col-md-12">
					<?if($i):?>
						<hr />
					<?endif;?>
					<div id="<?=$this->GetEditAreaId($arItem['ID'])?>" class="item noborder<?=($bImage ? '' : ' wti')?><?=($bActiveDate ? ' wdate' : '')?>">
						<div class="row">
							<?if(!$bImage):?>
								<div class="col-md-12"><div class="text"><?=$textPart?></div></div>
							<?elseif($arParams['IMAGE_POSITION'] == 'right'):?>
								<div class="col-md-8 col-sm-8 col-xs-12"><div class="text"><?=$textPart?></div></div>
								<div class="col-md-4 col-sm-4 col-xs-12"><?=$imagePart?></div>
							<?else:?>
								<div class="col-md-4 col-sm-4 col-xs-12"><?=$imagePart?></div>
								<div class="col-md-8 col-sm-8 col-xs-12"><div class="text"><?=$textPart?></div></div>
							<?endif;?>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>
	<?endif;?>

	<?// bottom pagination?>
	<?if($arParams['DISPLAY_BOTTOM_PAGER']):?>
		<?=$arResult['NAV_STRING']?>
	<?endif;?>
</div>