<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?if($arResult):?>
    <ul class="mnu">
        <?foreach($arResult as $arItem):?>
            <?$bShowChilds = ($arParams["MAX_LEVEL"] > 1 && $arItem["PARAMS"]["CHILD"]!="N");?>
            <li class="mnu-item<?=($arItem["CHILD"] && $bShowChilds ? " mnu-item-drop-link" : "");?>">
                <a class="mnu-item-link<?=($arItem["SELECTED"] ? " active" : "")?>" href="<?=$arItem["LINK"]?>" >
                    <?=$arItem["TEXT"]?>
                </a>
                <?if($arItem["CHILD"] && $bShowChilds):?>
                    <div class="mnu-drop">
                        <div class="mnu-drop-wrapper">
                            <ul class="mnu-drop-list<?=((count($arItem["CHILD"]) > 9) ? " mnu-list-column":"");?>">
                                <?foreach($arItem["CHILD"] as $arSubItem):?>
                                    <?$bShowChilds = ($arParams["MAX_LEVEL"] > 2 && $arSubItem["PARAMS"]["CHILD"]!="N");?>
                                    <li class="mnu-drop-list-item<?=($arSubItem["SELECTED"] ? " active" : "")?>">
                                        <a class="mnu-drop-list-item-link" href="<?=$arSubItem["LINK"]?>"><?=$arSubItem["TEXT"]?></a>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        </div>
                    </div>
                <?endif;?>
            </li>
        <?endforeach;?>
    </ul>
<?endif;?>
