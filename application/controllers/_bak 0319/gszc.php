<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后端权限管理控制器
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
class Gszc extends A_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->file_name = 'gszc/';
        $this->load->model('m_gszc');
    }
    
    /**
     * 用户添加
     */
    function user_add()
    {
        $this->check_power('添加用户_职场');
        $view_datas['title'] = '添加用户';
        if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
        {
			$this->load->model('m_gxgly');
            $temp_pwd = $this->input->post('password');
            $post['username']       = $this->input->post('username');
            $post['password']       = md5($temp_pwd);
            
            $post['power_group_id'] = 14;
            $action = $this->m_gxgly->user_add($post);
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
     * 权限列表
     */
    function grzl()
    {
        $this->check_power('个人资料_职场');
        $view_datas['title'] = '个人资料';
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $view_datas['shool'] = $this->session->userdata('shool');
        
        if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
        {
            $member['uname'] = $this->input->post('uname');
            $member['sex'] = $this->input->post('sex');
            $member['birthday'] = $this->input->post('birthday');
            $member['jzcity'] = $this->input->post('jzcity');
            $member['hkcity'] = $this->input->post('hkcity');
            $member['xueli'] = $this->input->post('xueli');
            $member['hunyin'] = $this->input->post('hunyin');
            $member['xuexing'] = $this->input->post('xuexing');
            $member['phone'] = $this->input->post('phone');
            $member['email'] = $this->input->post('email');
            $member['address'] = $this->input->post('address');
            $member['school'] = $this->input->post('school');
            $member['specialty'] = $this->input->post('specialty');
            
            $member_gs1['dianhua'] = $this->input->post('dianhua');
            $member_gs1['target_job'] = $this->input->post('target_job');
            $member_gs1['target_salary'] = $this->input->post('target_salary');
            $member_gs1['gznx'] = $this->input->post('gznx');
            $member_gs1['gzdw'] = $this->input->post('gzdw');
            $member_gs1['job'] = $this->input->post('job');
            $member_gs1['salary'] = $this->input->post('salary');
            $member_gs1['zaizhi'] = $this->input->post('zaizhi');
            $member_gs1['hangye'] = $this->input->post('hangye');
            $hangye_qt = $this->input->post('hangye_qt');
            if(!empty($hangye_qt)){
            	 $member_gs1['hangye'] = $this->input->post('hangye_qt');
            }
            $member_gs1['problem'] = join("#@#",$this->input->post('problem'));
            $member_gs1['zyfz1'] = $this->input->post('zyfz1');
            $member_gs1['zyfz2'] = $this->input->post('zyfz2');
            $member_gs1['zyfz3'] = $this->input->post('zyfz3');
            $member_gs1['zyfz4'] = join("#@#",$this->input->post('zyfz4'));
            $member_gs1['zyfz5'] = $this->input->post('zyfz5');
            $member_gs1['lzyy'] = $this->input->post('lzyy');
            $member_gs1['tjsj'] = $this->input->post('tjsj');
            $member_gs1['salary'] = $this->input->post('salary');
            $gs1_id = $this->input->post('gsid');
            //$member_gs1['mid'] = $this->session->userdata('admin_uid');
            
            //插入或者更新用户附属表1
            if($gs1_id >0){
                $member=$this->m_common->update('member',$member,$where_array);
                $member_gs1=$this->m_common->update('member_gs1',$member_gs1,array('id' => $gs1_id));
            }else{
                $member=$this->m_common->update('member',$member,$where_array);
                $member_gs1=$this->m_common->insert('member_gs1',$member_gs1);
            }
			if($member >0 || $member_gs1 > 0){
				$view_datas['submit_info'] = array('title' => '编辑成功');
				$grxx['grxx_uptime']=time();
				$this->m_common->update('member',$grxx,$where_array);
			} else {
				$view_datas['submit_info'] = array('title' => '资料未修改或更新失败');
			}
        }
        
        $view_datas['member'] = $this->m_common->get_one('member',$where_array);
        $view_datas['gs1'] = $this->m_common->get_one('member_gs1',$where_array);
        $this->load->view($this->file_name . 'user_edit_new', $view_datas);
    }
    
    /**
     * 职业测评——列表呈现页面
     */
    function zycp()
    {
        $this->check_power('职业测评_职场'); 
        $view_datas['title'] = '职业测评';
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $view_datas['member'] = $this->m_common->get_one('member',$where_array,'mid,mbti_id,mbti_time,hld_id,hld_time,zyfx_id,zyfx_time,qznl_id,qznl_time,zymyd_id,zymyd_time');
        
        //获取已经开放的测评系统        
        $where_cp=array('group_id'=>$this->session->userdata('admin_group_id'));
        $group = $this->m_common->get_one('power_ceping',$where_cp,'ceping_ids');

        $view_datas['group'] = @explode(',', $group['ceping_ids']);
        $this->load->view($this->file_name . 'zycp', $view_datas);
    }
    
    /**
     * 职业满意度——zymyd   
     */
    function zycp_zymyd()
    {
        $this->check_power('职业测评_职场');
        $view_datas['title'] = '职业满意度测试'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $member = $this->m_common->get_one('member',$where_array,'zymyd_id,uname,mid');
        if(empty($member['zymyd_id'])){
            if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
                $temp_post = $this->input->post();
                for ($i=1; $i <= 50; $i++) { 
					$fushu=array(2,3,4,8,9,10,11,12,14,17,21,22,23,25,26,27,29,30,31,33,34,36,39,41,44,46);
					if(in_array($i,$fushu)){
						$zymyd[$i]=-abs($temp_post['mbti'.$i]);	
					}else{
						$zymyd[$i]=$temp_post['mbti'.$i];	
                    }
					$zymyd_a[$i]=$temp_post['mbti'.$i];
                }				
                $data['tcl'] = $zymyd[1]+$zymyd[11]+$zymyd[21]+$zymyd[31]+$zymyd[41]+9;
                $data['gzfl'] = $zymyd[2]+$zymyd[12]+$zymyd[22]+$zymyd[32]+$zymyd[42]+3;
                $data['jzg'] = $zymyd[3]+$zymyd[13]+$zymyd[23]+$zymyd[33]+$zymyd[43]+3;
                $data['fzjh'] = $zymyd[4]+$zymyd[14]+$zymyd[24]+$zymyd[34]+$zymyd[44]+9;
                $data['shd'] = $zymyd[5]+$zymyd[15]+$zymyd[25]+$zymyd[35]+$zymyd[45]-9;
                $data['zzqf'] = $zymyd[6]+$zymyd[16]+$zymyd[26]+$zymyd[36]+$zymyd[46]+3;
                $data['zwrz'] = $zymyd[7]+$zymyd[17]+$zymyd[27]+$zymyd[37]+$zymyd[47]-3;
                $data['gztj'] = $zymyd[8]+$zymyd[18]+$zymyd[28]+$zymyd[38]+$zymyd[48]-9;
                $data['rjgx'] = $zymyd[9]+$zymyd[19]+$zymyd[29]+$zymyd[39]+$zymyd[49]+3;
                $data['gzrtg'] = $zymyd[10]+$zymyd[20]+$zymyd[30]+$zymyd[40]+$zymyd[50]-3;
				
                $data['answer']=join(',', $zymyd_a);     
                $data['mid']=$this->session->userdata('admin_uid');    
                $data['uname']=$member['uname'];              
                $data['uptime']=time();    
                
                
                $data_m['zymyd_id']=$this->m_common->insert('cp_zymyd',$data);
                if(!empty($data_m['zymyd_id'])){
                    $data_m['zymyd_time']=time();
                    $this->m_common->update('member',$data_m,$where_array);
                    //redirect('gszc/zycp_ok/zymyd/'.$member['mid']);
                }else{
                    $view_datas['submit_info'] = array('title' => '抱歉，提交失败！');
                    $this->load->view($this->file_name . 'zycp_zymyd',$view_datas);
                }
            }else{
                $this->load->view($this->file_name . 'zycp_zymyd',$view_datas);   
            }
        }else{
            redirect('gszc/zycp_ok/mbti');
        }
    }
	
    /**
     * 职业测评——MBTI   
     */
    function zycp_mbti()
    {
        $this->check_power('职业测评_职场');
        $view_datas['title'] = '职业倾向性测评'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $member = $this->m_common->get_one('member',$where_array,'mbti_id,uname,mid');
        if(empty($member['mbti_id'])){
            if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
                $temp_post = $this->input->post();
                for ($i=1; $i <= 56; $i++) { 
                    $mbti[$i]=@$temp_post['mbti'.$i];
                }
				$shifou=$this->input->post('shifou');
				for($i=0 ;$i<5; $i++){
					$arr[] = $shifou[$i];
				}
				$data['shifou']= join('#@#',$arr);
				$data['age'] = $this->input->post('age');
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
                    redirect('gszc/zycp_ok/mbti/'.$member['mid']);
                }else{
                    $view_datas['submit_info'] = array('title' => '抱歉，提交失败！');
                    $this->load->view($this->file_name . 'zycp_mbti',$view_datas);
                }
            }else{
                $this->load->view($this->file_name . 'zycp_mbti',$view_datas);   
            }
        }else{
            redirect('gszc/zycp_ok/mbti');
        }
    }
	
    
   
    /**
     * 职业测评——职业分析用表
     */
    function zycp_zyfx()
    {		
        $this->check_power('职业测评_职场');
        $view_datas['title'] = '职业咨询分析用表'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));
        $view_datas['member'] = $this->m_common->get_one('member',$where_array,'uname,zyfx_id');
        if(strtolower($_SERVER['REQUEST_METHOD']) == 'post'){       		
            if(empty($view_datas['member']['zyfx_id'])){
                $temp_post = $this->input->post();
                for ($i=1; $i <= 21; $i++) { 
                	if($i=='5'){
                		$data['q'.$i]=join('#@#',$temp_post['jl']);
                	}else if ($i=='6') {
                		$data['q'.$i]=join('#@#',$temp_post['jy']);
                	}else{
                    	$data['q'.$i]=$temp_post['q'.$i];
                	}
                }
                $data['mid']=$this->session->userdata('admin_uid');
                $data['zywt']=$temp_post['zywt'];
                $data['uname']=$temp_post['uname'];
                $data['uptime']=time();
                $data_m['zyfx_id']=$this->m_common->insert('cp_zyfx',$data);
				echo $this->db->last_query();
                if(!empty($data_m['zyfx_id'])){
                    $data_m['zyfx_time']=time();
                    $this->m_common->update('member',$data_m,$where_array);
                    redirect('gszc/zycp_ok/zyfx/'.$data['mid']);
                }else{       
                    $view_datas['submit_info'] = array('title' => '抱歉，提交失败！');   
                    $this->load->view($this->file_name . 'zycp_zyfx', $view_datas); 
                }
            }else{         
                $view_datas['submit_info'] = array('title' => '抱歉，您已经提交过职业咨询分析用表！');
                $view_datas['error']='抱歉，您已经提交过职业咨询分析用表！';
                //$view_datas['error_link']='<a href="/gszc/zycp_zyfx_bg.html">查看报告</a>';
                $this->load->view('zycp_ok', $view_datas);
            }            
        }else{
            $this->load->view($this->file_name . 'zycp_zyfx', $view_datas);
        }   
    }
    

    /**
     * 职业测评——霍兰德   
     */
    function zycp_hld()
    {
        $this->check_power('职业测评_职场');
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
                	$mid=$this->session->userdata('admin_uid');
                    $data_m['hld_time']=time();
                    $this->m_common->update('member',$data_m,$where_array);
                    redirect('gszc/zycp_ok/hld/'.$mid);
                }else{       
                    $view_datas['submit_info'] = array('title' => '抱歉，提交失败！');   
                    $this->load->view($this->file_name . 'zycp_hld', $view_datas); 
                }
            }else{
                $view_datas['submit_info'] = array('title' => '抱歉，您已经测试过请点击查看报告！');
                $view_datas['error']='抱歉，您已经测试过请点击查看报告！';
                //$view_datas['error_link']='<a href="/gszc/zycp_hld_bg.html">查看报告</a>';
                $this->load->view('zycp_ok', $view_datas); 
            }
        }else{
            $this->load->view($this->file_name . 'zycp_hld', $view_datas); 
        }
    }


	
	// 测评完成 发送邮件
    function zycp_ok()
    {	
		$this->check_power('职业测评_职场');
		$type = $this->uri->segment(3);
		$mid = $this->uri->segment(4);
		$member = $this->m_common->get_one('member',array('mid'=>$mid));   
		switch ($type) {
			case 'hld':				
				$view_datas['title'] = '霍兰德职业倾向测验量提交成功！'; 
				$title="霍兰德";
			break;	
				
			case 'mbti':
				$view_datas['title'] = '职业性格类型分析测评提交成功！'; 
				$title="MBTI";
			break;
				
			case 'zyfx':
				$view_datas['title'] = '恭喜，职业咨询分析用表提交成功！'; 
				$title="职业分析";
			break;
			
			default:
				$message = '错误！';
           		$this->load->view($this->file_name . 'zycp_ok', $view_datas);
			break;
		}
		@$message = ' 测评报告查看地址：'.$this->get_url($type,$mid,$member['mbti_id'],'bg');
		@$message .= ' 测评详情查看地址：'.$this->get_url($type,$mid,$member['mbti_id'],'xq');	
		if(!empty($member['username'])){
			$subject = $member['uname']."_".$title;
			$message = $subject."_".$message."   请登录管理员账号查看";
			$this->mail_send($subject,$message);
		}
		$this->load->view($this->file_name . 'zycp_ok', $view_datas);		
    }
    
	//获取邮件发送地址
    function get_url($type,$mid,$cpid,$lx)
    {    
		$key='fc77eecd772126345e55280a12216e75';
		$url_type="zycp_".$type."_".$lx;
		return "http://i.xycareer.com/gszc_md5/".$url_type."/".$cpid."/".$mid."/".md5(md5($url_type.$mid.$key.$cpid)).".html";
	}
    
	//邮件正文——职业倾向性测评
    function get_mbti($mid,$cpid)
    {
    
	}
    
	//邮件正文——霍兰德兴趣测评
    function get_hld()
    {	
	
	}
    
	//邮件正文——职业咨询分析用表
    function get_zyfx()
    {	
	
	}
	
	//发送邮件
    function mail_send($subject,$message,$to_mail='service@ccdm.com.cn')
    {	
		$this->load->library('email');		
		$this->email->from('hxr@ccdm.com.cn', '向阳生涯测评');
		//$this->email->to('service@ccdm.com.cn'); 
		$this->email->to('hong_xiangrong@163.com'); 
		$this->email->cc('hxr@ccdm.com.cn'); 

		$this->email->subject($subject);
		$this->email->message($message); 
		$this->email->send();		
		//echo $this->email->print_debugger();
	}
	
	
	//客户列表
    function gslist()
    {
		$view_datas['title'] = '职业测评_列表';
        $this->check_power('职业测评_列表');
        $view_datas['search_key'] = $search_key = $this->input->get('search_key');
        $view_datas['status'] = $status = $this->input->get('status') ? $status = $this->input->get('status') : 1;
        $this->load->helper('my_page');
        $config['per_page'] = 20; 
        $config['base_url'] = site_url('gslist/list') . '?status=' . $status . ($search_key ? '&search_key=' . $search_key : '');
        $config['total_rows'] = $this->m_gszc->list_data(array('get_count' => TRUE, 'search_key' => $search_key, 'power_group_id' => 14));
        $view_datas['pages'] = page_links($config);
        $view_datas['datas'] = $this->m_gszc->list_data(array('limit' => TRUE, 'search_key' => $search_key, 'power_group_id' => 14));
        
        //echo $this->db->last_query();
        //$view_datas['xszl'] = $this->m_gxgly->power_datas();
        $this->load->view($this->file_name . 'list', $view_datas);
	}

	
	//hld报告
    function zycp_hld_bg()
    {
		$view_datas['title'] = '霍兰德测评报告';
        $this->check_power('职业测评_列表');
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
        $this->check_power('职业测评_列表');
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
	
	//职业性格测评报告
    function zycp_mbti_bg()
    {
    	$view_datas['title'] = '职业性格测评报告';
        $this->check_power('职业测评_列表');
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
        $this->check_power('职业测评_列表');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);        
        $view_datas['ceping'] = $this->m_common->get_one('cp_mbti',$where_array);        
        $view_datas['mbti'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['ceping']['result']));     
        $this->load->view($this->file_name . 'zycp_mbti_xq', $view_datas);
        
	}
	
	//职业满意度报告
    function zycp_zymyd_bg()
    {
    	$view_datas['title'] = '职业满意度报告';
        $this->check_power('职业测评_列表');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);        
        $view_datas['ceping'] = $this->m_common->get_one('cp_zymyd',$where_array);         
        $this->load->view($this->file_name . 'zycp_zymyd_bg', $view_datas);
        
	}
	
	//职业满意度详情
    function zycp_zymyd_xq()
    {
		$view_datas['title'] = '职业满意度详情';
        $this->check_power('职业测评_列表');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);        
        $view_datas['ceping'] = $this->m_common->get_one('cp_zymyd',$where_array);        
        $this->load->view($this->file_name . 'zycp_zymyd_xq', $view_datas);
        
	}
	
	//职业分析报告
    function zycp_zyfx_bg()
    {
		$view_datas['title'] = '职业分析问卷';
        $this->check_power('职业测评_列表');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);           
        $view_datas['fx'] = $this->m_common->get_one('cp_zyfx',$where_array);     
        $this->load->view($this->file_name . 'zycp_zyfx_bg', $view_datas);
        
	}
	
	//职业分析详情
    function zycp_zyfx_xq()
    {
		$view_datas['title'] = '职业分析问卷详情';
        $this->check_power('职业测评_列表');
        $cp_id = $this->uri->segment(3);
        $where_array=array('id'=>$cp_id);           
        $view_datas['fx'] = $this->m_common->get_one('cp_zyfx',$where_array);     
        $this->load->view($this->file_name . 'zycp_zyfx_bg', $view_datas);
        
	}
		
    /**
     * 用户详情
     */
    function edit()
    {
        $this->check_power('职业测评_列表');
        $view_datas['title'] = '个人资料详情';        
        $mid = $this->uri->segment(3);   
        $where_mid = array('mid' => $mid);
        $view_datas['member'] = $this->m_common->get_one('member',$where_mid);
        $view_datas['gs1'] = $this->m_common->get_one('member_gs1',$where_mid);
        $this->load->view($this->file_name . 'user_edit_new', $view_datas);
    }
	
	/*
	 * 设置修改密码
	 */
	function pwd()
	{
        $this->check_power('职业测评_列表');
        $view_datas['title'] = '修改学生账户密码和状态';   
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
	
	
	
	
	//邮件正文——职业咨询分析用表
    function get_test()
    {	
	$this->check_power('职业测评_职场');
        $view_datas['title'] = '职业倾向性测评报告'; 
        $where_array=array('mid'=>$this->session->userdata('admin_uid'));        
        $view_datas['ceping'] = $this->m_common->get_one('cp_mbti',$where_array);        
        $view_datas['mbti'] = $this->m_common->get_one('cp_mbti_result',array('type'=>$view_datas['ceping']['result']));
		//echo $this->db->last_query();
        // $this->load->view($this->file_name . 'mail_mbti', $view_datas);
		
		//$a=include "./application/views/default/gszc/mail_mbti.php";
		$subject = '职业倾向性测评报告'; 
		
		$message = '<!DOCTYPE html>
			<html>
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<title>职业性格测评报告 - 在线测评系统</title>	
				<link type="text/css" rel="stylesheet" href="http://i.xycareer.com/static/common.css">
				<link type="text/css" rel="stylesheet" href="http://i.xycareer.com/static/ceping/cp_gkb.css">
				<link type="text/css" rel="stylesheet" href="http://i.xycareer.com/static/ceping/hong.css">
				<style type="text/css">
				body {
					background-color: #f6f6f6;
					color: #666;
					padding: 0px 20px 20px;
				}
				</style>
			</head>
			<body>

			  <div id="right_1">
				<div class="r_cp_3" style="margin-top:20px;" id="mbti_form">
				  <div class="r_rightcp_1">
					<div class="r_rightcp_10">
				<div style="text-align:center" class="hszt">
					<h1>【'.$ceping['uname'].'职业性格类型分析报告】</h1>
				</div>
				<div style="text-align:left">
					<h2>你是属于：'.$ceping['result'].'&nbsp;&nbsp;'.@$mbti['title'].'</h2>
					<h2>[关于职业性格结果解释,详细咨询您的职业规划老师]</h2>
				</div>
				<div class="bg_title">性格特点：</div>   
				<div style="padding-left:40px;">'.@$mbti['tedian'].'</div> 
				<div class="bg_title">适合职业：</div> 
				<div style="line-height:2em;">'.@$mbti['zhiye_title'].'<br/>
			概括起来，以下工作是比较适合你的首选，当然并不局限于此：</div>
				<div class="mbti_zy">
					<div class="mbti_zy_left" >
						<ul style="border-right: solid 1px #999999;width: 49.3%;float: left;">';
					
					   $zhiye=explode("||", $mbti['zhiye_nei']);
					   $count1=floor(count($zhiye)/2);
					   
					   for ($i=0; $i < count($zhiye); $i++) {
						   if($count1==$i){
								$message .= '<li class="zy">'.$zhiye[$i].'</li>';
								$message .= '</ul><ul style="width: 49.3%;float: left;">';
						   }else{
								$message .= '<li class="zy">'.$zhiye[$i].'</li>';
						   }
					   }
					$message .= '</ul>    
					   <div class="clear"></div>   
					</div>    
				</div> 
				<div class="bg_title">专家建议：</div> 
				<div style="line-height:2em;">'.@$mbti['jianyi'].'			
				</div>
				<div class="h20 clear"></div>    	
						
				<div style="text-align:center" class="hszt">
					<h1>【MBTI性格类型介绍】</h1>
				</div>
				<div class="bg_mbti">
					<p>迈尔斯－布里格斯性格类型指标(MBTI)以瑞士心理学家荣格划分的8种类型为基础，加以扩展，形成四个维度，即</p> 
					<div style="text-align:center; line-height:2em;">① 外向(E)－内向(I)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;② 实感(S)－直觉(N)</div>
					<div style="text-align:center; line-height:1.5em;">③ 思考(T)－情感(F)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;④ 判断(J)－认知(P)</div>
					<p>四个维度如同四把标尺，每个人的性格都会落在标尺的某个点上，这个点靠近那个端点，就意味着个体就有哪方面的偏好。如在第一维度上，个体的性格靠近外向这一端，就偏外向，而且越接近端点，偏好越强。</p>
					
					<div class="bg_mbti_list">
					<div class="bg_m_title">具体每一组数值所在日常生活中表现的方式，以及表现出处理事物的方法，可以结合到下图做详细对比：</div>
					<div class="bg_b1">
						<div class="bg_b_left">
							<ul>
								<li class="li_title">我们与世界怎样互动，能量释放到何处</li>
								<li class="li_lx ';if(($ceping['E']-$ceping['I'])>=0){$message .= 'li_lx_c';};  $message .= '">外向（E）</li>
								<li class="clear"></li>
								<li>从人际交往中获得能量 </li>
								<li>喜欢外出 </li>
								<li>表情丰富，外露 </li>
								<li>喜欢交互作用，合群 </li>
								<li>喜行动、多样性（不能长期坚持）</li>
								<li>不怕打扰，喜自由沟通</li>
								<li>讲，然后想；易冲动、易后悔、易受他人影响</li>
						</div>
						<div class="bg_b_right">
							<ul>
								<li class="li_lx2 '; if(($ceping['E']-$ceping['I'])<0){$message .= 'li_lx_c';} $message .= '">内向（I）</li>
								<li class="clear"></li>
								<li>从时间中获得能量 </li>
								<li>喜静、多思、冥想（离群、与外界相互误解）</li>
								<li>谨慎、不露表情</li>
								<li>社会行为的反射性（会失去机会）</li>
								<li>独立、负责、细致、周到、不蛮干</li>
								<li>不怕长时间做事、勤奋；怕打扰</li>
								<li>先想然后讲</li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					<div class="bg_b1">
						<div class="bg_b_left">
							<ul>
								<li class="li_title">我们留意到的信息种类</li>
								<li class="li_lx '; if(($ceping['S']-$ceping['N'])>=0){$message .= 'li_lx_c';} $message .= '">实感（S）</li>
								<li class="clear"></li>
								<li>通过五官感受世界/注重真实的存在/实际</li> 
								<li>用已经有的技能解决问题 </li>
								<li>喜具体明确 </li>
								<li>重细节（少全面性）</li>
								<li>脚踏实地</li>
								<li>做事有可能的结果、能忍耐、小心</li>
								<li>可做重复工作（不喜新）不喜展望</li>
							</ul>
						</div>
						<div class="bg_b_right">
							<ul>
								<li class="li_lx2 '; if(($ceping['S']-$ceping['N'])<0){$message .= 'li_lx_c';} $message .= '">直觉（N） </li>
								<li class="clear"></li>
								<li>通过第六感洞察世界,注重应该如何,较笼统</li>
								<li>喜学新技能</li>
								<li>不重准确、喜抽象和理论</li> 
								<li>重可能性，讨厌细节</li> 
								<li>好高骛远，喜欢新问题</li> 
								<li>凭爱好做事，对事情的态度易变</li>
								<li>提新见解、匆促结论</li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					<div class="bg_b1">
						<div class="bg_b_left">
							<ul>
								<li class="li_title">我们的决策方式</li>
								<li class="li_lx '; if(($ceping['T']-$ceping['F'])>=0){$message .= 'li_lx_c';} $message .= '">思考（T）</li>
								<li class="clear"></li>
								<li>分析，用逻辑客观方式决策</li> 
								<li>坚信自己的观点正确，不考虑他人意见</li>
								<li>清晰、正义、不喜欢调和主义</li> 
								<li>批判和鉴别力</li> 
								<li>规则</li> 
								<li>工作中少表现出情感，也不喜欢他人感情用事</li>
							</ul>
						</div>
						<div class="bg_b_right">
							<ul>
								<li class="li_lx2 '; if(($ceping['T']-$ceping['F'])<0){$message .= 'li_lx_c';} $message .= '">情感（F）</li>
								<li class="clear"></li>
								<li>主观和综合，用个人化的、价值导向的方式决策；考虑决策对他人的影响 </li>
								<li>和谐、宽容、喜欢调解 </li>
								<li>不按照逻辑思考</li> 
								<li>考虑环境 </li>
								<li>喜欢工作场景中的情感，从赞美中得到享受，也希望他人的赞美</li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					<div class="bg_b2">
						<div class="bg_b_left">
							<ul>
								<li class="li_title">我们喜欢一种更有条理（做决定）</li>
								<li class="li_lx '; if(($ceping['J']-$ceping['P'])>=0){$message .= 'li_lx_c';} $message .= '">判断（J）</li>
								<li class="clear"></li>
								<li>封闭定向</li> 
								<li>结构化和组织化</li> 
								<li>时间导向</li> 
								<li>决断，事情都有正误之分</li> 
								<li>喜命令，控制、反应迅速，喜欢完成任务</li> 
								<li>不善适应</li>
							</ul>
						</div>
						<div class="bg_b_right">
							<ul>
								<li class="li_lx2 '; if(($ceping['J']-$ceping['P'])<0){$message .= 'li_lx_c';} $message .= '">认知（P）</li>
								<li class="li_title">还是更随意性的（获取信息）生活方式</li>
								<li class="clear"></li>
								<li>开放定向</li> 
								<li>弹性化和自发化</li> 
								<li>探索和开放结局</li> 
								<li>好奇，喜欢收集新信息而不是做结论</li> 
								<li>喜欢观望,喜欢开始许多新的项目,但不完成</li> 
								<li>优柔寡断、易分散注意</li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div>
					
					<div class="bg_m_title">你的MBTI类型 </div>
					<p>通过对照下表中四个维度的描述，可以识别出自己在每个维度上的偏好，取每个维度上偏好类型的代表字母，即可以由四个字母构成你的性格类型，如ISFJ，即内向实感情感判断型，ENFP，即外向直觉情感认知型。四个维度、八个端点可组合成下表的16种性格类型，你必然属于其中的一种。</p>
					<div class="bg_m_title">根据下图，结合你的性格类型可作对比</div>
					<p>MBTI向度数值图，从四个不同方面上可以看出，所在纬度的强度，在每一组中两个数值之间的差异，差异越大，表明高数值所在的纬度在日常生活中表现越强烈，差异越小，表明两个纬度表象不明显，或者说在这个偏好上，能做到相对平衡。</p>
					<div class="bg_m_img">
						<img src="http://www.xycareer.com/inc/jpg/MBTI_1.php?E='.$ceping['E'].'&I='.$ceping['I'].'&S='.$ceping['S'].'&N='.$ceping['N'].'&T='.$ceping['T'].'&F='.$ceping['F'].'&J='.$ceping['J'].'&P='.$ceping['P'].'">
						<img src="http://www.xycareer.com/inc/jpg/MBTI_2.php?A='.$ceping['E']-$ceping['I'].'&B='.$ceping['S']-$ceping['N'].'&C='.$ceping['T']-$ceping['F'].'&D='.$ceping['J']-$ceping['P'].'">
					</div>
				<div class="h20 clear"></div>
				
					</div>
				</div>
				</div>
			  </div>
			</div>
			</body>
			</html>';
		echo $message;
		$message ='<img src="http://www.xycareer.com/inc/jpg/MBTI_2.php?"></div>';
	}
	
}
