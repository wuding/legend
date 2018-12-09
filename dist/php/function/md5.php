<?php
/*
$_m_h5_tk = 'e40407e188b7583fa3d65a63f114457a';
$t = 1537237935431;
$appkey = 12574478;
$data = '{"e":"+tv6WsmCJ4YGQASttHIRqb3On8zUlpUvOvS9qQafwTwBlq7kqUH1Xg7P3wW0LANX19msRg13/eQ3LZW6u56qNWjp926RHPMNEaK6WY/SJDRnUtfMCNR1uMHVq/dxq/DATJnbK5InWznd4dRbTb5WN9VqM6BWlz38UtqM5E5JIeWKUvBZvddY7m4A7UxLt4cv","pid":"mm_33231688_7050284_23466709"}';
# $data = urlencode($data);
echo $str = $_m_h5_tk.'&'.$t.'&'.$appkey.'&'.$data;
echo PHP_EOL;
echo md5($str);
*/

function sign($_m_h5_tk, $data = null, $t = null) {
	if (is_array($data)) {
		$data = json_encode($data);
	}
	$appKey = 12574478;
	$str = "$_m_h5_tk&$t&$appKey&$data";
	return md5($str);
}

function url() {
	$token = '1427f6c023e9a9f9ed5771719ba6a83b';
	$data = [
		'e' => '+tv6WsmCJ4YGQASttHIRqb3On8zUlpUvOvS9qQafwTwBlq7kqUH1Xg7P3wW0LANX19msRg13/eQ3LZW6u56qNWjp926RHPMNEaK6WY/SJDRnUtfMCNR1uMHVq/dxq/DATJnbK5InWznd4dRbTb5WN9VqM6BWlz38UtqM5E5JIeWKUvBZvddY7m4A7UxLt4cv',
		'pid' => 'mm_33543472_5896322_20676495',
	];
	$json = json_encode($data);
	
	$time = time();
	$time .= mt_rand(100, 999);	
	$sign = sign($token, $json, $time);
	$url = 'https://acs.m.taobao.com/h5/mtop.alimama.union.hsf.coupon.get/1.0/?';
	
	$query_data = [
		'jsv' => '2.4.0',
		'appKey' => 12574478,
		't' => $time,
		'sign' => $sign,
		'api' => 'mtop.alimama.union.hsf.coupon.get',
		'v' => '1.0',
		#'AntiCreep' => 'true',
		#'AntiFlood' => 'true',
		'type' => 'json',
		#'dataType' => 'jsonp',
		#'callback' => 'mtopjsonp1',
		'data' => $json,
	];
	
	$query_string = http_build_query($query_data);
	return $url .= $query_string;
}

echo url();