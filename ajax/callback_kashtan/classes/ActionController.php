<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);


include('inc/ChaserApi.php');
include('inc/KashtanApi.php');
include('inc/BitrixApi.php');



class ActionController {

	
	//пропишите необходимые переменные для chaser
	protected $chaserApi;
	protected $chaserClientId = '15111';
	protected $chaserPrivate_key = '120237f7971e9689ead670bf06648dd2';
	protected $chaser_id_site = 16246;
	protected $phoneChaserManager = '74954610000';
	protected $planned_time = 1; //Означает сделать звонок через 1 минуту
	//свойства
	public $site_name;
	public $phone;
	public $name;
	public $site_id;
	public $utm;
	public $comment;

	


	public function __construct($data) {
		$this->name    = (isset($data['name'])) ? $data['name'] : 'no name';
		$this->phone   = (isset($data['phone']))  ? $data['phone'] : '';
		$this->site_id = (isset($data['site_id'])) ? $data['site_id'] : 1;
		$this->utm     = (isset($data['utm'])) ? $data['utm'] : '';
		$this->title   = (isset($data['title'])) ? $data['title'] : '';
		$this->site_name = (isset($data['site_name'])) ? $data['site_name'] : 'no_site_name';
		$this->ip      = $_SERVER['REMOTE_ADDR'];
        $this->mailto="info@archdetali.ru";
        $this->mailsubjecttext = "������ � ����� ���������";
        $this->keepname = 0;
	}



	/**
	*
	*Отправка чайзера
	*/
	public function sendChaser() {
		$this->chaserApi = new ChaserApi($this->chaserClientId, $this->chaserPrivate_key);
		$params_call = array(
			"site_id" => $this->chaser_id_site,
	        "manager_phone" => $this->phoneChaserManager,
	        "planned_time"  => $this->formCallTime(),
	        "active_page"   => $this->active_page,
	        "client_ip"     => $this->ip,
	        "client_phone"  => preg_replace("/[^0-9]/", '', $this->phone),
	    );
		if($res = $this->chaserApi->post("call", $params_call)) {
			return true;
		}
		print_r($res);
		return false;
	}




	/**
	*Отправка емайл
	*/

	public function sendMail($mailto = "wizweb@bk.ru") {
		mail($mailto, 'Заявка с сайта'.$this->site_name, $this->phone, "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n");
		return true;
	}




	/**
	* Отправка каштан
	*/
	public function sendKashtan() {
		$kashtan = new KashtapApi(
			$this->phone,
			$this->name,
			$this->title,
			$this->site_id,
			$this->utm
		);
		return $kashtan->post();
	}



	//Формируем время 
	public function formCallTime() {
		 return time() + $this->planned_time * 60;
	}




	/*
	* Отправка Битрикс24
	*/
	public function sendBitrix($title2 = "", $comment = "") {
		$this->title = ($title2 != '') ? $title2 : $this->title;
		$this->comment = ($comment != '') ? $comment : '';

		$data = array(
			"phone"   => $this->phone,
			"name"    => $this->name,
			"title"   => $this->title,
			"site_id" => $this->site_id,
			"utm"     => $this->utm,
			"comment" => $this->comment
		);

		$bitrix = new BitrixApi($data);
		return $bitrix->post();
	}


	
	public function sendMailForm($title2="", $comment = "") {

	$this->title = ($title2 != '') ? $title2 : $this->title;
		$this->comment = ($comment != '') ? $comment : '';

		file_put_contents("./tname.clean.txt",$this->name);
if( $this->keepname == 0)
{
$tname = iconv('UTF-8','WINDOWS-1251',$this->name);
}
		else {
       $tname = $this->name;
		}

		$data = array(
			"phone"   => $this->phone,
			"name"    => $this->name,
			"title"   => $this->title,
			"site_id" => $this->site_id,
			"utm"     => $this->utm,
			"comment" => $this->comment
		);

		//  file_put_contents("./actioncontroller.log.txt",$tname."\n".print_r($data,true));



$text = "<html><body><h3>".$data['title']."</h3>\n\n".

			"<p>������� :".$data['phone'].'</p>'."\n".
			"<p>������� : ".$tname.'</p>'."\n\n".
		   "<p>".
			$this->comment.'</p>'.
			'</body></html>';


		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";

// �������������� ���������
		//$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
		//$headers[] = 'From: Birthday Reminder <birthday@example.com>';
		//$headers[] = 'Cc: birthdayarchive@example.com';
		//$headers[] = 'Bcc: birthdaycheck@example.com';


        mail(
          $this->mailto,
          $this->mailsubjecttext,
          $text,
          $headers
             );

       return true;
      }





}