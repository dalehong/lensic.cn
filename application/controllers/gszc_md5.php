<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 前端默认控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Gszc_md5 extends Md5_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->file_name = 'gszc/';
        $this->load->model('m_gszc');
		$this->key_md5();
	}
	
	function index()
	{
		$this->load->view('index');
	}
	
	function key_md5()
	{
		$key='fc77eecd772126345e55280a12216e75';
		$type = $this->uri->segment(2);
		$cpid = $this->uri->segment(3);
		$mid = $this->uri->segment(4);
		$ukey = $this->uri->segment(5);
		if($ukey!==md5(md5($type.$mid.$key.$cpid))){
			redirect('index/login');
		}
	}
	
	
	//hld报告
    function zycp_hld_bg()
    {
		$view_datas['title'] = '霍兰德测评报告';
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);
        $view_datas['hld'] = $this->m_common->get_one('cp_hld',$where_array);     
        $view_datas['xingqu'] = explode('||', $view_datas['hld']['xingqu']);
        $view_datas['shanchang'] = explode('||', $view_datas['hld']['shanchang']);
        $view_datas['xihuan'] = explode('||', $view_datas['hld']['xihuan']);
        $view_datas['leixing'] = explode('||', $view_datas['hld']['leixing']);
        $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
        $this->load->view($this->file_name . 'zycp_hld_bg', $view_datas);        
	}
	
	//霍兰德测评详情
    function zycp_hld_xq()
    {
		$view_datas['title'] = '霍兰德测评详情';
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);
        $view_datas['hld'] = $this->m_common->get_one('cp_hld',$where_array);     
        $view_datas['xingqu'] = explode('||', $view_datas['hld']['xingqu']);
        $view_datas['shanchang'] = explode('||', $view_datas['hld']['shanchang']);
        $view_datas['xihuan'] = explode('||', $view_datas['hld']['xihuan']);
        $view_datas['leixing'] = explode('||', $view_datas['hld']['leixing']);
        $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
        $this->load->view($this->file_name . 'zycp_hld_xq', $view_datas);
        
	}
	
	//mbti报告
    function zycp_mbti_bg()
    {
    	$view_datas['title'] = '职业性格测评报告';
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);        
        $view_datas['ceping'] = $this->m_common->get_one('cp_mbti',$where_array);      
        $view_datas['mbti'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['ceping']['result']));
        $this->load->view($this->file_name . 'zycp_mbti_bg', $view_datas);
        
	}
	
	//职业性格测评详情
    function zycp_mbti_xq()
    {
		$view_datas['title'] = '职业性格测评详情';
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);        
        $view_datas['ceping'] = $this->m_common->get_one('cp_mbti',$where_array);      
        $view_datas['mbti'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['ceping']['result']));     
        $this->load->view($this->file_name . 'zycp_mbti_xq', $view_datas);
        
	}
	
	//职业满意度报告
    function zycp_zymyd_bg()
    {
    	$view_datas['title'] = '职业满意度测试报告';
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);        
        $view_datas['ceping'] = $this->m_common->get_one('cp_zymyd',$where_array);      
        $this->load->view($this->file_name . 'zycp_zymyd_bg', $view_datas);
        
	}
	
	//职业满意度详情
    function zycp_zymyd_xq()
    {
		$view_datas['title'] = '职业满意度测试详情';
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);        
        $view_datas['ceping'] = $this->m_common->get_one('cp_zymyd',$where_array);      
        $this->load->view($this->file_name . 'zycp_zymyd_xq', $view_datas);
        
	}
	
	//职业分析报告
    function zycp_zyfx_bg()
    {
		$view_datas['title'] = '职业分析问卷';
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);           
        $view_datas['fx'] = $this->m_common->get_one('cp_zyfx',$where_array);   
        $this->load->view($this->file_name . 'zycp_zyfx_bg', $view_datas);
        
	}
	
	//职业分析详情
    function zycp_zyfx_xq()
    {
		$view_datas['title'] = '职业分析问卷详情';
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);           
        $view_datas['fx'] = $this->m_common->get_one('cp_zyfx',$where_array);     
        $this->load->view($this->file_name . 'zycp_zyfx_bg', $view_datas);
        
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */