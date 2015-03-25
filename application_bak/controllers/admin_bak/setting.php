<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端系统设置控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Setting extends A_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->file_name = 'setting/';
	}
	
	/**
	 * 公共设置
	 */
	function index()
	{
		$this->the_setting('公共设置', 'index', 'config_common');
	}
	
	/**
	 * 站点设置
	 */
	function site()
	{
		$this->the_setting('站点设置', 'site', 'config_site');
	}
	
	/**
	 * 后台设置
	 */
	function admin()
	{
		$this->the_setting('后台设置', 'admin', 'config_site_admin');
	}
	
	/**
	 * 公共代码
	 * 
	 * @access   private
	 * @param    string    权限名称
	 * @param    string    控制器名
	 * @param    string    操作表名
	 */
	private function the_setting($power_title, $controller, $table)
	{
		$view_datas['title'] = $this->check_power($power_title);
		if($this->input->get('act') == 'succeed')
		{
			$view_datas['submit_info'] = array('title' => '更新成功');
		} else if($this->input->get('act') == 'failed') {
			$view_datas['submit_info'] = array('title' => '资料未修改或更新失败');
		}
		if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
		{
			$post = $this->input->post();
			$tabs = $post['tabs'];
			unset($post['tabs']);
			$action = $this->m_common->update($table, $post);
			if($action)
			{
				redirect(site_url('admin/setting/' . $controller) . '?act=succeed#' . $tabs);
			} else {
				redirect(site_url('admin/setting/' . $controller) . '?act=failed#' . $tabs);
			}
		}
		$this->load->view($this->file_name . $controller, $view_datas);
	}
}

/* End of file setting.php */
/* Location: ./application/controllers/admin/setting.php */