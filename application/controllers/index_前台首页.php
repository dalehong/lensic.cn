<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 前端默认控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Index extends M_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->view('index');
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */