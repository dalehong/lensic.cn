<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
  <div id="r_ts">
    <div class="r_bt">Sunward Career SDS职业倾向测评结果</div>
    <div class="clear"></div>
  </div>
  <div id="right_1">
    <div class="r_cp_3" style="margin-top:20px;" id="zxbg_form">
      <!--<div class="r_cp_4" style="background:url(/static/ceping/timages/xq1_03.jpg) no-repeat;"></div>-->
      <div class="r_rightcp_1">
        <div class="r_rightcp_2 hszt"><?php echo $hld['uname'];?>Sunward Career SDS职业倾向测评结果</div>
        <div class="clear"></div>
        <p class="r_rightcp_p">每个人都有独特的兴趣特点，下图显示了你在六种职业兴趣类型上的分布状况，你可以了解你的兴趣倾向的整体情况：</p>
        <div class="r_cp_10">
          <div class="r_cp_11"><strong>您实际型为：</strong><span><?php echo @$hld['R'];?>分</span></div>
          <div class="r_cp_11"><strong>您调查型为：</strong><span><?php echo @$hld['I'];?>分</span></div>
          <div class="r_cp_11"><strong>您艺术型为：</strong><span><?php echo @$hld['A'];?>分</span></div>
          <div class="r_cp_11"><strong>您社会型为：</strong><span><?php echo @$hld['S'];?>分</span></div>
          <div class="r_cp_11"><strong>您事业型为：</strong><span><?php echo @$hld['E'];?>分</span></div>
          <div class="r_cp_11"><strong>您常规型为：</strong><span><?php echo @$hld['C'];?>分</span></div>
        </div>
        <div class="r_rightcp_9">
        	<img src="http://www.xycareer.com/inc/jpg/HLD.php?R=<?php echo @$hld['R'];?>&C=<?php echo @$hld['C'];?>&E=<?php echo @$hld['E'];?>&S=<?php echo @$hld['S'];?>&A=<?php echo @$hld['A'];?>&I=<?php echo @$hld['I'];?>"/>
         </div>
        
         <!--<div style="text-align:center; font-weight:bold; height:24px; font-size:16px;">职业兴趣测评分类说明</div>-->
        <div class="r_rightcp_10">
        	        
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
    <!--<div style="margin:10px 0; font-weight:bold; color:red; text-indent:2em;">以上关于“职业满意度测试”、“MBTI性格类型测试”“霍兰德职业倾向性测试”的测评结果主要作为职业规划师案例分析研究之用，并不作为判断该客户职业选择与行动的直接依据。</div>-->
    <div class="h20"></div>
        </div>
         
        
        <!--<div class="dayin"><a href="javascript:(window.print())">打 印</a> <a href="http://www.gaokaobaokao.com/franchisee/hy_phpword.php?cardid=10121004913" target="_blank">下载报告</a></div>-->
      </div>
      
    </div>
  </div>

<?php $this->load->view('footer'); ?>