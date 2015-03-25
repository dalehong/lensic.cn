<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />
<style type="text/css">
table tr{background-color:#F6F6F6;}
#zycp_fx_form table p{margin:auto;text-indent:0;}
table  td {height:25px;}
#zycp_fx_form table .w2{width: 98%;}
.input_text {
	border: 1px solid #999;
	background-color: #fff;
	width: 45%;
}
table p{padding:5px 10px; font-size:14px;}
.t14{margin:10px auto;}
</style>

<div id="right_1">
    <div class="r_cp_3">
      <div style="font-size: 14px;text-align: left;margin: 10px auto;line-height: 23px;">
			<i><b>导语：</b></i>本问卷旨在帮助你了解自己的职业满意状况,请按照真实想法回答,答案无对错之分.请在记分栏内填写分相应的数字即可。
		</div>
		
		
		<div id="r_cp_6">
        <div class="zym5">
         <h1>职业满意度测试</h1>
            <?php
                $qustion=array(
                    1 =>"换一份新的工作，我原来学到的技能就得不到利用",
					2 =>"在目前的组织里工作，我赚不到多少钱",
					3 =>"我目前从事的工作非常有用",
					4 =>"有时我觉得自己的工作受不到重视",
					5 =>"我的工作内容与我的岗位适合",
					6 =>"我所处的组织的工作气氛非常好",
					7 =>"工作之余，我常与同事聚会",
					8 =>"我希望工作的地方离家不太远",
					9 =>"我与老板处得不好",
					10 =>"如果为自己工作，我会生活得更好些",
					11 =>"有时我觉得自己做了一份自己并不喜欢的工作",
					12 =>"如果换个工作，我应当会赚更多钱",
					13 =>"工作中要做的事对我毫无意义",
					14 =>"公司能够提供给我足够的培训",
					15 =>"如果在这个组织中待下去，我的工作会一成不变",
					16 =>"我目前的组织里有很多有趣的事情做",
					17 =>"我不太适应剧烈的变化",
					18 =>"我目前的工作让我有稳定感",
					19 =>"我的直属上司是通情达理",
					20 =>"有时候我会因为工作原因而遗忘了工作以外的任务",
					21 =>"有时我想：到其它组织里工作更合适",
					22 =>"我对目前的待遇感到满意",
					23 =>"我的工作并不能让我充分享受生活",
					24 =>"我期望不久得到升职",
					25 =>"做我目前的工作是大材小用",
					26 =>"我实在受不了组织内部部门之间的争端和矛盾",
					27 =>"我更喜欢自己单独工作",
					28 =>"我喜欢我所处的组织有很好的硬件环境",
					29 =>"工作中，有许多同事很难相处",
					30 =>"为了能够赚点钱，我得做目前的这份工作",
					31 =>"我乐意填写工作申请表去找一份新工作",
					32 =>"我的薪水与我的劳动相当",
					33 =>"我看不到我所做的事将来会有什么价值",
					34 =>"在现在的组织里，我很少有机会得到发展",
					35 =>"我的工作适量",
					36 =>"我希望我的组织的管理更民主一点儿",
					37 =>"我觉得自己非常有能力",
					38 =>"组织能提供令我满意的办公设备和条件",
					39 =>"有时候我觉得高层管理人员脱离了大部分员工",
					40 =>"我把工作当做生活，我把生活当做工作",
					41 =>"我希望变化一下职业发展的道路",
					42 =>"有没有福利，我觉得并不重要",
					43 =>"我相信我对自己的组织有很大的贡献",
					44 =>"一想到工作的前景，我就感到压抑",
					45 =>"我对自己工作的内容非常有兴趣",
					46 =>"组织太重关系，勾心斗角的事太多",
					47 =>"我喜欢与团队合作取得成绩",
					48 =>"组织有时提供旅游或奖金作为对我们工作成绩的认同",
					49 =>"工作中的同事有许多是我真正的朋友",
					50 =>"我不介意多做些额外的工作"
                );
                ?>
        </div>
<style>
    .zym8{width:59%;}
    .zym9{width: 7%;}
    .mbti_title{font-size:10px;margin-top: 0px;}
</style>   
        <div class="zym10" id='zym10' style="overflow:hidden ;">
		<div class="zym6aa mbti_title">
		 <div class="zym7"></div>
              <div class="zym8"><strong>请根据下列描述，选择最符合你自身情况的答案。</strong></div>
              <div class="zym9"><strong>不是</strong></div>
              <div class="zym9"><strong>基本不是</strong></div>
              <div class="zym9"> <strong>不确定 </strong></div>
              <div class="zym9"> <strong>基本是</strong></div>
              <div class="zym9"><strong>是</strong></div>
		  </div>
<?php 
	//count($qustion)
	$answers=explode(',',$ceping['answer']);
    for ($i=1,$d=0; $i <= count($qustion) ; $i++,$d++) {     
    	$an1=$an2=$an3=$an4=$an5='';    
        if($i%2==1){
            $bgcolor="zym6";
        }else{
            $bgcolor="zym6a";
        }
		if($answers[$d]==1){
			$an1='checked="checked"';
		}elseif($answers[$d]==2){
			$an2='checked="checked"';
		}elseif($answers[$d]==3){
			$an3='checked="checked"';
		}elseif($answers[$d]==4){
			$an4='checked="checked"';
		}elseif($answers[$d]==5){
			$an5='checked="checked"';
		}	
		echo '<div class="'.$bgcolor.'" id="y_xqf_1">
			<div class="zym7">'.$i.'</div>
			<div class="zym8">'.$qustion[$i].'。</div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_1" name="mbti'.$i.'" value="1" '.@$an1.'/><label for="y_xqa_'.$i.'_1">1分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_2" name="mbti'.$i.'" value="2" '.@$an2.'/><label for="y_xqa_'.$i.'_2">2分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_3" name="mbti'.$i.'" value="3" '.@$an3.'/><label for="y_xqa_'.$i.'_3">3分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_4" name="mbti'.$i.'" value="4" '.@$an4.'/><label for="y_xqa_'.$i.'_4">4分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_5" name="mbti'.$i.'" value="5" '.@$an5.'/><label for="y_xqa_'.$i.'_5">5分</label></div>
		  </div>';
    }
?>   
        </div>
        <!--<div class="zym11" style="width:240px;margin:20px auto 10px;">
          <div class="zym12" id="r15fy_up"> <a href="javascript:scrollup();"><img src="/static/ceping/timages/next_syy.jpg" width="103" height="34" border="0" /></a> </div>
           <img class="r_cp_21img" id="r_cp_21img" src="/static/ceping/timages/zymtj.jpg" width="103" height="34" border="0" usemap="#Map" style="display:none;" />
          <map name="Map" id="Map" style="display:none;">
            <area shape="rect" coords="1,1,77,32" href="#"  onclick="return checkxqcptijiao();"/>
          </map>
          <div class="zym12" id="r15fy_down"> <a href="javascript:scrolldown();"><img src="/static/ceping/timages/next_page.jpg" width="103" height="34" border="0" /></a> </div>
          <div class="clear"></div>
        </div>-->
      </div>
    </div>
  </div>


<!--鼠标经过的样式class="zym6b"-->
<script>
$(".zym6").mouseover(function(){
	$(this).css('backgroundColor','#afddf5');
});
$(".zym6a").mouseover(function(){
	$(this).css('backgroundColor','#afddf5');
})
$(".zym6").mouseout(function(){
	$(this).css('backgroundColor','');
});
$(".zym6a").mouseout(function(){
	$(this).css('backgroundColor','#e4f2f9');
})
</script>
<?php $this->load->view('footer'); ?>
