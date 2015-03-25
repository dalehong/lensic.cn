<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />

<div id="right_1">
    <div class="r_cp_3">
      <div class="zym4" ></div>
      <div id="r_cp_6">
        <div class="zym5">
         <h1>职业性格测评</h1>
            <?php
                $qustion=array(
                    1=>"我精力充沛",
                    2=>"我是个讲求实用的人",
                    3=>"我处事冷静、有分寸",
                    4=>"我给人的感觉是比较严肃和正统",
                    5=>"我说话比较多",
                    6=>"我注重事实依据",
                    7=>"我处事客观",
                    8=>"我非常有时间感",
                    9=>"我喜欢说出自己的想法",
                    10=>"我直言不讳",
                    11=>"我诚实直率",
                    12=>"我喜欢有个计划",
                    13=>"我喜欢与集体或朋友们在一起",
                    14=>"是什么就是什么，我从不模棱两可",
                    15=>"我是一个擅于提出批评意见的人",
                    //16=>"我喜欢先把工作做完以后再玩",
                    16=>"我喜欢先把作业或任务做完以后再玩",
                    17=>"我比较容易分心",
                    18=>"我认为抓住现在很重要",
                    19=>"只要是能有成就感的事，我就喜欢做",
                    //20=>"我希望把项目或方案完成得尽量漂亮",
					20=>"我希望把事情或方案完成得尽量漂亮",
                    21=>"我兴趣广泛",
                    22=>"我重视事物的细节",
                    23=>"我擅于通过逻辑推理和分析得出结论",
                    24=>"我做事井井有条",
                    25=>"我擅于表达自己",
                    26=>"我相信经验很重要",
                    27=>"我不自以为是",
                    28=>"一般来说，我喜欢得出明确的结果或结论",
                    29=>"我喜欢安静",
                    30=>"我喜欢不断地创新",
                    31=>"我热情、与人为善",
                    32=>"我是个有趣和随意的人",
                    33=>"我一般说话比较少",
                    34=>"我重视创意或想法",
                    35=>"我容易受到感情的伤害",
                    36=>"我的时间观念不强",
                    37=>"行动之前，我总是先想好",
                    38=>"我喜欢深思熟虑",
                    39=>"我比较敏感",
                    40=>"做什么事，我喜欢等着瞧",
                    41=>"我觉得自己一个人的时候很自在",
                    42=>"我富于幻想，爱探寻各种可能性",
                    43=>"我总是努力取悦于人",
                    //44=>"我喜欢先玩，然后工作",
                    44=>"我喜欢先玩，然后做作业或任务",
                    45=>"我注意力比较容易集中",
                    46=>"我重视并计划将来",
                    47=>"只要是能受到欣赏的事情，我就喜欢做",
                    48=>"我喜欢一个方案或项目开始时就很完美",
                    49=>"我的兴趣相对来说并不是太多",
                    50=>"我相信我的感觉",
                    51=>"我能体谅别人",
                    52=>"对这个世界，我充满了好奇",
                    53=>"我做事谨慎",
                    54=>"我不太拘泥于细节",
                    55=>"我容易触景生情",
                    56=>"我觉得做事情可以不必遵循固定的规则"
                );
                $width=100/count($qustion);
                for ($i=1; $i <= count($qustion); $i++) { 
                    //echo '<li class="r_cp_16" style="width:'.$width.'%" id="xqcpjd_'.$i.'"></li>';
                };
                ?>
        </div>
<style>
    .zym8{width:59%;}
    .zym9{width: 7%;}
    .mbti_title{font-size:10px;margin-top: 0px;}
</style>        
         <form id="form" name="form" method="post" action="" >
        <div class="zym10" id='zym10' style="overflow:hidden ;">
		<div class="zym6aa mbti_title">
		 <div class="zym7"></div>
			<div class="zym8"><strong>请根据下列描述，选择最符合你自身情况的答案。</strong></div>
			<div class="zym9 mbti_title"><strong>从来都<br/>不是这样的</strong></div>
			<div class="zym9 mbti_title"><strong>大多时候<br/>不是这样的</strong></div>
			<div class="zym9 "> <strong>说不出来</strong></div>
			<div class="zym9 mbti_title"> <strong>大多时候<br/>是这样的</strong></div>
			<div class="zym9 mbti_title"><strong>一直是<br/>这样的</strong></div>
		  </div>
<?php 
	//count($qustion)
	$answers=explode(',',$ceping['answer']);
    for ($i=1,$d=0; $i <= count($qustion) ; $i++,$d++) {         
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
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_1" name="mbti'.$i.'" value="1" '.$an1.'/><label for="y_xqa_'.$i.'_1">1分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_2" name="mbti'.$i.'" value="2" '.$an2.'/><label for="y_xqa_'.$i.'_2">2分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_3" name="mbti'.$i.'" value="3" '.$an3.'/><label for="y_xqa_'.$i.'_3">3分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_4" name="mbti'.$i.'" value="4" '.$an4.'/><label for="y_xqa_'.$i.'_4">4分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_5" name="mbti'.$i.'" value="5" '.$an5.'/><label for="y_xqa_'.$i.'_5">5分</label></div>
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
        </form>
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
