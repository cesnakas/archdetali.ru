<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arResult):?>
        <?foreach($arResult as $arItem):?>
            <?$bShowChilds = ($arParams["MAX_LEVEL"] > 1 && $arItem["PARAMS"]["CHILD"]!="N");?>
            <li>
                <a href="<?=$arItem["LINK"]?>" >
                    <?=$arItem["TEXT"]?>
                </a>
                <?if($arItem["CHILD"] && $bShowChilds):?>
                    <ul >
                        <?foreach($arItem["CHILD"] as $arSubItem):?>
                            <?$bShowChilds = ($arParams["MAX_LEVEL"] > 2 && $arSubItem["PARAMS"]["CHILD"]!="N");?>
                            <li>
                                <a href="<?=$arSubItem["LINK"]?>"><?=$arSubItem["TEXT"]?></a>
                            </li>
                        <?endforeach;?>
                    </ul>
                <?endif;?>
            </li>
        <?endforeach;?>
<?endif;?>