<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
  <div id="r_ts" >
    <div class="r_bt">求职能力测试报告</div>
    <div class="clear"></div>
  </div>
  <div id="right_1">
    <div class="r_cp_3" style="margin-top:20px;" id="mbti_form">
      <!--<div class="r_cp_4" style="background:url(/static/ceping/timages/xq1_03.jpg) no-repeat;"></div>-->
      <div class="r_rightcp_1">
        <div class="r_rightcp_10">
    <div style="text-align:center" class="hszt">
    	<h1>【<?php echo $ceping['uname'];?>求职能力测试报告】</h1>
    </div>
    <div style="text-align:left">
    	<h2>得分：<?php echo $ceping['result'];?></h2>
    </div>
    <div class="bg_mbti">
	<?php
		if($ceping['result']>=85){
			echo '<p>恭喜你！你的求职能力超过了全国96.5%人求职者。</p>';
			echo '<p>你是个很有信心，目标感很强的人。你懂得利用任何有用的资源为自己服务，有时甚至看来不可能的事而你却常常能办到。在求职技巧方面已经很好了。如果暂时求职不顺，可能是你近期运气不佳或是缘分未到。继续加油！</p>';		
		}else if($ceping['result']>=62){
			echo '<p>你的求职能力一般。求职目标也并不坚定。常常会有一些本来很合适自己的工作却总是失之交臂。</p>';
			echo '<p>对你而言，找到一份工作其实也并非难事，但问题的关键是你是否有信心和决心在这份工作上长久地做下去，并做出显著的业绩来。回想一下先前的工作当初都是怎么进去的，又都是为什么离职的，这会对你的求职之路有所启示。</p>';		
		}else{
			echo '<p>你的求职能力显然很差，更要命的事，你的求职本身也显得很盲目。</p>';
			echo '<p>通常你的职业状况也不会很好。反省与尽快找专业人士帮你进行求职能力训练是你最须做的两件事。多数情况下，你是缺少职业定位的，没有清晰的职业规划和职业目标。</p>';			
			echo '<p>请务必记牢：就算是花一个月时间的精力和薪水来弄清楚自己最适合的职业发展方向，并找到快速得到对应工作的技巧，也比你拼命求职要强上N倍！</p>';
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