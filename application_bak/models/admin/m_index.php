<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端首页模型
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class M_index extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	/**
	 * 用户登录
	 * 
	 * @access   public
	 * @param    array     数组形式验证数据
	 * @return   boolean   是否登录成功
	 */
	function login($post,$post_xs=array())
	{
		$data = $this->m_common->get_one('admin', $post,'id,power_group_id,status,username');
        if(empty($data)){
            $data = $this->m_common->get_one('member', $post_xs,'mid id,power_group_id,status,username');
        }
		if($data){
			if($data['status'] == 1)
			{
				$power_data = $this->m_common->get_one('power_group', array('id' => $data['power_group_id'], 'status' => 1), 'group_name, power_ids,school');
				$session['admin_uid']        = $data['id'];
                $session['admin_username']   = $data['username'];
                $session['admin_school']   = @$power_data['school'];
                $session['admin_group_id']   = $data['power_group_id'];
				$session['admin_power_name'] = $power_data ? $power_data['group_name'] : '';
				$session['admin_power_ids']  = $power_data ? explode(',', $power_data['power_ids']) : array();
				$session['admin_login_time'] = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
				$this->session->set_userdata($session);
                $up_data=array(
                    'loginip'=>$this->input->ip_address(),
                    'logintime'=>time()                    
                );
                $where_up=array(
                    'mid'=>$data['id']
                );
                $this->m_common->update('member',$up_data,$where_up);
				return TRUE;
			} else {
				return 'stop';
			}
		}
		return FALSE;
	}
	
	/**
	 * 获取登录会话信息
	 * 
	 * @access   public
	 * @return   array   登录会话信息
	 */
	function get_session()
	{
		$session['admin_uid']        = $this->session->userdata('admin_uid');
		$session['admin_username']   = $this->session->userdata('admin_username');
		$session['admin_power_name'] = $this->session->userdata('admin_power_name');
		$session['admin_power_ids']  = $this->session->userdata('admin_power_ids');
		$session['admin_login_time'] = $this->session->userdata('admin_login_time');
		return $session;
	}
	
	/**
	 * 注销登录会话信息
	 * 
	 * @access   public
	 * @return   array   登录会话信息
	 */
	function logout()
	{
		$session['admin_uid']        = '';
		$session['admin_username']   = '';
		$session['admin_power_name'] = '';
		$session['admin_power_ids']  = '';
		$session['admin_login_time'] = '';
		$this->session->unset_userdata($session);
		return TRUE;
	}
	
	/**
	 * 获取菜单数据
	 * 
	 * @access   public
	 * @param    string   菜单类型 left = 左边菜单，right = 右边菜单
	 * @return   array    菜单数据
	 */
	function get_menu($type)
	{
		$admin_power_ids = $this->session->userdata('admin_power_ids');
		if(!$admin_power_ids)
		{
			return array();
		}
		$power = $this->db->select('*')->from('power')->where(array('power_site' => ($type == 'left' ? 2 : 3), 'pid' => 0, 'status' => 1))->where_in('id', $admin_power_ids)->order_by('rank', 'asc')->get()->result_array();
		foreach($power as $p_num => $p_data)
		{
			$pd_sub = $this->db->select('*')->from('power')->where(array('power_site' => 1, 'pid' => $p_data['id'], 'status' => 1))->where_in('id', $admin_power_ids)->order_by('rank', 'asc')->get()->result_array();
			foreach($pd_sub as $ps_num => $ps_data)
			{
				$pd_sub[$ps_num]['sub_power'] = $this->db->select('*')->from('power')->where(array('power_site' => 1, 'pid' => $ps_data['id'], 'status' => 1))->where_in('id', $admin_power_ids)->order_by('rank', 'asc')->get()->result_array();
			}
			$power[$p_num]['sub_power'] = $pd_sub;
		}
		return $power;
	}
	
	/**
	 * 检查是否具有访问权限
	 * 
	 * @access   public
	 * @param    string    权限名称
	 * @return   boolean   是否
	 */
	function check_power($power_name)
	{
		$power_data = $this->m_common->get_one('power', array('power_name' => $power_name, 'status' => 1), 'id');
		if($power_data && in_array($power_data['id'], $this->session->userdata('admin_power_ids')))
		{
			return TRUE;
		}
		return FALSE;
	}
}

/* End of file m_index.php */
/* Location: ./application/models/admin/m_index.php */