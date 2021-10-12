<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Стоимость разработки дизайн проекта интерьера");
$APPLICATION->SetPageProperty("title","Стоимость разработки дизайн проекта интерьера квартиры под ключ цена за 1 квадратный метр в Москве");
$APPLICATION->SetPageProperty("description","Цены на услуги дизайна интерьеров квартир или домов. Студия «Arch Detali» выполнит любые заказы точно в срок. Поможем найти личный, неповторимый и оригинальный стиль интерьера. Ответим на все вопросы о стоимости услуг дизайнера по указанному телефону.");
?><p>
    Стоимость работы рассчитывается после осмотра объекта, снятия замеров, обсуждения пожеланий по стилю и основным моментам. По умолчанию цена дизайна привязывается к метражу квартиры или дома, но в окончательной сумме учитывается объем и сложность услуг, срочность заказа. Оставьте заявку на сайте, чтобы узнать, сколько будет стоить разработка проекта и пригласить специалиста для бесплатной консультации.
</p>
<p>
    Закажите только проект с планировочным решением, визуализацией и рабочими чертежами, обратитесь за помощью к декоратору, выберите пакет под ключ, с авторским надзором — в любом случае результат будет точно соответствовать вашим представлениям. Мы разработаем схему коммуникаций, получим разрешения на перепланировку, согласуем расположение электрооборудования. Сотрудничая с производителями мебели, аксессуаров, предметов интерьера из России и Европы, мы закупаем товары с дизайнерской скидкой и оформим квартиру дешевле, чем сам клиент. Образцы продукции и отделочных материалов можно посмотреть в нашем офисе.
</p>

<div class="paketnii-block-in-price">
    <? $APPLICATION->IncludeComponent(
		"bitrix:main.include", "", 
		array("AREA_FILE_SHOW" => "file", 
		"PATH" => $APPLICATION->GetTemplatePath("include_areas/paketnii_predloshenia.php")), false); 
	?>
</div>
</div></div></div>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include", "",
    array("AREA_FILE_SHOW" => "file",
        "PATH" => $APPLICATION->GetTemplatePath("include_areas/calc2.php")), false);
?>
    <div class="row">
        <div class="maxwidth-theme">
<div class="content-md">

