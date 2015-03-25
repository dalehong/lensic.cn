<?php $this->load->view('header'); ?>
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
<style type="text/css">
table tr{background-color:#F6F6F6;}
#zycp_fx_form table p{margin:auto;text-indent:0;text-align: center;}
#zycp_fx_form table .w2{width: 98%;}
.input_text {
	border: 1px solid #999;
	background-color: #fff;
	width: 85%;
}
</style>
<form id="zycp_fx_form" method="post">
<div class="content">
	<div class="top">
    	<textarea class="textarea" id="" name="zywt"><?php echo @$fx['zywt'];?>请在此处列出专家咨询时需要解决的主要问题：</textarea>
    </div>
    <div class="fx_title">
        <h1>职业咨询分析用表</h1>
    </div>
    <div class="fx_name">姓名：<?php echo @$member['uname'];?></div>
    <div class="fx_time f_left">时间：<?php echo date('Y-m-d H:i',time());?></div>
    <div class="clear question">
    <p style="color:#984806;margin:auto"><strong>导语：</strong>此问卷为专家分析的重要依据，请在放松状态下，<strong>按次序、尽可能</strong>详细地回答，问题的回答要有客观的事实依据。若空间不足请另备纸写。</p>
<?php 
    $qustion=array(
        1=>"关于职业发展，你现在最大的困惑和问题是什么？其中最关键的问题点是什么？请具体说明。",
        2=>"对于自己的职业状态，你最满意的是什么，最不满意的是什么？可结合生活状态共同考虑。",
        3=>"对于上述1、2中的困惑与问题，你已经做过哪些努力，成效如何？",
        4=>"您所在公司的现状如何（如：规模、市场核心产品、核心竞争力、主要竞争对手、管理模式/状况）？请谈谈目前所处行业发展状况和企业发展趋势？",
        
        5=>"请列表仔细描述自有职业经历以来，每个阶段的主要内容，所掌握的知识、技术、所积累的经验及取得的成就，存在的问题。离开前一单位及进行下一单位的原因和目的分别是什么？关键时候的选择标准是什么？(如多次经历请按此范式另列)",
        6=>"分析一下你中学以后的教育/学习经历，剖析各阶段所学的专业知识与技能，包括学习之外的经验/能力积累，选择每个专业或学习课程的标准是什么？",
        
        7=>"你现在或前不久参加过哪些培训课程？你计划参加哪些培训？出于什么目的？",
        8=>"请回想一下，你的童年有什么特别吗？是否对你的职业发展有什么影响？",
        9=>"在以往的经历中有哪些人或事情对你的影响比较大，产生什么样的影响？",
        10=>"请详细谈谈以往的经历中给您带来极大成就感的一两件事。",
        11=>"感觉特别有困扰的是什么？举例说明在职场当中，你碰到的最烦心的事是什么？",
        12=>"认真思考一下你是怎样的一个人。身边的人通常怎么评价你？自己怎么评价？（请用事例说明）",
        13=>"分别谈谈自己的优势及劣势。请至少分别列出三项以上，并用实例说明。",
        14=>"请从身材、相貌、体力、健康等多角度仔细分析一下自己的生理条件？有什么优势与不足？",
        15=>"你的激情在哪一方面？有什么事情会即使没有任何报酬，你都乐此不疲，请仔细想想，列举三件实例。",
        16=>"你有没有特别想成为哪类人？请描述一下你想要的生活？",
        17=>"你考虑过自己的职业目标吗？你认为理想的职业应具备哪几个要素？（请举实例说明）",
        18=>"你曾经希望到怎样的公司去，你认为它对你的吸引力体现在何处（请举例）？你希望你的团队伙伴具有怎样的特征？",
        19=>"在你做出理想的职业选择时，地域选择方面有哪些特殊要求？",
        20=>"你觉得阻碍你发展的最大因素是什么？还有哪些因素/人会影响到你的职业选择/发展？你的爱人/父母对你的职业选择/发展有何意见？你的压力主要来自哪些方面？",
        21=>"你觉得如果需要将个人职业发展相关的情况分析得更透彻些，还有什么需要补充的？"
    );
    for ($i=1; $i <= count($qustion); $i++) { 
        echo '<p style="margin: auto">'.$i.'、'.$qustion[$i].'</p>';
        if($i=='5'){
        	echo '<table width="850"  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#b2b2b2" style="margin-left: 20px;margin-bottom: 20px;">
					  <tr >
					    <td width="20%" valign="center" ><p >时间 </p></td>
					    <td width="14%" valign="center" ><p ><input class="input_text" type="text" name="jl[]"></p></td>
					    <td width="8%" valign="center" ><p >单位 </p></td>
					    <td width="14%" valign="center" ><p ><input class="input_text" type="text" name="jl[]"></p></td>
					    <td width="8%" valign="center" ><p >职务 </p></td>
					    <td width="14%" valign="center" ><p ><input class="input_text" type="text" name="jl[]"></p></td>
					    <td width="8%" valign="center" ><p >薪酬 </p></td>
					    <td valign="center" ><p ><input class="input_text" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >工作内容 </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >掌握知识 </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >获得技能 </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >关键经历 </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >收获 </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >成就(包括业绩） </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >弱点 </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >进入原因 </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >离开原因 </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					  <tr>
					    <td width="20%" valign="center" ><p >选择标准 </p></td>
					    <td valign="center" colspan="7" ><p ><input class="input_text w2" type="text" name="jl[]"></p></td>
					  </tr>
					</table>';
        }else if($i=='6'){
        	echo '<table width="850"  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#b2b2b2" style="margin-left: 20px;margin-bottom: 20px;">
					  <tr>
					    <td width="12%"><p >自&nbsp;&nbsp;至&nbsp;</p></td>
					    <td width="16%"><p >学习类型</p></td>
					    <td width="18%"><p >学校或培训机构</p></td>
					    <td width="16%"><p >掌握知识</p></td>
					    <td width="26%"><p >获得技能（包括学习之外）</p></td>
					    <td width="12%"><p >选择标准</p></td>
					  </tr>
					  <tr>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					  </tr>
					  <tr>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					  </tr>
					  <tr>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					    <td><p ><input class="input_text" type="text" name="jy[]" "></p></td>
					  </tr>
					</table>';
        }else{
        	echo '<textarea class="textarea h'.$i.'" name="q'.$i.'">'.@$fx['q'.$i].'</textarea>';
        }
    }
?>
    <input type="submit" value="确认提交" style="margin: 0 0 10px 425px;"/>
    <input type="hidden" name="uname" value="<?php echo @$member['uname'];?>" />
</div>
</form>

<?php $this->load->view('footer'); ?>