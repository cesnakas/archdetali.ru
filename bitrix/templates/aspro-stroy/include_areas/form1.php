<?php ob_start(); ?>
	<div class="form1-box">
		<form class="form1 callbackform" action="/ajax/callback_kashtan/process1.php" method="POST">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-h1">Закажите дизайн-проект Вашей мечты</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-h2">Отправьте заявку прямо сейчас. Это бесплатно и ни к чему не обяжет..</div>

			 <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 form-phone1">
			   <input type="text" id="" name="PHONE" placeholder="Ваш телефон" value="" class="form1-phone-input user_phone" required>
			   <input name="utm_subid" type="hidden" value="">
			   <input name="utm_source" type="hidden" value="">
			   <input name="utm_campaign" type="hidden" value="">
			   <input type="hidden" name="form_id" id="form_id" value="5">
			</div><!--form-phone-->

			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 form1-submit text-center-sm pt-sm-30">
				<img src="/images/line-form1.png" class="arrow-form1 hidden-sm hidden-xs">
			  <input type="submit" name="submitform" value="Отправить" class="">
			</div>

		</div>
		</form>
		<div class="message-form"></div>
	</div>
<?php 
$form1 = ob_get_contents();
ob_end_clean(); ?>