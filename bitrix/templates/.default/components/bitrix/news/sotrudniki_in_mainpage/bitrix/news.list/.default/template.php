<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-list">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
    <div class="row">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
        <div class="col-md-4 col-sm-6 col-xs-6 sotrudnik-item">
            <div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="img-sotrudnik">
                    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <?php
										 $renderImage = CFile::ResizeImageGet(
												         $arItem["PREVIEW_PICTURE"]['ID'],
												         array('width' => 200, 'height' => 200),
												          BX_RESIZE_IMAGE_EXACT,
												         true);
									
									?>
                    
                     <?php echo CFile::ShowImage($renderImage['src'], 150, 150, "border=0", "", false); ?>
                    
                    <?endif;?>
                    <?endif?>
                </div>
                <!--img-sotrudnik-->
                <div class="desk-sotrudnik">
                    <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                    <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <p class="title-sotrudnuk">
                        <?echo $arItem["NAME"]?>
                    </p>
                    <?else:?>
                    <p class="title-sotrudnuk">
                        <?echo $arItem["NAME"]?>
                    </p>
                    <?endif;?>
                    <?endif;?>
                    <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <?echo $arItem["PREVIEW_TEXT"];?>
                    <?endif;?>
                    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <div style="clear:both"></div>
                    <?endif?>
                </div>
                <!--desk-sotrudnik-->
            </div>
        </div>
        <?endforeach;?>
    </div>
</div>