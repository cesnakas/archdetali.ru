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
$url = "https://xn--80aafgpfefj3a0bby.xn--p1ai/";
$title = "Obratnii zvonok luks-dizain.ru";
$theme = $title;

function yesTags($text){
	if(strip_tags($text) != $text) {
		 return false;
	} else {
		return true;
	}
}







	if(isset($_POST['PHONE'])) {


		
		//Esli est vopros
		if($question) {
			//���� ���� ����, ������ ����
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

		if($_POST['form_id'] == 2) {
			$title .= "<b>Pop-UP LUKS:</b>";
		}

		

			
			//���� ���� ���� � ��������� ������ ����
			if($notags == 0) {
			
				
				//���������� ������
				//���������� ����� ��������
				@include "classes/ActionController.php";
				
				//��������� ������ �������� 
				$data = array(
					'key'       => 'asewfv3453fs22',
					'phone'     => $phone,
					'name'      => $name, //iconv('windows-1251', 'UTF-8', $name),
					'title'     => $title,
					'site_id'   => $site_id,
					'site_name' => '�������������.��',
					'ip'        => ip2long($_SERVER["REMOTE_ADDR"]),
					'utm'       => array(
										'utm_source'   => $utm_source,
										'utm_campaign' => $utm_campaign,
									),
				);
				
				$newOrder = new ActionController($data);
				//�������� �������
				//$test = $newOrder->sendBitrix('������ � ����� �������������.��', $title);
                $title = "������ �� ������������ ���������";
                $newOrder->mailsubjecttext="������ � ����� ���������, ������������";
                $test = $newOrder->sendMailForm('������ � ����� ���������, ������������', $title);
				echo json_encode(['success' => $test, 'data'=> $newOrder]);
				//�������� �������
				//$newOrder->sendKashtan();
				
				//$json['error'] = 0;
				//echo json_encode($json); // ���o��� �a���� o��e�a
				
			}
			
 

	}


?>
