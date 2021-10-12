<? //require("addorder.php");?>
<?php
if($_POST['NAME'] and $_POST['NAME'] !="") {$name = trim($_POST['NAME']);}
if($_POST['NEED_PRODUCT'] and $_POST['NEED_PRODUCT'] !="") {$need = trim($_POST['NEED_PRODUCT']);}
if($_POST['FIO'] and $_POST['FIO'] !="") {$name = trim($_POST['FIO']);}
if($_POST['PHONE'] and $_POST['PHONE'] !="") {$phone = $_POST['PHONE'];}
if($_POST['MESSAGE'] and $_POST['MESSAGE'] !="") {$question = $_POST['MESSAGE'];}
if (isset($_POST['utm_source'])) {$utm_source = $_POST['utm_source'];} else $utm_source = '';
if (isset($_POST['utm'])) {$utm = $_POST['utm'];} else $utm = '';
if (isset($_POST['utm_campaign'])) {$utm_campaign = $_POST['utm_campaign']; } else $utm_campaign = '';
if (isset($_POST['source'])) {$source = $_POST['source']; } else $source = '';
if (isset($_POST['traffic_type'])) {$traffic_type = $_POST['traffic_type']; } else $traffic_type = '';
if (isset($_POST['form_id'])) {$form_id = $_POST['form_id']; } else $form_id = '';
if (isset($_POST['subid'])) {$subid = $_POST['subid']; } else $subid = '';
$ip = ip2long($_SERVER["REMOTE_ADDR"]);
$site_id = 12; //id 
$url = "https://luks-dizain.ru";
$title = "Obratnii zvonok luks-dizain.ru";
$theme = $title;

function yesTags($text){
	if(strip_tags($text) != $text) {
		 return false;
	} else {
		return true;
	}
}



	//$emailto = "call@r-k-o.ru, wizweb@bk.ru";
	$emailto = "wizweb@bk.ru";

	//функция отправки емайл сообщения
	function postEmail($name, $phone, $theme, $comment, $emailto) {
		$message = "Имя: ".$name."\n"."Телефон: ".$phone."\n"."Комментарий: ".$comment;
		if(mail($emailto, $theme, $message)){
			//exit();
			return true;
		} else {
			return false;
		}
	}



	if(isset($_POST['PHONE'])) {
		//Esli est vopros
		if($question) {
			//Если есть теги, значит спам
			if(yesTags($question) AND yesTags($need)) {
				$notags = 0;
			} else {
				$notags = 1;
			}
			$title .= "<br> <b> Vopros: </b><br>";
			$title .= $question;
			if($need) {
				$title .= "<br><b>INTERESUET USLUGA:</b> ";
				$title .= $need;
			}
		}

		//esli popUP
		if($_POST['form_id'] == 2) {
			$title .= "<b>Pop-UP LUKS:</b>";
		}

		

		if (postEmail($name, $phone, $theme, $comment, $emailto)) {
			$json['error'] = 0;
			echo json_encode($json); // вывoдим мaссив oтвeтa
			//Если есть теги в сообщении значит спам
			if($notags == 0) {
				
				
				/*Отправляем запрос в каштан*/
				include "action_kashtan.php";
				
				
				
				
				
			}
			
		} else {
			echo "Произошла ошибка отправки. Пожалуйста позвоните нам!";
		}
		
	}


?>
