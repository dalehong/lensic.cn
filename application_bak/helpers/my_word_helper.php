<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * excel 读取
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 * 
 * @access   public
 * @return   object   word 对象实例
 * @example
 * $excel = excel();
 * $excel->read('uploads/test.xls');
 * $datas = $excel->sheets[0]['cells'];
 */
function word()
{
	$CI = &get_instance();
	if(!isset($CI->word))
	{
		require_once str_replace(base_url(), '', SITE_RESOURCES) . '/PHPWord/PHPWord.php';
		$CI->word = new PHPWord();
	}
	return $CI->word;
}

/* End of file my_word_helper.php */
/* Location: ./application/helpers/my_word_helper.php */