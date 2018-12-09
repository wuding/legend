<?php
$url = 'https://m.tb.cn/h.3gF2Zlo';
$file = 'temp/' . md5($url) . '.txt';
if (file_exists($file)) {
	$content = file_get_contents($file);
} else {
	$content = file_get_contents($url);
	file_put_contents($file, $content);
}

$url = '';
if (preg_match("/var url = '(.*)';/", $content, $matches)) {
	# print_r($matches);
	$url = $matches[1];
	$query_string = parse_url($url, PHP_URL_QUERY);
	parse_str($query_string, $query_data);
	print_r($query_data);
}