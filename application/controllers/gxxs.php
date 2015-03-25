<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端权限管理控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Gxxs extends A_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->file_name = 'gxxs/';
        $this->load->model('m_gxxs');
    }
    
    /**
     * 权限列表
     */
    function grzl()
    {
        $this->check_power('个人资料_xs');
        $view_datas['title'] = '个人资料';
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
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
            $xs1['mid']   = $this->session->userdata('admin_uid'); 
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
                $xs2['mid']   = $this->session->userdata('admin_uid');   
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
                $xs3['mid']   = $this->session->userdata('admin_uid');   
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
                $xs4['mid']   = $this->session->userdata('admin_uid');   
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
		if(SITE_YX=='_dyzz'){
			//$view_datas['member']['department']='丹阳市职业学校';
			//$view_datas['member']['specialty']='机电技术应用';	
		}
		
        $this->load->view($this->file_name . 'add', $view_datas);
    }
    
    /**
     * 职业测评——列表呈现页面
     */
    function zycp()
    {
        $this->check_power('职业测评_xs'); 
        $view_datas['title'] = '职业测评';
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $view_datas['member'] = $this->m_common->get_one('member',$where_array,'mid,mbti_id,mbti_time,hld_id,hld_time,zyfx_id,zyfx_time,qznl_id,qznl_time,cykxx_id,cykxx_time');
        
        //获取已经开放的测评系统        
        $where_cp=array('group_id'=>$this->session->userdata('admin_group_id'));
        $group = $this->m_common->get_one('power_ceping',$where_cp,'ceping_ids');

        $view_datas['group'] = @explode(',', $group['ceping_ids']);
        $this->load->view($this->file_name . 'zycp', $view_datas);
    }
    
    /**
     * 职业测评——MBTI   
     */
    function zycp_mbti()
    {
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '职业倾向性测评'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $member = $this->m_common->get_one('member',$where_array,'mbti_id,uname');
        if(empty($member['mbti_id'])){
            if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
                $temp_post = $this->input->post();
                for ($i=1; $i <= 56; $i++) { 
                    $mbti[$i]=@$temp_post['mbti'.$i];
                }
                $data['E']=(($mbti[32]+$mbti[36]+$mbti[40]+$mbti[44]+$mbti[48]+$mbti[52]+$mbti[56])-7)/28*10;
                $data['I']=(($mbti[29]+$mbti[33]+$mbti[37]+$mbti[41]+$mbti[45]+$mbti[49]+$mbti[53])-7)/28*10;
                $data['S']=(($mbti[3]+$mbti[7]+$mbti[11]+$mbti[15]+$mbti[19]+$mbti[23]+$mbti[27])-7)/28*10;
                $data['N']=(($mbti[31]+$mbti[35]+$mbti[39]+$mbti[43]+$mbti[47]+$mbti[51]+$mbti[55])-7)/28*10;
                $data['T']=(($mbti[2]+$mbti[6]+$mbti[10]+$mbti[14]+$mbti[18]+$mbti[22]+$mbti[26])-7)/28*10;
                $data['F']=(($mbti[30]+$mbti[34]+$mbti[38]+$mbti[42]+$mbti[46]+$mbti[50]+$mbti[54])-7)/28*10;
                $data['J']=(($mbti[4]+$mbti[8]+$mbti[12]+$mbti[16]+$mbti[20]+$mbti[24]+$mbti[28])-7)/28*10;
                $data['P']=(($mbti[1]+$mbti[5]+$mbti[13]+$mbti[17]+$mbti[21]+$mbti[25]+$mbti[9])-7)/28*10;   
                $data['mid']=$this->session->userdata('admin_uid');
                $data['answer']=join(',', $mbti);             
                $data['uname']=$member['uname'];              
                $data['uptime']=time();    
                
                $R1=$data['E']>$data['I']?'E':'I';   
                $R2=$data['S']>$data['N']?'S':'N';   
                $R3=$data['T']>$data['F']?'T':'F';   
                $R4=$data['J']>$data['P']?'J':'P';   
                $data['result'] = $R1.$R2.$R3.$R4;
                
                $data_m['mbti_id']=$this->m_common->insert('cp_mbti',$data);
                if(!empty($data_m['mbti_id'])){
                    $data_m['mbti_time']=time();
                    $this->m_common->update('member',$data_m,$where_array);
                    redirect('gxxs/zycp_mbti_bg');
                }else{
                    $view_datas['submit_info'] = array('title' => '抱歉，提交失败！');
                    $this->load->view($this->file_name . 'zycp_mbti',$view_datas);
                }
            }else{
                $this->load->view($this->file_name . 'zycp_mbti',$view_datas);   
            }
        }else{
            redirect('gxxs/zycp_mbti_bg');
        }
    }
    
    /**
     * 职业测评——MBTI 报告查看  
     */
    function zycp_mbti_bg()
    {
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '职业倾向性测评报告'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));        
        $view_datas['ceping'] = $this->m_common->get_one('cp_mbti',$where_array);        
        $view_datas['mbti'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['ceping']['result']));     
		//echo $this->db->last_query();
        $this->load->view($this->file_name . 'zycp_mbti_bg', $view_datas);
    }
    
    /**
     * 求职能力测试——qznl  
     */
    function zycp_qznl()
    {
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '求职能力测试'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $member = $this->m_common->get_one('member',$where_array,'qznl_id,uname');
        if(empty($member['qznl_id'])){
            if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
                $temp_post = $this->input->post();
                for ($i=1; $i <= 24; $i++) { 
                    $mbti[$i]=@$temp_post['mbti'.$i];
                }
				$data['result'] = 102+($mbti[2]+$mbti[4]+$mbti[6]+$mbti[7]+$mbti[9]+$mbti[15]+$mbti[19]+$mbti[23])*2-array_sum($mbti)-20;
                $data['mid']=$this->session->userdata('admin_uid');
                $data['answer']=join(',', $mbti);             
                $data['uname']=$member['uname'];              
                $data['uptime']=time();  
                
                $data_m['qznl_id']=$this->m_common->insert('cp_qznl',$data);
                if(!empty($data_m['qznl_id'])){
                    $data_m['qznl_time']=time();
                    $this->m_common->update('member',$data_m,$where_array);
                    redirect('gxxs/zycp_qznl_bg');
                }else{
                    $view_datas['submit_info'] = array('title' => '抱歉，提交失败！');
                    $this->load->view($this->file_name . 'zycp_qznl',$view_datas);
                }
            }else{
                $this->load->view($this->file_name . 'zycp_qznl',$view_datas);   
            }
        }else{
            redirect('gxxs/zycp_qznl_bg');
        }
    }
    
    /**
     * 求职能力测试——qznl   报告查看  
     */
    function zycp_qznl_bg()
    {
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '求职能力测试报告'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));        
        $view_datas['ceping'] = $this->m_common->get_one('cp_qznl',$where_array);  
        $this->load->view($this->file_name . 'zycp_qznl_bg', $view_datas);
    }

    
    /**
     * 创业可行性自测——cykxx 
     */
    function zycp_cykxx()
    {
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '创业可行性自测'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $member = $this->m_common->get_one('member',$where_array,'cykxx_id,uname');
        if(empty($member['cykxx_id'])){
            if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
                $temp_post = $this->input->post();
                for ($i=1; $i <= 24; $i++) { 
                    $mbti[$i]=@$temp_post['mbti'.$i];
                }
				$data['result'] = array_sum($mbti)*10/9;
                $data['mid']=$this->session->userdata('admin_uid');
                $data['answer']=join(',', $mbti);             
                $data['uname']=$member['uname'];              
                $data['uptime']=time();  
                
                $data_m['cykxx_id']=$this->m_common->insert('cp_cykxx',$data);
                if(!empty($data_m['cykxx_id'])){
                    $data_m['cykxx_time']=time();
                    $this->m_common->update('member',$data_m,$where_array);
                    redirect('gxxs/zycp_cykxx_bg');
                }else{
                    $view_datas['submit_info'] = array('title' => '抱歉，提交失败！');
                    $this->load->view($this->file_name . 'zycp_cykxx',$view_datas);
                }
            }else{
                $this->load->view($this->file_name . 'zycp_cykxx',$view_datas);   
            }
        }else{
            redirect('gxxs/zycp_cykxx_bg');
        }
    }
    
    
    /**
     * 创业可行性自测——cykxx   报告查看  
     */
    function zycp_cykxx_bg()
    {
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '创业可行性自测报告'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));        
        $view_datas['ceping'] = $this->m_common->get_one('cp_cykxx',$where_array);  
        $this->load->view($this->file_name . 'zycp_cykxx_bg', $view_datas);
    }
    

    /**
     * 职业测评——职业分析用表
     */
    function zycp_zyfx()
    {		
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '中职生职业规划分析问卷'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $view_datas['member'] = $this->m_common->get_one('member',$where_array,'uname,zyfx_id');
        if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
            if(empty($view_datas['member']['zyfx_id'])){
                $temp_post = $this->input->post();
                for ($i=1; $i <= 22; $i++) { 
                    $data['q'.$i]=$temp_post['q'.$i];
                }
                $data['mid']=$this->session->userdata('admin_uid');
                $data['zywt']=$temp_post['zywt'];
                $data['uname']=$temp_post['uname'];
                $data['uptime']=time();
                $data_m['zyfx_id']=$this->m_common->insert('cp_zyfx',$data);
                if(!empty($data_m['zyfx_id'])){
                    $data_m['zyfx_time']=time();
                    $this->m_common->update('member',$data_m,$where_array);
                    redirect('gxxs/zycp_zyfx_bg');
                }else{       
                    $view_datas['submit_info'] = array('title' => '抱歉，提交失败！');   
                    $this->load->view($this->file_name . 'zycp_zyfx', $view_datas); 
                }
            }else{         
                $view_datas['submit_info'] = array('title' => '抱歉，您已经提交过中职生职业规划分析问卷！');
                $view_datas['error']='抱歉，您已经提交过中职生职业规划分析问卷！';
                $view_datas['error_link']='<a href="/gxxs/zycp_zyfx_bg.html">查看报告</a>';
                $this->load->view('error', $view_datas);
            }            
        }else{
            $this->load->view($this->file_name . 'zycp_zyfx'.SITE_YX, $view_datas);
        }   
    }
    
    /**
     * 职业测评——MBTI 报告查看  
     */
    function zycp_zyfx_bg()
    {		
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '中职生职业规划分析问卷'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));        
        $member = $this->m_common->get_one('member',$where_array,'zyfx_id,uname');   
        if(empty($member['zyfx_id'])){
            $view_datas['submit_info'] = array('title' => '抱歉，您尚未提交中职生职业规划分析问卷！');
            $view_datas['error']='抱歉，您尚未提交中职生职业规划分析问卷！';
            $view_datas['error_link']='<a href="/gxxs/zycp.html">返还职业测评</a>';
            $this->load->view('error', $view_datas);
        }else{
            $view_datas['fx'] = $this->m_common->get_one('cp_zyfx',array('id'=>$member['zyfx_id']));     
            $this->load->view($this->file_name . 'zycp_zyfx_bg'.SITE_YX, $view_datas);
        }
    }

    /**
     * 职业测评——霍兰德   
     */
    function zycp_hld()
    {
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '霍兰德测评'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $view_datas['member'] = $this->m_common->get_one('member',$where_array,'uname,hld_id,mid');
        if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
            if(empty($view_datas['member']['hld_id'])){
                $temp_post = $this->input->post();
                            
                $xingqu[]=@join(',', @$temp_post['q2_R']);
                $xingqu[]=@join(',', @$temp_post['q2_S']);
                $xingqu[]=@join(',', @$temp_post['q2_I']);
                $xingqu[]=@join(',', @$temp_post['q2_E']);
                $xingqu[]=@join(',', @$temp_post['q2_A']);
                $xingqu[]=@join(',', @$temp_post['q2_C']);
                
                $shanchang[]=@join(',', @$temp_post['q3_R']);
                $shanchang[]=@join(',', @$temp_post['q3_S']);
                $shanchang[]=@join(',', @$temp_post['q3_I']);
                $shanchang[]=@join(',', @$temp_post['q3_E']);
                $shanchang[]=@join(',', @$temp_post['q3_A']);
                $shanchang[]=@join(',', @$temp_post['q3_C']);
                
                $xihuan[]=@join(',', @$temp_post['q4_R']);
                $xihuan[]=@join(',', @$temp_post['q4_S']);
                $xihuan[]=@join(',', @$temp_post['q4_I']);
                $xihuan[]=@join(',', @$temp_post['q4_E']);
                $xihuan[]=@join(',', @$temp_post['q4_A']);
                $xihuan[]=@join(',', @$temp_post['q4_C']);
                
                $leixing[]=@$temp_post['q5_R'];
                $leixing[]=@$temp_post['q5_S'];
                $leixing[]=@$temp_post['q5_I'];
                $leixing[]=@$temp_post['q5_A'];
                $leixing[]=@$temp_post['q5_E'];
                $leixing[]=@$temp_post['q5_C'];
                $leixing[]=@$temp_post['q52_R'];
                $leixing[]=@$temp_post['q52_S'];
                $leixing[]=@$temp_post['q52_I'];
                $leixing[]=@$temp_post['q52_A'];
                $leixing[]=@$temp_post['q52_E'];
                $leixing[]=@$temp_post['q52_C'];
                
                $jiazhi[]=@$temp_post['q6_A'];
                $jiazhi[]=@$temp_post['q6_B'];
                $jiazhi[]=@$temp_post['q6_C'];
                $jiazhi[]=@$temp_post['q6_D'];
                
                $data['R']=@count(array_filter($temp_post['q2_R']))+@count(array_filter($temp_post['q3_R']))+@count(array_filter($temp_post['q4_R']))+@$temp_post['q5_R']+@$temp_post['q52_R'];
                $data['S']=@count(array_filter($temp_post['q2_S']))+@count(array_filter($temp_post['q3_S']))+@count(array_filter($temp_post['q4_S']))+@$temp_post['q5_S']+@$temp_post['q52_S'];
                $data['I']=@count(array_filter($temp_post['q2_I']))+@count(array_filter($temp_post['q3_I']))+@count(array_filter($temp_post['q4_I']))+@$temp_post['q5_I']+@$temp_post['q52_I'];
                $data['A']=@count(array_filter($temp_post['q2_A']))+@count(array_filter($temp_post['q3_A']))+@count(array_filter($temp_post['q4_A']))+@$temp_post['q5_A']+@$temp_post['q52_A'];
                $data['E']=@count(array_filter($temp_post['q2_E']))+@count(array_filter($temp_post['q3_E']))+@count(array_filter($temp_post['q4_E']))+@$temp_post['q5_E']+@$temp_post['q52_E'];
                $data['C']=@count(array_filter($temp_post['q2_C']))+@count(array_filter($temp_post['q3_C']))+@count(array_filter($temp_post['q4_C']))+@$temp_post['q5_C']+@$temp_post['q52_C'];
                
                $data['zy1']=@$temp_post['zy1'];
                $data['qxd1']=@$temp_post['qxd1'];
                $data['liyou1']=@$temp_post['ly1'];
                $data['zy2']=@$temp_post['zy2'];
                $data['qxd2']=@$temp_post['qxd2'];
                $data['liyou2']=@$temp_post['ly2'];
                $data['zy3']=@$temp_post['zy3'];
                $data['qxd3']=@$temp_post['qxd3'];
                $data['liyou3']=@$temp_post['ly3'];
                $data['xingqu']=@join('||', $xingqu);
                $data['shanchang']=@join('||', $shanchang);
                $data['xihuan']=@join('||', $xihuan);
                $data['leixing']=@join('||', $leixing);
                $data['jiazhi']=@join('||', $jiazhi);
                $data['uptime']=time();
                $data['uname']=$view_datas['member']['uname'];
                $data['mid']=$view_datas['member']['mid'];
                
                $data_m['hld_id'] = $this->m_common->insert('cp_hld',$data);
                if(!empty($data_m['hld_id'])){
                    $data_m['hld_time']=time();
                    $this->m_common->update('member',$data_m,$where_array);
                    redirect('gxxs/zycp_hld_bg');
                }else{       
                    $view_datas['submit_info'] = array('title' => '抱歉，提交失败！');   
                    $this->load->view($this->file_name . 'zycp_hld', $view_datas); 
                }
            }else{
                $view_datas['submit_info'] = array('title' => '抱歉，您已经测试过请点击查看报告！');
                $view_datas['error']='抱歉，您已经测试过请点击查看报告！';
                $view_datas['error_link']='<a href="/gxxs/zycp_hld_bg.html">查看报告</a>';
                $this->load->view('error', $view_datas); 
            }
        }else{
            $this->load->view($this->file_name . 'zycp_hld', $view_datas); 
        }
    }

    /**
     * 职业测评——霍兰德测评报告
     */
    function zycp_hld_bg()
    {
        $this->check_power('职业测评_xs');
        $view_datas['title'] = '霍兰德测评'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $member = $this->m_common->get_one('member',$where_array,'hld_id,uname');   
        if(empty($member['hld_id'])){
            $view_datas['submit_info'] = array('title' => '抱歉，您尚未提交霍兰德测评！');
            $view_datas['error']='抱歉，您尚未提交霍兰德测评！';
            $view_datas['error_link']='<a href="/gxxs/zycp.html">返还职业测评</a>';
            $this->load->view('error', $view_datas);
        }else{
            $view_datas['hld'] = $this->m_common->get_one('cp_hld',array('id'=>$member['hld_id']));     
            $view_datas['xingqu'] = explode('||', $view_datas['hld']['xingqu']);
            $view_datas['shanchang'] = explode('||', $view_datas['hld']['shanchang']);
            $view_datas['xihuan'] = explode('||', $view_datas['hld']['xihuan']);
            $view_datas['leixing'] = explode('||', $view_datas['hld']['leixing']);
            $view_datas['jiazhi'] = explode('||', $view_datas['hld']['jiazhi']);
            $this->load->view($this->file_name . 'zycp_hld_bg', $view_datas);
        }
    }

    /**
     * 专家咨询_xs
     */
    function zjzx()
    {
        $this->check_power('职业咨询_xs'); 
        $view_datas['title'] = '职业咨询';
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
            $zxsj = $this->input->post('zxsj');
            $zxsj2 = @join('--', $this->input->post('zxsj2'));
            $post['zxsj'] = $zxsj.'|'.$zxsj2;
            $post['zxfs'] = $this->input->post('zxfs');
            $zxsj2 = $this->input->post('zxsj2');
            if($post['zxsj'] == '具体日期'){
                $post['zxsj'] = $zxsj2;
            }
            $up_result = $this->m_common->update('member',$post,$where_array);
            if($up_result>0){
                $view_datas['submit_info'] = array('title' => '恭喜，预约成功！');
            }else{
                $view_datas['submit_info'] = array('title' => '抱歉，预约失败！');
            }
        }
        $view_datas['zx'] = $this->m_common->get_one('member',$where_array,'zxsj,zxfs');
        if(!empty($view_datas['zx']['zxfs'])){
            $view_datas['error']='<tr><th scope="col" colspan="11" class="red">为您匹配专家小组分析4-7个工作日，<br/>分析结束工作人员会与您联系安排咨询时间。祝您愉快！</th></tr>';
        }
        $this->load->view($this->file_name . 'zjzx', $view_datas);
    }
    
    /**
     * 咨询反馈
     */
    function zxfk()
    {
        $this->check_power('咨询反馈_xs'); 
        $view_datas['title'] = '咨询反馈';
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $view_datas['member'] = $this->m_common->get_one('member',$where_array,'zxsid');
        $zx = $this->m_gxxs->gxxs_zxs();
        if(empty($zx['zxs'])){
            $view_datas['error']='<tr><th scope="col" colspan="11" class="red">抱歉，您尚未分配咨询师，暂时无法评价！<br/></th></tr>';
        }
        $view_datas['zxfk'] = $this->m_common->get_one('zxfk',$where_array);
        if(!empty($view_datas['zxfk']['mid'])){
            $view_datas['error']='<tr><th scope="col" colspan="11" class="red">感谢您的反馈，您的具体评价信息如下！<br/></th></tr>';
            if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
                $view_datas['submit_info'] = array('title' => '抱歉，评价信息无法修改');
            }
        }else if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
            $temp_post = $this->input->post();
            $post['mid']   = $this->session->userdata('admin_uid');
            $post['uname']   = $zx['uname'];
            $post['zxs']   = $zx['zxs'];
            $post['zxtime']   = $zx['zxtime'];
            $post['zongping']   = $temp_post['zongping'];
            $post['fk1']    = $temp_post['fk1'];
            $post['fk2']   = $temp_post['fk2'];
            $post['fk3']   = $temp_post['fk3'];
            $post['fk4']   = $temp_post['fk4'];
            $post['fk5']   = $temp_post['fk5'];
            $post['fk6']   = $temp_post['fk6'];
            $post['fk7']   = $temp_post['fk7'];
            $post['fk8']   = $temp_post['fk8'];
            $post['jianyi']   = $temp_post['jianyi'];
            $post['pingjia']   = $temp_post['pingjia'];
            $post['uptime']   = time();
            if($this->m_common->insert('zxfk',$post)>0){
                $view_datas['submit_info'] = array('title' => '咨询反馈提交成功');
            }
            $view_datas['zxfk'] = $this->m_common->get_one('zxfk',$where_array);
        }        

        $this->load->view($this->file_name . 'zxfk', $view_datas);
    }

    
    /*
     * 编辑权限
     */
    function zxbg()
    {
        $this->check_power('咨询报告_xs');
        $view_datas['title'] = '咨询报告';
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $member = $this->m_common->get_one('member',$where_array,'zxbg_id,mbti_id,hld_id,zyfx_id,sex,birthday,xueli,hunyin,specialty,school');
        if(empty($member['zxbg_id'])){
            $view_datas['submit_info'] = array('title' => '抱歉，您的咨询报告将在专家咨询之后7个工作日内完成！');
            $view_datas['error']='抱歉，您的咨询报告将在专家咨询之后7个工作日内完成！';
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
            $this->load->view($this->file_name . 'zxbg', $view_datas);
        }
    }
    
}

/* End of file power.php */
/* Location: ./application/controllers/admin/power.php */