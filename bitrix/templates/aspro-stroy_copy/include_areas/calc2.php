<?if(true) {?><div class="calc" id="main_calc">
    <div class="c-container">
        <div class="s-title-wrapper">
            <h2 class="calc-title s-title">Калькулятор расчета цены дизайн-проекта</h2>
        </div>
        <div class="calc-wrapper">
            <div class="calc-left">
                <div class="calc-step-item calc-tariff">
                    <div class="calc-tariff-title">01. Выберите тариф:</div>
                    <div class="calc-tariff-radio">
                        <label class="radio-label radio-1">
                            <input class="radio" type="radio" id="QUESTION_635_1" checked name="form_radio_SIMPLE_QUESTION_635" value="Основной">
                            <div class="radio-custom">
                                <div class="radio-custom-img"></div>
                                <div class="radio-custom-text">Основной</div>
                            </div>
                        </label>
                        <label class="radio-label radio-2">
                            <input class="radio" type="radio" id="QUESTION_635_2" name="form_radio_SIMPLE_QUESTION_635" value="Инженерный">
                            <div class="radio-custom">
                                <div class="radio-custom-img"></div>
                                <div class="radio-custom-text">Инженерный</div>
                            </div>
                        </label>
                        <label class="radio-label radio-4">
                            <input class="radio" type="radio" id="QUESTION_635_3" name="form_radio_SIMPLE_QUESTION_635" value="Полный">
                            <div class="radio-custom">
                                <div class="radio-custom-img"></div>
                                <div class="radio-custom-text">Полный</div>
                            </div>
                        </label>
                        <label class="radio-label radio-5">
                            <input class="radio" type="radio" id="QUESTION_635_4" name="form_radio_SIMPLE_QUESTION_635" value="Авторский">
                            <div class="radio-custom">
                                <div class="radio-custom-img"></div>
                                <div class="radio-custom-text">Авторский</div>
                            </div>
                        </label>
                        <label class="radio-label radio-3">
                            <input class="radio" type="checkbox" id="QUESTION_636" name="form_radio_SIMPLE_QUESTION_636" value="Авторский надзор">
                            <div class="radio-custom">
                                <div class="radio-custom-img"></div>
                                <div class="radio-custom-text">Авторский надзор</div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="calc-step-item calc-area">
                    <div class="calc-area-top">
                        <div class="calc-area-title">02. Площадь помещения:</div>
                        <div class="calc-slider-value-wrapper">
                            <input class="calc-slider-value" type="text" name="form_square" value="30" onkeypress="return (event.charCode >= 48 && event.charCode <= 57 && /^\d{0,3}$/.test(this.value));">
                            <div class="calc-slider-value-text">м2 * <span id="tarif_price">1250 руб.</span> </div>
                        </div>
                    </div>
                    <div class="calc-slider-wrapper">
                        <div class="calc-slider-text">3 м2</div>
                        <div class="calc-slider"></div>
                        <div class="calc-slider-text">500 м2</div>
                    </div>
                </div>
                <div class="calc-cost">
                    <div class="calc-cost-title">Ориентировочная стоимость:</div>
                    <div class="calc-cost-value"><span>37 500</span> руб.</div>
                </div>
            </div>
            <div class="calc-right">
                <form class="calc-form" action="/ajax/form.php" method="POST">
                    <div class="calc-form-title">Зафиксируйте стоимость вашего дизайна</div>
                    <input class="calc-form-input" type="text" name="name" placeholder="Ваше имя" required>
                    <input class="calc-form-input phone-input" type="tel" name="phone" placeholder="8 ___ - ___ - __ - __" required>
                    <textarea class="calc-form-info calc-textarea" name="MESSAGE" placeholder="Ваш сообщение" rows="5"></textarea>
                    <div class="calc-form-personal-info">Отправляя заявку, вы принимаете условия обработки персональных данных</div>
                    <input class="calc-form-btn" type="submit" name="submitform" value="Отправить заявку">
                </form>
                <div class="message-form"></div>
            </div>
        </div>
    </div>
</div>

<?}?>