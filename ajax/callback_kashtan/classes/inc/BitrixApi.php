
<?php


class BitrixApi {

	protected $queryUrl = 'https://portal1ok.ru/rest/1/x5fpf5an4eue395s/crm.lead.add';
	protected $title;
	protected $phone;
	protected $site_id;
	protected $utm;
	protected $name;
	protected $comment;


	public function __construct($data) {
		$this->title   = $data['title'];
		$this->phone   = $data['phone'];
		$this->name    = $data['name'];
		$this->utm     = $data['utm'];
		$this->site_id = $data['site_id'];
		$this->comment = $data['comment'];
	}



	/*
	*Отправить заявку
	*/
	public function post() {

		$data = array(
		'phone'    => $this->phone,
		'name'     => $this->name,
		'title'    => $this->title,
		'site_id'  => $this->site_id,
		'ip'       => ip2long($_SERVER["REMOTE_ADDR"]),
		'utm'      => $this->utm,
		);


		
		$queryData = http_build_query(array(
        'fields' => array(
            'NAME'         => $this->name, //Имя
            'UTM_CAMPAIGN' => $this->utm['utm_campaign'],
            'UTM_CONTENT'  => '',
            'UTM_MEDIUM'   => '',
            'UTM_SOURCE'   =>  $this->utm['utm_source'],
            'UTM_TERM'     =>  '',
            'TITLE'        => $this->title, 
            'COMMENTS'     => $this->comment,
            'PHONE'        => Array(
				              "n0" => Array(
				                  "VALUE" => $this->phone, //Телефон
				                  "VALUE_TYPE" => "MOBILE",
				              ),
          ),
        ),
            'params' => array("REGISTER_SONET_EVENT" => "Y")
      ));

    $curl = curl_init();
    curl_setopt_array($curl, array(
	    CURLOPT_SSL_VERIFYPEER => 0,
	    CURLOPT_POST => 1,
	    CURLOPT_HEADER => 0,
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $this->queryUrl,
	    CURLOPT_POSTFIELDS => $queryData,
    ));
    $result = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($result, 1);


    return $result;

	
	}
}




?>