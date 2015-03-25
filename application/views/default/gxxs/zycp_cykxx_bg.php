<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
  <div id="r_ts" >
    <div class="r_bt">创业可行性自测报告</div>
    <div class="clear"></div>
  </div>
  <div id="right_1">
    <div class="r_cp_3" style="margin-top:20px;" id="mbti_form">
      <!--<div class="r_cp_4" style="background:url(/static/ceping/timages/xq1_03.jpg) no-repeat;"></div>-->
      <div class="r_rightcp_1">
        <div class="r_rightcp_10">
    <div style="text-align:center" class="hszt">
    	<h1>【<?php echo $ceping['uname'];?>创业可行性自测报告】</h1>
    </div>
    <div style="text-align:left;">
    	<h2>得分：<?php echo $ceping['result'];?></h2>
    </div>
    <div class="bg_mbti">
	<?php
		if($ceping['result']>=80){
			echo '<p>还等什么，抓紧行动起来吧！你创业的大好时机来了。在你的人生中，这可能是一个重大的挑战，但其中的回报也很可观。</p>';
		}else if($ceping['result']>=60){
			echo '很显然，你已经对创业作了比较多的考虑，但还有很多需要进一步准备的地方。我们要不断提醒你，创业——这应该是全世界最复杂的一种职业行为。创业有风险，投资需要谨慎。更何况你现在还有很多关键性问题没处理好。继续加油！</p>';
		}else if($ceping['result']>=40){
			echo '<p>或许你偶尔想过创业的事，但创业这事对你可能真的不怎么靠谱。还是安心做好你最擅长的工作吧。即使是你仍然想做老板，也最好干一些自由的、风险小、没有太大经济压力、甚至是业余的工作。对你而言，在公司内部创业或许是最快捷高效的一种选择。</p>';
		}else{
			echo '<p>恭喜你，创业这种高风险的事与你基本无缘。安心根据你的职业规划一步步做好眼下的工作吧，相信你在工作上的每一分投入都会有所回报。加油！</p>';
		}    	
	?>	
        
    </div>
        <!--<div class="bg_m_img">
        	<img src="http://www.xycareer.com/inc/jpg/MBTI_1.php?E=<?php echo $ceping['E'];?>&I=<?php echo $ceping['I'];?>&S=<?php echo $ceping['S'];?>&N=<?php echo $ceping['N'];?>&T=<?php echo $ceping['T'];?>&F=<?php echo $ceping['F'];?>&J=<?php echo $ceping['J'];?>&P=<?php echo $ceping['P'];?>">
            <img src="http://www.xycareer.com/inc/jpg/MBTI_2.php?A=<?php echo $ceping['E']-$ceping['I'];?>&B=<?php echo $ceping['S']-$ceping['N'];?>&C=<?php echo $ceping['T']-$ceping['F'];?>&D=<?php echo $ceping['J']-$ceping['P'];?>">
        </div>-->
    <div class="h20 clear"></div>
	
        </div>
        <!--<div class="dayin"><a href="javascript:(window.print())">打 印</a> <a href="http://www.gaokaobaokao.com/franchisee/hy_phpword.php?cardid=10121004913" target="_blank">下载报告</a></div>-->
      </div>
      
    </div>
  </div>

<?php $this->load->view('footer'); ?>