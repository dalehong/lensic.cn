<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端权限管理模型
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class M_zxs extends CI_Model
{
	function __construct()
	{
		parent::__construct();
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
        $this->db->select('*')->from('zxfk')->where('zxsid', $arg['zxsid']);
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
	
}

/* End of file m_power.php */
/* Location: ./application/models/admin/m_power.php */