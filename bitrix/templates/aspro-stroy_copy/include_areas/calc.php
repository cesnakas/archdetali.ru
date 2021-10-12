<?if(true) {?>    <style>

        .why-text {
            font-size: 19px;
            margin-bottom: 45px;
        }
        .form_raschet_wrapp {
            padding: 30px;
        }
        .contact-form-box {
            background: #f7f7f8;
            padding-bottom: 40px;
        }
        .form_raschet_wrapp .form-group .form-control {
            background-color: #fff;
        }

        .form_raschet_wrapp .form-fields,
        .form_raschet_wrapp .raschet_block_radio {
            width: 74.5%;
        }

        .form-group .form-control+label.required:after {
            content: '*';
            font-size: 16px;
            display: inline-block;
            color: #f18e19;
        }

        .form_raschet_wrapp .form-group.error .form-control:focus~.error-container {
            display: block;
        }

        .form_raschet_wrapp .raschet_title {
            font-size: 26px;
            font-family: 'Vollkorn', "Helvetica Neue", Helvetica, Arial, sans-serif;
            margin: 26px 0 20px;
        }

        .form_raschet_wrapp .tarif,
        .form_raschet_wrapp .ploshad {
            display: flex;
        }

        .form_raschet_wrapp .ploshad {
            margin-bottom: 20px;
        }
        .form_raschet_wrapp .ploshad input {
            width: 75px;
        }
        .form_raschet_wrapp .tarif input {
            display: none;
        }

        .form_raschet_wrapp .tarif label {
            position: relative;
            font-size: 24px;
            margin-right: 50px;
            font-weight: 100;
            display: flex;
            align-items: center;
            line-height: 24px;
        }

        .form_raschet_wrapp .tarif label i {
            border: 1px solid #f18e19;
            width: 17px;
            height: 17px;
            border-radius: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
        }

        .form_raschet_wrapp .tarif input:checked+label i::after {
            content: '';
            width: 9px;
            height: 9px;
            border-radius: 30px;
            background: #f18e19;
        }

        .form_raschet_wrapp .ploshad label {
            margin-right: 20px;
        }

        .form-group.success label[for="form_text_9"] {
            display: none;
        }

        .form_raschet_wrapp .ploshad label span {
            border: 1px solid #f18e19;
            padding: 3px 0;
            font-size: 22px;
            font-weight: 100;
            width: 125px;
            display: block;
            text-align: center;
        }

        .form_raschet_wrapp .ploshad input:checked+label span {
            background: #f18e19;
            color: #fff;
        }

        .form_raschet_wrapp .user-confidensial {
            margin-top: 0;
        }

        .page-services .why h3 {
            margin-left: 0;
        }

        @media (max-width:804px) {
            .form_raschet_wrapp .form-fields, .form_raschet_wrapp .raschet_block_radio {
                width: 100%;
            }

            .form_raschet_wrapp .tarif {
                flex-direction: column;
            }

            .form_raschet_wrapp .tarif label {
                margin: 0 0 20px 0;
            }

            .form_raschet_wrapp .ploshad {
                flex-wrap: wrap;
            }
        }

        @media (max-width:660px) {
            .page-services .why {
                padding: 0 10px !important;
            }

            .form_raschet_wrapp .ploshad label {
                margin-right: 0;
                width: 145px;
                margin-bottom: 20px;
            }
            .form_raschet_wrapp .ploshad label[for="QUESTION_449_2"],
            .form_raschet_wrapp .ploshad label[for="QUESTION_449_4"] {
                width: calc(100% - 145px);
            }
        }

    </style>
    <script>
        $(document).ready(function () {
            $('.form-calc').on('change', function () {
                var price = 0;
                var author = 0;
                if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_1") {
                    price = 1250;
                    author = 4150;
                } else if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_2") {
                    price = 2050;
                    author = 4150;
                } else if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_3") {
                    price = 2550;
                    author = 4150;
                }
                else if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_4") {
                    price = 4150;
                    author = 4150;
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

   <div class="contact-form-box">

        <div class="form_raschet_wrapp">
            <h3>Калькулятор предварительного расчета цены дизайн-проекта
            </h3>
            <div class="why-text">Напишите нам и&nbsp;мы&nbsp;расчитаем стоимость услуги. Расчеты произведут по&nbsp;вашему запросу с&nbsp;учётом специфики решаемых задач и&nbsp;метража помещения.
            </div>
                <form class="big-contact-form callbackform form-calc" action="/ajax/form.php" method="POST">
                    <div class="raschet_title">Выберите тариф</div>

                    <div class="raschet_block_radio tarif">
                        <input type="radio" checked="" id="QUESTION_635_1" name="form_radio_SIMPLE_QUESTION_635" value="Стандарт">
                        <label for="QUESTION_635_1"><i></i><span>Основной</span></label>
                        <input type="radio" id="QUESTION_635_2" name="form_radio_SIMPLE_QUESTION_635" value="Премиум">
                        <label for="QUESTION_635_2"><i></i><span>Инженерный</span></label>
                        <input type="radio" id="QUESTION_635_3" name="form_radio_SIMPLE_QUESTION_635" value="VIP">
                        <label for="QUESTION_635_3"><i></i><span>Полный</span></label>
                        <input type="radio" id="QUESTION_635_4" name="form_radio_SIMPLE_QUESTION_635" value="VIP">
                        <label for="QUESTION_635_4"><i></i><span>Авторский</span></label>
                    </div>
                    <div class="raschet_block_radio tarif">
                        <input type="checkbox" id="QUESTION_636" name="form_radio_SIMPLE_QUESTION_636" value="Авторский надзор">
                        <label for="QUESTION_636"><i></i><span>+ Авторский надзор</span></label>
                    </div>

                    <div class="raschet_title">Площадь помещения</div>

                    <div class="raschet_block_radio ploshad">
                        <input type="text" class="form-control" name="form_square" value="30" size="15"><span class="price_calculation"> м2 * <span id="tarif_price">600 руб.</span> </span>
                    </div>
                    <div class="raschet_title"><p>=<br><span id="calculated_price">18000</span> руб.</p></div>

                    <div class="row">
                        <div class="col-md-6 text-center"><input type="text" name="NAME" placeholder="Ваше имя"></div>
                        <div class="col-md-6 text-center"><input class="user_phone" type="text" placeholder="8(___) ___ __ __" name="PHONE" required=""></div>
                    </div>

                    <div class="text-center">
                        <textarea placeholder="Ваше сообщение" name="MESSAGE"></textarea>
                        <input type="submit" name="submitform" value="Отправить">
                    </div>
                </form>
                <div class="message-form"></div>
            </div>  </div>

            <?/*<div class="form-fields">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group"><input type="text" class="form-control" name="form_text_8" value="" size="0"><label for="form_text_8">Ваше имя</label> </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group"> <input type="text" class="form-control mask-phone" name="form_text_9" value="" size="0"><label for="form_text_9" class="required">Ваш Телефон</label>
                            <div class="error-container js-error-message-text">Обязательное поле</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-fields">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group"> <textarea class="form-control" name="form_text_10" value="Сообщение *" rows="5">Сообщение *</textarea>
                            <div class="error-container js-error-message-text">Обязательное поле</div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="user-confidensial">Нажимая кнопку, вы даёте согласие на обработку персональных данных и соглашаетесь с <a href="/confidential/">политикой конфиденциальности</a>.</p>

            <div class="submit-wrapper"> <button type="submit" class="btn btn-primary btn-lg">Отправить</button></div>
        </div>

    */?>
<?}?>