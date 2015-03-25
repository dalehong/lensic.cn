<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端权限管理控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Gsgly extends A_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->file_name = 'gxgly/';
		$this->file_name_gs = 'gsgly/';
		$this->load->model('m_gsgly');
        
        $this->school = $this->session->userdata('admin_school');
        //$this->power_group_id = $this->session->userdata('admin_group_id');
        $where_array = array('school' => $this->session->userdata('admin_school'), 'id !=' => $this->session->userdata('admin_group_id'));
        $group = $this->m_common->get_one('power_group',$where_array,'id');
        $this->power_group_id = $group['id'];
	}
    
    /**
     * 用户权限列表
     */
    function user()
    {
        $view_datas['title'] = '添加用户';
        $this->check_power('添加用户_gs');
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $view_datas['status'] = $status = $this->input->get('status') ? $status = $this->input->get('status') : 1;
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gsgly/xszl') . '?status=' . $status . ($search_key ? '&search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gsgly->xszl_datas(array('get_count' => TRUE, 'search_key' => $search_key));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gsgly->xszl_datas(array('limit' => TRUE, 'search_key' => $search_key));
        
        //echo $this->db->last_query();
        //$view_datas['xszl'] = $this->m_gsgly->power_datas();
        $this->load->view($this->file_name . 'xszl', $view_datas);
    }
    
    /**
     * 用户添加
     */
    function user_add()
    {
        $this->check_power('添加用户_gs');
        $view_datas['title'] = '添加用户';
        //$view_datas['power_group'] = $this->m_common->get_all('power_group', array('status' => 1));
        //$this->m_gsgly->zu_datas(array('get_count' => TRUE, 'search_key' => $search_key));
        if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
        {
            //$this->load->helper('my_md5');
            $temp_pwd = $this->input->post('password');
            $post['username']       = $this->input->post('username');
            $post['password']       = md5($temp_pwd);
            $post['school']       =   $this->session->userdata('admin_school');
            
            $where_array = array('school' => $this->session->userdata('admin_school'), 'id !=' => $this->session->userdata('admin_group_id'));
            $group = $this->m_common->get_one('power_group',$where_array,'id');
            
            $post['power_group_id'] = $group['id'];
            $action = $this->m_gsgly->user_add($post);
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
        $this->load->view($this->file_name . 'user_add', $view_datas);
    }    
    
    /**
     * 学生资料列表
     */
    function grzl()
    {
        $view_datas['title'] = '个人资料';
        $this->check_power('个人资料_gs');
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $view_datas['status'] = $status = $this->input->get('status') ? $status = $this->input->get('status') : 1;
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gsgly/grzl') . '?status=' . $status . ($search_key ? '&search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gsgly->xszl_datas(array('get_count' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gsgly->xszl_datas(array('limit' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));
        
        //echo $this->db->last_query();
        //$view_datas['xszl'] = $this->m_gsgly->power_datas();
        $this->load->view($this->file_name . 'xszl', $view_datas);
    }
    
    /**
     * 职业测评列表
     */
    function zycp()
    {
        $view_datas['title'] = '职业测评';
        $this->check_power('职业测评_gs');
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $view_datas['status'] = $status = $this->input->get('status') ? $status = $this->input->get('status') : 1;
        $this->load->helper('my_page');        
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gsgly/zycp') . '?status=' . $status . ($search_key ? '&search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gsgly->xszl_datas(array('get_count' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gsgly->xszl_datas(array('limit' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));
        
        //echo $this->db->last_query();
        //$view_datas['xszl'] = $this->m_gsgly->power_datas();
        $this->load->view($this->file_name . 'zycp', $view_datas);
    }
    
    /**
     * 职业测评之霍兰德
     */
    function hld()
    {
        $view_datas['title'] = '霍兰德测评报告';
        $this->check_power('职业测评_gs');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);
        $view_datas['hld'] = $this->m_common->get_one('cp_hld',$where_array);     
        $view_datas['xingqu'] = explode('||', $view_datas['hld']['xingqu']);
        $view_datas['shanchang'] = explode('||', $view_datas['hld']['shanchang']);
        $view_datas['xihuan'] = explode('||', $view_datas['hld']['xihuan']);
        $view_datas['leixing'] = explode('||', $view_datas['hld']['leixing']);
        $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
        $this->load->view($this->file_name . 'hld', $view_datas);
    }
    
    /**
     * 职业测评之MBTI
     */
    function mbti()
    {
        $view_datas['title'] = 'MBTI测评报告';
        $this->check_power('职业测评_gs');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);        
        $view_datas['ceping'] = $this->m_common->get_one('cp_mbti',$where_array);        
        $view_datas['mbti'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['ceping']['result']));     
        $this->load->view($this->file_name . 'mbti', $view_datas);
    }
    
    /**
     * 职业测评之职业分析
     */
    function zyfx()
    {
        $view_datas['title'] = '职业分析数据';
        $this->check_power('职业测评_gs');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);           
        $view_datas['fx'] = $this->m_common->get_one('cp_zyfx',$where_array);     
        $this->load->view($this->file_name . 'zyfx', $view_datas);
    }
    
    /**
     * 测评报告列表
     */
    function cpbg()
    {
        $view_datas['title'] = '测评报告';
        $this->check_power('测评报告_gs');
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $view_datas['status'] = $status = $this->input->get('status') ? $status = $this->input->get('status') : 1;
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gsgly/cpbg') . '?status=' . $status . ($search_key ? '&search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gsgly->xszl_datas(array('get_count' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gsgly->xszl_datas(array('limit' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));
        
        //echo $this->db->last_query();
        //$view_datas['xszl'] = $this->m_gsgly->power_datas();
        $this->load->view($this->file_name . 'zycp', $view_datas);
    }
    
    /**
     * 专家咨询列表
     */
    function zjzx()
    {
        $view_datas['title'] = '测评报告';
        $this->check_power('测评报告_gs');
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $view_datas['status'] = $status = $this->input->get('status') ? $status = $this->input->get('status') : 1;
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gsgly/cpbg') . '?status=' . $status . ($search_key ? '&search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gsgly->zjzx_datas(array('get_count' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gsgly->zjzx_datas(array('limit' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));

        //$view_datas['xszl'] = $this->m_gsgly->power_datas();
        $this->load->view($this->file_name . 'zjzx', $view_datas);
    }
    
    /**
     * 咨询报告
     */
    function zjzx_bg()
    {
        $this->check_power('咨询报告_xs');
        $view_datas['title'] = '咨询报告';
        $mid = $this->uri->segment(3);
        $where_array=array('mid'=>$mid);
        $member = $this->m_common->get_one('member',$where_array,'zxbg_id,mbti_id,hld_id,zyfx_id,sex,birthday,xueli,hunyin,specialty,school');
        if(empty($member['zxbg_id'])){
            $view_datas['submit_info'] = array('title' => '抱歉，咨询报告尚未生成，咨询报告将在资料提交成功7个工作日内完成！');
            $view_datas['error']='抱歉，咨询报告尚未生成，咨询报告将在资料提交成功7个工作日内完成！';
            $view_datas['error_link']='<a href="#" onclick="history.go(-1)；">返还上一页</a>';
            $this->load->view('error', $view_datas); 
        }else{
            $view_datas['member'] = $member;
            $view_datas['zxbg'] = $this->m_common->get_one('zxbg',$where_array);
            $view_datas['xs1'] = $this->m_common->get_one('member_xs1',$where_array);  
            $view_datas['xs3'] = $this->m_common->get_all('member_xs3',$where_array);   
            $view_datas['xs4'] = $this->m_common->get_all('member_xs4',$where_array);   
            $view_datas['mbti'] = $this->m_common->get_one('cp_mbti',array('id'=>$member['mbti_id']));  
            $view_datas['mbti_result'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['mbti']['result']));  
            $view_datas['zyfx'] = $this->m_common->get_one('cp_zyfx',array('id'=>$member['zyfx_id']));  
            $view_datas['hld'] = $this->m_common->get_one('cp_hld',array('id'=>$member['hld_id']));     
            $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
            $this->load->view($this->file_name . 'zjzx_bg', $view_datas);
        }
    }
    
    /**
     * 咨询反馈
     */
    function zxfk()
    {
        $view_datas['title'] = '咨询反馈';
        $this->check_power('咨询反馈_gs');        
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gsgly/zxfk') . ($search_key ? '?search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gsgly->zxfk_datas(array('get_count' => TRUE, 'search_key' => $search_key));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gsgly->zxfk_datas(array('limit' => TRUE, 'search_key' => $search_key));

        //$view_datas['xszl'] = $this->m_gsgly->power_datas();
        $this->load->view($this->file_name . 'zxfk', $view_datas);
    }
    
    /**
     * 咨询反馈 详情
     */
    function zxfk_xq()
    {
        $view_datas['title'] = '咨询反馈_详情';
        //$this->check_power('咨询反馈_gs');  
        $where_array=array('id'=>$this->uri->segment(3));    
        $view_datas['zxfk'] = $this->m_common->get_one('zxfk',$where_array); 
        $this->load->view($this->file_name . 'zxfk_xq', $view_datas);
    }
    
    /**
     * 咨询报告
     */
    function zxbg()
    {
        $view_datas['title'] = '咨询报告';
        $this->check_power('咨询报告_gs');        
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gsgly/zxbg') . ($search_key ? '?search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gsgly->zxbg_datas(array('get_count' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gsgly->zxbg_datas(array('limit' => TRUE, 'search_key' => $search_key, 'power_group_id' => $this->power_group_id));

        $this->load->view($this->file_name . 'zxbg', $view_datas);
    }
    
    
    /**
     * 咨询报告 添加
     */
    function zxbg_add()
    {
        $view_datas['title'] = '咨询报告_详情';
        $this->check_power('咨询报告_gs');  
        $where_array=array('mid'=>$this->uri->segment(3));    
        
        $member = $this->m_common->get_one('member',$where_array,'zxbg_id,mbti_id,hld_id,zyfx_id,sex,birthday,xueli,hunyin,specialty,school');
        if(empty($member['zxbg_id'])){
            $view_datas['submit_info'] = array('title' => '抱歉，您的咨询报告尚未生成，咨询报告将在资料提交成功7个工作日内完成！');
            $view_datas['error']='抱歉，您的咨询报告尚未生成，咨询报告将在资料提交成功7个工作日内完成！';
            $view_datas['error_link']='<a href="#" onclick="history.go(-1)；">返还上一页</a>';
            $this->load->view('error', $view_datas); 
        }else{
            $view_datas['member'] = $member;
            $view_datas['zxbg'] = $this->m_common->get_one('zxbg',$where_array);
            $view_datas['xs1'] = $this->m_common->get_one('member_xs1',$where_array);  
            $view_datas['xs3'] = $this->m_common->get_all('member_xs3',$where_array);   
            $view_datas['xs4'] = $this->m_common->get_all('member_xs4',$where_array);   
            $view_datas['mbti'] = $this->m_common->get_one('cp_mbti',array('id'=>$member['mbti_id']));  
            $view_datas['mbti_result'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['mbti']['result']));  
            $view_datas['zyfx'] = $this->m_common->get_one('cp_zyfx',array('id'=>$member['zyfx_id']));  
            $view_datas['hld'] = $this->m_common->get_one('cp_hld',array('id'=>$member['hld_id']));     
            $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
            $this->load->view($this->file_name . 'zxbg_add', $view_datas);
        }
    }
    
    /**
     * 咨询报告 修改
     */
    function zxbg_edit()
    {
        $view_datas['title'] = '咨询报告_详情';
        $this->check_power('咨询报告_gs');  
        $where_array=array('mid'=>$this->uri->segment(3));    
        
        $member = $this->m_common->get_one('member',$where_array,'zxbg_id,mbti_id,hld_id,zyfx_id,sex,birthday,xueli,hunyin,specialty,school');
        if(empty($member['zxbg_id'])){
            $view_datas['submit_info'] = array('title' => '抱歉，您的咨询报告尚未生成，咨询报告将在资料提交成功7个工作日内完成！');
            $view_datas['error']='抱歉，您的咨询报告尚未生成，咨询报告将在资料提交成功7个工作日内完成！';
            $view_datas['error_link']='<a href="#" onclick="history.go(-1)；">返还上一页</a>';
            $this->load->view('error', $view_datas); 
        }else{
            $view_datas['member'] = $member;
            $view_datas['zxbg'] = $this->m_common->get_one('zxbg',$where_array);
            $view_datas['xs1'] = $this->m_common->get_one('member_xs1',$where_array);  
            $view_datas['xs3'] = $this->m_common->get_all('member_xs3',$where_array);   
            $view_datas['xs4'] = $this->m_common->get_all('member_xs4',$where_array);   
            $view_datas['mbti'] = $this->m_common->get_one('cp_mbti',array('id'=>$member['mbti_id']));  
            $view_datas['mbti_result'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['mbti']['result']));  
            $view_datas['zyfx'] = $this->m_common->get_one('cp_zyfx',array('id'=>$member['zyfx_id']));  
            $view_datas['hld'] = $this->m_common->get_one('cp_hld',array('id'=>$member['hld_id']));     
            $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
            $this->load->view($this->file_name . 'zxbg_edit', $view_datas);
        }
    }
    
    
    
    /**
     * 咨询报告 详情
     */
    function zxbg_xq()
    {
        $view_datas['title'] = '咨询报告_详情';
        $this->check_power('咨询报告_gs');  
        $where_array=array('mid'=>$this->uri->segment(3));    
        
        $member = $this->m_common->get_one('member',$where_array,'zxbg_id,mbti_id,hld_id,zyfx_id,sex,birthday,xueli,hunyin,specialty,school');
        if(empty($member['zxbg_id'])){
            $view_datas['submit_info'] = array('title' => '抱歉，您的咨询报告尚未生成，咨询报告将在资料提交成功7个工作日内完成！');
            $view_datas['error']='抱歉，您的咨询报告尚未生成，咨询报告将在资料提交成功7个工作日内完成！';
            $view_datas['error_link']='<a href="#" onclick="history.go(-1)；">返还上一页</a>';
            $this->load->view('error', $view_datas); 
        }else{
            $view_datas['member'] = $member;
            $view_datas['zxbg'] = $this->m_common->get_one('zxbg',$where_array);
            $view_datas['xs1'] = $this->m_common->get_one('member_xs1',$where_array);  
            $view_datas['xs3'] = $this->m_common->get_all('member_xs3',$where_array);   
            $view_datas['xs4'] = $this->m_common->get_all('member_xs4',$where_array);   
            $view_datas['mbti'] = $this->m_common->get_one('cp_mbti',array('id'=>$member['mbti_id']));  
            $view_datas['mbti_result'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['mbti']['result']));  
            $view_datas['zyfx'] = $this->m_common->get_one('cp_zyfx',array('id'=>$member['zyfx_id']));  
            $view_datas['hld'] = $this->m_common->get_one('cp_hld',array('id'=>$member['hld_id']));     
            $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
            $this->load->view($this->file_name . 'zxbg_xq', $view_datas);
        }
    }

    
    /**
     * 咨询师资料
     */
    function zxszl()
    {
        $view_datas['title'] = '咨询师资料';
        $this->check_power('咨询师资料_gs');        
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gsgly/zxszl') . ($search_key ? '?search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gsgly->zxszl_datas(array('get_count' => TRUE, 'search_key' => $search_key));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gsgly->zxszl_datas(array('limit' => TRUE, 'search_key' => $search_key));

        $this->load->view($this->file_name . 'zxszl', $view_datas);
    }
    
    /**
     * 咨询师资料
     */
    function zxszl_xq()
    {
        $view_datas['title'] = '咨询师资料';
        $this->check_power('咨询师资料_gs');        
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gsgly/zxszl') . ($search_key ? '?search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gsgly->zxbg_datas(array('get_count' => TRUE, 'search_key' => $search_key));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gsgly->zxbg_datas(array('limit' => TRUE, 'search_key' => $search_key));

        $this->load->view($this->file_name . 'zxbg', $view_datas);
    }
    
	/**
     * 查看详细资料并修改
     */
    public function edit(){
        $view_datas['title'] = '查看修改学生资料';
        $this->check_power('学生资料_gs');
        $edit_id = $this->uri->segment(3);
        
        $where_array=array('mid'=>$edit_id);
        $view_datas['shool'] = $this->session->userdata('shool');
        
        if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
        {
            $temp_post = $this->input->post();
            //$post['pid'] = isset($temp_post['pid'][count($temp_post['pid']) - 2]) ? $temp_post['pid'][count($temp_post['pid']) - 2] : 0;
            $member['department']   = $temp_post['department'];
            $member['specialty']   = $temp_post['specialty']; 
            $member['class']   = $temp_post['class'];
            $member['studentid']   = $temp_post['studentid'];
            $member['uname']   = $temp_post['uname'];
            $member['sex']   = $temp_post['sex'];
            $member['birthday']   = $temp_post['birthday'];
            $member['xuexing']   = $temp_post['xuexing'];
            $member['hkcity']   = $temp_post['hkcity'];
            $member['politics']   = $temp_post['politics'];
            $member['health']   = $temp_post['health'];
            $member['xueli']   = $temp_post['xueli'];
            $member['phone']   = $temp_post['phone'];
            $member['email']   = $temp_post['email'];
            $member['address']   = $temp_post['address'];
            $member['face']   = $temp_post['face'];    
            //执行修改修改用户主表        
            $member_result=$this->m_common->update('member',$member,$where_array);
            
            $where_xs1=array('id'=>$temp_post['xs1_id']);
            $xs1['mid']   = $edit_id; 
            $xs1['problem']   = implode(',', $temp_post['problem']);   // ---多选框
            $xs1['confused']   = $temp_post['confused'];
            $xs1['resolve']   = $temp_post['resolve']; 
            $xs1['target_school']   = $temp_post['target_school']; 
            $xs1['target_specialty']   = $temp_post['target_specialty']; 
            $xs1['target_company']   = $temp_post['target_company']; 
            $xs1['target_zhiwu']   = $temp_post['target_zhiwu']; 
            $xs1['target_salary']   = $temp_post['target_salary']; 
            $xs1['target_job']   = $temp_post['target_job']; 
            $xs1['honor']   = $temp_post['honor']; 
            $xs1['shetuan']   = $temp_post['shetuan']; 
            $xs1['peixun']   = $temp_post['peixun']; 
            //插入或者更新用户附属表1
            if(!empty($temp_post['xs1_id'])){
                $xs1_result=$this->m_common->update('member_xs1',$xs1,$where_array);
            }else{
                $xs1_result=$this->m_common->insert('member_xs1',$xs1);
            }
            
            //插入和更新用户附属表2 --家庭情况  
            //修改记录
            for ($i=0; $i < count(@$temp_post['xs2_name_u']); $i++) {
                $xs2['name']   = $temp_post['xs2_name_u'][$i]; 
                $xs2['unit']   = $temp_post['xs2_unit_u'][$i]; 
                $xs2['job']   = $temp_post['xs2_job_u'][$i]; 
                $xs2['phone']   = $temp_post['xs2_phone_u'][$i]; 
                $xs2['family']   = $temp_post['xs2_family_u'][$i]; 
                $where_xs2=array('id'=>$temp_post['xs2_id_u'][$i]); 
                if(empty($xs2['name'])){
                    break;
                }else{
                    $xs2_result = $this->m_common->update('member_xs2',$xs2,$where_xs2);
                }  
            }
            //插入记录
            for ($i=0; $i < count(@$temp_post['xs2_name']); $i++) {
                $xs2['mid']   = $edit_id;   
                $xs2['name']   = $temp_post['xs2_name'][$i]; 
                $xs2['unit']   = $temp_post['xs2_unit'][$i]; 
                $xs2['job']   = $temp_post['xs2_job'][$i]; 
                $xs2['phone']   = $temp_post['xs2_phone'][$i]; 
                $xs2['family']   = $temp_post['xs2_family'][$i];   
                if(empty($xs2['name'])){
                    break;
                }else{
                    $xs2_result = $this->m_common->insert('member_xs2',$xs2);
                }  
            }
                        
            //插入和更新用户附属表3 --教育背景
            //修改记录
            for ($i=0; $i < count(@$temp_post['xs3_name_u']); $i++) {
                $xs3['name']   = $temp_post['xs3_name_u'][$i]; 
                $xs3['time']   = $temp_post['xs3_time_u'][$i]; 
                $xs3['school']   = $temp_post['xs3_school_u'][$i]; 
                $xs3['specialty']   = $temp_post['xs3_specialty_u'][$i]; 
                $xs3['score']   = $temp_post['xs3_score_u'][$i]; 
                $where_xs3=array('id'=>$temp_post['xs3_id_u'][$i]);    
                if(empty($xs3['name'])){
                    break;
                }else{
                    $xs3_result = $this->m_common->update('member_xs3',$xs3,$where_xs3);
                }  
            }
            //插入记录
            for ($i=0; $i < count(@$temp_post['xs3_name']); $i++) {
                $xs3['mid']   = $edit_id; 
                $xs3['name']   = $temp_post['xs3_name'][$i]; 
                $xs3['time']   = $temp_post['xs3_time'][$i]; 
                $xs3['school']   = $temp_post['xs3_school'][$i]; 
                $xs3['specialty']   = $temp_post['xs3_specialty'][$i]; 
                $xs3['score']   = $temp_post['xs3_score'][$i];
                if(empty($xs3['name'])){
                    break;
                }else{
                    $xs3_result = $this->m_common->insert('member_xs3',$xs3);
                }  
            }
            
            //插入和更新用户附属表4 --社会实践
            //修改记录
            for ($i=0; $i < count(@$temp_post['xs4_sjname_u']); $i++) {
                $xs4=array();
                $xs4['sjname']   = $temp_post['xs4_sjname_u'][$i]; 
                $xs4['time']   = $temp_post['xs4_time_u'][$i]; 
                $xs4['unit']   = $temp_post['xs4_unit_u'][$i]; 
                $xs4['content']   = $temp_post['xs4_content_u'][$i]; 
                $xs4['harvest']   = $temp_post['xs4_harvest_u'][$i]; 
                $where_xs4=array('id'=>$temp_post['xs4_id_u'][$i]);
                if(empty($xs4['sjname'])){
                    break;
                }else{
                    $xs4_result = $this->m_common->update('member_xs4',$xs4,$where_xs4);
                }                 
                
            }
            //插入记录
            for ($i=0; $i < count(@$temp_post['xs4_sjname']); $i++) {
                $xs4=array();
                $xs4['mid']   = $edit_id;   
                $xs4['sjname']   = $temp_post['xs4_sjname'][$i]; 
                $xs4['time']   = $temp_post['xs4_time'][$i]; 
                $xs4['unit']   = $temp_post['xs4_unit'][$i]; 
                $xs4['content']   = $temp_post['xs4_content'][$i]; 
                $xs4['harvest']   = $temp_post['xs4_harvest'][$i]; 
                if(empty($xs4['sjname'])){
                    break;
                }else{
                    $xs4_result = $this->m_common->insert('member_xs4',$xs4);
                }  
            }
            
            if($member_result >0 || $xs1_result > 0 || $xs2_result > 0 || $xs3_result > 0 || $xs4_result > 0)
            {
                $view_datas['submit_info'] = array('title' => '编辑成功');
                $grxx['grxx_uptime']=time();
                $this->m_common->update('member',$grxx,$where_array);
            } else {
                $view_datas['submit_info'] = array('title' => '资料未修改或更新失败');
            }
        }
        
        $view_datas['member'] = $this->m_common->get_one('member',$where_array);
        $view_datas['xs1'] = $this->m_common->get_one('member_xs1',$where_array);
        $view_datas['xs2'] = $this->m_common->get_all('member_xs2',$where_array);
        $view_datas['xs3'] = $this->m_common->get_all('member_xs3',$where_array);
        $view_datas['xs4'] = $this->m_common->get_all('member_xs4',$where_array);
        $this->load->view($this->file_name . 'edit', $view_datas);
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
	 * 设置修改密码
	 */
	function pwd()
	{
		$this->check_power('学生资料_gs');
        $view_datas['title'] = "修改学生账户密码和状态";
		if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
		{
            $post['password'] = md5($this->input->post('pwd'));
            $post['status']  = $this->input->post('status');
            $mid= $this->input->post('mid');
            $member_result = $this->m_common->update('member',$post,array('mid'=>$mid));
			 if($member_result >0){					
				$view_datas['submit_info'] = array('title' => '编辑成功');
			} else {
				$view_datas['submit_info'] = array('title' => '资料未修改或更新失败');
			}
		}else{
            $mid= $this->uri->segment(3);        
        }
        $view_datas['member'] = $this->m_common->get_one('member', array('mid' => $mid),'mid,username,uname,status');    
		$this->load->view($this->file_name . 'pwd', $view_datas);
	}
	
	/**
	 * 删除权限
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
     */
     
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
	
}

/* End of file power.php */
/* Location: ./application/controllers/admin/power.php */