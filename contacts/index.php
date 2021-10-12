<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty("title","Контакты – студия Arch Detali");

$APPLICATION->SetPageProperty("description","Контакты|Записаться на консультацию|ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ. Закажите дизайн интерьера любой сложности от компании Arch Detali");
?><div class="row pb-60" itemscope itemtype="http://schema.org/Organization">
	<div class="col-md-12">
	<p>Наши дизайнеры с радостью ответят на все Ваши вопросы и полностью удовлетворят Ваш интерес, а также ознакомят<br> с реализованными проектами. </p>
	<p>Хотите заказать дизайн проект мечты, рассчитать стоимость реализации уже существующего или просто пообщаться и задать вопрос?</p>
	<p>Пишите письма, звоните или заходите в гости в наш новый офис №603 в БЦ West Park на Очаковском шоссе, 34 <br> </p>
	</div><!--col-md-12-->

	<div class="col-md-12">
		<div class="row pt-40">


			<div class="col-md-6"><?/* 
				<!--<h3>Как добраться: </h3>
				<div class="row">

					<div class="col-md-5 col-sm-5 col-xs-5 right-border">
						<a href="#" class="link-road active-road link-road-metro"><img src="/images/contacts/bus-icon.png">На метро</a>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-6">
						 <a href="#" class="link-road link-road-auto"><img src="/images/contacts/car-icon.png">На автомобиле</a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<!--
						<div class="box-more-contact">
							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-6"><a href="/images/contacts/gallery/1m.jpg" class="fancybox image"><img src="/images/contacts/gallery/l1-m.jpg"></a></div>
								<div class="col-md-3 col-sm-6 col-xs-6"><a href="/images/contacts/gallery/l1-m.jpg" class="fancybox image"><img src="/images/contacts/gallery/l1-m.jpg"></a></div>
								<div class="col-md-3 col-sm-6 col-xs-6"><a href="/images/contacts/gallery/l1-m.jpg" class="fancybox image"><img src="/images/contacts/gallery/l1-m.jpg"></a></div>
								<div class="col-md-3 col-sm-6 col-xs-6"><a href="/images/contacts/gallery/l1-m.jpg" class="fancybox image"><img src="/images/contacts/gallery/l1-m.jpg"></a></div>
							</div>
						</div>
						<ul class="more-contact" id="metro-ul">
							<li><span>1</span> <p>Станция метро Авиамоторная, идем к единственному выходу из метро. <br><a href="/images/contacts/gallery/m1.jpg" class="fancybox image"><img src="/images/contacts/gallery/m1.jpg" class="no-size">Смотреть фото</a></p></li>
							<li><span>2</span> <p>Выходим из стеклянных дверей и идем прямо до следующих лесенок. <br><a href="/images/contacts/gallery/m2.jpg" class="fancybox image"><img src="/images/contacts/gallery/m2.jpg" class="no-size">Смотреть фото</a></p></li>
							<li><span>3</span> <p>Поднявшись по лесенкам сразу сворачиваем направо и поднимаемся на улицу.<br> <a href="/images/contacts/gallery/m4.jpg" class="fancybox image"><img src="/images/contacts/gallery/m4.jpg" class="no-size">Смотреть фото</a></p></li>
							<li><span>4</span> <p>Поднявшись на улицу двигаемся вперед.<br> <a href="/images/contacts/gallery/m6.jpg" class="fancybox image"><img src="/images/contacts/gallery/m6.jpg" class="no-size">Смотреть фото</a></p></li>
							<li><span>5</span> <p>Продолжаем идти прямо до дома номер 12. Ориентирами станет теремок и бургер кинг<br><a href="/images/contacts/gallery/m7.jpg" class="fancybox image"><img src="/images/contacts/gallery/m7.jpg" class="no-size">Смотреть фото</a></p></li>

							<li><span>6</span> <p>Доходим до самого конца дома и сворачиваем влево. <br><a href="/images/contacts/gallery/m8.jpg" class="fancybox image"><img src="/images/contacts/gallery/m8.jpg" class="no-size">Смотреть фото</a></p></li>

							<li><span>7</span> <p>Это вход в наш бизнес центр.<br> <a href="/images/contacts/gallery/m9.jpg" class="fancybox image"><img src="/images/contacts/gallery/m9.jpg" class="no-size">Смотреть фото</a> | <a href="/images/contacts/gallery/m10.jpg" class="fancybox image"><img src="/images/contacts/gallery/m10.jpg" class="no-size">Смотреть фото</a></p></li>
							
							<li><span>8</span> <p>Входим в здание, на охране говорим, что нам нужно дизайн-бюро Люкс Дизайн. <br> За Вами спустится наш сотрудник и проведет в офис.<br><a href="/images/contacts/gallery/m12.jpg" class="fancybox image"><img src="/images/contacts/gallery/m12.jpg" class="no-size">Смотреть фото</a></p></li>

							<!--<li><span>9</span> <p>Выходим из лифта, прикладываем пропуск и идем по коридору до 911А офиса. <br><a href="/images/contacts/gallery/m12.jpg" class="fancybox image"><img src="/images/contacts/gallery/m12.jpg" class="no-size">Смотреть фото</a></p></li>
						</ul>

						<ul class="more-contact" id="auto-ul">
							<li><span>1</span> <p>Станция метро Авиамоторная, идем к единственному выходу из метро. <br><a href="/images/contacts/gallery/m1.jpg" class="fancybox image"><img src="/images/contacts/gallery/m1.jpg" class="no-size">Смотреть фото</a></p></li>
							<li><span>2</span> <p>Выходим из стеклянных дверей и идем прямо до следующих лесенок. <br><a href="/images/contacts/gallery/m2.jpg" class="fancybox image"><img src="/images/contacts/gallery/m2.jpg" class="no-size">Смотреть фото</a></p></li>
							<li><span>3</span> <p>Поднявшись по лесенкам сразу сворачиваем направо и поднимаемся на улицу.<br> <a href="/images/contacts/gallery/m4.jpg" class="fancybox image"><img src="/images/contacts/gallery/m4.jpg" class="no-size">Смотреть фото</a></p></li>
						</ul>
					</div>
				</div> -->*/?>
			<span itemprop="name" style="display: none;">Arch Detali</span>
				<div class="phone-box">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 item-contact"><h4>Телефон</h4> <a href="tel:+74959213700" class="call_phone_1" style="color: #000;"><span itemprop="telephone">+7 (495) 921-37-00</span></a></div>
						<div class="col-md-6 col-sm-6 col-xs-6 item-contact"><h4>Email</h4> <a href="malto:info@luks-dizain.ru" style="color: #000;"><span itemprop="email">Info@archdetali.ru</span></a></div>
						<div class="col-md-6 col-sm-6 col-xs-6 item-contact" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><h4>Адрес</h4><span itemprop="addressLocality">Москва</span>, <br> <span itemprop="streetAddress">Очаковское шоссе, 34, офис 603</span></div>
						<div class="col-md-6 col-sm-6 col-xs-6 item-contact"><h4>Режим работы</h4> Пн. – Вс.: <br>с 8:00 до 22:00 </div>
					</div>
				</div>

					<p>Ниже приведены реквизиты компании. Если вам необходимо получить свидетельства о государственной регистрации, идентификационный номер налогоплательщика и другие документы, обратитесь в бухгалтерию предприятия. </p>

				<div class="row pt-30">
					<div class="col-md-6 col-sm-6 col-xs-6 item-contact"><h4>Название </h4> ООО "АрхДетали" </div>
					<div class="col-md-6 col-sm-6 col-xs-6 item-contact"><h4>ОГРН:</h4> 1127746632166</div>
					<div class="col-md-6 col-sm-6 col-xs-6 item-contact"><h4>ИНН/КПП </h4>7722783931/772201001</div>
					<?/*<div class="col-md-6 col-sm-6 col-xs-6 item-contact"><h4>Юр. Адрес</h4>111024, Москва г, ул. Авиамоторная, <br> дом № 50, строение 1 </div>*/?>
				</div><!--row-->

			</div><!--col6-->

			<div class="col-md-6"> 
				<div class="map-contact">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4e9948705faa90d62a40dd8d3718274d90fcb9266d90482b8cec6ef27d979bd0&amp;source=constructor" width="560" height="400" frameborder="0"></iframe>
				</div><!--map-contact-->
			</div><!--col6-->
		</div>
	</div>


	<div class="col-md-12 pt-30">
	<div class="contact-form-box">
		<h1>Записаться на консультацию</h1>
			<form class="big-contact-form callbackform" action="/ajax/form.php" method="POST">
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
		</div>
	</div><!--colmd12-->


	<div class="col-md-12">
		<h1 class="ct1 pt-20">ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ</h1>
		<p>Мы продолжаем совершенствоваться каждый день. <br> Именно поэтому в нашем офисе созданы все условия, чтобы Вам было комфортно и удобно приходить в наш офис как себе домой. Мы рады и всегда ждем Вас!	</p>
	</div><!--colmd12-->


	<div class="col-md-12">
		<div class="row pt-30">
			<div class="col-md-6 item-contact2">
				<img src="/images/contacts/z1-icon.png">
				<div>
					<h4>КОНДИЦИОНЕРЫ</h4>
					Мы обеспечиваем комфортную <br> температуру зимой и летом!
				</div>
			</div><!--col-->

			<div class="col-md-6 item-contact2">
				<img src="/images/contacts/z2-icon.png">
				<div>
					<h4>Вкусные напитки, кафе</h4>
					Ароматный кофе, элитные сорта чая и вкусные печенья. <br> KFC, Burger King, теремок, и даже Префектура.
				</div>
			</div><!--col-->

			<div class="col-md-6 item-contact2">
				<img src="/images/contacts/z3-icon.png">
				<div>
					<h4>КОМФОРТНЫЕ ПЕРЕГОВОНЫЕ ЗОНЫ</h4>
					Удобные столы и стулья для проведения <br> консультации с дизайнером
				</div>
			</div><!--col-->

			<div class="col-md-6 item-contact2">
				<img src="/images/contacts/z4-icon.png">
				<div>
					<h4>Образцы и пробники</h4>
					Более 3000 образцов чистовых материалов <br>и каталоги мебели
				</div>
			</div><!--col-->


			<div class="col-md-6 item-contact2">
				<img src="/images/contacts/z5-icon.png">
				<div>
					<h4>Детские игрушки и секретарь</h4>
					Секретарь займет интереными играми <br> Вашего ребёнка
				</div>
			</div><!--col-->

			<div class="col-md-6 item-contact2">
				<img src="/images/contacts/z6-icon.png">
				<div>
					<h4>Банки, банкоматы</h4>
					ВТБ24, Сбербанк
				</div>
			</div><!--col-->

		</div><!--row-->
	</div><!--colmd12-->

	<div class="col-md-12">
		<p>Вы получите истинное удовольствие не только от самих консультаций, но и от доброжелательности и профессионализма наших менеджеров, которые помогут Вам окончательно определиться с выбором дизайна и оформить заказ.</p>
		<p>Приезжайте к нам, мы всегда будем вам очень рады!</p>
	</div><!--colmd12-->



	<div class="col-md-12">
		<!--<h1 class="ct1 pt-20">НАШ ОФИС:</h1>-->
	</div><!--colmd12-->


</div><!--row-->


		</div><?// class=col-md-12 col-sm-12 col-xs-12 content-md?>
	</div><?// class="maxwidth-theme?>
</div><?// class=row?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>