<? CStroy::checkRestartBuffer(); ?><? IncludeTemplateLangFile(__FILE__);

?>
<? if(!$isIndex):?>
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
<?endif; ?>
</div><? // class=container?>
<? if ($isIndex): ?>
    <?= $indexEpilog; // buffered from indexblocks.php ?>
<? endif; ?>
<? if ($isPrices): ?>
    <? @include(str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'] . '/' . SITE_DIR . '/priceblocks.php')); ?>
    <?= $priceProlog; // buffered from priceblocks.php ?>
<? endif; ?>
</div><? // class=main?>
</div><? // class=body?>

<footer class="footer">
    <div class="c-container">
        <div class="footer-wrapper">
            <div class="footer-left">
                <div class="footer-mnu-title">Услуги наших дизайнеров</div>
                <? $APPLICATION->IncludeComponent(
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
); ?>
            </div>

            <div class="footer-mid">
                <div class="footer-mnu-title">Услуги дизайнеров</div>
                <? $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                    "ROOT_MENU_TYPE" => "bottom1",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600000",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "2",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "COMPONENT_TEMPLATE" => "bottom"
                ),
                    false
                ); ?>
                <div class="footer-mnu-other">
                    <li class="footer-mnu-other-item"><a href="/price-dizayn-interera/"
                                                         class="footer-mnu-other-item-link">Цены</a>
                    </li>
                    <li class="footer-mnu-other-item"><a href="/info/stock/"
                                                         class="footer-mnu-other-item-link">Акции</a></li>
                    <li class="footer-mnu-other-item"><a href="/contacts/"
                                                         class="footer-mnu-other-item-link">Контакты</a></li>

                <? if($isIndex):?>
                    <li class="footer-mnu-other-item"><a href="/sitemap/" class="footer-mnu-other-item-link">Карта сайта</a></li>
                <?endif;?>
                </div>
            </div>

            <div class="footer-right">
                <div class="footer-address">Москва, Очаковское шоссе, 34, офис 603</div>
                <a href="tel:+74959213700" class="footer-phone">+7 (495) 921-37-00</a>
                <div data-event="jqm" data-param-id="67" data-name="callback" class="footer-callback-btn">обратный
                    звонок
                </div>

                <ul class="footer-social">
                    <li class="footer-social-item">
                        <a href="https://twitter.com/luks_dizain" class="footer-social-item-link" target="_blank" rel="nofollow">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/twitter-black.png" alt="instagram - «Arch Detali»"></a>
                    </li>
                    <li class="footer-social-item">
                    <a href="https://vk.com/luks_dizain" class="footer-social-item-link"  target="_blank" rel="nofollow">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/vk-black.png" alt="Вконтакте - «Arch Detali»"></a></li>
                    <?/*<li class="footer-social-item"><a href="https://www.facebook.com/luxdizain/"
                                                      class="footer-social-item-link"  target="_blank" rel="nofollow><img
                                src="<?= SITE_TEMPLATE_PATH ?>/img/fb-black.png" alt="facebook - «Arch Detali»"></a></li>*/?>
                    <li class="footer-social-item">
                    <a href="https://www.instagram.com/arch.detali/" class="footer-social-item-link" target="_blank" rel="nofollow">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/instagram-black.png" alt="instagram - «Arch Detali»"></a></li>
                </ul>
                <div class="footer-copyright">2015 - 2021 © Все права защищены</div>
                <a href="/company/politika-konfidentsialnosti/" class="footer-policy">Политика конфиденциальности</a>
            </div>
        </div>
    </div>










</footer>
<? //CStroy::SetMeta();?>



<?php


/*
	<!-- spy -->
	<div id="spy">
		<div class="spy-close">X</div>
		<div class="spy-container">
			<div class="spy-title">???????? ?????????????? ???????? ??????<br>?????? ???????? ?????????!</div>
			<div class="spy-desc1">??? ????????? ? ?? ? ???? ??? ?? ?????????. <br> ?????? ???????? ?????? ??? ????? ????????:</div>
			<form action="/ajax/form.php" method="post" class="callbackform">
				<input name="form_id" value="2" type="hidden"/>
				<input required name="PHONE" type="text" class="phone user_phone" placeholder="??? ???????" autofocus />
				<input required name="utm_subid" type="hidden" value="<?=$_GET['utm_subid'];?>" />
				<input name="utm_campaign" type="hidden" value="<?=$_GET['utm_campaign'];?>"/>
				<input name="utm_source" type="hidden" value="<?=$_GET['utm_source'];?>"/>
				<input type="submit" value="?????????" name="submitform" class="spy-submit">
			</form>
			<div class="message-form"></div>
			<div class="pop-ap-agreement">??????? ?????? "?????????", ?? ?????????? <a href="/company/politika-konfidentsialnosti/" target="_blank">???????? ?????????????????.</a></div>

		</div>
	</div>
	<!-- spy -->

*/ ?>


<a class="questions" href="#" style="display: none;">vp</a>
<link href='//fonts.googleapis.com/css?family=Exo+2:400,600,600italic,400italic&subset=latin,cyrillic' rel='stylesheet'
      type='text/css'/>


<script src="<?php echo SITE_TEMPLATE_PATH . '/js/build/bottom.min.js'; ?>"></script>

<?/*<!--<script src="<?php echo SITE_TEMPLATE_PATH . '/js/spy.js'; ?>"></script>-->*/?>
<script src="<?php echo SITE_TEMPLATE_PATH . '/js/jquery.maskedinput.js'; ?>"></script>

<script src="<?php echo SITE_TEMPLATE_PATH . '/js/kashtan_ajax.js'; ?>"></script>
<script src="<?php echo SITE_TEMPLATE_PATH . '/js/thisdate.js'; ?>"></script>
<?

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.js');

?>
<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/vendor/flexslider/jquery.flexslider-min.js');

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112739729-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-112739729-1');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter38563615 = new Ya.Metrika2({
                    id: 38563615,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/38563615" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- Yandex.Metrika counter -->

<?/*
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
 /Yandex.Metrika counter -->*/?>


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

	*/ ?>


<?php /*

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'UFLfOtES9Q';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
	*/

?>





<?php /*

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
	*/ ?>




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




<?php /*

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
*/ ?>


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
            $APPLICATION->SetPageProperty("title", $APPLICATION->GetPageProperty("title")." - Страница ".$page);
            $APPLICATION->SetPageProperty("description",$APPLICATION->GetPageProperty("description").' - Страница '.$page);
}
?>

<script type="text/javascript">
	$( document ).ready(function() {
     console.log("ready selector")
      const block = $(".main-contacts")
       console.log(block)

          if ( $(block).css('display') == 'none')
              {
               $(block).detach()
               $(block).appendTo($(".main-top"))

               $(block).css("margin-top","15px")
				   $(".main-phone").css("font-size", "18px")
                $(block).css("display","inline-block")
               console.log("need reatach")
                 }


       })
	</script>

<!-- Leadball code -->
<script type="text/javascript">(function() { var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
s.src = "https://leadball.ru/whats/float.php?id=OiTHZ8TuStU9Yir4TMQx";
var wOiTHZ8 = document.getElementsByTagName("script")[0];
wOiTHZ8.parentNode.insertBefore(s, wOiTHZ8); } )();</script>
<!-- Leadball code end -->

</body>
</html>