<?php
	//header('Content-Type: text/html; charset=utf-8');

	//���� ���� �������� ������, �� ������ 1. ���� ���� ������� fasle, �� ������ 0
	$show_error = 1;
	
	$name = iconv('windows-1251', 'UTF-8', $name);
	$title = iconv('windows-1251', 'UTF-8', $title);


	$data = array(
		'key'      => 'asewfv3453fs22',
		'phone'    => $phone,
		'name'     => $name,
		'title'    => $title,
		'site_id'  => $site_id,
		'ip'       => ip2long($_SERVER["REMOTE_ADDR"]),
		'utm' => array(
				'utm_source'   => $utm_source,
				'utm_campaign' => $utm_campaign,
 			),
	);

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'http://kashtan-mobi.xyz/get/neworder');
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_POST, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
	    $result = curl_exec($curl);
	    $array = json_decode($result, true);
	

	//echo $result;
	

	//print_r($array);

	if(isset($array['code'])) {
		if($show_error == 1) {
			$error_msg = "�������� ��������� ������. <br> ���������� ��������� ���, ��������� �� ������� �������� <a href='/'>������� ��������</a>";
			$error_msg .= "<br>";
			$error_msg .= "��� ������: <span style='color: red;'>".$array['code']."</span>";
			$error_msg .= "<br>";
			$error_msg .= "����� ������: <span style='color: red;'>".$array['msg']."</span>";
			//���������� �������� ������
			require_once "error.php";
			exit();
		} else {
			return false;
			exit();
		}
	}

	
    
?>
