
<?php


class KashtapApi {

	protected $key = "asewfv3453fs22";
	protected $title;
	protected $phone;
	protected $site_id;
	protected $utm;
	protected $name;


	public function __construct($phone = '', $name = '',  $title = '', $site_id = 1, $utm = '') {
		$this->title = $title;
		$this->phone = $phone;
		$this->name = $name;
		$this->utm = $utm;
		$this->site_id = $site_id;
	}



	/*
	*Отправить заявку
	*/
	public function post() {

		$data = array(
		'key'      => $this->key,
		'phone'    => $this->phone,
		'name'     => $this->name,
		'title'    => $this->title,
		'site_id'  => $this->site_id,
		'ip'       => ip2long($_SERVER["REMOTE_ADDR"]),
		'utm'      => $this->utm,
	);


		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'http://kashtan-mobi.xyz/get/neworder');
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_POST, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
	    $result = curl_exec($curl);
	    $array = json_decode($result, true);

	    print_r( $result );


	    if(isset($array['code'])) {
			if($show_error == 1) {
				$error_msg = "Извините произошла ошибка. <br> Пожалуйста позвоните нам, перейдите на главную страницу <a href='/'>Главная старница</a>";
				$error_msg .= "<br>";
				$error_msg .= "Код ошибки: <span style='color: red;'>".$array['code']."</span>";
				$error_msg .= "<br>";
				$error_msg .= "Текст ошибки: <span style='color: red;'>".$array['msg']."</span>";
				//Покдлючаем страницу ошибки
				echo $error_msg;
				return false;
			}
		}


		return true;
	}
}




?>