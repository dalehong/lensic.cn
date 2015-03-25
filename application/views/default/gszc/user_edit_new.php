<?php $this->load->view('header'); ?>
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>

<style type="text/css">
table tr{background-color:#F6F6F6;}
#zycp_fx_form table p{margin:auto;text-indent:0;text-align: center;}
/* table  td {text-align: center;} */
#zycp_fx_form table .w2{width: 98%;}
.input_text {
	border: 1px solid #999;
	background-color: #fff;
	width: 85%;
}
.zyfz p{padding:5px 10px;}
.t14{margin:10px auto;}
.textarea {
	width: 730px;
	height: 40px;
	background-color: #fff;
}
</style>
<form id="gxxs_form" method="post">
<div class="content">
	<div style="text-align: center;line-height: 60px;width: 850px;"><h1>个人情况登记</h1></div>
    <input type="hidden" name="xs1_id" value="<?php echo @$xs1['id'];?>" />    
<table width="850"  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#b2b2b2" style="margin-left: 20px;margin-bottom: 20px;font-size: 14px;">
  <tr>
    <td width=13% align="center" valign="middle"><p >姓名 </p>
      <p >Name </p></td>
    <td valign="center" width=13%><p ><input class="input_text" type="text" name="uname" value="<?php echo @$member['uname'];?>"/></p></td>
    <td width=13% align="center" valign="center"><p >性别 </p>
      <p >Gender </p></td>
    <td valign="center" width=12%><p >
      <input class="input_text gw1" type="text" name="sex" value="<?php echo @$member['sex'];?>"/>
    </p></td>
    <td width=13% colspan="2" align="center" valign="center"><p >出生日期 </p>
      <p >The&nbsp;date&nbsp;of&nbsp;Birth&nbsp; </p></td>
    <td valign="center" width=13%><p ><input class="input_text gw1" type="text" name="birthday"  value="<?php echo @$member['birthday'];?>"/></p></td>
    <td width=13% align="center" valign="top"><p >学历 </p>
      <p >Degree </p></td>
    <td valign="center" width=13%><p ><input class="input_text gw1" type="text" name="xueli"  value="<?php echo @$member['xueli'];?>"/></p></td>
  </tr>
  <tr>
    <td width="13%" align="center" valign="middle" ><p >出生地 </p>
      <p >Birthplace </p></td>
    <td valign="center" ><p ><input class="input_text gw1" type="text" name="jzcity"  value="<?php echo @$member['jzcity'];?>"/></p></td>
    <td align="center" valign="center" ><p >户口地 </p>
      <p >Residence </p></td>
    <td valign="center" ><p ><input class="input_text gw1" type="text" name="hkcity"  value="<?php echo @$member['hkcity'];?>"/></p></td>
    <td colspan="2" align="center" valign="center" ><p >婚姻状况 </p>
      <p >Marriage&nbsp;or&nbsp;not </p></td>
    <td valign="center" ><p ><input class="input_text gw1" type="text" name="hunyin"  value="<?php echo @$member['hunyin'];?>"/></p></td>
    <td align="center" valign="center" ><p >血型 </p>
      <p >Blood&nbsp;type </p></td>
    <td valign="center" ><p ><input class="input_text gw1" type="text" name="xuexing"  value="<?php echo @$member['xuexing'];?>"/></p></td>
  </tr>
  <tr >
    <td width="13%" rowspan="2" align="center" valign="middle" ><p >联系方式</p>
    <p >Contact </p></td>
    <td valign="center" colspan="3"  align="center"><p >电话Tel：<input class="input_text gw1" type="text" name="dianhua" style="width: 200px;" value="<?php echo @$gs1['dianhua'];?>"/> </p></td> <!-- gs1 -->
    <td valign="center" colspan="5" align="center"><p >&nbsp;&nbsp;邮件E-mail：&nbsp;&nbsp;&nbsp; <input class="input_text gw1" type="text" name="email" style="width: 200px;" value="<?php echo @$member['email'];?>"/></p></td>
  </tr>
  <tr >
    <td valign="center" colspan="3" align="center"><p >手机CP： <input class="input_text gw1" type="text" name="phone" style="width: 200px;" value="<?php echo @$member['phone'];?>"/></p></td>
    <td valign="center" colspan="5" align="center"><p >联系地址Address： <input class="input_text gw1" type="text" name="address" style="width: 200px;" value="<?php echo @$member['address'];?>"/></p></td>
  </tr>
  <tr >
    <td width="13%" align="center" valign="middle" ><p >目标</p>
    <p >Anticipation </p></td>
    <td valign="center" align="center"><p >目标职务： </p>
      <p >Position: </p></td>
    <td valign="center" colspan="2" ><p ><input class="input_text gw1" type="text" name="target_job"  value="<?php echo @$gs1['target_job'];?>"/></p></td> <!-- gs1 -->
    <td valign="center" align="center"><p >目标薪资： </p>
      <p >Salary&nbsp;expectation: </p></td>
    <td valign="center" colspan="4" ><p ><input class="input_text gw1" type="text" name="target_salary"  value="<?php echo @$gs1['target_salary'];?>"/></p></td> <!-- gs1 -->
  </tr>
  <tr >
    <td width="13%" rowspan="4" align="center" valign="middle" ><p >当前状况 </p>
      <p >Background&nbsp;</p>
      <p >Information </p></td>
    <td align="center" valign="center" ><p >毕业院校 </p>
      <p >University </p></td>
    <td valign="center" colspan="2" ><p ><input class="input_text gw1" type="text" name="school"  value="<?php echo @$member['school'];?>"/></p></td>
    <td align="center" valign="center" ><p >专业 </p>
      <p >Major </p></td>
    <td width="76" valign="center" colspan="2" ><p ><input class="input_text gw1" type="text" name="specialty"  value="<?php echo @$member['specialty'];?>"/></p></td>
    <td align="center" valign="center" ><p >工作年限 </p>
      <p >Work&nbsp;Experience </p></td>
    <td valign="center" ><p ><input class="input_text gw1" type="text" name="gznx"  value="<?php echo @$gs1['gznx'];?>"/></p></td><!-- gs1 -->
  </tr>
  <tr >
    <td align="center" valign="center" ><p >工作单位 </p>
      <p >Company </p></td>
    <td valign="center" colspan="2" ><p ><input class="input_text gw1" type="text" name="gzdw"  value="<?php echo @$gs1['gzdw'];?>"/></p></td><!-- gs1 -->
    <td align="center" valign="center" ><p >职务 </p><!-- gs1 -->
      <p >Position </p></td>
    <td width="76" valign="center" colspan="2" ><p ><input class="input_text gw1" type="text" name="job"  value="<?php echo @$gs1['job'];?>"/></p></td><!-- gs1 -->
    <td align="center" valign="center" ><p >薪资 </p><!-- gs1 -->
      <p >Salary </p></td>
    <td valign="center" ><p ><input class="input_text gw1" type="text" name="salary"  value="<?php echo @$gs1['salary'];?>"/></p></td><!-- gs1 -->
  </tr>
  <tr >
    <td align="center" valign="center" ><p >在职否？ </p></td>
    <td colspan="3" align="center" valign="center" ><p >
		<input class="input_checkbox" type="radio" name="zaizhi" value="在职" id="a" <?php if(@$gs1['zaizhi']=='在职'){echo 'checked';}?>><label for="a">在职</label>&nbsp;&nbsp;&#129;
		<input class="input_checkbox" type="radio" name="zaizhi" value="离职" id="b" <?php if(@$gs1['zaizhi']=='离职'){echo 'checked';}?>><label for="b">离职</label>
	</p></td><!-- gs1 -->
    <td width="76" colspan="2" align="center" valign="center" ><p >离职原因 </p></td>
    <td colspan="2" align="center" valign="top" ><p ><input class="input_text gw1" type="text" name="lzyy"  value="<?php echo @$gs1['lzyy'];?>"/></p></td><!-- gs1 -->
  </tr>
  <tr >
    <td align="center" valign="center" ><p >行业 </p>
      <p >Industry&nbsp;Category </p></td>
    <td valign="center" colspan="7" align="left" style="padding-left:20px;">
    	<p >
		<?php
			$qustion=array(
				1=>"IT",
				2=>"媒体",
				3=>"财务/审计",
				4=>"房地产/建筑",
				5=>"服装/纺织",
				6=>"机电/自动化",
				7=>"广告",
				8=>"化工/环保",
				9=>"教育",
				10=>"零售/批发/贸易",
				11=>"旅游",
				12=>"能源",
				13=>"汽车",
				14=>"食品/饮料",
				15=>"金融",
				16=>"运输/物流",
				17=>"医药",
				18=>"学生"
			);
			for ($i=1; $i <= count($qustion); $i++){ 
				$checked='';
				if(@$gs1['hangye']==$qustion[$i]){
					$checked='checked="checked"';
				}
				echo '<input class="input_checkbox" type="radio" name="hangye" value="'.$qustion[$i].'" '.$checked.' id="a_'.$i.'"><label for="a_'.$i.'">'.$qustion[$i].'</label>&nbsp;&nbsp;';
				if($i=='6' || $i=='13'){echo '<br/>';}
			};
			?>
        	<label for="c_6">其它：</label><input class="input_text gw1" type="text" name="hangye_qt" style="width: 100px;"  value="<?php if(!in_array(@$gs1['hangye'],$qustion)){echo @$gs1['hangye'];}?>" />
        </p></td>
  </tr>
  <tr>
    <td width="13%" align="center" valign="middle" ><p >面临问题 </p>
      <p >Current&nbsp;</p>
      <p >Challenge(s) </p></td>
    <td valign="top" colspan="8" align="left" style="padding-left:20px;" ><p>
		<?php
			$qustion2=array(
				1=>"职业定位Career positioning",
				2=>"职业转型Career Change",
				3=>"职业规划Career Planning",
				4=>"跳槽Change job",
				5=>"谋求职业Looking for job",
				6=>"专业/职业选择Choice",
				7=>"职业倦怠Career ailments",
				8=>"职业适应 Career adaptation",
				9=>"人际关系Interpersonal",
				10=>"谋求高薪Better payment",
				11=>"职业发展Career Development",
				12=>"其它 other"
			);
			$problem = @explode('#@#',$gs1['problem']);
			for ($i=1; $i <= count($qustion2); $i++){ 
				$checked='';
				if(in_array($qustion2[$i],$problem)){
					$checked='checked="checked"';
				}
				echo '<input name="problem[]" type="checkbox" class="input_checkbox" value="'.$qustion2[$i].'" '.@$checked.' id="e_'.$i.'"><label for="e_'.$i.'">'.$qustion2[$i].'</label>&nbsp;&nbsp;';
				if($i%3==0){echo '<br/>';}
			};
			?>
		</p></td>
  </tr>
  <tr >
    <td width="13%" align="center" valign="middle" ><p >职 </p>
      <p >业 </p>
      <p >发 </p>
      <p >展 </p>
      <p >调 </p>
      <p >查 </p>
      <p >&nbsp;</p>
      <p >Job </p>
      <p >Satisfaction </p>
      <p >Evaluation </p></td>
    <td valign="top" colspan="8"  class="zyfz">
    	<p>1、您是通过何种途径了解向阳生涯的？How&nbsp;do&nbsp;you&nbsp;know&nbsp;Sunward&nbsp;Career?</p>
      	<p ><textarea class="textarea"  name="zyfz1"><?php echo @$gs1['zyfz1'];?></textarea></p>
    	<p>2、有清晰的职业发展目标吗？请简述您目前职业状况及期望达成之目标。<br />&nbsp;&nbsp;Do you have a clear career target? Please describe your situation and expectation. </p>
		<p ><textarea class="textarea"  name="zyfz2"><?php echo @$gs1['zyfz2'];?></textarea></p>
		<p >3、请您简要描述您的学习及工作经历。(如附简历，请忽略3、4项) <br/>&nbsp;&nbsp;Please ignore this item if a resume is attached. </p>
		<p ><textarea class="textarea"  name="zyfz3"><?php echo @$gs1['zyfz3'];?></textarea></p>
		<p >4．您曾接受过哪些培训？What&nbsp;kind&nbsp;of&nbsp;training&nbsp;courses&nbsp;have&nbsp;you&nbsp;taken? </p>
		<?php $zyfz4 = @explode("#@#",$gs1['zyfz4']);?>
		<p >　１）<input class="input_text gw1" type="text" name="zyfz4[]"  style="width: 300px;" value="<?php echo @$zyfz4['0'];?>"/> 3）<input class="input_text gw1" type="text" name="zyfz4[]"  style="width: 300px;" value="<?php echo @$zyfz4['1'];?>"/></p>
		<p >　２）<input class="input_text gw1" type="text" name="zyfz4[]"  style="width: 300px;" value="<?php echo @$zyfz4['2'];?>"/> 4）<input class="input_text gw1" type="text" name="zyfz4[]"  style="width: 300px;" value="<?php echo @$zyfz4['3'];?>"/></p>
		<p >5、您目前遇到的最大困惑是什么？Which problems do you most concern about? </p>
		<p ><textarea class="textarea"  name="zyfz5"><?php echo @$gs1['zyfz5'];?></textarea></p>
	</td>
  </tr>
  <tr >
    <td align="center" valign="middle" colspan="9" height="50">
		<input type="hidden" name="gsid" value="<?php echo @$gs1['id'];?>"/>
		<input type="submit" value="确认提交" />
	</td>
</table>

</div>
</form>

<?php $this->load->view('footer'); ?>