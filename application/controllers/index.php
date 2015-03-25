<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端首页控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Index extends A_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$view_datas['title'] = SITE_NAME;
		$view_datas['power_left'] = $this->m_index->get_menu('left');
		$view_datas['power_right'] = $this->m_index->get_menu('right');
		$this->load->view('index', $view_datas);
	}
	
	/**
	 * 管理员登录
	 */
	function login()
	{
		$view_datas['title'] = '用户登入';
		if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
		{
			$this->load->helper('my_md5');
            //管理员登陆
            $post['username'] = $this->input->post('username');
            $post['password'] = str_md5($this->input->post('password'));
            //普通用户登录
            $post_xs['username'] = $this->input->post('username');
            $post_xs['password'] = md5($this->input->post('password'));
			$action = $this->m_index->login($post,$post_xs);
			if($action === 'stop')
			{
				$post['password'] = $this->input->post('password');
				$view_datas['submit_info'] = array('title' => '该用户已禁止访问', 'object_value' => $post);
			} else if($action) {
				redirect('index/index');
			} else {
				$post['password'] = $this->input->post('password');
				$view_datas['submit_info'] = array('title' => '用户名或密码错误', 'object_value' => $post);
			}
		}
		$this->load->view('login'.SITE_YX, $view_datas);
	}
	
	
	
	/**
	 * 管理员登录
	 */
	function login_user()
	{
		$view_datas['title'] = '用户登入';
		if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
		{
			$this->load->helper('my_md5');
            //管理员登陆
            $post['username'] = $this->input->post('username');
            $post['password'] = str_md5($this->input->post('password'));
            //普通用户登录
            $post_xs['username'] = $this->input->post('username');
            $post_xs['password'] = md5($this->input->post('password'));
			$action = $this->m_index->login($post,$post_xs);
			if($action === 'stop')
			{
				$post['password'] = $this->input->post('password');
				$view_datas['submit_info'] = array('title' => '该用户已禁止访问', 'object_value' => $post);
			} else if($action) {
				redirect('index/index');
			} else {
				$post['password'] = $this->input->post('password');
				$view_datas['submit_info'] = array('title' => '用户名或密码错误', 'object_value' => $post);
			}
		}
		$this->load->view('login'.SITE_YX, $view_datas);
	}
	
	
	/**
	 * 管理员退出
	 */
	function logout()
	{
		$this->m_index->logout();
		redirect('index/login');
	}
	
	/**
	 * 后台首页信息
	 */
	function index_info()
	{
		$view_datas['title'] = '后台首页信息';
		
		if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
            $up['studentid'] = $this->input->post('studentid');
            if(empty($up['studentid'])){
            	redirect('gszc/zycp');
            }
            $up['grxx_uptime']=time();
            $where['mid'] = $this->session->userdata('admin_uid');
            $re=$this->m_common->update('member',$up,$where);
            
			$view_datas['submit_info'] = array('title' => '编辑成功');
			redirect('gszc/zycp');
		 }
		
		$admin_group_id = $this->session->userdata('admin_group_id');
		if($admin_group_id=='14'){
	        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
	        $view_datas['member'] = $this->m_common->get_one('member',$where_array,'studentid,uname');
	        /*if(!empty($view_datas['member']['studentid'])){
	        	redirect('gszc/zycp');
	        }*/
	        $view_datas['user_data'] = $this->m_index->get_session();
			$this->load->view('index_gszc', $view_datas);
		}else{
			$view_datas['user_data'] = $this->m_index->get_session();
			$this->load->view('index_info', $view_datas);
		}
	}
}

/* End of file index.php */
/* Location: ./application/controllers/admin/index.php */