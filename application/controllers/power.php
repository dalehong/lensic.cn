<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端权限管理控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Power extends A_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->file_name = 'power/';
		$this->load->model('admin/m_power');
	}
	
	/**
	 * 权限列表
	 */
	function index()
	{
		$view_datas['title'] = $this->check_power('权限列表');
		$view_datas['power_datas'] = $this->m_power->power_datas();
		$this->load->view($this->file_name . 'list', $view_datas);
	}
	
	/**
	 * 添加权限
	 */
	function add()
	{
		$view_datas['title'] = $this->check_power('添加权限');
		if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
		{
			$temp_post = $this->input->post();
			$post['pid'] = isset($temp_post['pid'][count($temp_post['pid']) - 2]) ? $temp_post['pid'][count($temp_post['pid']) - 2] : 0;
			$post['power_name']   = $temp_post['power_name'];
			$post['power_url']    = $temp_post['power_url'];
			$post['power_site']   = $temp_post['power_site'];
			$post['power_target'] = $temp_post['power_target'];
			$post['power_ico']    = $temp_post['power_ico'];
			$action = $this->m_power->add($post);
			$view_datas['submit_info'] = $action ? array('title' => '添加成功') : array('title' => '添加失败');
		}
		$this->load->view($this->file_name . 'add', $view_datas);
	}
	
	/*
	 * 编辑权限
	 */
	function edit()
	{
		$this->check_power('权限列表');
		$edit_id = $this->uri->segment(3);
		$view_datas['edit_data'] = $this->m_common->get_one('power', array('id' => $edit_id));
		if($view_datas['edit_data'])
		{
			$view_datas['title'] = '编辑权限';
			if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
			{
				$temp_post = $this->input->post();
				$post['pid'] = isset($temp_post['pid'][count($temp_post['pid']) - 2]) ? $temp_post['pid'][count($temp_post['pid']) - 2] : 0;
				$post['power_name']   = $temp_post['power_name'];
				$post['power_url']    = $temp_post['power_url'];
				$post['power_site']   = $temp_post['power_site'];
				$post['power_target'] = $temp_post['power_target'];
				$temp_post['power_ico'] ? $post['power_ico']  = $temp_post['power_ico'] : '';
				$post['status']       = $temp_post['status'];
				$action = $this->m_power->edit($post, $edit_id);
				if($action === 'exist')
				{
					$post['id'] = $edit_id;
					$view_datas['edit_data'] = $post;
					$view_datas['submit_info'] = array('title' => '权限名称已存在');
				} else if($action['affected_rows']) {
					$post['id'] = $edit_id;
					$post['status'] = $action['status'];
					$view_datas['edit_data'] = $post;
					$view_datas['submit_info'] = array('title' => '编辑成功');
				} else {
					$view_datas['submit_info'] = array('title' => '资料未修改或更新失败');
				}
			}
			$this->load->view($this->file_name . 'edit', $view_datas);
		} else {
			redirect('power/index');
		}
	}
	
	/**
	 * 删除权限
	 */
	function del()
	{
		$this->check_power('权限列表');
		$del_data = $this->m_common->get_one('power', array('id' => $this->uri->segment(3)));
		if($del_data && !$this->m_common->get_one('power', array('pid' => $del_data['id'])) && $this->m_common->delete('power', array('id' => $del_data['id'])))
		{
			$this->m_power->del($del_data['id']);
			echo 1;
		} else {
			echo 0;
		}
	}
	
	/**
	 * 添加权限组
	 */
	function group_add()
	{
		$view_datas['title'] = $this->check_power('添加权限组');
		$view_datas['power_datas'] = $this->group_power_datas();
		if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
		{
			$post['group_name']     = $this->input->post('group_name');
            $post['group_describe'] = $this->input->post('group_describe');
            $post['school'] = $this->input->post('school');
            $post['type'] = $this->input->post('type');
			$post['power_ids']      = implode(',', $this->input->post('power_ids'));
			$action = $this->m_power->group_add($post);
			if($action === 'exist')
			{
				$view_datas['power_ids'] = $post['power_ids'];
				unset($post['power_ids']);
				$view_datas['submit_info'] = array('title' => '权限组名称已存在', 'object_value' => $post);
			} else if($action) {
				$view_datas['submit_info'] = array('title' => '添加成功');
			} else {
				$view_datas['submit_info'] = array('title' => '添加失败');
			}
		}
		$this->load->view($this->file_name . 'group_add', $view_datas);
	}
	
	/**
	 * 权限组列表
	 */
	function group_index()
	{
		$view_datas['title'] = $this->check_power('权限组列表');
		$view_datas['group_datas'] = $this->m_power->group_datas();
		$this->load->view($this->file_name . 'group_list', $view_datas);
	}
	
	/**
	 * 删除权限组
	 */
	function group_del()
	{
		$this->check_power('权限组列表');
		if($this->uri->segment(3) == 1)
		{
			echo 0;
		} else {
			$del_data = $this->m_common->get_one('power_group', array('id' => $this->uri->segment(3)));
			if($del_data && !$this->m_common->get_one('admin', array('power_group_id' => $del_data['id'])) && $this->m_common->delete('power_group', array('id' => $del_data['id'])))
			{
				echo 1;
			} else {
				echo 0;
			}
		}
	}
	
	/**
	 * 编辑权限组
	 */
	function group_edit()
	{
		$this->check_power('权限组列表');
		$edit_id = $this->uri->segment(3);
		if($edit_id == 1)
		{
			redirect('power/group_index');
		}
		$view_datas['edit_data'] = $this->m_common->get_one('power_group', array('id' => $edit_id));
		if($view_datas['edit_data'])
		{
			$view_datas['title'] = '编辑权限组';
			$view_datas['power_datas'] = $this->group_power_datas();
			if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
			{
				$post['group_name']     = $this->input->post('group_name');
				$post['group_describe'] = $this->input->post('group_describe');
                $post['school'] = $this->input->post('school');
                $post['type'] = $this->input->post('type');
				$post['power_ids']      = implode(',', $this->input->post('power_ids'));
				$post['status']         = $this->input->post('status');
				$action = $this->m_power->group_edit($post, $edit_id);
				if($action === 'exist')
				{
					$view_datas['edit_data'] = $post;
					$view_datas['submit_info'] = array('title' => '权限组名称已存在');
				} else if($action) {
					$view_datas['edit_data'] = $post;
					$view_datas['submit_info'] = array('title' => '编辑成功');
				} else {
					$view_datas['submit_info'] = array('title' => '资料未修改或更新失败');
				}
			}
			$this->load->view($this->file_name . 'group_edit', $view_datas);
		} else {
			redirect('power/group_index');
		}
	}
	
	/**
	 * 无级分类下拉列表
	 */
	function get_cate()
	{
		$this->load->helper('my_stepless_classification');
		echo ajax_stepless_classification(array('table' => 'power', 'field_name' => 'power_name'));
	}
	
	/**
	 * 查询所有权限
	 * 
	 * @access   private
	 */
	private function group_power_datas()
	{
		$new_power_datas = array();
		$parent_id = 0;
		$power_datas = $this->m_power->power_datas(array('status' => 1));
		foreach($power_datas as $data)
		{
			if($data['level'])
			{
				$new_power_datas[$parent_id]['children_datas'][] = $data;
			} else {
				$new_power_datas[$data['id']] = $data;
				$parent_id = $data['id'];
			}
		}
		return $new_power_datas;
	}
}

/* End of file power.php */
/* Location: ./application/controllers/admin/power.php */