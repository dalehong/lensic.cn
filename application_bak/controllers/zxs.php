<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端权限管理控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Zxs extends A_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->file_name = 'zxs/';
		$this->load->model('m_zxs');
	}
	
	/**
	 * 咨询师个人资料
	 */
	function grzl()
	{
		$view_datas['title'] = $this->check_power('个人资料_zx');
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
		$view_datas['member'] = $this->m_common->get_one('member',$where_array);
		$this->load->view($this->file_name . 'grzl', $view_datas);
	}
    
    /**
     * 分配的客户列表
     */
    function khlb()
    {
        $this->check_power('客户列表_zx');
        $view_datas['title'] = '客户列表';
        $where_khlb = array('zxsid'=>$this->session->userdata('admin_uid'));
        $view_datas['khlb_datas'] = $this->m_common->get_all('member',$where_khlb);
        //echo $this->db->last_query();
        $this->load->view($this->file_name . 'khlb_list', $view_datas);
    }
    
    
    /**
     * 职业测评之霍兰德
     */
    function cp_hld()
    {
        $view_datas['title'] = '霍兰德测评报告';
        $this->check_power('客户列表_zx');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);
        $view_datas['hld'] = $this->m_common->get_one('cp_hld',$where_array);     
        $view_datas['xingqu'] = explode('||', $view_datas['hld']['xingqu']);
        $view_datas['shanchang'] = explode('||', $view_datas['hld']['shanchang']);
        $view_datas['xihuan'] = explode('||', $view_datas['hld']['xihuan']);
        $view_datas['leixing'] = explode('||', $view_datas['hld']['leixing']);
        $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
        $this->load->view('gxgly/hld', $view_datas);
    }
    
    /**
     * 职业测评之MBTI
     */
    function cp_mbti()
    {
        $view_datas['title'] = 'MBTI测评报告';
        $this->check_power('客户列表_zx');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);        
        $view_datas['ceping'] = $this->m_common->get_one('cp_mbti',$where_array);        
        $view_datas['mbti'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['ceping']['result']));     
        $this->load->view('gxgly/mbti', $view_datas);
    }
    
    /**
     * 职业测评之职业分析
     */
    function cp_zyfx()
    {
        $view_datas['title'] = '职业分析数据';
        $this->check_power('客户列表_zx');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);           
        $view_datas['fx'] = $this->m_common->get_one('cp_zyfx',$where_array);     
        $this->load->view('gxgly/zyfx', $view_datas);
    }
    
    /**
     * 咨询报告添加
     */
    function zxbg_add()
    {
        $view_datas['title'] = '咨询报告';
        $this->check_power('客户列表_zx');
        $mid = $this->uri->segment(3);
        $where_array=array('mid'=>$mid);
        //$member = $this->m_common->get_one('member',$where_array,'zxbg_id,mbti_id,hld_id,zyfx_id,sex,birthday,xueli,hunyin,specialty,school');
        $view_datas['member'] = $this->m_common->get_one('member',$where_array);
        if(empty($view_datas['member']['zxbg_id'])){
            echo 'hong';
            $this->load->view($this->file_name . 'zxbg_add', $view_datas);
        }else{ 
            $view_datas['zxbg'] = $this->m_common->get_one('zxbg',$where_array);
            $view_datas['xs1'] = $this->m_common->get_one('member_xs1',$where_array);  
            $view_datas['xs3'] = $this->m_common->get_all('member_xs3',$where_array);   
            $view_datas['xs4'] = $this->m_common->get_all('member_xs4',$where_array);   
            $view_datas['mbti'] = $this->m_common->get_one('cp_mbti',array('id'=>$view_datas['member']['mbti_id']));  
            $view_datas['mbti_result'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['mbti']['result']));  
            $view_datas['zyfx'] = $this->m_common->get_one('cp_zyfx',array('id'=>$view_datas['member']['zyfx_id']));  
            $view_datas['hld'] = $this->m_common->get_one('cp_hld',array('id'=>$view_datas['member']['hld_id']));     
            $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
            $this->load->view($this->file_name . 'zxbg_add', $view_datas);
        }
    }
    
    /**
     * 咨询报告修改
     */
    function zxbg_post()
    {
        $view_datas['title'] = '测评报告';
        $this->check_power('客户列表_zx');
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $view_datas['status'] = $status = $this->input->get('status') ? $status = $this->input->get('status') : 1;
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gxgly/cpbg') . '?status=' . $status . ($search_key ? '&search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gxgly->xszl_datas(array('get_count' => TRUE, 'search_key' => $search_key));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gxgly->xszl_datas(array('limit' => TRUE, 'search_key' => $search_key));
        
        //echo $this->db->last_query();
        //$view_datas['xszl'] = $this->m_gxgly->power_datas();
        $this->load->view($this->file_name . 'zxbg_edit', $view_datas);
    }
    
    
    /**
     * 分配的客户列表
     */
    function khlb_()
    {
        $view_datas['title'] = $this->check_power('客户列表_zx');
        $where_khlb = array('zxsid'=>$this->session->userdata('admin_uid'));
        $view_datas['khlb_datas'] = $this->m_common->get_all('member',$where_khlb);
        $this->load->view($this->file_name . 'khlb_list', $view_datas);
    }
    
    /**
     * 客户满意反馈
     */
    function khmyfk()
    {
        $view_datas['title'] = '客户满意反馈';
        $this->check_power('客户满意反馈_zx');        
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gxgly/zxfk') . ($search_key ? '?search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_zxs->zxfk_datas(array('get_count' => TRUE, 'search_key' => $search_key, 'zxsid'=>$this->session->userdata('admin_uid')));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_zxs->zxfk_datas(array('limit' => TRUE, 'search_key' => $search_key, 'zxsid'=>$this->session->userdata('admin_uid')));

        $this->load->view($this->file_name . 'khmyfk', $view_datas);
    }
    
    /**
     * 分配的客户列表
     */
    function khmyfk_()
    {
        $view_datas['title'] = $this->check_power('客户列表_zx');
        $where_khlb = array('zxsid'=>$this->session->userdata('admin_uid'));
        $view_datas['khlb_datas'] = $this->m_common->get_all('member',$where_khlb);
        $this->load->view($this->file_name . 'khmyfk', $view_datas);
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