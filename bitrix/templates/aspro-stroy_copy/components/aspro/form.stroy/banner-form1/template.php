<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();?>
<?
$num = 0;
?>
<?$this->setFrameMode(false);?>
<div class="questions">
    <div class="c-container">
        <div class="questions-wrapper">
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
                <div class="questions-title">Получить консультацию дизайнера</div>
                <form name="<?=$arResult["IBLOCK_CODE"]?>" method="POST" class="questions-form">
                    <?if(is_array($arResult["QUESTIONS"])):?>
                        <?foreach( $arResult["QUESTIONS"] as $FIELD_SID => $arQuestion ){
                            if( $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden' ){
                                echo str_replace('class="form-control ', 'required class="questions-form-input ', $arQuestion["HTML_CODE"]);
                            }else{
                                echo str_replace('class="form-control ', 'required class="questions-form-input ', $arQuestion["HTML_CODE"]);
                            }
                        }?>
                    <?endif;?>
			        <?if($arParams["DISPLAY_PROCESSING_NOTE"] == "Y"):?>
               		    <div class="row processing-block">
			               	<div class="form-group">
               					<div class="col-md-12">
			               			<div class="input">
						               	<input type="checkbox" class="processing_approval" id="processing_approval" name="processing_approval" value="Y"<?=($arParams["PROCESSING_NOTE_CHECKED"] === 'Y' ? ' checked' : '')?> aria-required="true" required="required">
               							<label for="processing_approval" >
                                            <?$APPLICATION->IncludeFile(SITE_DIR."include/processing_note.php", Array(), Array("MODE" => "html"))?>
                                        </label>
    		              			</div>
               					</div>
			               	</div>
               			</div>
                    <?endif;?>
                    <?=$arResult["SUBMIT_BUTTON"]?>
                    <?=$arResult["FORM_FOOTER"]?>
                </form>
            <?}?>
        </div>
    </div>
</div>

<script>
/*$(document).ready(function(){
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
});*/
</script>