<?if(true) {?>
    <script>
        $(document).ready(function () {
            $('. calc-form').on('change', function () {
                var price = 0;
                var author = 0;
                if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_1") {
                    price = 600;
                    author = 1000;
                } else if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_2") {
                    price = 950;
                    author = 1000;
                } else if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_3") {
                    price = 1700;
                    author = 1000;
                }
                else if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_4") {
                    price = 2700;
                    author = 1000;
                }
                $("#tarif_price").text(price + " руб.");
                var square = parseInt($("input[name=form_square]").val());
                $("#calculated_price").text(square*price + ($("#QUESTION_636").prop('checked')?author * square:0));
                $("textarea[name=MESSAGE]").val("Калькулятор\n" +
                    "Услуги: " + ($("#QUESTION_636").prop('checked')?"+Авторский надзор":"") +"\n" +
                    "Площадь: " + square + " м2\n" +
                    "Стоимость: " + (price*square+($("#QUESTION_636").prop('checked')?author*square:0)) + " руб.");
            });
            });

    </script>


<div class="calc-wraper">
    <div class="calc">
        <form class="calc-form big-contact-form callbackform "  action="/ajax/form.php" method="POST">
            <div class="c-container">
                <div class="calc-base">
                    <div class="calc-base-left">
                        <div class="calc-title">Калькулятор расчета цены дизайн-проекта</div>
                        <div class="calc-desc">Напишите нам и мы рассчитаем стоимость услуги. Расчеты произведут по вашему запросу с учётом специфики решаемых задач и метража помещения.</div>
                    </div>
                    <div class="calc-base-right">
                        <div class="calc-step-item calc-tariff">
                            <div class="calc-step-item-top">
                                <div class="calc-step-item-number">01.</div>
                                <div class="calc-step-item-title">Выберите тариф:</div>
                            </div>
                            <div class="calc-tariff-radio-item-wrapper">
                                <div class="calc-tariff-radio-item calc-tariff-radio-item-1">
                                    <label class="radio-label">
                                        <input class="radio" type="radio" checked="" id="QUESTION_635_1" name="form_radio_SIMPLE_QUESTION_635" value="Основной">
                                        <span class="radio-custom"></span>
                                        <span class="radio-text">Основной</span>
                                    </label>
                                    <label class="radio-label">
                                        <input class="radio" type="radio" id="QUESTION_635_2" name="form_radio_SIMPLE_QUESTION_635" value="Инженерный">
                                        <span class="radio-custom"></span>
                                        <span class="radio-text">Инженерный</span>
                                    </label>
                                    <label class="radio-label">
                                        <input class="radio" type="checkbox" id="QUESTION_636" name="form_radio_SIMPLE_QUESTION_636" value="Авторский надзор">
                                        <span class="radio-custom"></span>
                                        <span class="radio-text">Авторский надзор</span>
                                    </label>
                                </div>
                                <div class="calc-tariff-item">
                                    <label class="radio-label">
                                        <input class="radio" type="radio" id="QUESTION_635_3" name="form_radio_SIMPLE_QUESTION_635" value="Полный">
                                        <span class="radio-custom"></span>
                                        <span class="radio-text">Полный</span>
                                    </label>
                                    <label class="radio-label">
                                        <input class="radio" type="radio" id="QUESTION_635_4" name="form_radio_SIMPLE_QUESTION_635" value="Авторский">
                                        <span class="radio-custom"></span>
                                        <span class="radio-text">Авторский</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-step-item calc-area">
                            <div class="calc-step-item-top">
                                <div class="calc-step-item-number">02.</div>
                                <div class="calc-step-item-title">Площадь помещения:</div>
                            </div>
                            <div class="calc-area-input-wrapper">
                                <input class="calc-area-input" type="text" name="form_square" value="30">
                                <div class="calc-area-text">м2 * <span id="tarif_price">600 руб.</span> </div>
                            </div>
                        </div>
                        <div class="calc-cost-wrapper">
                            <div class="calc-cost-title">Ориентировочная стоимость:</div>
                            <div class="calc-cost"><span class="calc-cost-value"><span id="calculated_price">18000</span></span> руб.</div>
                        </div>
                    </div>
                    <img class="calc-decor-1" src="<?=SITE_TEMPLATE_PATH?>/images/calc-img-1.png" alt="">
                    <img class="calc-decor-2" src="<?=SITE_TEMPLATE_PATH?>/images/calc-img-2.png" alt="">
                </div>
            </div>
            <div class="calc-final-wrapper">
                <div class="c-container">
                    <div class="calc-final">
                        <div class="calc-final-title"><span class="calc-final-title-span">Зафиксируйте стоимость</span> вашего дизайна</div>
                        <div class="calc-final-inputs-wrapper">
                            <div class="calc-final-inputs">
                                <div class="calc-final-inputs-top">
                                    <input class="calc-input" type="text" name="name" placeholder="Ваше имя" required>
                                    <input class="calc-input" type="tel" name="phone" placeholder="8 ___ - ___ - __ - __" required>
                                </div>
                                <textarea class="calc-textarea" name="MESSAGE" placeholder="Ваш сообщение"></textarea>
                            </div>
                            <div class="calc-final-btn">
                                <input class="calc-btn" type="submit" name="submitform" value="Отправить">
                                <div class="calc-personal-info">Отправляя заявку, вы принимаете условия обработки персональных данных</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="message-form"></div>
    </div>
</div>

<?}?>