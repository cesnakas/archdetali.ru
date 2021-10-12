<?php
include "config.php";
function save_order($site_id, $name, $phone, $utm, $source, $campaign, $subid, $url, $title, $traffic_type) {
	$ip = ip2long($_SERVER["REMOTE_ADDR"]);
	$name = mysql_real_escape_string($name);
	$campaign = mysql_real_escape_string($campaign);
	$utm = mysql_real_escape_string($utm);
	$source = mysql_real_escape_string($source);

	
	$query='INSERT INTO `webdriver`.`order` (`id`, `date`, `site_id`, `name`, `phone`, `status`, `utm`, `subid`, `date_complite`, `url`, `title`, `source`, `campaign`, `traffic_type`, `ip_adress`)
	VALUES (NULL, CURRENT_TIMESTAMP, "'.$site_id.'", "'.$name.'", "'.$phone.'", "1", "'.$utm.'", "'.$subid.'", CURRENT_TIMESTAMP, "'.$url.'", "'.$title.'", "'.$source.'", "'.$campaign.'", "'.$traffic_type.'", "'.$ip.'");';
	$result = mysql_query($query) or die("Invalid query: " . mysql_error());
}

?>