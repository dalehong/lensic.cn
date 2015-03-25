<?php $this->load->view('header'); ?>
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="/resources/kindeditor/themes/default/default.css" />
<script type="text/javascript" src="/resources/kindeditor/kindeditor-all-min.js"></script>
<script>
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="content"]', {
            resizeType : 1,
            allowPreviewEmoticons : false,
            allowImageUpload : false,
            items : [
                'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                'insertunorderedlist', '|', 'emoticons', 'image', 'link']
        });
    });
</script>
<form id="zxbg_form" method="post">
<div class="content" style="background-color:#FFF; padding:1px;">
<div style="border:1px solid #c5c5c5; margin:20px;padding: 20px;">
	<div style="text-align:center">
    	<h1>【客户基本情况】</h1>
    </div>
    <div class="bg_title">一、客户基本信息：</div> 
    <div class="bg_jbxx">
    	<div class="bg_jbxx_list">姓&nbsp;&nbsp;&nbsp;&nbsp;名：<?php echo @$zxbg['uname'];?></div>
    	<div class="bg_jbxx_list">性&nbsp;&nbsp;&nbsp;&nbsp;别：<?php echo @$member['sex'];?></div>
    	<div class="bg_jbxx_list">出生年月：<?php echo @$member['birthday'];?></div>
    	<div class="bg_jbxx_list">学&nbsp;&nbsp;&nbsp;&nbsp;历：<?php echo @$member['xueli'];?></div>
    	<div class="bg_jbxx_list">专&nbsp;&nbsp;&nbsp;&nbsp;业：<?php echo @$member['specialty'];?></div>
    	<div class="bg_jbxx_list">院&nbsp;&nbsp;&nbsp;&nbsp;校：<?php echo @$member['school'];?></div>
        <div class="clear"></div>
    </div>
    <div class="clear h20"></div>
    <div class="bg_title">二、当前面临的问题及解决问题的关键：</div> 
    <div class="bg_title">问题自述：</div> 
    <div class="bg_nei">
    	<?php echo @$xs1['problem'];?>。
    </div>
    <div class="bg_title">解决问题关键：</div>     
    <div class="bg_nei">
    	<?php echo @$xs1['resolve'];?>。
    </div>
    <div class="clear h20"></div>
    
    <div class="bg_title">三、教育/培训背景分析：</div>
	<?php foreach($xs3 as $n => $data): ?>
    <div class="bg_nei">
    	<?php echo @$data['name']."  ".$data['time']."  ".$data['school']."  ".$data['specialty']."  ".$data['score'];?>
    </div>
    <?php endforeach; ?>
    <div class="bg_title">职业规划师点评:</div>
    <div class="bg_nei">
        <textarea name="content" style="width:900px;height:100px;visibility:hidden;">
            <?php echo @empty($zxbg['pxdp'])?'暂无点评':$zxbg['pxdp'];?>
        </textarea>
    </div>
    <div class="clear h20"></div>
    <!-- 四、职业经历分析： -->
    <div class="bg_title">四、职业经历分析：</div>
	<?php foreach($xs4 as $n => $data): ?>
    <div class="bg_nei">
    	<?php echo @$data['sjname']."  ".$data['time']."  ".$data['unit']."  ".$data['content']."  ".$data['harvest'];?>
    </div>
    <?php endforeach; ?>
    <div class="bg_title">职业规划师点评:</div>
    <div class="bg_nei">
        <textarea name="content" style="width:900px;height:100px;visibility:hidden;">
            <?php echo @empty($zxbg['zydp'])?'暂无点评':$zxbg['pxdp'];?>
        </textarea>
    </div>
    <div class="clear h20"></div>    
    
    <div class="bg_title">五、客户现有的职业竞争力:</div> 
    <div class="bg_nei">
    	<?php echo @$zxbg['zyjzl'];?>。
    </div>
    <div class="clear h20"></div>
    
    <div style="text-align:center">
    	<h1>【MBTI性格类型介绍】</h1>
    </div>
    <div class="bg_mbti">
    	<p>迈尔斯－布里格斯性格类型指标(MBTI)以瑞士心理学家荣格划分的8种类型为基础，加以扩展，形成四个维度，即</p> 
    	<div style="text-align:center; line-height:2em;">① 外向(E)－内向(I)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;② 实感(S)－直觉(N)</div>
        <div style="text-align:center; line-height:1.5em;">③ 思考(T)－情感(F)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;④ 判断(J)－认知(P)</div>
    	<p>四个维度如同四把标尺，每个人的性格都会落在标尺的某个点上，这个点靠近那个端点，就意味着个体就有哪方面的偏好。如在第一维度上，个体的性格靠近外向这一端，就偏外向，而且越接近端点，偏好越强。</p>
    	<div class="bg_m_title">你的MBTI类型 </div>
    	<p>通过对照下表中四个维度的描述，可以识别出自己在每个维度上的偏好，取每个维度上偏好类型的代表字母，即可以由四个字母构成你的性格类型，如ISFJ，即内向实感情感判断型，ENFP，即外向直觉情感认知型。四个维度、八个端点可组合成下表的16种性格类型，你必然属于其中的一种。</p>
        <div class="bg_m_title">根据下图，结合你的性格类型可作对比</div>
        <p>MBTI向度数值图，从四个不同方面上可以看出，所在纬度的强度，在每一组中两个数值之间的差异，差异越大，表明高数值所在的纬度在日常生活中表现越强烈，差异越小，表明两个纬度表象不明显，或者说在这个偏好上，能做到相对平衡。</p>
        <div class="bg_m_img">
        	<img src="http://www.xycareer.com/inc/jpg/MBTI_1.php?E=<?php echo @$mbti['E'];?>&I=<?php echo @$mbti['I'];?>&S=<?php echo @$mbti['S'];?>&N=<?php echo @$mbti['N'];?>&T=<?php echo @$mbti['T'];?>&F=<?php echo @$mbti['F'];?>&J=<?php echo @$mbti['J'];?>&P=<?php echo @$mbti['P'];?>">
            <img src="http://www.xycareer.com/inc/jpg/MBTI_2.php?A=<?php echo @$mbti['E']-$mbti['I'];?>&B=<?php echo @$mbti['S']-$mbti['N'];?>&C=<?php echo @$mbti['T']-$mbti['F'];?>&D=<?php echo @$mbti['J']-$mbti['P'];?>">
        </div>
        <div class="bg_mbti_list">
        <div class="bg_m_title">具体每一组数值所在日常生活中表现的方式，以及表现出处理事物的方法，可以结合到下图做详细对比：</div>
        <div class="bg_b1">
            <div class="bg_b_left">
                <ul>
                    <li class="li_title">我们与世界怎样互动，能量释放到何处</li>
                    <li class="li_lx <?php if(($mbti['E']-$mbti['I'])>=0){echo 'li_lx_c';};?>">外向（E）</li>
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
                    <li class="li_lx2 <?php if(($mbti['E']-$mbti['I'])<0){echo 'li_lx_c';};?>">内向（I）</li>
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
                    <li class="li_lx <?php if(($mbti['S']-$mbti['N'])>=0){echo 'li_lx_c';};?>">实感（S）</li>
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
                    <li class="li_lx2 <?php if(($mbti['S']-$mbti['N'])<0){echo 'li_lx_c';};?>">直觉（N） </li>
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
                    <li class="li_lx <?php if(($mbti['T']-$mbti['F'])>=0){echo 'li_lx_c';};?>">思考（T）</li>
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
                    <li class="li_lx2 <?php if(($mbti['T']-$mbti['F'])<0){echo 'li_lx_c';};?>">情感（F）</li>
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
                    <li class="li_lx <?php if(($mbti['J']-$mbti['P'])>=0){echo 'li_lx_c';};?>">判断（J）</li>
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
                    <li class="li_lx2 <?php if(($mbti['J']-$mbti['P'])<0){echo 'li_lx_c';};?>">认知（P）</li>
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
    <div class="h20 clear"></div>
    <div style="text-align:center">
    	<h1>【MBTI 性格类型分析报告】</h1>
    </div>
    <div style="text-align:left">
    	<h1>你是属于：<?php echo @$mbti['result'].'&nbsp;&nbsp;'.@$zxbg['nssy'];?></h1>
    </div>
    <div class="bg_title">性格特点：</div>   
    <div style="padding-left:40px;"><?php echo @$zxbg['xgtd'];?></div> 
    <div class="bg_title">适合职业：</div> 
    <div style="line-height:2em;">事业满意就是，做尽可能有效利用资源的工作。愿意精通机械技能或使用工具来工作。工作必须有乐趣、有活力、独立性强，且常有机会走出工作室去户外。<br/>
