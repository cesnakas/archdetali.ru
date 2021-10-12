<?php ob_start(); ?>
    <div class="form1-box">
        <div class="form1-box-wrapper">
            <div class="form1-box-title-wrapper">
                <div class="form-h1">Закажите дизайн-проект Вашей мечты</div>
                <div class="form-h2">Отправьте заявку прямо сейчас. Это бесплатно и ни к чему не обяжет!</div>
            </div>
            <form class="form1 callbackform" action="/ajax/callback_kashtan/process1.php" method="POST">
                <div class="form-phone1">
                    <input type="text" id="" name="PHONE" placeholder="Ваш телефон" value=""
                           class="form1-phone-input user_phone" required>
                    <input name="utm_subid" type="hidden" value="">
                    <input name="utm_source" type="hidden" value="">
                    <input name="utm_campaign" type="hidden" value="">
                    <input type="hidden" name="form_id" id="form_id" value="5">
                </div>
                <div class="form1-submit">
                    <? //<img src="/images/line-form1.png" class="arrow-form1 hidden-sm hidden-xs">?>
                    <input type="submit" name="submitform" value="Отправить" class="">
                </div>
            </form>
            <div class="message-form"></div>
        </div>
    </div>
<?php
$form1 = ob_get_contents();
ob_end_clean(); ?>