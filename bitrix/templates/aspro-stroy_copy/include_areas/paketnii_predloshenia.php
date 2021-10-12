<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/aspro-stroy/include_areas/Mobile_Detect.php");
$detect = new Mobile_Detect;
?><div class="s-title-wrapper">
    <h2 class="price-title s-title">Стоимость <br>дизайн-проекта</h2>
</div>
<div class="price-wrapper">
    <div class="price-service">
        <div class="price-service-title">Услуга</div>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-obmera-obekta/" class="price-service-item">План обмера объекта</a>
        <div class="price-service-item">План демонтажа перегородок и оборудования</div>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-vozvodimykh-peregorodok-dvernykh-proemov-i-oborudovaniya/" class="price-service-item">План возводимых перегородок, дверных проемов и оборудования (перепланировка)</a>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-rasstanovki-mebeli/" class="price-service-item">План расстановки мебели</a>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/stilisticheskoe-reshenie-tsvetovaya-gamma/" class="price-service-item">Стилистическое решение, цветовая гамма</a>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-potolka/" class="price-service-item">План потолка</a>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-santekhnicheskogo-oborudovaniya/" class="price-service-item">План сантехнического оборудования (сантехники)</a>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-osvetitelnykh-priborov/" class="price-service-item">План размещения осветительных приборов</a>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-vyklyuchateley-s-privyazkami/" class="price-service-item">План размещения выключателей с привязками</a>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-rozetok-i-slabotochnogo-oborudovaniya/" class="price-service-item">План размещения розеток и слаботочного оборудования</a>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-teplogo-pola-s-razmeshcheniem-regulyatorov/" class="price-service-item">План теплого пола с размещением регуляторов</a>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-pola-s-ukazaniem-napolnogo-pokrytiya/" class="price-service-item">План пола с указанием напольного покрытия</a>
        <div class="price-service-item">План размещения кондиционеров</div>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/razvertki-vsekh-sten-s-otdelkoy-i-mebelyu/" class="price-service-item">Развертки всех стен с отделкой и мебелью</a>
        <div class="price-service-item">3D Визуализация помещений (2 вида на одно помещение)</div>
        <a target="_blank" href="/catalog/dizayn-proekty-kvartir/naimenovanie-vybrannykh-otdelochnykh-materialov/" class="price-service-item">Наименование выбранных отделочных материалов</a>
        <div class="price-service-item">Выезды Дизайнера на объект 1раз/ 2 нед.</div>
        <div class="price-service-item">Распространяется на весь период ремонтных работ</div>
    </div>
    <div class="price-item price-item-1">
        <div class="price-item-title">Основной</div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-obmera-obekta/" class="price-service-item mob">План обмера объекта</a>
            <? } ?>
        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">План демонтажа перегородок и оборудования</div>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-vozvodimykh-peregorodok-dvernykh-proemov-i-oborudovaniya/" class="mob price-service-item">План возводимых перегородок, дверных проемов и оборудования (перепланировка)</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-rasstanovki-mebeli/" class="price-service-item mob">План расстановки мебели</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/stilisticheskoe-reshenie-tsvetovaya-gamma/" class="price-service-item mob">Стилистическое решение, цветовая гамма</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-potolka/" class="price-service-item mob">План потолка</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-santekhnicheskogo-oborudovaniya/" class="price-service-item mob">План сантехнического оборудования (сантехники)</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-osvetitelnykh-priborov/" class="price-service-item mob">План размещения осветительных приборов</a>
            <? } ?>
        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-vyklyuchateley-s-privyazkami/" class="price-service-item mob">План размещения выключателей с привязками</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-rozetok-i-slabotochnogo-oborudovaniya/" class="price-service-item mob">План размещения розеток и слаботочного оборудования</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-teplogo-pola-s-razmeshcheniem-regulyatorov/" class="price-service-item mob">План теплого пола с размещением регуляторов</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-pola-s-ukazaniem-napolnogo-pokrytiya/" class="price-service-item mob">План пола с указанием напольного покрытия</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">План размещения кондиционеров</div>
            <? } ?>

        </div>
        <div class="price-item-service price-item-service-no">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/razvertki-vsekh-sten-s-otdelkoy-i-mebelyu/" class="price-service-item mob">Развертки всех стен с отделкой и мебелью</a>
            <? } ?>

        </div>
        <div class="price-item-service price-item-service-no">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">3D Визуализация помещений (2 вида на одно помещение)</div>
            <? } ?>

        </div>
        <div class="price-item-service ">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/naimenovanie-vybrannykh-otdelochnykh-materialov/" class="price-service-item mob">Наименование выбранных отделочных материалов</a>
            <? } ?>

        </div>
        <div class="price-item-service price-item-service-no">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">Выезды Дизайнера на объект 1раз/ 2 нед.</div>
            <? } ?>

        </div>
        <div class="price-item-service price-item-service-no">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">Распространяется на весь период ремонтных работ</div>
            <? } ?>

        </div>
        <div class="price-item-cost">
            <div class="price-item-cost-value">1250 руб/м2</div>
            <div class="price-item-cost-text">*Подарок</div>
        </div>
        <div class="price-item-btn-wrapper">
            <a href="#" data-event="jqm" data-param-id="67" data-name="callback" class="callback price-item-btn">Выбрать</a>
        </div>
    </div>
    <div class="price-item price-item-2">
        <div class="price-item-title">инженерный</div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-obmera-obekta/" class="price-service-item mob">План обмера объекта</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">План демонтажа перегородок и оборудования</div>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-vozvodimykh-peregorodok-dvernykh-proemov-i-oborudovaniya/" class="mob price-service-item">План возводимых перегородок, дверных проемов и оборудования (перепланировка)</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-rasstanovki-mebeli/" class="price-service-item mob">План расстановки мебели</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/stilisticheskoe-reshenie-tsvetovaya-gamma/" class="price-service-item mob">Стилистическое решение, цветовая гамма</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-potolka/" class="price-service-item mob">План потолка</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-santekhnicheskogo-oborudovaniya/" class="price-service-item mob">План сантехнического оборудования (сантехники)</a>

            <? } ?>
        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-osvetitelnykh-priborov/" class="price-service-item mob">План размещения осветительных приборов</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-vyklyuchateley-s-privyazkami/" class="price-service-item mob">План размещения выключателей с привязками</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-rozetok-i-slabotochnogo-oborudovaniya/" class="price-service-item mob">План размещения розеток и слаботочного оборудования</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-teplogo-pola-s-razmeshcheniem-regulyatorov/" class="price-service-item mob">План теплого пола с размещением регуляторов</a>
            <? } ?>

        </div>
        <div class="price-item-service ">

        </div>
        <div class="price-item-service ">

        </div>
        <div class="price-item-service price-item-service-no">

        </div>
        <div class="price-item-service ">

        </div>
        <div class="price-item-service ">

        </div>
        <div class="price-item-service price-item-service-no">

        </div>
        <div class="price-item-service price-item-service-no">

        </div>
        <div class="price-item-cost">
            <div class="price-item-cost-value">2050 руб/м2</div>
            <div class="price-item-cost-text">*Подарок</div>
        </div>
        <div class="price-item-btn-wrapper">
            <a href="#" data-event="jqm" data-param-id="67" data-name="callback" class="callback price-item-btn">Выбрать</a>
        </div>
    </div>
    <div class="price-item price-item-3">
        <div class="price-item-title">Полный</div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-obmera-obekta/" class="price-service-item mob">План обмера объекта</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">План демонтажа перегородок и оборудования</div>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-vozvodimykh-peregorodok-dvernykh-proemov-i-oborudovaniya/" class="mob price-service-item">План возводимых перегородок, дверных проемов и оборудования (перепланировка)</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-rasstanovki-mebeli/" class="price-service-item mob">План расстановки мебели</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/stilisticheskoe-reshenie-tsvetovaya-gamma/" class="price-service-item mob">Стилистическое решение, цветовая гамма</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-potolka/" class="price-service-item mob">План потолка</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-santekhnicheskogo-oborudovaniya/" class="price-service-item mob">План сантехнического оборудования (сантехники)</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-osvetitelnykh-priborov/" class="price-service-item mob">План размещения осветительных приборов</a>

            <? } ?>
        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-vyklyuchateley-s-privyazkami/" class="price-service-item mob">План размещения выключателей с привязками</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-rozetok-i-slabotochnogo-oborudovaniya/" class="price-service-item mob">План размещения розеток и слаботочного оборудования</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-teplogo-pola-s-razmeshcheniem-regulyatorov/" class="price-service-item mob">План теплого пола с размещением регуляторов</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-pola-s-ukazaniem-napolnogo-pokrytiya/" class="price-service-item mob">План пола с указанием напольного покрытия</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">План размещения кондиционеров</div>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/razvertki-vsekh-sten-s-otdelkoy-i-mebelyu/" class="price-service-item mob">Развертки всех стен с отделкой и мебелью</a>
            <? } ?>

        </div>
        <div class="price-item-service ">

        </div>
        <div class="price-item-service">

        </div>
        <div class="price-item-service price-item-service-no">

        </div>
        <div class="price-item-service price-item-service-no">

        </div>
        <div class="price-item-cost">
            <div class="price-item-cost-value">2550 руб/м2</div>
            <div class="price-item-cost-text">*Подарок</div>
        </div>
        <div class="price-item-btn-wrapper">
            <a href="#" data-event="jqm" data-param-id="67" data-name="callback" class="callback price-item-btn">Выбрать</a>
        </div>
    </div>
    <div class="price-item price-item-4">
        <div class="price-item-title">авторский</div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-obmera-obekta/" class="price-service-item mob">План обмера объекта</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">План демонтажа перегородок и оборудования</div>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-vozvodimykh-peregorodok-dvernykh-proemov-i-oborudovaniya/" class="mob price-service-item">План возводимых перегородок, дверных проемов и оборудования (перепланировка)</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-rasstanovki-mebeli/" class="price-service-item mob">План расстановки мебели</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/stilisticheskoe-reshenie-tsvetovaya-gamma/" class="price-service-item mob">Стилистическое решение, цветовая гамма</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-potolka/" class="price-service-item mob">План потолка</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-santekhnicheskogo-oborudovaniya/" class="price-service-item mob">План сантехнического оборудования (сантехники)</a>

            <? } ?>
        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-osvetitelnykh-priborov/" class="price-service-item mob">План размещения осветительных приборов</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-vyklyuchateley-s-privyazkami/" class="price-service-item mob">План размещения выключателей с привязками</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-razmeshcheniya-rozetok-i-slabotochnogo-oborudovaniya/" class="price-service-item mob">План размещения розеток и слаботочного оборудования</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-teplogo-pola-s-razmeshcheniem-regulyatorov/" class="price-service-item mob">План теплого пола с размещением регуляторов</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/plan-pola-s-ukazaniem-napolnogo-pokrytiya/" class="price-service-item mob">План пола с указанием напольного покрытия</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">План размещения кондиционеров</div>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/razvertki-vsekh-sten-s-otdelkoy-i-mebelyu/" class="price-service-item mob">Развертки всех стен с отделкой и мебелью</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">3D Визуализация помещений (2 вида на одно помещение)</div>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <a target="_blank" href="/catalog/dizayn-proekty-kvartir/naimenovanie-vybrannykh-otdelochnykh-materialov/" class="price-service-item mob">Наименование выбранных отделочных материалов</a>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">Выезды Дизайнера на объект 1раз/ 2 нед.</div>
            <? } ?>

        </div>
        <div class="price-item-service">

            <?if ( $detect->isMobile() ) {?>
                <div class="price-service-item mob">Распространяется на весь период ремонтных работ</div>
            <? } ?>

        </div>
        <div class="price-item-cost">
            <div class="price-item-cost-value">4150 руб/м2</div>
            <div class="price-item-cost-text">*Подарок</div>
        </div>
        <div class="price-item-btn-wrapper">
            <a href="#" data-event="jqm" data-param-id="67" data-name="callback" class="callback price-item-btn">Выбрать</a>
        </div>
    </div>
</div>