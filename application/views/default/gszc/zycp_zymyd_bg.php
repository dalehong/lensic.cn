<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
  <div id="r_ts" >
    <div class="r_bt">职业满意度测评报告</div>
    <div class="clear"></div>
  </div>
  <div id="right_1">
    <div class="r_cp_3" style="margin-top:20px;" id="mbti_form">
      <!--<div class="r_cp_4" style="background:url(/static/ceping/timages/xq1_03.jpg) no-repeat;"></div>-->
      <div class="r_rightcp_1">
        <div class="r_rightcp_10">
    <div style="text-align:center" class="hszt">
    	<h1>【<?php echo $ceping['uname'];?>职业满意度测评报告】</h1>
    </div>
    <div class="bg_m_img">
        	<img src="http://www.xycareer.com/inc/jpg/zymyd.php?tcl=<?php echo $ceping['tcl'];?>&gzfl=<?php echo $ceping['gzfl'];?>&gzrtg=<?php echo $ceping['gzrtg'];?>&jzg=<?php echo $ceping['jzg'];?>&fzjh=<?php echo $ceping['fzjh'];?>&shd=<?php echo $ceping['shd'];?>&zwrz=<?php echo $ceping['zwrz'];?>&rjgx=<?php echo $ceping['rjgx'];?>&gztj=<?php echo $ceping['gztj'];?>&zzqf=<?php echo $ceping['zzqf'];?>">
        </div>
    <div class="h20 clear"></div>
	
        </div>
        <!--<div class="dayin"><a href="javascript:(window.print())">打 印</a> <a href="http://www.gaokaobaokao.com/franchisee/hy_phpword.php?cardid=10121004913" target="_blank">下载报告</a></div>-->
      </div>
      
    </div>
  </div>

<?php $this->load->view('footer'); ?>