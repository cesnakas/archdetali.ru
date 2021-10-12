					<?CStroy::checkRestartBuffer();?>
					<?IncludeTemplateLangFile(__FILE__);?>
					<?if(!$isIndex):?>
								<?if(!$isMenu):?>
									</div><?// class=col-md-12 col-sm-12 col-xs-12 content-md?>
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "LEFT"):?>
									</div><?// class=col-md-9 col-sm-9 col-xs-8 content-md?>
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "RIGHT"):?>
									</div><?// class=col-md-9 col-sm-9 col-xs-8 content-md?>
									<?if($APPLICATION->GetProperty("MENU")=="Y"){?>
										<div class="col-md-3 col-sm-3 col-xs-4 right-menu-md">
											<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
												"ROOT_MENU_TYPE" => "left",
												"MENU_CACHE_TYPE" => "A",
												"MENU_CACHE_TIME" => "3600",
												"MENU_CACHE_USE_GROUPS" => "Y",
												"MENU_CACHE_GET_VARS" => array(
												),
												"MAX_LEVEL" => "4",
												"CHILD_MENU_TYPE" => "subleft",
												"USE_EXT" => "Y",
												"DELAY" => "N",
												"ALLOW_MULTI_SELECT" => "Y"
												),
												false
											);?>
											<div class="sidearea">
												<?$APPLICATION->ShowViewContent('under_sidebar_content');?>
												<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/under_sidebar.php"), false);?>
											</div>
										</div>
									<?}?>
								<?endif;?>
						<?if(!$isContacts):?>
							</div><?// class="maxwidth-theme?>
						</div><?// class=row?>
						<?endif;?>
					<?endif;?>
				</div><?// class=container?>
				<?if($isIndex):?>
					<?=$indexEpilog; // buffered from indexblocks.php?>
				<?endif;?>
				<?if($isPrices):?>
					<?@include(str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DIR.'/priceblocks.php'));?>
					<?=$priceProlog; // buffered from priceblocks.php?>
				<?endif;?>
			</div><?// class=main?>
		</div><?// class=body?>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="maxwidth-theme">
						<div class="col-md-3">
							<div class="copy hidden-sm hidden-xs">
								<?$APPLICATION->IncludeFile(SITE_DIR."include/copy.php", Array(), Array(
										"MODE" => "php",
										"NAME" => "Copyright",
									)
								);?>
							</div>
							<div class="social">
										<?$APPLICATION->IncludeComponent(
	"aspro:social.info.stroy", 
	".default", 
	array(
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"CACHE_GROUPS" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
							</div>
							<div class="link-sitemap"><a href="/karta-sayta/">Карта сайта</a></div>
							<div id="bx-composite-banner"></div>
						</div>
						<div class="col-md-9 col-sm-12">
							<div class="row">
								<div class="col-md-9 col-sm-9">
									<div class="row">
										<div class="col-md-4 col-sm-4">
											<?$APPLICATION->IncludeComponent(
												"bitrix:menu", 
												"bottom", 
												array(
													"ROOT_MENU_TYPE" => "bottom1",
													"MENU_CACHE_TYPE" => "A",
													"MENU_CACHE_TIME" => "3600000",
													"MENU_CACHE_USE_GROUPS" => "N",
													"MENU_CACHE_GET_VARS" => array(
													),
													"MAX_LEVEL" => "2",
													"CHILD_MENU_TYPE" => "left",
													"USE_EXT" => "Y",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "Y",
													"COMPONENT_TEMPLATE" => "bottom"
												),
												false
											);?>
										</div>
										<div class="col-md-4 col-sm-4">
											<?$APPLICATION->IncludeComponent(
												"bitrix:menu", 
												"bottom", 
												array(
													"ROOT_MENU_TYPE" => "bottom2",
													"MENU_CACHE_TYPE" => "A",
													"MENU_CACHE_TIME" => "3600000",
													"MENU_CACHE_USE_GROUPS" => "N",
													"MENU_CACHE_GET_VARS" => array(
													),
													"MAX_LEVEL" => "2",
													"CHILD_MENU_TYPE" => "left",
													"USE_EXT" => "Y",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "Y",
													"COMPONENT_TEMPLATE" => "bottom"
												),
												false
											);?>
										</div>
										<div class="col-md-4 col-sm-4">
											<?$APPLICATION->IncludeComponent(
												"bitrix:menu", 
												"bottom", 
												array(
													"ROOT_MENU_TYPE" => "bottom3",
													"MENU_CACHE_TYPE" => "A",
													"MENU_CACHE_TIME" => "3600000",
													"MENU_CACHE_USE_GROUPS" => "N",
													"MENU_CACHE_GET_VARS" => array(
													),
													"MAX_LEVEL" => "1",
													"CHILD_MENU_TYPE" => "",
													"USE_EXT" => "Y",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "Y",
													"COMPONENT_TEMPLATE" => "bottom"
												),
												false
											);?>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="info">
										<div class="phone">
											<i class="fa fa-phone"></i>
											<div class="info_ext">
												<?$APPLICATION->IncludeFile(SITE_DIR."include/site-phone.php", array(), array(
														"MODE" => "html",
														"NAME" => "Phone",
													)
												);?>
												<div class="popup_form_ext" data-event="jqm" data-param-id="<?=CCache::$arIBlocks[SITE_ID]["aspro_stroy_form"]["aspro_stroy_callback"][0]?>" data-name="callback">
														<span><?=GetMessage("S_CALLBACK")?></span>
												</div>
											</div>
										</div>
										<div class="compass">
											<i class="fa fa-map-marker"></i>
											<?$APPLICATION->IncludeFile(SITE_DIR."include/site-address.php", array(), array(
													"MODE" => "html",
													"NAME" => "A€A¤A°A?A±",
												)
											);?>
										</div>
										<div class="email">
											<i class="fa fa-envelope"></i>
											<?$APPLICATION->IncludeFile(SITE_DIR."include/site-email.php", array(), array(
													"MODE" => "html",
													"NAME" => "E-mail",
												)
											);?>
										</div>
										<div>
											<div class="pl-4 mb-5">Поделиться:</div>
											<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 hidden-md hidden-lg">
							<div class="copy last">
								<?$APPLICATION->IncludeFile(SITE_DIR."include/copy.php", Array(), Array(
										"MODE" => "php",
										"NAME" => "Copyright",
									)
								);?>
							</div>
							<div id="bx-composite-banner"></div>
						</div>
					</div>
				</div>
			</div>
		</footer>


	
	<?//CStroy::SetMeta();?>

	
	
<?php /*
	<!-- spy -->
	<div id="spy">
		<div class="spy-close">X</div>
		<div class="spy-container">
			<div class="spy-title">Получите стилистический цветовой коллаж<br>Вашего будущего интерьера!</div>
			<div class="spy-desc1">Это бесплатно и ни к чему Вас не обязывает. <br> Просто оставьте сейчас Ваш номер телефона:</div>
			<form action="/ajax/form.php" method="post" class="callbackform">
				<input name="form_id" value="2" type="hidden"/>
				<input required name="PHONE" type="text" class="phone user_phone" placeholder="Ваш телефон" autofocus />
				<input required name="utm_subid" type="hidden" value="<?=$_GET['utm_subid'];?>" />
				<input name="utm_campaign" type="hidden" value="<?=$_GET['utm_campaign'];?>"/>
				<input name="utm_source" type="hidden" value="<?=$_GET['utm_source'];?>"/>
				<input type="submit" value="Отправить" name="submitform" class="spy-submit">
			</form>
			<div class="message-form"></div>
			<div class="pop-ap-agreement">Нажимая кнопку "отправить", Вы принимаете <a href="/company/politika-konfidentsialnosti/" target="_blank">политику конфденциальности.</a></div>

		</div>
	</div>
	<!-- spy -->

*/ ?>
	
	
	
	
	<a class="questions" href="#" style="display: none;">vp</a> 
    <link href='<?=CMain::IsHTTPS() ? 'https' : 'http'?>://fonts.googleapis.com/css?family=Exo+2:400,600,600italic,400italic&subset=latin,cyrillic'; rel='stylesheet' type='text/css'/>
	<script src="<?php echo SITE_TEMPLATE_PATH.'/js/build/bottom.min.js'; ?>"></script>
	
	<!--<script src="<?php echo SITE_TEMPLATE_PATH.'/js/spy.js'; ?>"></script>-->
	<script src="<?php echo SITE_TEMPLATE_PATH.'/js/jquery.maskedinput.js'; ?>"></script>
	<script src="<?php echo SITE_TEMPLATE_PATH.'/js/kashtan_ajax.js'; ?>"></script>
	<script src="<?php echo SITE_TEMPLATE_PATH.'/js/thisdate.js'; ?>"></script>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.fancybox.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/flexslider/jquery.flexslider-min.js');?>
<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112739729-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-112739729-1');
		</script>
 <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter38563615 = new Ya.Metrika2({
                    id:38563615,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38563615" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- Yandex.Metrika counter -->



	<!-- Yandex.Metrika counter 
	<script type="text/javascript" >
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter14985241 = new Ya.Metrika({
	                    id:14985241,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true,
	                    trackHash:true,
	                    ut:"noindex"
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/watch.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/14985241?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	 /Yandex.Metrika counter -->


	 <?php /*
	<script type='text/javascript'>
	    (function(w, d) {
	        w.CH_SERVER_NAME = '//chaser.ru';
	        w.CH_HASH = '773e3c5180b1c11c54105deb682a6e21';
	        var p = d.createElement('script'),
	            s = d.getElementsByTagName('head')[0];
	        p.type = 'text/javascript';
	        p.charset = 'utf-8';
	        p.async = 'true';
	        p.src = (d.location.protocol == 'https:' ? 'https:' : 'http:') + w.CH_SERVER_NAME + '/widget/1.1/js/widget.js';
	        s.appendChild(p);
	        })(window, document);
	</script>
	
	*/?>
	
	
<?php /*	
	
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'UFLfOtES9Q';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
	*/ 
	
	?>
	
	
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'APwJgUlUtc';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
	
	
	
	
	
<?php /*
<script type="text/javascript">
		var _alloka = {
		objects: {
			'71671f8f98616dfc': {
				block_class: 'phone_alloka',
				jivosite: false,
				email: false
			}
		},
		trackable_source_types:  ["type_in", "referrer", "utm"],
		last_source: false,
		  use_geo: true
	};
</script>
<script src="https://analytics.alloka.ru/v4/alloka.js" type="text/javascript"></script>
*/ ?>



        <!--calltouch-->
        <script type="text/javascript">
        (function (w, d, nv, ls) {
        var lwait = function (w, on, trf, dly, ma, orf, osf) {var pfx = "ct_await_", sfx = "_completed";if (!w[pfx + on + sfx]) {var ci = clearInterval, si = setInterval, st = setTimeout, cmld = function() {if (!w[pfx + on + sfx]) { w[pfx + on + sfx] = true;if ((w[pfx + on] && (w[pfx + on].timer))) { ci(w[pfx + on].timer);w[pfx + on] = null;}orf(w[on]);}};if (!w[on] || !osf) {if (trf(w[on])){cmld();} else {if (!w[pfx + on]) {w[pfx + on] = {timer: si(function () {if (trf(w[on]) || ma < ++w[pfx + on].attempt) {cmld();}}, dly), attempt: 0};}}} else {if (trf(w[on])) {cmld();} else {osf(cmld);st(function(){lwait(w, on, trf, dly, ma, orf);}, 0);}}} else {orf(w[on]);}};
        var ct = function (w, d, e, c, n) {var a = 'all', b = 'tou', src = b + 'c' + 'h';src = 'm' + 'o' + 'd.c' + a + src; var jsHost = "https://" + src, p = d.getElementsByTagName(e)[0], s = d.createElement(e); var jsf = function (w, d, p, s, h, c, n) {s.async = 1;s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":170615}") + ";"; p.parentNode.insertBefore(s, p);};if (!w.jQuery) {var jq = d.createElement(e);jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js';jq.onload = function () {lwait(w, 'jQuery', function (obj) {return (obj ? true : false);}, 30, 100, function () {jsf(w, d, d.getElementsByTagName(e)[0], s, jsHost, c, n);});};p.parentNode.insertBefore(jq, p);} else {jsf(w, d, p, s, jsHost, c, n);}};
        var gaid = function (w, d, o, ct, n) {if (!!o) {lwait(w, o, function (obj) {return (obj && obj.getAll ? true : false);}, 200, (nv.userAgent.match(/Opera|OPR\//) ? 10 : 20), function (gaCounter) {var clId = null;try {var cnt = gaCounter && gaCounter.getAll ? gaCounter.getAll() : null;clId = cnt && cnt.length > 0 && !!cnt[0] && cnt[0].get ? cnt[0].get('clientId') : null;} catch (e) {console.warn("Unable to get clientId, Error: " + e.message);}ct(w, d, 'script', clId, n);}, function (f) {w[o](function () {f(w[o]);})});} else {ct(w, d, 'script', null, n);}};
        var cid = function () {try {var m1 = d.cookie.match('(?:^|;)\\s*_ga=([^;]*)');if (!(m1 && m1.length > 1)) return null;var m2 = decodeURIComponent(m1[1]).match(/(\d+\.\d+)$/);if (!(m2 && m2.length > 1)) return null;return m2[1]} catch (err) {}}();
        if (cid === null && !!w.GoogleAnalyticsObject) {
           if (w.GoogleAnalyticsObject == 'ga_ckpr') w.ct_ga = 'ga'; else w.ct_ga = w.GoogleAnalyticsObject;
           if (typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1) { new Promise(function (resolve) {var db, on = function () {resolve(true)}, off = function () {resolve(false)}, tryls = function tryls() {try {ls && ls.length ? off() : (ls.x = 1, ls.removeItem("x"), off());} catch (e) {nv.cookieEnabled ? on() : off();}}; w.webkitRequestFileSystem ? webkitRequestFileSystem(0, 0, off, on) : "MozAppearance" in d.documentElement.style ? (db = indexedDB.open("test"), db.onerror = on, db.onsuccess = off) : /constructor/i.test(w.HTMLElement) ? tryls() : !w.indexedDB && (w.PointerEvent || w.MSPointerEvent) ? on() : off();}).then(function (pm) {
               if (pm) {gaid(w, d, w.ct_ga, ct, 2);} else {gaid(w, d, w.ct_ga, ct, 3);}})} else {gaid(w, d, w.ct_ga, ct, 4);}
        } else {ct(w, d, 'script', cid, 1);}})
        (window, document, navigator, localStorage);
        </script>
        <!--calltouch-->
		
		
		
		
		<script type='text/javascript'>
    (function(w, d) {
        w.CH_SERVER_NAME = '//chaser.ru';
        w.CH_HASH = 'c73ff6dceadedf3652d678cd790ff167';
        var p = d.createElement('script'),
            s = d.getElementsByTagName('head')[0];
        p.type = 'text/javascript';
        p.charset = 'utf-8';
        p.async = 'true';
        p.src = (d.location.protocol == 'https:' ? 'https:' : 'http:') + w.CH_SERVER_NAME + '/widget/1.1/js/widget.js';
        s.appendChild(p);
        })(window, document);
</script>
	
	
	
	
	
	
	<?
		$pagen_key = "";
		foreach ($_GET as $key => $value) {
			if (preg_match("/PAGEN_/", $key)) {
				$pagen_key = $key;
				if ($pagen_key) {
					continue;
				}
			}
		}
		$page = $_GET[$pagen_key];
		if ($page) {
			$APPLICATION->SetPageProperty("title", $APPLICATION->GetTitle()." | Страница ".$page);
			$APPLICATION->SetPageProperty("description",$APPLICATION->GetTitle().'. Страница '.$page.'. Разработка дизайна интерьеров в Москве по привлекательным ценам от компании "Люкс-Дизайн".');
		}
	?>


	</body>
</html>