<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<? $i = 1; ?>
<?if($arResult):?>
	<?foreach($arResult as $arItem):?>
		<?if($arItem["CHILD"] && $arItem["DEPTH_LEVEL"]<=2):?>
			<?$noMoreSubMenuOnThisDepth = false;
			$dLevel=2;?>
            <ul<? if (count($arItem["CHILD"]) > 9) { ?> class="footer-mnu-wrapper"<? };?>>
                <div class="footer-mnu">
				    <?foreach($arItem["CHILD"] as $arSubItem):?>
                        <li class="footer-mnu-item <?=($arSubItem["SELECTED"] ? "active" : "")?> <?=$i;?>">
                            <a class="footer-mnu-item-link" href="<?=$arSubItem["LINK"]?>"><?=$arSubItem["TEXT"]?></a>
                        </li>
                    <? $i++; ?>
				    <?endforeach;?>
                </div>
            </ul>
			<? if (count($arItem["CHILD"]) > 9) { ?></><? };?>		<?endif;?>
    <?endforeach;?>
<?endif;?>