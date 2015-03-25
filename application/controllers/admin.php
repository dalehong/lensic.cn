<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端管理员控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Admin extends A_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->file_name = 'admin/';
		$this->load->model('admin/m_admin');
	}
	
	/**
	 * 管理员列表
	 */
	function index()
	{
		$view_datas['title'] = $this->check_power('管理员列表');
		
		$view_datas['search_key'] = $search_key = $this->input->get('search_key');
		$view_datas['status'] = $status = $this->input->get('status') ? $status = $this->input->get('status') : 1;
		$admin_school = $this->session->userdata('admin_school');
		if(!empty($admin_school)){
			$view_datas['admin_school']=$admin_school;
		}		
		$this->load->helper('my_page');
        $config['per_page'] = 20; 
		$config['base_url'] = site_url('admin/index') . '?status=' . $status . ($search_key ? '&search_key=' . $search_key : '');
		$config['total_rows'] = $this->m_admin->admin_datas(array('get_count' => TRUE, 'search_key' => $search_key, 'status' => $status, 'admin_school' => $admin_school));
		$view_datas['pages'] = page_links($config);
		$view_datas['datas'] = $this->m_admin->admin_datas(array('limit' => TRUE, 'search_key' => $search_key, 'status' => $status, 'admin_school' => $admin_school));
		$this->load->view($this->file_name . 'list', $view_datas);
	}
	
	/**
	 * 添加管理员
	 */
	function add()
	{
		$view_datas['title'] = $this->check_power('添加管理员');
		$admin_school = $this->session->userdata('admin_school');
		if(!empty($admin_school)){
			$view_datas['power_group'] = $this->m_common->get_all('power_group', array('status' => 1,'school' => $admin_school));
		}else{
			$view_datas['power_group'] = $this->m_common->get_all('power_group', array('status' => 1));	
		}
		if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
		{
			$this->load->helper('my_md5');
			$temp_pwd = $this->input->post('password');
			$post['username']       = $this->input->post('username');
			$post['password']       = str_md5($temp_pwd);
			$post['power_group_id'] = $this->input->post('power_group_id');
			
			$group = $this->m_common->get_one('power_group',array('id' => $post['power_group_id']),'school');
			if($group['school'] == "客户"){
				$action = $this->m_admin->user_add($post);
			}else{
				$action = $this->m_admin->add($post);
			}
			if($action === 'exist')
			{
				$post['password'] = $temp_pwd;
				$view_datas['submit_info'] = array('title' => '用户名已存在', 'object_value' => $post);
			} else if($action) {
				$view_datas['submit_info'] = array('title' => '添加成功');
			} else {
				$view_datas['submit_info'] = array('title' => '添加失败');
			}
		}
		$this->load->view($this->file_name . 'add', $view_datas);
	}
	
	/**
	 * 编辑用户
	 */
	function edit()
	{
		$this->check_power('管理员列表');
		$edit_id = $this->uri->segment(3);
		$view_datas['edit_data'] = $this->m_common->get_one('admin', array('id' => $edit_id));
		if($view_datas['edit_data'])
		{
			$view_datas['title'] = '编辑管理员';
			$admin_school = $this->session->userdata('admin_school');
			if(!empty($admin_school)){
				$view_datas['power_group'] = $this->m_common->get_all('power_group', array('status' => 1,'school' => $admin_school));
			}else{
				$view_datas['power_group'] = $this->m_common->get_all('power_group', array('status' => 1));	
			}
			if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
			{
				$post['power_group_id'] = $this->input->post('power_group_id');
				$post['status'] = $this->input->post('status');
				if($this->input->post('password'))
				{
					$this->load->helper('my_md5');
					$post['password'] = str_md5($this->input->post('password'));
				}
				$action = $this->m_common->update('admin', $post, array('id' => $edit_id));
				unset($post['password']);
				$view_datas['edit_data'] = array_merge($view_datas['edit_data'], $post);
				if($action)
				{
					$view_datas['submit_info'] = array('title' => '编辑成功');
				} else {
					$view_datas['submit_info'] = array('title' => '资料未修改或更新失败');
				}
			}
			$this->load->view($this->file_name . 'edit', $view_datas);
		} else {
			redirect('admin/index');
		}
	}
	
	/**
	 * 删除用户
	 */
	function del()
	{
		$this->check_power('管理员列表');
		$uid = $this->session->userdata('admin_uid');
		//$admin_school = $this->session->userdata('admin_school');
		if($uid == 12){
			echo 0;
			exit();
		}
		$del_data = $this->m_common->get_one('admin', array('id' => $this->uri->segment(3)));
		if($del_data && $this->m_common->delete('admin', array('id' => $del_data['id'])))
		{
			echo 1;
		} else {
			echo 0;
		}
	}
	
	/**
	 * 修改密码
	 */
	function pwd()
	{
		$view_datas['title'] = $this->check_power('修改密码');
		if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
		{
			$post['old_password'] = $this->input->post('old_password');
			$post['check_password'] = $post['password'] = $this->input->post('password');
			$this->load->helper('my_md5');
			$data = $this->m_common->get_one('admin', array('id' => $this->session->userdata('admin_uid'), 'password' => str_md5($post['old_password'])));
			if($data)
			{
				if($post['old_password'] == $post['password'])
				{
					$view_datas['submit_info'] = array('title' => '新密码不能和旧密码相同', 'object_value' => $post);
				} else {
					$action = $this->m_common->update('admin', array('password' => str_md5($post['password'])), array('id' => $this->session->userdata('admin_uid')));
					if($action)
					{
						$view_datas['submit_info'] = array('title' => '修改成功');
					} else {
						$view_datas['submit_info'] = array('title' => '修改失败');
					}
				}
			} else {
				$view_datas['submit_info'] = array('title' => '旧密码错误', 'object_value' => $post);
			}
		}
		$this->load->view($this->file_name . 'pwd', $view_datas);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin/admin.php */