概括起来，以下工作是比较适合你的首选，当然并不局限于此：</div>
	<div class="mbti_zy">
        <div class="mbti_zy_left" >
            <ul style="border-right: solid 1px #999999;width: 49.3%;float: left;">
        <?php 
           $zhiye=explode("||", $mbti_result['zhiye_nei']);
           $count1=floor(count($zhiye)/2);
           
           for ($i=0; $i < count($zhiye); $i++) {
               if($count1==$i){
                   echo '<li class="zy">'.$zhiye[$i].'</li>';
                   echo '<li class="zy_title">电脑程序员</li></ul><ul style="width: 49.3%;float: left;">';
               }else{
                   echo '<li class="zy">'.$zhiye[$i].'</li>';
               }
           }        
        ?>
           </ul>    
           <div class="clear"></div>   
        </div>    
    </div> 
    <div class="bg_title">专家建议：</div> 
    <div style="line-height:2em;">
        <textarea name="content" style="width:900px;height:100px;visibility:hidden;">
            <?php echo @$zxbg['zjjy'];?>    
        </textarea>
    </div>
    <div class="h20 clear"></div>
    
    <div style="text-align:center">
    	<h1>【Sunward Career SDS职业倾向测验】</h1>
    </div>
    <div class="bg_title">一、客户基本信息：</div> 
    <div class="bg_nei2">
    	<p>根据对您个人在兴趣爱好，个人能力， 侧重行业，岗位喜好，职场胜任力等多个方面的偏好分析，得出您的Sunward Career SDS职业倾向图如下。可结合下一页的相关解释进行对照。</p>
    </div>
    <div class="bg_m_img">
        <img src="http://www.xycareer.com/inc/jpg/HLD.php?R=<?php echo @$hld['R'];?>&C=<?php echo @$hld['C'];?>&E=<?php echo @$hld['E'];?>&S=<?php echo @$hld['S'];?>&A=<?php echo @$hld['A'];?>&I=<?php echo @$hld['I'];?>"/>
    </div>    
    <div class="bg_title">点评：</div> 
    <div class="bg_nei">
        <textarea name="content" style="width:900px;height:100px;visibility:hidden;">
            <?php echo @$zxbg['xglj'];?>
        </textarea>
    </div>
    <div class="h20 clear"></div>
    
    <div style="text-align:center">
    	<h1>【Sunward Career SDS职业倾向测验说明】</h1>
    </div>
    <div class="bg_nei2">
    	<p>Sunward Career SDS职业倾向性测验是对个人性格特质、兴趣爱好、实际能力等要素进行的综合评估。您可以对照上图查看您自己的所擅长方面，以及所在类型。</p>
    </div>
    <div class="hld_t1">
    	<div class="t1_1">类&nbsp;&nbsp;型</div>
    	<div class="t1_2">人&nbsp;&nbsp;格&nbsp;&nbsp;类&nbsp;&nbsp;型</div>
    	<div class="t1_3">对应的职业环境类型</div>
        <div class="clear"></div>
    </div>
    <div class="hld_t2">
    	<div class="t1_1">实际型</div>
    	<div class="t1_2">富有技术能力，喜爱具体的行动，喜欢有规则的具体劳动和需要基本操作技能的工作。处理人际关系或与人交涉的技能较弱。重视权利、金钱的价值，性格上有内向、顺应等倾向。</div>
    	<div class="t1_3">机械性、技术性、实际操作性、解决具体问题的</div>
        <div class="clear"></div>
    </div>
    <div class="hld_t2">
    	<div class="t1_1" style="padding-top:38px;">调查型</div>
    	<div class="t1_2">具有聪明、理性、好奇、精确、批评、分析性、深思熟虑、合理、内省等人格特征，有科学的、数学的能力，重视科学性事物的价值，偏爱对事物构成的理解。在回避社交性方面，与现实型有质的区别。</div>
    	<div class="t1_3">需要用科学的、数学研究的能力与智力解决问题的。</div>
        <div class="clear"></div>
    </div>
    <div class="hld_t2">
    	<div class="t1_1"><br/>艺术型</div>
    	<div class="t1_2">具有想象、冲动、直觉、无秩序、情绪化、理想化、有创意、不重实际等人格特征，喜欢艺术性质的职业和环境,不善于事物工作。独创性，想象力丰富，有优秀的艺术能力与感受力，追求美的价值。性格上有强烈的显示自己的主张，不喜欢规则性、组织性的约束，自我制约能力稍差，情绪表现趋向自由。</div>
    	<div class="t1_3">没有束缚的、有必要发挥创造力的。</div>
        <div class="clear"></div>
    </div>
    <div class="hld_t2">
    	<div class="t1_1" style="padding-top:38px;">社会型</div>
    	<div class="t1_2">具有合作、友善、助人、负责、圆滑、善社交、善言谈、洞察力强等人格特征，喜欢社会交往、关心社会问题、有教导别人的能力。重视社会性、道德性活动的价值。性格上有善于协调、责任感强、亲切等倾向。</div>
    	<div class="t1_3">需要服务能力的（对人、对社会）</div>
        <div class="clear"></div>
    </div>
    <div class="hld_t2">
    	<div class="t1_1" style="padding-top:38px;">事业型</div>
    	<div class="t1_2">富有冒险、野心、独断、乐观、自信、精力充沛、善社交等人格特征，具有表现力与指导力，期望权利和地位，重视政治、经济等方面成功的价值。性格上有积极的、社交性的、充满自信等倾向。</div>
    	<div class="t1_3">需要计划、经营等有说服力、统率力的。</div>
        <div class="clear"></div>
    </div>
    <div class="hld_t2 bb">
    	<div class="t1_1">常规型</div>
    	<div class="t1_2">具有顺从、谨慎、保守、实际、稳重、有效率等人格特征，喜欢有系统有条理的工作任务，希望组织与秩序，但缺乏艺术上的能力。性格上有尊重规则、保守、慎重等倾向。</div>
    	<div class="t1_3">需要服从规则与传统，且反复进行事务处理的。</div>
        <div class="clear"></div>
    </div>
    <div style="margin:10px 0; font-weight:bold; color:red; text-indent:2em;">以上关于“职业满意度测试”、“MBTI性格类型测试”“霍兰德职业倾向性测试”的测评结果主要作为职业规划师案例分析研究之用，并不作为判断该客户职业选择与行动的直接依据。</div>
    <div class="h20"></div>
    
    <div style="text-align:center"><h1>【专家分析】</h1></div>
    
    <div class="bg_title">一、对该客户性格的理解与评析</div> 
    <div class="bg_nei">
        <textarea name="content" style="width:900px;height:100px;visibility:hidden;">
            <?php echo @$zxbg['xglj'];?>
        </textarea>
    </div>
    
    <div class="bg_title">二、客户理想职业评析</div> 
    <div class="bg_nei">
    	<div class="lxfx_1">1、<?php echo @$hld['zy1'];?></div>
        <div class="lxfx_2">清晰/具体程度：<?php echo @$hld['qxd1'];?></div>
        <div class="clear"></div>
        <div class="bg_nei"><?php echo @$hld['liyou1'];?></div>   
        <div class="bg_nei bg_zydp">评析：
        <textarea name="content" style="width:900px;height:100px;visibility:hidden;">
            <?php echo @$zxbg['lxzy1'];?>
        </textarea>
        </div>
    </div>    
    <div class="bg_nei">
    	<div class="lxfx_1">2、<?php echo @$hld['zy2'];?></div>
        <div class="lxfx_2">清晰/具体程度：<?php echo @$hld['qxd2'];?></div>
        <div class="clear"></div>
        <div class="bg_nei"><?php echo @$hld['liyou2'];?></div>    
        <div class="bg_nei bg_zydp">评析：
        <textarea name="content" style="width:900px;height:100px;visibility:hidden;">
            <?php echo @$zxbg['lxzy2'];?>
        </textarea>
        </div> 
    </div>    
    <div class="bg_nei">
    	<div class="lxfx_1">3、<?php echo @$hld['zy3'];?></div>
        <div class="lxfx_2">清晰/具体程度：<?php echo @$hld['qxd3'];?></div>
        <div class="clear"></div>
        <div class="bg_nei"><?php echo @$hld['liyou3'];?></div>   
        <div class="bg_nei bg_zydp">评析：
        <textarea name="content" style="width:900px;height:100px;visibility:hidden;">
            <?php echo @$zxbg['lxzy3'];?>
        </textarea>
        </div>    
    </div>
    
    <div class="bg_title">三、职业价值观评析</div> 
    <div class="jzgpx">
    	<div class="jt1">最重要：</div>
    	<div class="jt2"><?php echo @$jiazhi[0];?></div>
    	<div class="jt1">次重要：</div>
    	<div class="jt3"><?php echo @$jiazhi[1];?></div>
    	<div class="clear"></div>
    </div>
    <div class="jzgpx2">
    	<div class="jt1">最不重要：</div>
    	<div class="jt2"><?php echo @$jiazhi[2];?></div>
    	<div class="jt1">次不重要：</div>
    	<div class="jt3"><?php echo @$jiazhi[3];?></div>
    	<div class="clear"></div>
    </div>
    <div style="color:red; text-align:center">(以上表中的内容是客户理想中的工作状态，也就是将来希望能达到的，并不是自己现在选择职业时的标准)。</div>    
    <div class="bg_title">评析：
        <textarea name="content" style="width:900px;height:100px;visibility:hidden;">
            <?php echo @$zxbg['jzgfx'];?>
        </textarea>
    </div>
    
    <div class="bg_title">四、职业规划师综合评估意见</div>
    <div class="bg_nei">
        <textarea name="content" style="width:900px;height:500px;visibility:hidden;">
            <?php echo @$zxbg['zhpgyj'];?>
        </textarea>
    </div>
    
    <div style="color:#C00000;"><h2>【专家寄语】</h2></div>
    <div class="bg_zjjy">
        <div class="bg_zjjy_1">1.</div>
        <div class="bg_zjjy_2">任何职业，任何公司，都存在这样那样的问题，没有任何职场环境是100％满足自己多重的需求的。因此，在职业规划中，有个妥协原则。最重要的是关注职业的核心素质要求与个人的关键能力特征是否匹配，该类职业的价值观导向与个人内在职业动机是否匹配，以及公司的企业文化与个人的沟通特点，人格价值观是否匹配。所以一定要明确自己最适合什么，最看重什么。</div>
        <div class="clear"></div>
        
        <div class="bg_zjjy_1">2.</div>
        <div class="bg_zjjy_2">另外，任何行业，都有做得好的和做得不好的公司，任何职位，都有做得好的和做得不好的个人，在信息收集时尽可能通过各种渠道了解，但是在做判断时一定要根据自己内心最真实的需求！如果在真正适合自己的领域，职业发展会取得事半功倍的效果。</div>
        <div class="clear"></div>
        
        <div class="bg_zjjy_1">3.</div>
        <div class="bg_zjjy_2">任何职业转型，都需要前期的投入和成本，包括时间，精力，经济等方面。实现顺利转型，首先需要在内生涯方面（知识、技能、经验、视野、心态等）提升，当内生涯达到一定程度，外生涯（职位名称，经济收入等）自然会伴随内生涯相辅相成得到提升和发展，所以要做好的充足的心理准备。相信，付出必有收获！</div>
        <div class="clear"></div>
    </div>
    <div class="h20"></div>
    
    <div style="text-align:center"><h1>【解决方案】</h1></div>
    <div class="bg_title"><h2>【解决方案】</h2></div>
    <div class="bg_title">客户的职业发展方向，及当前的最佳切入点：</div>
    <div class="bg_nei"><strong><?php echo @$zxbg['fa_qrd'];?></strong></div>
    
    <div class="bg_title">职业发展方向：</div>
    <div class="bg_nei"><strong><?php echo @$zxbg['fa_fzfx'];?></strong></div>
    
    <div class="bg_title">职业发展通道：</div>
    <div class="bg_nei2"><strong><?php echo @$zxbg['fa_fztd'];?></strong></div>
    
    <div class="bg_title">客户适合在该领域发展的理由：</div>
    <div class="bg_nei2"><?php echo @$zxbg['fa_fzly'];?></div>
    
    <div class="bg_title">与职业目标的差距及应对方案</div>
    <div class="bg_nei2"><?php echo @$zxbg['fa_cjfa'];?></div>
    
    <?php 
	if(!empty($zxbg['fa_gjjy'])){ 
		echo '<div class="bg_title">关于与他人建立关系的建议：</div>
		<div class="bg_nei2">'.$zxbg['fa_gxjy'].'</div>';
    };
	if(!empty($zxbg['fa_gjjy'])){ 
    	echo '<div class="bg_title">关于工作跟进与计划性的建议：</div>
    	<div class="bg_nei2">'.$zxbg['fa_gjjy'].'</div>';
	}
	?>
    
    <div class="bg_title"><h2>【行动计划】</h2></div>
    <div class="bg_nei"><?php echo @$zxbg['fa_xdjh'];?></div>
    
    <div class="bg_title"><h2>【推荐书籍】</h2></div>
    <div class="bg_nei2"><?php echo @$zxbg['fa_tjsj'];?></div>
    
    <div class="bg_title"><h2>【老师赠言】</h2></div>
    <div class="bg_nei2" style="color:#00F;"><?php echo @$zxbg['fa_lszy'];?></div>
    <div class="h20"></div>
    <div class="bg_tbts">
    	<div style="text-align:center; color:#666666;line-height:40px;"><h1>【特别提示】</h1></div>
    	<p>至此，相信您已读完您的职业咨询报告。此解决方案是咨询过程中职业规划师与您共同探讨一致达成的。要实现梦想，就需要脚踏实地的付出实践！请谨记：</p>
        <div align="center"><strong>职业规划方案+认真的实践+坚定的信念=职业生涯成功</strong></div>
    	<p>在此需要提醒您的是，在整个职业规划咨询流程中，职业测评的权重最多占30%，因为它有一定机械性,而且只是作为整个职业规划咨询过程中所要参考的若干要素之一，只能作为辅助性参考资料。最重要、最有效的部分是职业规划师给您提供的咨询服务。</p>
        <p>如果在后续3个月免费服务期内，您还有报告中未解决的问题，请整理成文字，发送至邮箱<b>service@ccdm.com.cn</b>，我们会立即将你的问题反馈到至专家处并尽快给您回复。</p>
        <div class="h20"></div>
        <p>职业规划是对职业生涯乃至人生进行持续系统的计划的动态过程。最重要的是能对自我认知逐步完善，根据人生发展轨迹做出最适合自己的职业道路选择，主动把握命运！</p>
        <p>每个人心中都有一个Professional Calling， 就是一样东西你发自内心地热爱它，它不一定是社会上最流行的，不一定是钱拿得最多的，也不一定是让其他人羡慕的，但却是你内心热爱的。我们看的书、学的知识和选择的学科并不代表我们必然的职业取向，甚至不是我们一生职业成功的基础，而Calling才是第一位的。</p>
        <div class="h20"></div>
        <div class="bg_jy1"></div>
        <div class="bg_jy2">
        	<p>寄语：本报告可供您参考，如有任何疑问请直接电话和向阳生涯联系。</p>
            <p class="p2"><?php echo @$zxbg['fa_gy'];?></p>
            <p>祝福：心静自然凉！</p>
            <p>放下心态，就可以拥有一切。</p>
            <p>100%成功＝100%意愿*100%方法*100%行动</p>        
        </div>
        <div class="bg_jy3"></div>    
        <div class="clear"></div>
    </div>
    <div class="h20"></div>
    </div>
</div>
</div>
</form>
<?php $this->load->view('footer'); ?>