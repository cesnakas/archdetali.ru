<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Карта сайта – студия Arch Detali. Ответим на любые вопросы о дизайн-проектах по указанному телефону.");
$APPLICATION->SetTitle("Карта сайта");
$APPLICATION->SetPageProperty("title","Карта сайта – студия Arch Detali");
?>
<ul><li class="menu-close"><a href="/company/">Компания</a><ul><li><a href="/company/">О студии</a></li><li><a href="/company/licenses/">Лицензии</a></li><li><a href="/company/vacancy/">Вакансии</a></li><li><a href="/info/news/">Новости</a></li><li><a href="/info/faq/">Вопрос-ответ для клиента</a></li><li><a href="/company/politika-konfidentsialnosti/">Политика конфиденциальности</a></li></ul></li><li><a href="/catalog/dizayn-proekty-kvartir/">Портфолио</a></li><li class="menu-close"><a href="/services/">Услуги</a><ul><li><a href="/services/dizayn-proekt/">Дизайн проект</a></li><li><a href="/services/dizayn-kvartiry/">Дизайн квартиры</a></li><li><a href="/services/stili-dizajna-kuxni-i-interer/">Кухни</a></li><li><a href="/services/dizajn-vannoj-komnatyi-i-interer/">Ванной комнаты</a></li><li><a href="/services/dizajn-detskoj-komnatyi-i-interer/">Детской комнаты</a></li><li><a href="/services/dizajn-gostinoj-i-interer/">Гостиной</a></li><li><a href="/services/dizajn-spalni/">Спальни</a></li><li><a href="/services/dizajn-prihozhej/">Прихожей</a></li><li><a href="/services/dizayn-kottedzha/">Коттеджа</a></li><li><a href="/services/dizayn-kafe-restorana/">Кафе</a></li><li><a href="/services/dizayn-restorana/">Ресторана</a></li><li><a href="/services/dizayn-magazina/">Магазина</a></li><li><a href="/services/dizayn-ofisa/">Офиса</a></li><li><a href="/services/dizayn-taunkhausov/">Таунхаусов</a></li><li><a href="/services/avtorskiy-nadzor/">Авторский надзор</a></li><li><a href="/services/proektirovanie-zhilykh-i-nezhilykh-pomeshcheniy/">Проектирование жилых и нежилых коммерческих помещений</a></li><li><a href="/services/podbor-mebeli-aksessuarov-i-osvetitelnogo-oborudovaniya/">Подбор мебели, аксессуаров и осветительного оборудования</a></li><li><a href="/services/podbor-mebeli-aksessuarov-i-osvetitelnogo-oborudovaniya/#1">Подбор материалов</a></li><li><a href="/services/3d-vizualizatsiya-proekta/">3d-визуализация проекта</a></li><li><a href="/services/razrabotka-chertezhey/">Разработка чертежей</a></li><li><a href="/services/dekorator-interera/">Услуги декоратора интерьера</a></li><li><a href="/services/dizayn-proekt-doma/">Дизайн проект дома</a></li><li><a href="/services/dizayn-proekt-pod-klyuch/">Дизайн проект под ключ</a></li></ul></li><li class="menu-close"><a href="/dizayn/">Стили интерьера</a><ul><li><a href="/dizayn/dizayn-v-stile-klassika/">Классика</a></li><li><a href="/dizayn/dizayn-v-stile-modern/">Модерн</a></li><li><a href="/dizayn/dizayn-v-stile-ampir/">Ампир</a></li><li><a href="/dizayn/dizayn-v-stile-neoklassika/">Неоклассика</a></li><li><a href="/dizayn/dizayn-v-sredizemnomorskom-stile/">Средиземноморский</a></li><li><a href="/dizayn/dizayn-v-stile-minimalizm/">Минимализм</a></li><li><a href="/dizayn/dizayn-v-stile-loft/">Лофт</a></li><li><a href="/dizayn/dizayn-v-stile-khay-tek/">Хай-тек</a></li><li><a href="/dizayn/dizayn-v-skandinavskom-stile/">Скандинавский</a></li><li><a href="/dizayn/dizayn-v-stile-art-deko/">Aрт-деко</a></li><li><a href="/dizayn/dizayn-v-sovremennom-stile/">Cовременный</a></li><li><a href="/dizayn/dizayn-v-stile-sovremennaya-klassika/">Современная классика</a></li></ul></li><li class="menu-close"><a href="/price-dizayn-interera/">Цены</a><ul><li><a href="/price-dizayn-interera/#top">Цены на проектирование</a></li></ul></li><li><a href="/info/stock/">Акции</a></li><li><a href="/contacts/">Контакты</a></li></ul>



<?/*

<ul class="sitemap">
	<?$APPLICATION->IncludeComponent("bitrix:menu", "tree", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "tree"
	),
	false
);?>

</ul>*/?>
<style type="text/css">

ul ul{
	    margin-left: 40px;
	}

</style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>