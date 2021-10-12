<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

?>
<?if($arResult['SECTIONS']):?>
	<? $qntyItems = count($arResult['SECTIONS']);?>
    <div class="services-main">
        <div class="s-title-wrapper">
            <div class="services-title s-title">Наши услуги</div>
        </div>
        <div id="tag_main" class="tag_main services-tabs">
            <ul class="services-tabs-nav">
                <li>
                    <a class="tag services-tabs-nav-item active" href="#all">Все услуги</a>
                </li>
                <?foreach ($arResult['PTAGS'] as $id => $tag) {?>
                    <li class="">
                        <a class="services-tabs-nav-item tag" href="#id_<?=$id?>"><?=$tag?></a>
                    </li>
                <?}?>
            </ul>
        </div>

	    <div class="services-item-wrapper">
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
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="services-item <?=$count>20 ? 'hide_item ': ''?><?if($arItem['PROPERTY_PTAGS_VALUE']){?>id_<?=implode(' id_', array_keys($arItem['PROPERTY_PTAGS_VALUE']))?> <?}?>">
                    <div class="services-item-wrapper-item" style="background-image: url(<?=$imageSectionSrc?>)">
                        <div class="services-item-text"><?=$arItem["NAME"];?></div>
                        <div class="services-item-info">
                            <div class="services-item-info-title"><?=$arItem["NAME"];?></div>
                           <?/* <div class="services-item-info-text">Предлагаем всем нашим клиентам разработку дизайна</div>
	    		<div class="services-item-info-cost">от 2500 руб</div>
	    		*/?>

                        </div>
                    </div>
                </a>
    		<?$count++;endforeach;?>
        </div>
	</div>
<?endif;?>