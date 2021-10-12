<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<!DOCTYPE html>
<html lang='ru' class="<?=($_SESSION['SESS_INCLUDE_AREAS'] ? 'bx_editmode ' : '')?><?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie7' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0' ) ? 'ie ie8' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie9' : ''?>">
	<head>
		<?global $APPLICATION;?>
		<?IncludeTemplateLangFile(__FILE__);?>
		<title><?$APPLICATION->ShowTitle()?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="yandex-verification" content="ed0460145b1fd29b" />
		<meta name="yandex-verification" content="b3f0c032dd539c40" />
		<meta name="google-site-verification" content="0vWTLOKDY3VPEIk6c0Zkr48m5Ouz-lRR4q9rVmj-o" />
		<meta name="google-site-verification" content="X4a6afdolbSuh2NcWAe5ZWSDs_fEB95ZlEXMhUyrr2U" />
		
		<?php
			if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/d-robots.php')) {
			    include_once ($_SERVER['DOCUMENT_ROOT'] . '/d-robots.php');
			    $dRobots = dRobots::fromFile();
			    $noindex = $dRobots->checkUrl($_SERVER['REQUEST_URI']) ? '<meta name="googlebot" content="noindex">' . PHP_EOL : '';
			} else $noindex = '';

			echo $noindex;
		?>

		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/fonts/font-awesome/css/font-awesome.min.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/vendor/flexslider/flexslider.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.fancybox.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/js/slick-1.8.1/slick/slick.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/js/slick-1.8.1/slick/slick-theme.css');?>

		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/theme-elements.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/calc.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jqModal.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/spy.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/theme-responsive.css');?>
		<link href="<?php echo SITE_TEMPLATE_PATH.'/css/spy.css'; ?>" rel="stylesheet">
		<?$APPLICATION->ShowHead();

        ?>
		<?CJSCore::Init(array('jquery', 'fx', 'popup'));
		?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.actual.min.js');?>
		
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/blink.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.easing.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.appear.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.cookie.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/bootstrap.js');?>

		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.validate.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.uniform.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jqModal.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.inputmask.bundle.min.js', true)?>
		<?$APPLICATION->AddHeadString('<script>BX.message('.CUtil::PhpToJSObject( $MESS, false ).')</script>', true);?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/detectmobilebrowser.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/device.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.alphanumeric.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.waypoints.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.counterup.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/slick-1.8.1/slick/slick.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/general.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/custom.js');?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-82090798-12" data-skip-moving="true"></script>
		<script data-skip-moving="true">
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-82090798-12');
		</script>
		<script type="text/javascript" src="/bitrix/templates/aspro-stroy/js/d-goals.js"></script>


		

	</head>
	<body>
		<?CAjax::Init();

		?>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<?if(!CModule::IncludeModule("aspro.stroy")):?>
			<?$APPLICATION->SetTitle(GetMessage("ERROR_INCLUDE_MODULE_STROY_TITLE"));?>
			<div class="include_module_error">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/error.jpg" title=":-(">
				<p><?=GetMessage("ERROR_INCLUDE_MODULE_STROY_TEXT")?></p>
			</div>
			<?die();?>
		<?endif;?>
		<?


CStroy::SetJSOptions();

?>
		<?global $arSite, $arTheme, $isMenu, $isIndex, $is404;?>
		<?$is404 = defined("ERROR_404") && ERROR_404 === "Y"?>
		<?$arSite = CSite::GetByID(SITE_ID)->Fetch();?>
		<?$isMenu = ($APPLICATION->GetProperty('MENU') !== "N" ? true : false);?>
		<?$arTheme = $APPLICATION->IncludeComponent("aspro:theme.stroy", "", array(), false);?>
		<?$isForm = CSite::inDir(SITE_DIR.'form/');?>
		<?$isContacts = CSite::inDir(SITE_DIR.'contacts/');?>
		<?$isPrices = CSite::inDir(SITE_DIR.'price/');?>
		<?if($isIndex = CSite::inDir(SITE_DIR."index.php")):?>
			<?$sTeasersIndexTemplate = ($arTheme["TEASERS_INDEX"]["VALUE"] == 'PICTURES' ? 'front-teasers-pictures' : ($arTheme["TEASERS_INDEX"]["VALUE"] == 'ICONS' ? 'front-teasers-icons' : false));?>
			<?$bCatalogIndex = $arTheme["CATALOG_INDEX"]["VALUE"] == 'Y';?>
			<?$bCatalogFavoritesIndex = $arTheme["CATALOG_FAVORITES_INDEX"]["VALUE"] == 'Y';?>
			<?$bPortfolioIndex = $arTheme["PORTFOLIO_INDEX"]["VALUE"] == 'Y';?>
			<?$bCatalogFilterIndex = $arTheme["CATALOG_FILTER_INDEX"]["VALUE"] == 'Y';?>
		<?endif;?>
		<div class="body <?=($isIndex || $isContacts || $isPrices ? 'index' : '')?>">
			<div class="body_media"></div>
			<header class="topmenu-<?=($arTheme["TOP_MENU"]["VALUE"])?><?=($arTheme["TOP_MENU_FIXED"]["VALUE"] == "Y" ? ' canfixed' : '')?>">
				<div class="logo_and_menu-row">
					<div class="logo-row row">
						<div class="maxwidth-theme">
							<div class="col-md-3 col-sm-3">
								<div class="logo<?=($arTheme["COLORED_LOGO"]["VALUE"] !== "Y" ? '' : ' colored')?>">
									<?$APPLICATION->IncludeFile(SITE_DIR."include/logo.php", array(), array(
											"MODE" => "php",
											"NAME" => "Logo",
										)
									);?>
									
									
									
									
									

									
									
									
									
								</div>
							</div>

							<div class="col-md-9 col-sm-9 col-xs-12">
								<div class="top-description col-md-4 hidden-sm hidden-xs">
									<?$APPLICATION->IncludeFile(SITE_DIR."include/header-text.php", array(), array(
											"MODE" => "html",
											"NAME" => "Text in title",
										)
									);?>
								</div>
								<div class="top-callback col-md-8">
									<div class="callback pull-right hidden-xs" data-event="jqm" data-param-id="<?=CCache::$arIBlocks[SITE_ID]["aspro_stroy_form"]["aspro_stroy_callback"][0]?>" data-name="callback">
										<span class="btn btn-default white">Заказать звонок</span>
									</div>
									<div class="phone pull-right hidden-xs c_2">
										<div class="phone-number">
											<i class="fa fa-phone"></i>
											<div>
											<?$APPLICATION->IncludeFile(SITE_DIR."include/site-phone.php", array(), array(
													"MODE" => "html",
													"NAME" => "Phone",
												)
											);?>
											</div>
										</div>
									</div>
									<div class="email pull-right">
										<i class="fa fa-envelope"></i>
										<div><?$APPLICATION->IncludeFile(SITE_DIR."include/site-email.php", array(), array(
												"MODE" => "html",
												"NAME" => "E-mail",
											)
										);?></div>
									</div>
									<div class="search_top_block pull-right">
										<div class="search_block hidden-sm">
											<div class="search-input-div">
												<input class="search-input" type="text" autocomplete="off" maxlength="50" size="40" placeholder="<?=GetMessage("CT_BST_SEARCH_BUTTON_PL")?>" value="" name="q">
											</div>
											<div class="search-button-div">
												<button class="btn btn-search btn-default" value="<?=GetMessage("CT_BST_SEARCH_BUTTON")?>" name="s" type="submit"><?=GetMessage("CT_BST_SEARCH_BUTTON")?></button>
											</div>
										</div>
									</div>
									<button class="btn btn-responsive-nav visible-xs" data-toggle="collapse" data-target=".nav-main-collapse">
										<i class="fa fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div><?// class=logo-row?>
					
					
					
					
					
				
					<div class="menu-row row">
						<div class="maxwidth-theme">
							<div class="col-md-12">
								<div class="nav-main-collapse collapse">
									<div class="menu-only">
										<nav class="mega-menu">
											<?$APPLICATION->IncludeComponent(
												"bitrix:menu", 
												"top", 
												array(
													"ROOT_MENU_TYPE" => "top",
													"MENU_CACHE_TYPE" => "A",
													"MENU_CACHE_TIME" => "3600000",
													"MENU_CACHE_USE_GROUPS" => "N",
													"MENU_CACHE_GET_VARS" => array(
													),
													"MAX_LEVEL" => "2",
													"CHILD_MENU_TYPE" => "left",
													"USE_EXT" => "Y",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "N",
													"COUNT_ITEM" => "6",
													"COMPONENT_TEMPLATE" => "top"
												),
												false
											);?>
										</nav>
										<?$APPLICATION->IncludeComponent("bitrix:search.title", "corp", array(
											"NUM_CATEGORIES" => "2",
											"TOP_COUNT" => "3",
											"ORDER" => "date",
											"USE_LANGUAGE_GUESS" => "Y",
											"CHECK_DATES" => "Y",
											"SHOW_OTHERS" => "Y",
											"PAGE" => SITE_DIR."search/",
											"CATEGORY_OTHERS_TITLE" => GetMessage("S_OTHER"),
											"CATEGORY_0_TITLE" => GetMessage("S_CONTENT"),
											"CATEGORY_0" => array(
												0 => "iblock_aspro_stroy_content",
											),
											"CATEGORY_1_TITLE" => GetMessage("S_CATALOG"),
											"CATEGORY_1" => array(
												0 => "iblock_aspro_stroy_catalog",
											),
											"SHOW_INPUT" => "Y",
											"INPUT_ID" => "title-search-input",
											"CONTAINER_ID" => "title-search",
											"PRICE_CODE" => array(
											),
											"PRICE_VAT_INCLUDE" => "Y",
											"PREVIEW_TRUNCATE_LEN" => "",
											"SHOW_PREVIEW" => "Y",
											"PREVIEW_WIDTH" => "25",
											"PREVIEW_HEIGHT" => "25"
											),
											false
										);?>
									</div>
								</div>					
							</div><?// class=col-md-9 col-sm-8 col-xs-2 / class=col-md-12?>
						</div>
					</div><?// class=logo-row row / class=menu-row row?>
					
					
					
					
					
					
					
					
				</div>
				<div class="line-row visible-xs"></div>
			</header>			
			<div role="main" class="main">

				<?if($isIndex):?>
<div style="position: relative" class="relative maxwidth-theme">
    <?if(true){?>
        <div class="banners-form">
            <?$APPLICATION->IncludeComponent("aspro:form.stroy", "banner-form1", Array(
	"IBLOCK_TYPE" => "aspro_stroy_form",	// Тип инфоблока
		"IBLOCK_ID" => "67",	// ID инфоблока
		"USE_CAPTCHA" => "Y",	// Защита от спама в формах (капча)
		"DISPLAY_PROCESSING_NOTE" => "Y",	// Необходимо согласие на обработку персональных данных
		"PROCESSING_NOTE_CHECKED" => "Y",
		"AJAX_MODE" => "Y",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "100000",	// Время кеширования (сек.)
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"IS_PLACEHOLDER" => "Y",	// Использовать placeholder в input
		"SUCCESS_MESSAGE" => "Спасибо! Ваше сообщение отправлено!",	// Сообщение об успешной отправке
		"SEND_BUTTON_NAME" => "Отправить",	// Название кнопки отправки
		"SEND_BUTTON_CLASS" => "btn btn-default",	// Класс кнопки отправки
		"DISPLAY_CLOSE_BUTTON" => "Y",	// Отображать кнопку закрытия
		"POPUP" => "Y",
		"CLOSE_BUTTON_NAME" => "Закрыть",	// Название кнопки закрытия
		"CLOSE_BUTTON_CLASS" => "jqmClose btn btn-default bottom-close",	// Класс кнопки закрытия
	),
	false
);?>
        </div>
    <?}?>
</div>
    <?@include(str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DIR.'/indexblocks.php'));?>
    <?=$indexProlog; // buffered from indexblocks.php?>


				<?endif;?>
				<?if(!$isIndex && !$is404 && !$isForm):?>
					<section class="page-top <?=($arTheme["TOP_MENU"]["VALUE"])?>">
						<div class="row">
							<div class="maxwidth-theme">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "corp", array(
												"START_FROM" => "0",
												"PATH" => "",
												"SITE_ID" => SITE_ID
												),
												false
											);?>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h1><?$APPLICATION->ShowTitle(false)?></h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?endif; // if !$isIndex && !$is404 && !$isForm?>
				<div class="container">
					<?if(!$isIndex):?>
						<div class="row">
							<div class="maxwidth-theme">
								<?if(!$isMenu):?>
									<div class="col-md-12 col-sm-12 col-xs-12 content-md">
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "RIGHT"):?>
									<div class="col-md-9 col-sm-9 col-xs-8 content-md">
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "LEFT"):?>
									<div class="col-md-3 col-sm-3 left-menu-md">
										<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left", 
	array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "4",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "Y",
		"COMPONENT_TEMPLATE" => "left",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
										<div class="sidearea">
											<?$APPLICATION->ShowViewContent('under_sidebar_content');?>
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/under_sidebar.php"), false);?>
										</div>
									</div>
									<div class="col-md-9 col-sm-9 content-md">
								<?endif;?>
					<?endif;?>
					<?CStroy::checkRestartBuffer();

					?>