<br>
<br>
<h3>Цены на отдельные виды работ</h3>
<table class="table table-striped" id="top">
    <thead>
        <tr>
            <th>
                №
            </th>
            <th>
                <span style="font-weight:bold;">Наименование</span>
            </th>
            <th>
                <span style="font-weight:bold;"> Ед.изм. </span>
            </th>
            <th>
                <span style="font-weight:bold;"> Цена(ед.)  </span>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4">
                Проектные работы
            </td>
        </tr>
        <tr>
            <td>
                1
            </td>
            <td>
                <span style="font-weight:bold;">Выезд дизайнера для консультации</span>
            </td>
            <td>
                 
            </td>
            <td style="text-align:center">
                Бесплатно
            </td>
        </tr>
        <tr>
            <td>
                2
            </td>
            <td>
                <span style="font-weight:bold;">Разовая консультация дизайнера</span>
            </td>
            <td style="text-align:center">
                выезд
            </td>
            <td style="text-align:center">
                 3 000 руб.  
            </td>
        </tr>
        <tr>
            <td>
                3
            </td>
            <td>
                <span style="font-weight:bold;">Разработка дизайна интерьера</span> <br>
                планировочные решения+рабочие чертежи
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                <del><span style="color: #ff0000;">1 600 руб.<br>
                    </span></del><span style="font-weight:bold;">1 250 руб.</span><del><span style="color: #ff0000;"><br>
                    </span></del>
            </td>
        </tr>
        <tr>
            <td>
                4
            </td>
            <td>
                <span style="font-weight:bold;">Декорирование</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                1 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                5
            </td>
            <td>
                <span style="font-weight:bold;">Авторский надзор</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                1 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                6
            </td>
            <td>
                <span style="font-weight:bold;">Дизайн-проект "под ключ</span> <br>
                разработка дизайн-интерьера, декорирование, авторский надзор
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                3 050 руб.
            </td>
        </tr>
        <tr>
            <td>
                7
            </td>
            <td>
                <span style="font-weight:bold;">Разработка дизайна интерьера (планировочные решения)</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                800 руб.
            </td>
        </tr>
        <tr>
            <td>
                8
            </td>
            <td>
                <span style="font-weight:bold;">Разработка дизайна интерьера</span> (визуализация)
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                750 руб.
            </td>
        </tr>
        <tr>
            <td>
                9
            </td>
            <td>
                <span style="font-weight:bold;">Разработка дизайна интерьера</span> (рабочие чертежи)
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                800 руб.
            </td>
        </tr>
        <tr>
            <td>
                10
            </td>
            <td>
                <span style="font-weight:bold;">Разработка дизайна интерьера</span> (комната ) 
            </td>
            <td style="text-align:center">
                комплект
            </td>
            <td style="text-align:center">
                35 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                11
            </td>
            <td>
                <span style="font-weight:bold;">Разработка дизайна интерьера</span> (санузел )
            </td>
            <td style="text-align:center">
                комплект
            </td>
            <td style="text-align:center">
                30 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                12
            </td>
            <td>
                <span style="font-weight:bold;">Разработка проекта электрооборудования</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                350 руб.
            </td>
        </tr>
        <tr>
            <td>
                13
            </td>
            <td>
                <span style="font-weight:bold;">Разработка проекта внутреннего электроснабжения</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                350 руб.
            </td>
        </tr>
        <tr>
            <td>
                14
            </td>
            <td>
                <span style="font-weight:bold;">Разработка проекта водоснабжения и канализации</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                400 руб.
            </td>
        </tr>
        <tr>
            <td>
                15
            </td>
            <td>
                <span style="font-weight:bold;">Разработка проекта отопления</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                400 руб.
            </td>
        </tr>
        <tr>
            <td>
                16
            </td>
            <td>
                <span style="font-weight:bold;">Разработка проекта пожарной,охранной сигнализации</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                500 руб.
            </td>
        </tr>
        <tr>
            <td>
                17
            </td>
            <td>
                <span style="font-weight:bold;">Разработка проектов кондиционирования и вентиляции</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                400 руб.
            </td>
        </tr>
        <tr>
            <td>
                18
            </td>
            <td>
                <span style="font-weight:bold;">Согласование проекта электрооборудования</span>
            </td>
            <td style="text-align:center">
                шт.
            </td>
            <td style="text-align:center">
                17 500 руб.
            </td>
        </tr>
        <tr>
            <td>
                19
            </td>
            <td>
                <span style="font-weight:bold;">Получение разрешения на присоеденение мощности</span>
            </td>
            <td style="text-align:center">
                шт.
            </td>
            <td style="text-align:center">
                25 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                20
            </td>
            <td>
                <span style="font-weight:bold;">Разработка архитектурного проекта по переустройству помещения</span><br>
                (до 100 м2)(квартира,таунхаус)
            </td>
            <td style="text-align:center">
                шт.
            </td>
            <td style="text-align:center">
                55 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                21
            </td>
            <td>
                <span style="font-weight:bold;">Согласование архитектурного проекта по переустройству помещения</span><br>
                (до 100 м2) (квартира,таунхаус)
            </td>
            <td style="text-align:center">
                шт.
            </td>
            <td style="text-align:center">
                100 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                22
            </td>
            <td>
                <span style="font-weight:bold;">Разработка архитектурного проекта по переустройству помещения</span><br>
                (свыше 100 м2) (квартира,таунхаус)
            </td>
            <td style="text-align:center">
                шт.
            </td>
            <td style="text-align:center">
                80 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                23
            </td>
            <td>
                <span style="font-weight:bold;">Согласование архитектурного проекта по переустройству помещения</span><br>
                (свыше 100 м2) (квартира,таунхаус)
            </td>
            <td style="text-align:center">
                шт.
            </td>
            <td style="text-align:center">
                100 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                24
            </td>
            <td>
                <span style="font-weight:bold;">Технический надзор</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                2 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                25
            </td>
            <td>
                <span style="font-weight:bold;">Заказ и контроль (сопровождение) доставки мебели</span>
            </td>
            <td style="text-align:center">
                комплект
            </td>
            <td style="text-align:center">
                10% <br>
                от стоимости <br>
                мебели
            </td>
        </tr>
        <tr>
            <td>
                26
            </td>
            <td>
                <span style="font-weight:bold;">Ландшафтный дизйн</span>
            </td>
            <td style="text-align:center">
                сотка земли
            </td>
            <td style="text-align:center">
                15 000 руб.
            </td>
        </tr>
        <tr>
            <td>
                27
            </td>
            <td>
                <span style="font-weight:bold;">Составление ведомости отделочных материалов</span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                500
            </td>
        </tr>
        <tr>
            <td>
                28
            </td>
            <td>
                <span style="font-weight:bold;">Подбор мебели и аксессуаров
                </span>
            </td>
            <td style="text-align:center">
                кв/м
            </td>
            <td style="text-align:center">
                500
            </td>
        </tr>
    </tbody>
</table>
<p style="font-size: 20px; line-height: 18px; font-weight: bold;">
    Смотрите также
</p>
<p>
    <a href="/price-dizayn-interera/skolko-stoit-dizayn-proekt-doma/">Сколько стоит дизайн проект дома</a><br>
    <a href="/services/dekorator-interera/">Услуги декоратора интерьера</a><br>
    <a href="/services/dizayn-proekt-doma/">Дизайн проект дома</a><br>
    <a href="/services/dizayn-proekt-pod-klyuch/">Дизайн проект под ключ</a>
</p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>