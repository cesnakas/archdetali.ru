<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?if($arResult):?>
	<ul class="mnu-mob">
        <?foreach($arResult as $arItem):?>
            <?$bShowChilds = ($arParams["MAX_LEVEL"] > 1 && $arItem["PARAMS"]["CHILD"]!="N");?>
            <li class="mnu-mob-item<?=($arItem["SELECTED"] ? " active" : "")?>">
                <a class="mnu-mob-item-link" href="<?=$arItem["LINK"]?>" >
                    <?=$arItem["TEXT"]?>
                </a>
                <span class="<?=($arItem["CHILD"] && $bShowChilds ? " mnu-mob-item-drop-link" : "")?>"></span>
                <?if($arItem["CHILD"] && $bShowChilds):?>
                    <div class="mnu-mob-drop">
                        <ul class="mnu-mob-drop-list">
                            <?foreach($arItem["CHILD"] as $arSubItem):?>
                                <?$bShowChilds = ($arParams["MAX_LEVEL"] > 2 && $arSubItem["PARAMS"]["CHILD"]!="N");?>
                                <li class="mnu-mob-drop-list-item <?=($arSubItem["SELECTED"] ? "active" : "")?>">
                                    <a class="mnu-mob-drop-list-item-link" href="<?=$arSubItem["LINK"]?>"><?=$arSubItem["TEXT"]?></a>
                                </li>
                            <?endforeach;?>
                        </ul>
                    </div>
                <?endif;?>
            </li>
		<?endforeach;?>
    </ul>
<?endif;?>