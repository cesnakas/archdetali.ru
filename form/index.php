<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("���������� �����");
?>
<style type="text/css">
section.page-top {display:none;}
.form.inline{margin-top:15px;}
.form.inline .form-header{border-top-color:transparent !important;}
</style>
<?
$id = (isset($_REQUEST["id"]) ? $_REQUEST["id"] : false);
$arFrontParametrs = CStroy::GetFrontParametrsValues(SITE_ID);
$captcha = (in_array($arFrontParametrs['USE_CAPTCHA_FORM'], array('HIDDEN', 'IMAGE', 'RECAPTCHA')) ? $arFrontParametrs['USE_CAPTCHA_FORM'] : 'NONE');
$processing = ($arFrontParametrs['DISPLAY_PROCESSING_NOTE'] === 'Y' ? 'Y' : 'N');
$isCallBack = $id == CCache::$arIBlocks[SITE_ID]["aspro_stroy_form"]["aspro_stroy_callback"][0];
$successMessage = ($isCallBack ? "<p>��� �������� ���������� ��� � ��������� �����.</p><p>������� �� ���� ���������!</p>" : "�������! ���� ��������� ����������!");
$arDataTrigger = json_decode((isset($_REQUEST["data-trigger"]) ? $_REQUEST["data-trigger"] : '{}'), true); // allways UTF-8
?>

<?php require("../ajax/callback_kashtan/process1.php"); ?>

<?if($id):?>
	<?$APPLICATION->IncludeComponent(
		"aspro:form.stroy", "inline",
		Array(
			"IBLOCK_TYPE" => "aspro_stroy_form",
			"IBLOCK_ID" => $id,
			"USE_CAPTCHA" => $captcha,
			"DISPLAY_PROCESSING_NOTE" => $processing,
			"AJAX_MODE" => "Y",
			"AJAX_OPTION_JUMP" => "Y",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "100000",
			"AJAX_OPTION_ADDITIONAL" => "",
			//"IS_PLACEHOLDER" => "Y",
			"SUCCESS_MESSAGE" => $successMessage,
			"SEND_BUTTON_NAME" => "���������",
			"SEND_BUTTON_CLASS" => "btn btn-default",
			"DISPLAY_CLOSE_BUTTON" => "N",
			"CLOSE_BUTTON_NAME" => "�������",
			"CLOSE_BUTTON_CLASS" => "jqmClose btn btn-default bottom-close",
		)
	);?>
	<?if($arDataTrigger && strlen($name)):?>
		<script type="text/javascript">
		var name = '<?=$name?>';
		var arTriggerAttrs = <?=json_encode($arDataTrigger)?>;
		$(document).ready(function() {
			$.each(arTriggerAttrs, function(index, val){
				if( /^data\-autoload\-(.+)$/.test(index)){
					var key = index.match(/^data\-autoload\-(.+)$/)[1];
					var el = $('input[name="'+key.toUpperCase()+'"]');
					el.val(val).attr('readonly', 'readonly').attr('title', val);
				}
			});

			if(name == 'order_product'){
				if(arTriggerAttrs['data-product'].length){
					$('input[name="PRODUCT"]').val(arTriggerAttrs['data-product']).attr('readonly', 'readonly').attr('title', arTriggerAttrs['data-product']);
				}
			}
		});
		</script>
	<?endif;?>
<?else:?>
	<div class="alert alert-warning">�� ������ ID �����</div>
<?endif;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>