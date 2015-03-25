<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	邮件配置参数
|
*/
	$config['protocol'] = 'smtp'; 
	$config['smtp_host'] = 'smtp.exmail.qq.com'; // given server 
	$config['smtp_user'] = 'hxr@ccdm.com.cn'; 
	$config['smtp_pass'] = 'dalehong123..'; 
	$config['smtp_port'] = '25'; // given port. 
	$config['crlf']="\r\n";   
	$config['newline']="\r\n";
	$config['smtp_timeout'] = '1';
	//$config['mailtype'] = "html";
	//$config['mailtype'] = 'html';
	
/* 	$config['smtp_host']="smtp.163.com";
	$config['smtp_user']="xxxrhong@163.com";
	$config['smtp_pass']="a123123";
	$config['smtp_port'] = '25'; // given port.	 
	$config['smtp_timeout'] = '1';
	$config['newline'] = "/r/n"; 
	$config['crlf'] = "/r/n";   */
	
	$config['charset']='utf-8';  // Encoding type 
