<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
  <div id="r_ts" >
    <div class="r_bt">MBTI性格类型分析报告</div>
    <div class="clear"></div>
  </div>
  <div id="right_1">
    <div class="r_cp_3" style="margin-top:20px;" id="mbti_form">
      <div class="r_cp_4" style="background:url(/static/ceping/timages/xq1_03.jpg) no-repeat;"></div>
      <div class="r_rightcp_1">
        <div class="r_rightcp_10">
    <div style="text-align:center" class="hszt">
    	<h1>【<?php echo $ceping['uname'];?>MBTI性格类型分析报告】</h1>
    </div>
    <div style="text-align:left">
    	<h2>你是属于：<?php echo $ceping['result'].'&nbsp;&nbsp;'.@$mbti['title'];?></h2>
    </div>
    <div class="bg_title">性格特点：</div>   
    <div style="padding-left:40px;"><?php echo @$mbti['tedian'];?></div> 
    <div class="bg_title">适合职业：</div> 
    <div style="line-height:2em;"><?php echo @$mbti['zhiye_title'];?><br/>
概括起来，以下工作是比较适合你的首选，当然并不局限于此：</div>
	<div class="mbti_zy">
    	<div class="mbti_zy_left" >
    	    <ul style="border-right: solid 1px #999999;width: 49.3%;float: left;">
    	<?php 
    	   $zhiye=explode("||", $mbti['zhiye_nei']);
    	   $count1=floor(count($zhiye)/2);
    	   
           for ($i=0; $i < count($zhiye); $i++) {
               if($count1==$i){
                   echo '<li class="zy">'.$zhiye[$i].'</li>';
                   echo '</ul><ul style="width: 49.3%;float: left;">';
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
    <div style="line-height:2em;"><?php echo @$mbti['jianyi'];?>			
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
    	<div class="bg_m_title">你的MBTI类型 </div>
    	<p>通过对照下表中四个维度的描述，可以识别出自己在每个维度上的偏好，取每个维度上偏好类型的代表字母，即可以由四个字母构成你的性格类型，如ISFJ，即内向实感情感判断型，ENFP，即外向直觉情感认知型。四个维度、八个端点可组合成下表的16种性格类型，你必然属于其中的一种。</p>
        <div class="bg_m_title">根据下图，结合你的性格类型可作对比</div>
        <p>MBTI向度数值图，从四个不同方面上可以看出，所在纬度的强度，在每一组中两个数值之间的差异，差异越大，表明高数值所在的纬度在日常生活中表现越强烈，差异越小，表明两个纬度表象不明显，或者说在这个偏好上，能做到相对平衡。</p>
        <div class="bg_m_img">
        	<img src="/resources/jpg/MBTI_1.php?E=<?php echo $ceping['E'];?>&I=<?php echo $ceping['I'];?>&S=<?php echo $ceping['S'];?>&N=<?php echo $ceping['N'];?>&T=<?php echo $ceping['T'];?>&F=<?php echo $ceping['F'];?>&J=<?php echo $ceping['J'];?>&P=<?php echo $ceping['P'];?>">
            <img src="/resources/jpg/MBTI_2.php?A=<?php echo $ceping['E']-$ceping['I'];?>&B=<?php echo $ceping['S']-$ceping['N'];?>&C=<?php echo $ceping['T']-$ceping['F'];?>&D=<?php echo $ceping['J']-$ceping['P'];?>">
        </div>
        <div class="bg_mbti_list">
        <div class="bg_m_title">具体每一组数值所在日常生活中表现的方式，以及表现出处理事物的方法，可以结合到下图做详细对比：</div>
        <div class="bg_b1">
        	<div class="bg_b_left">
            	<ul>
                	<li class="li_title">我们与世界怎样互动，能量释放到何处</li>
                    <li class="li_lx <?php if(($ceping['E']-$ceping['I'])>=0){echo 'li_lx_c';};?>">外向（E）</li>
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
					<li class="li_lx2 <?php if(($ceping['E']-$ceping['I'])<0){echo 'li_lx_c';};?>">内向（I）</li>
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
                    <li class="li_lx <?php if(($ceping['S']-$ceping['N'])>=0){echo 'li_lx_c';};?>">实感（S）</li>
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
                    <li class="li_lx2 <?php if(($ceping['S']-$ceping['N'])<0){echo 'li_lx_c';};?>">直觉（N） </li>
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
                    <li class="li_lx <?php if(($ceping['T']-$ceping['F'])>=0){echo 'li_lx_c';};?>">思考（T）</li>
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
                    <li class="li_lx2 <?php if(($ceping['T']-$ceping['F'])<0){echo 'li_lx_c';};?>">情感（F）</li>
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
                    <li class="li_lx <?php if(($ceping['J']-$ceping['P'])>=0){echo 'li_lx_c';};?>">判断（J）</li>
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
                    <li class="li_lx2 <?php if(($ceping['J']-$ceping['P'])<0){echo 'li_lx_c';};?>">认知（P）</li>
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
	
        </div>
        <div class="dayin"><a href="javascript:(window.print())">打 印</a> <a href="http://www.gaokaobaokao.com/franchisee/hy_phpword.php?cardid=10121004913" target="_blank">下载报告</a></div>
      </div>
      
    </div>
  </div>

<?php $this->load->view('footer'); ?>