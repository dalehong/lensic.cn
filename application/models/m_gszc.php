<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端权限管理模型
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class M_gszc extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	/**
     * 客户资料列表
     * 
     * @access   public
     * @param    array    条件数据
     * @return
     */
    function list_data($arg = array())
    {
        $this->db->select('*')->from('member')->where('power_group_id', $arg['power_group_id']);
        if(isset($arg['search_key']) && $arg['search_key'])
        {
            $this->db->like('uname', $arg['search_key']);
        }
		$this->db->order_by("mid", "desc"); 
        if(isset($arg['limit']))
        {
            $this->db->limit($this->pagination->per_page, $this->input->get($this->pagination->query_string_segment) ? $this->input->get($this->pagination->query_string_segment) : 0);
        }
        return isset($arg['get_count']) ? $this->db->count_all_results() : $this->db->get()->result_array();
    }
    
    
	
}

/* End of file m_power.php */
/* Location: ./application/models/admin/m_power.php */