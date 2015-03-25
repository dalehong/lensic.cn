<?php

ob_start(); //打开缓冲区 
header("Cache-Control: public"); 
Header("Content-type: application/octet-stream"); 
Header("Accept-Ranges: bytes"); 
if (strpos($_SERVER["HTTP_USER_AGENT"],'MSIE')) { 
	header('Content-Disposition: attachment; filename=test.doc'); 
}else if (strpos($_SERVER["HTTP_USER_AGENT"],'Firefox')) { 
	Header('Content-Disposition: attachment; filename=test.doc'); 
} else { 
	header('Content-Disposition: attachment; filename=test.doc'); 
} 
header("Pragma:no-cache"); 
header("Expires:0"); 
ob_end_flush();//输出全部内容到浏览器 


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://www.cmx8.cn');
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
curl_close($curl);
var_dump($data);
?>