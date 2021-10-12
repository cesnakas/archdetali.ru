<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();?>
<?
$num = 0;
?>
<?$this->setFrameMode(false);?>
<div class="form popup<?=($arResult['isFormNote'] == 'Y' ? ' success' : '')?>">
	<?if($arResult["isFormNote"] == "Y"){?>
		<div class="form-header">
			<i class="fa fa-check"></i>
			<div class="text">
				<div class="title"><?=GetMessage("SUCCESS_TITLE")?></div>
				<?=$arResult["FORM_NOTE"]?>
			</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
			if(arStroyOptions['THEME']['USE_FORMS_GOALS'] !== 'NONE'){
				var eventdata = {goal: 'goal_webform_success' + (arStroyOptions['THEME']['USE_FORMS_GOALS'] === 'COMMON' ? '' : '_<?=$arParams["IBLOCK_ID"]?>')};
				BX.onCustomEvent('onCounterGoals', [eventdata]);
			}
		});
		</script>
		<?if( $arParams["DISPLAY_CLOSE_BUTTON"] == "Y" ){?>
			<div class="form-footer" style="text-align: center;">
				<?=str_replace('class="', 'class="btn-lg ', $arResult["CLOSE_BUTTON"])?>
			</div>
		<?}
	}else{?>

	<?php //$arResult["FORM_HEADER"]?>			
<form action="/ajax/callback_kashtan/process1.php" name="<?=$arResult["IBLOCK_CODE"]?>" method="POST"> 

			<div class="form-header">
				<div class="text">
					<?if( $arResult["isIblockTitle"] ){?>
						<div class="title">���� �������?</div>
					<?}?>
					�������� ������������!
				</div>
			</div>
			<div class="form-body">
				<div class="row">
					<?if(is_array($arResult["QUESTIONS"])):?>
						<?foreach( $arResult["QUESTIONS"] as $FIELD_SID => $arQuestion ){
							if( $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden' ){
								echo $arQuestion["HTML_CODE"];
							}else{
							$num = $num + 1;
							?>
								<div class="col-md-12 col-sm-6 <?=$FIELD_SID?>">
									<div class="form-group">
										<div class="cols-md-12" data-sidy="<?=$FIELD_SID?>">

											<div class="input">
												<?=$arQuestion["HTML_CODE"]?>
											</div>

										</div>
									</div>
								</div>
								<?/*if($FIELD_SID == 'GABARIT'):?>
								</div>
								<div class="col-md-6">
								<?endif*/?>
							<?if($num%2 == 0):?>
								</div>
								<div class="row">
							<?endif?>
							<?}
						}?>
					<?endif;?>
				</div>
				<?if($arResult["isUseCaptcha"] === "Y"):?>
					<div class="row <?=($arResult["isUseReCaptcha"] === 'Y' ? 'recaptcha-row' : 'captcha-row')?>">
						<div class="form-group">
							<div class="col-md-12 col-sm-6">
								<?=$arResult["CAPTCHA_CAPTION"]?>
								<?if($arResult["isUseReCaptcha"] === "Y"):?>
									<div class="input <?=($arResult['CAPTCHA_ERROR'] == 'Y' ? 'error' : '')?>">
										<input type="hidden" class="recaptcha" name="recaptcha" id="recaptcha">
										<div class="g-recaptcha" data-sitekey="<?=RECAPTCHA_SITE_KEY?>" data-callback="reCaptchaVerify" data-theme="light" data-size="normal"></div>
									</div>
								<?else:?>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<?=$arResult["CAPTCHA_IMAGE"]?>
											<span class="refresh"><a href="javascript:;" rel="nofollow"><?=GetMessage("REFRESH")?></a></span>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="input <?=($arResult['CAPTCHA_ERROR'] == 'Y' ? 'error' : '')?>">
												<?=$arResult["CAPTCHA_FIELD"]?>
											</div>
										</div>
									</div>
								<?endif;?>
							</div>
						</div>
					</div>
				<?endif;?>
				<?if($arParams["DISPLAY_PROCESSING_NOTE"] == "Y"):?>
					<div class="row processing-block">
						<div class="form-group">
							<div class="col-md-12">
								<div class="input">
									<input type="checkbox" class="processing_approval" id="processing_approval" name="processing_approval" value="Y"<?=($arParams["PROCESSING_NOTE_CHECKED"] === 'Y' ? ' checked' : '')?>>
									<label for="processing_approval"><?$APPLICATION->IncludeFile(SITE_DIR."include/processing_note.php", Array(), Array("MODE" => "html"))?></label>
								</div>
							</div>
						</div>
					</div>
				<?endif;?>
			</div>
			<div class="form-footer clearfix" style="padding-bottom:30px;padding-top:0">

				<div class="">
					<?=str_replace('class="', 'class="btn-lg ', $arResult["SUBMIT_BUTTON"])?>
				</div>
			</div>
		<?=$arResult["FORM_FOOTER"]?>
	<?}?>
</div>

<script>
$(document).ready(function(){
	if(arStroyOptions['THEME']['USE_CAPTCHA_FORM'] == 'RECAPTCHA'){
		reCaptchaRender();
	}

	$('form[name="<?=$arResult["IBLOCK_CODE"]?>"]').validate({
		ignore: ".ignore",
		highlight: function( element ){
			$(element).parent().addClass('error');
		},
		unhighlight: function( element ){
			$(element).parent().removeClass('error');
		},
		submitHandler: function( form ){
			if( $('form[name="<?=$arResult["IBLOCK_CODE"]?>"]').valid() ){
				$(form).closest('.jqmWindow').addClass('success');
				$(form).find('button[type="submit"]').attr('disabled', 'disabled');
				var data = $('form[name="<?=$arResult["IBLOCK_CODE"]?>"]').serializeArray();
				 $.ajax({
			    	url: '/ajax/callback_kashtan/process1.php',
			        type: "POST",
			        data: data,
			        dataType: 'json',
			        success: function(data) {}
			    });
				 $('.banners-form').hide();
			}
		},
		errorPlacement: function( error, element ){
			error.insertBefore(element);
		}
	});

	if(arStroyOptions['THEME']['PHONE_MASK'].length){
		var base_mask = arStroyOptions['THEME']['PHONE_MASK'].replace( /(\d)/g, '_' );
		$('form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.phone').inputmask('mask', {'mask': arStroyOptions['THEME']['PHONE_MASK'] });
		$('form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.phone').blur(function(){
			if( $(this).val() == base_mask || $(this).val() == '' ){
				if( $(this).hasClass('required') ){
					$(this).parent().find('div.error').html(BX.message('JS_REQUIRED'));
				}
			}
		});
	}

	$('form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.date').inputmask(arStroyOptions['THEME']['DATE_MASK'], { 'placeholder': arStroyOptions['THEME']['DATE_PLACEHOLDER'] });

	$('.jqmClose').closest('.jqmWindow').jqmAddClose('.jqmClose');

	$('.jqmWindow').scrollTop();

	$('input[type=file]').uniform({fileButtonHtml: BX.message('JS_FILE_BUTTON_NAME'), fileDefaultHtml: BX.message('JS_FILE_DEFAULT')});

    $('.banners-form .jqmClose').on('click', function () {
        $('.banners-form').hide();
    })
});
</script>