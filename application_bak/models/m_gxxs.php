<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端权限管理模型
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class M_gxxs extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * 返还用户姓名和咨询师姓名及咨询时间
	 */
	function gxxs_zxs()
	{
		$this->db->select('m1.uname,m1.zxtime,m2.uname zxs');
        $this->db->from('member m1');
        $this->db->join('member m2', 'm1.zxsid = m2.mid');        
        $this->db->where('m1.mid',$this->session->userdata('admin_uid'));
        return $this->db->get()->row_array();
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