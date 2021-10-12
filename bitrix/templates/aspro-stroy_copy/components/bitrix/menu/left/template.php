<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();?>
<?$this->setFrameMode(true);?>
<?
if(!function_exists("ShowSubItems")){
	function ShowSubItems($arItem){
		?>
		<?if($arItem["CHILD"]):?>
			<?$noMoreSubMenuOnThisDepth = false;?>
				<ul class="submenu">
				<?foreach($arItem["CHILD"] as $arSubItem):
                    if($arSubItem['DEPTH_LEVEL'] > 1) continue;
                    ?>
					<li class="<?=($arSubItem["SELECTED"] ? "active" : "")?> <?=($arSubItem["CHILD"] ? "child" : "")?>">
						<?php if($arSubItem["CHILD"]):?>
                            <div><a href="<?=$arSubItem["LINK"]?>"><?=$arSubItem["TEXT"]?></a></div>
                        <?php else:?>
                            <a href="<?=$arSubItem["LINK"]?>"><?=$arSubItem["TEXT"]?></a>
                        <?php endif;?>
						<?if(!$noMoreSubMenuOnThisDepth):?>
							<?ShowSubItems($arSubItem);?>
						<?endif;?>
					</li>
					<?$noMoreSubMenuOnThisDepth |= CStroy::isChildsSelected($arSubItem["CHILD"]);?>
				<?endforeach;?>
			</ul>
		<?endif;?>
		<?
	}
}
?>
<?if($arResult):?>
	<aside class="sidebar">
		<ul class="nav nav-list side-menu">
			<?foreach($arResult as $arItem):?>
				<li class="<?=($arItem["SELECTED"] ? "active" : "")?> <?=($arItem["CHILD"] ? "child" : "")?>">
					<div>
                        <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    </div>
					<?ShowSubItems($arItem);?>
				</li>
			<?endforeach;?>
		</ul>
	</aside>
<?endif;?>