<?php
$seconds = 4;
set_time_limit($seconds);

$hosts = array(
	'cpn.red' => array(
		'',
		'www',
	),
	'urlnk.com' => array(
		'',
	),
);

$ip = array();
foreach ($hosts as $key => $value) {
	if (is_array($value)) {
		foreach ($value as $k => $v) {
			if ($v) {
				$v .= '.';
			}
			$host = $v . $key;
			$ip[$host] = gethostbyname($host);
		}
	}	
}
print_r($ip);
