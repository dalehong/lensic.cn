<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端权限管理模型
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class M_gxgly extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
    
    /**
     * 添加用户
     * 
     * @access   public
     * @param    array    数据数组
     * @return   number   添加后的数据编号
     */
    function user_add($post)
    {
        $exist = $this->m_common->get_one('member', array('username' => $post['username']), 'mid');
        if($exist)
        {
            return 'exist';
        }
        return $this->m_common->insert('member', $post);
    }
    
    function get_gid($post)
    {
        $exist = $this->m_common->get_one('member', array('username' => $post['username']), 'mid');
        if($exist)
        {
            return 'exist';
        }
        return $this->m_common->insert('member', $post);
    }
    
    
    
    /**
     * 学生资料列表
     * 
     * @access   public
     * @param    array    条件数据
     * @return
     */
    function xszl_datas($arg = array())
    {
        //$this->db->select('admin.*, power_group.group_name')->from('admin')->join('power_group', 'power_group.id = admin.power_group_id');
        $this->db->select('*')->from('member')->where('power_group_id', $arg['power_group_id']);
        if(isset($arg['status']))
        {
            $this->db->where('admin.status', $arg['status']);
        }
        if(isset($arg['search_key']) && $arg['search_key'])
        {
            $this->db->like('uname', $arg['search_key']);
            //$this->db->or_like(array('power_group.group_name' => $arg['search_key']));
        }
		$this->db->order_by("mid", "desc"); 
        if(isset($arg['limit']))
        {
            $this->db->limit($this->pagination->per_page, $this->input->get($this->pagination->query_string_segment) ? $this->input->get($this->pagination->query_string_segment) : 0);
        }
        return isset($arg['get_count']) ? $this->db->count_all_results() : $this->db->get()->result_array();
    }
    
    /**
     * 专家咨询
     * 
     * @access   public
     * @param    array    条件数据
     * @return
     */
    function zjzx_datas($arg = array())
    {
        //$this->db->select('admin.*, power_group.group_name')->from('admin')->join('power_group', 'power_group.id = admin.power_group_id');
        $this->db->select('m1.*,m2.uname zxs_name')->from('member m1') -> join('member m2', 'm1.zxsid = m2.mid','left')->where('m1.power_group_id', $arg['power_group_id']);
        if(isset($arg['search_key']) && $arg['search_key'])
        {
            $this->db->like('m1.uname', $arg['search_key']);
            //$this->db->or_like(array('power_group.group_name' => $arg['search_key']));
        }
        if(isset($arg['limit']))
        {
            $this->db->limit($this->pagination->per_page, $this->input->get($this->pagination->query_string_segment) ? $this->input->get($this->pagination->query_string_segment) : 0);
        }
        return isset($arg['get_count']) ? $this->db->count_all_results() : $this->db->get()->result_array();
    }
    
    /**
     * 咨询反馈
     * 
     * @access   public
     * @param    array    条件数据
     * @return
     */
    function zxfk_datas($arg = array())
    {
        //$this->db->select('admin.*, power_group.group_name')->from('admin')->join('power_group', 'power_group.id = admin.power_group_id');
        $this->db->select('*')->from('zxfk')->where('power_group_id', $arg['power_group_id']);
        if(isset($arg['search_key']) && $arg['search_key'])
        {
            $this->db->like('uname', $arg['search_key']);
        }
        if(isset($arg['limit']))
        {
            $this->db->limit($this->pagination->per_page, $this->input->get($this->pagination->query_string_segment) ? $this->input->get($this->pagination->query_string_segment) : 0);
        }
        return isset($arg['get_count']) ? $this->db->count_all_results() : $this->db->get()->result_array();
    }
    
    
    /**
     * 咨询报告
     * 
     * @access   public
     * @param    array    条件数据
     * @return
     */
    function zxbg_datas($arg = array())
    {
        $this->db->select('m1.mid,m1.uname,m1.mid,m1.zxbg_id,m1.zxbg_time,m1.zxtime,m2.uname zxs_name')->from('member m1') -> join('member m2', 'm1.zxsid = m2.mid','left')->where('m1.power_group_id', $arg['power_group_id']);
        if(isset($arg['search_key']) && $arg['search_key'])
        {
            $this->db->like('m1.uname', $arg['search_key']);
        }
        if(isset($arg['limit']))
        {
            $this->db->limit($this->pagination->per_page, $this->input->get($this->pagination->query_string_segment) ? $this->input->get($this->pagination->query_string_segment) : 0);
        }
        return isset($arg['get_count']) ? $this->db->count_all_results() : $this->db->get()->result_array();
    }
    
    /**
     * 咨询师资料
     * 
     * @access   public
     * @param    array    条件数据
     * @return
     */
    function zxszl_datas($arg = array())
    {
        $this->db->select('*')->from('member') -> where('power_group_id', '2');
        if(isset($arg['search_key']) && $arg['search_key'])
        {
            $this->db->like('uname', $arg['search_key']);
        }
        if(isset($arg['limit']))
        {
            $this->db->limit($this->pagination->per_page, $this->input->get($this->pagination->query_string_segment) ? $this->input->get($this->pagination->query_string_segment) : 0);
        }
        return isset($arg['get_count']) ? $this->db->count_all_results() : $this->db->get()->result_array();
    }
    
	/**
	 * 添加权限
	 * 
	 * @access   public
	 * @param    array     数据数组
	 * @return   boolean   成功与否
	 */
	function add($post)
	{
		if($this->m_common->get_one('power', array('power_name' => $post['power_name'])))
		{
			return FALSE;
		}
		$rank = $this->db->select_max('rank')->from('power')->where(array('pid' => $post['pid'], 'power_site' => $post['power_site']))->get()->row_array();
		$post['rank'] = $rank['rank'] + 5;
		$insert_id = $this->m_common->insert('power', $post);
		if($insert_id)
		{
			$super_power_group = $this->m_common->get_one('power_group', array('id' => 1));
			$this->m_common->update('power_group', array('power_ids' => $super_power_group['power_ids'] . ',' . $insert_id), array('id' => 1));
			$power_data_session = $this->session->userdata('admin_power_ids');
			$power_data_session[] = $insert_id;
			$session['admin_power_ids'] = $power_data_session;
			$this->session->set_userdata($session);
			return TRUE;
		}
		return FALSE;
	}
	
	/**
	 * 获取权限数据并实现分类树数据
	 * 
	 * @access   public
	 * @param    array    条件参数集
	 * @return   array    处理后形成的一维数据数组
	 */
	function power_datas($arg = array())
	{
		$this->load->helper('my_tree');
		isset($arg['status']) ? $this->db->where('status', $arg['status']) : '';
		return classify_tree($this->db->select('*')->from('power')->order_by('rank', 'asc')->get()->result_array());
	}
	
	/**
	 * 删除权限所在权限组的数据
	 * 
	 * @access   public
	 * @param    number   数据编号
	 */
	function del($del_id)
	{
		$group_datas = $this->m_common->get_all('power_group');
		foreach($group_datas as $data)
		{
			$power = explode(',', $data['power_ids']);
			$find_key = array_search($del_id, $power);
			if($find_key !== '')
			{
				unset($power[$find_key]);
				$this->m_common->update('power_group', array('power_ids' => implode(',', $power)), array('id' => $data['id']));
			}
		}
	}
	
	/**
	 * 编辑权限
	 * 
	 * @access   public
	 * @param    array    数据数组
	 * @param    number   数据编号
	 * @return   array    数据更新情况
	 */
	function edit($post, $edit_id)
	{
		if($this->m_common->get_one('power', array('power_name' => $post['power_name'], 'id <>' => $edit_id)))
		{
			return 'exist';
		}
		$p_data = $this->m_common->get_one('power', array('id' => $post['pid']));
		if($p_data && $p_data['status'] != 1)
		{
			$post['status'] = $p_data['status'];
		}
		if($post['status'] != 1)
		{
			$this->load->helper('my_children');
			$children_ids = children_ids($edit_id, 'power');
			if($children_ids)
			{
				$this->db->where_in('id', $children_ids)->update('power', array('status' => $post['status']));
			}
		}
		$return = array('affected_rows' => $this->m_common->update('power', $post, array('id' => $edit_id)), 'status' => $post['status']);
		return $return;
	}
	
	/**
	 * 添加权限组
	 * 
	 * @access   public
	 * @param    array    数据数组
	 * @return   number   添加成功返回的编号值
	 */
	function group_add($post)
	{
		$exist = $this->m_common->get_one('power_group', array('group_name' => $post['group_name']));
		if($exist)
		{
			return 'exist';
		}
		return $this->m_common->insert('power_group', $post);
	}
	
	/**
	 * 权限组数据
	 * 
	 * @access   public
	 * @return   array    数据数组
	 */
	function group_datas()
	{
		$datas = $this->m_common->get_all('power_group');
		foreach($datas as $n => $data)
		{
			$datas[$n]['use_count'] = $this->db->where('power_group_id', $data['id'])->count_all_results('admin');
		}
		return $datas;
	}
	
	/**
	 * 编辑权限组
	 * 
	 * @access   public
	 * @param    array    数据数组
	 * @param    number   数据编号
	 * @return   number   更新条数
	 */
	function group_edit($post, $edit_id)
	{
		$exist = $this->m_common->get_one('power_group', array('group_name' => $post['group_name'], 'id <> ' => $edit_id));
		if($exist)
		{
			return 'exist';
		}
		return $this->m_common->update('power_group', $post, array('id' => $edit_id));
	}
}

/* End of file m_power.php */
/* Location: ./application/models/admin/m_power.php */