<?php
# include 'E:\www\work\netjoin\mr-fact\vendor\wuding\php-ext\src\Filesystem.php';
include 'E:\www\work\wuding\php-ext\src\Filesystem.php';
$url = $_GET['url'] ?? 'http://win.web.nf03.sycdn.kuwo.cn/6a03cd58ad212e8863b4756253d14de8/5c9b623e/resource/a3/66/92/195353300.aac';


$filesystem = new Ext\Filesystem();
$data = Ext\Filesystem::getContents($url);

$url = preg_replace(['/:/', '/\/+/'], ['', '/'], $url);
$url = 'E:/www/legend/dist/' . $url;
echo Ext\Filesystem::putContents($url, $data, 'not overwrite');
# print_r($filesystem::$constants);
exit;

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