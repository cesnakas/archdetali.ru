<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<!DOCTYPE html>
<html lang='ru' class="<?=($_SESSION['SESS_INCLUDE_AREAS'] ? 'bx_editmode ' : '')?><?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie7' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0' ) ? 'ie ie8' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie9' : ''?>">
	<head>
		<?global $APPLICATION;?>
		<?IncludeTemplateLangFile(__FILE__);?>
		<title><?$APPLICATION->ShowTitle()?></title>
        <?

$APPLICATION->AddBufferContent('ShowCanonical');
if(!function_exists('ShowCanonical')){
    function ShowCanonical(){
        global $APPLICATION;
        if (!$APPLICATION->GetProperty("canonical")){
            $cur_page = (CMain::IsHTTPS()) ? "https://" : "http://";
            $cur_page .= $_SERVER["HTTP_HOST"];
            $curl = explode('?', $_SERVER['REQUEST_URI']);
            $cur_page .= $curl[0];
            $APPLICATION->SetPageProperty("canonical", "$cur_page");
        }
    }
}
if ($_GET['PAGEN_1']){
    $curl = explode('?', $_SERVER['REQUEST_URI']);
    $APPLICATION->SetPageProperty("canonical", "https://archdetali.ru".$curl[0]."?PAGEN_1=".$_GET['PAGEN_1']);
}
if ($_GET['PAGEN_2']){
    $curl = explode('?', $_SERVER['REQUEST_URI']);
    $APPLICATION->SetPageProperty("canonical", "https://archdetali.ru".$curl[0]."?PAGEN_2=".$_GET['PAGEN_2']);
}
// определение мобильного устройства
function check_mobile_device() {
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // var_dump($agent);exit;
    foreach ($mobile_agent_array as $value) {
        if (strpos($agent, $value) !== false) return true;
    }
    return false;
}
$is_mobile_device = check_mobile_device();
        ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="yandex-verification" content="ed0460145b1fd29b" />
		<meta name="yandex-verification" content="b3f0c032dd539c40" />
		<meta name="google-site-verification" content="WD4zLcNUe9Qwr_YsdXl6qFj98fJHWGSSgg2e0BA3l2k" />
        <meta name="yandex-verification" content="7e0bd0ce7cd4d042" />
		<?php

            $APPLICATION->SetPageProperty("Content-Type", "text/html; charset=windows-1251");

			if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/d-robots.php')) {
			    include_once ($_SERVER['DOCUMENT_ROOT'] . '/d-robots.php');
			    $dRobots = dRobots::fromFile();
			    $noindex = $dRobots->checkUrl($_SERVER['REQUEST_URI']) ? '<meta name="googlebot" content="noindex">' . PHP_EOL : '';
			} else $noindex = '';

			echo $noindex;
		?>
		<?$APPLICATION->ShowViewContent('meta_no_index');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/fonts/font-awesome/css/font-awesome.min.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/vendor/flexslider/flexslider.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.fancybox.css');?>

		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/theme-elements.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/calc.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jqModal.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/spy.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/theme-responsive.css');?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/slick/slick.css');?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/slick/slick-theme.css');?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/ui-slider/ui-slider.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/main.css');?>
		<?//$APPLICATION->ShowHead();
        $APPLICATION->ShowMeta("robots");
        //$APPLICATION->ShowMeta("keywords");
        $APPLICATION->ShowMeta("description");
        $APPLICATION->ShowLink("canonical");
        $APPLICATION->ShowCSS();
        $APPLICATION->ShowHeadStrings();
        $APPLICATION->ShowHeadScripts();
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
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/general.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/custom.js');?>

        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/slick/slick.min.js');?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/ui-slider/ui-slider.js');?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/ui-slider/ui-touch.js');?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/jquery.maskedinput.min.js');?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/common.js');?>
		<!-- Global site tag (gtag.js) - Google Analytics -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZP2FXZCC86"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-ZP2FXZCC86');
        </script>
		<script type="text/javascript" src="/bitrix/templates/aspro-stroy/js/d-goals.js"></script>
        <script>
            $('.news-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '<div class="arrow arrow-prev"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow-prev.png" alt=""></div>',
                nextArrow: '<div class="arrow arrow-next"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow-next.png" alt=""></div>',
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            arrows: false
                        }
                    },
                ]
            });
        </script>

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
<!--
<div class="body <?=($isIndex || $isContacts || $isPrices ? 'index' : '')?>">
-->
<?
if($is_mobile_device){
?>
    <div class="mnu-mob-wrapper">
        <!-- мобильное меню -->
        <?$APPLICATION->IncludeComponent(
	        "bitrix:menu",
    	    "mob_top",
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
    </div>
<?}else{?>

    <header class="header">
        <div class="c-container">
            <div class="header-wrapper">
                <!-- основное меню -->
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
            </div>
        </div>
    </header>
<?}?>
    <div class="main">
        <div class="main-top">
            <div class="c-container">
                <div class="main-top-wrapper">
                    <div class="main-logo-wrapper">
                        <div class="main-logo"><a href="/"><img src="/bitrix/templates/aspro-stroy_copy/img/logo4.png"  alt="Студия дизайна интерьера в Москве - «Arch Detali»" title="Студия дизайна интерьера в Москве - «Arch Detali»" ></a></div>
                        <div class="main-logo-desc">Проектирование, <a href="/services/dizayn-kvartiry/" style="color:#fff; text-decoration: underline !important;">дизайн квартир</a> и загородных домов</div>
                    </div>
                    <a href="#" data-event="jqm" data-param-id="67" data-name="callback" class="main-question-link"><span class="main-question-link-span"></span> Задать вопрос</a>
                    <div class="main-contacts">
                        <?$APPLICATION->IncludeComponent("bitrix:search.title", "corp2", Array(
                              "CATEGORY_0" => "",   // Ограничение области поиска
                                "CATEGORY_0_TITLE" => "",   // Название категории
                                "CHECK_DATES" => "N",   // Искать только в активных по дате документах
                                "CONTAINER_ID" => "title-search",   // ID контейнера, по ширине которого будут выводиться результаты
                                "INPUT_ID" => "title-search-input", // ID строки ввода поискового запроса
                                "NUM_CATEGORIES" => "1",    // Количество категорий поиска
                                "ORDER" => "date",  // Сортировка результатов
                                "PAGE" => "#SITE_DIR#search/", // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                                "SHOW_INPUT" => "Y",    // Показывать форму ввода поискового запроса
                                "SHOW_OTHERS" => "N",   // Показывать категорию "прочее"
                                "TOP_COUNT" => "5", // Количество результатов в каждой категории
                                "USE_LANGUAGE_GUESS" => "Y",    // Включить автоопределение раскладки клавиатуры
                            ),
                            false
                          );?>
                        <div class="main-contacts-phone-time">
                            <a href="tel:+74959213700" class="main-phone">+7 (495) 921-37-00</a>
                            <p class="main-contacts-timeofwork">Пн. – Вс.: с 8:00 до 22:00</p>
                        </div>
                        <div data-event="jqm" data-param-id="67" data-name="callback" class="main-callback-btn">Обратный звонок</div>
                    </div>
                    <a href="javascript:void(0);" class="toggle-nav"><span></span></a>
                </div>
            </div>
        </div>
        <? if ($APPLICATION->GetCurPage(false) === '/') { ?>
        <div class="c-container">
            <div class="main-wrapper">
                <div class="main-left">
                    <h1 class="main-title">Cтудия дизайна интерьеров <span class="main-title-span">в москве</span></h1>
                    <p class="main-desc">В нашей дизайн студии мы разработали уникальную систему определения вкусовых предпочтений клиента в вопросах стилистики и цвета.</p>
                    <a href="/company/" class="main-btn"><span class="main-btn-span"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow-down.png" alt=""></span> Подробнее о студии</a>
                </div>
                <div class="main-right">
                    <div class="main-links">
                        <a href="/services/" class="main-links-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/service-icon.png" alt="">
                            <span class="main-links-item-text">услуги студии</span>
                        </a>
                        <div>
                            <a href="/catalog/dizayn-proekty-kvartir/" class="main-links-item">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/works-icon.png" alt="">
                                <span class="main-links-item-text">наши работы</span>
                            </a>
                        </div>
                    </div>
                    <div class="main-sale-item">
                        <div class="main-sale-item-info">
                            <div class="main-sale-item-title">Акция месяца!</div>
                            <div class="main-sale-item-text">При заказе комплексного дизайна интерьера <a href="/services/avtorskiy-nadzor/" style="color:#fff; text-decoration: underline !important;">авторский надзор</a> в подарок!</div></div>
                        <img class="main-sale-item-img" src="<?=SITE_TEMPLATE_PATH?>/img/action2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-bottom">
            <div class="c-container">
                <div class="main-bottom-wrapper">
                    <div class="main-bottom-title"><span class="main-bottom-title-span">Пройдите тест и узнайте</span> стоимость дизайн проекта за 1 минуту!</div>
                    <a href="#main_calc" class="main-bottom-btn">узнать стоимость</a>
                </div>
            </div>
        </div>
        <? } ?>
    </div>

    <?if($isIndex):?>
	    <? require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/main.php");?>
	    <?=$indexProlog; // buffered from indexblocks.php?>
    <?endif;?>

    <div role="main">
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
                                <?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
                                		"ROOT_MENU_TYPE" => "left",
		                                "MENU_CACHE_TYPE" => "A",
	    	                            "MENU_CACHE_TIME" => "3600000",
    		                            "MENU_CACHE_USE_GROUPS" => "N",
                                        "MENU_CACHE_GET_VARS" => array(),
		                                "MAX_LEVEL" => "1",
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
            <?CStroy::checkRestartBuffer(); ?>