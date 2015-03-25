<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />

<div id="right_1">
    <div class="r_cp_3">
      <div class="zym4" ><h1>创业可行性自测</h1></div>
      <div id="r_cp_6">
        <div class="zym5">
          <div id="zym3">完成进度</div>
          <div id="zym2"  style="width:460px;">
            <div class="r_cp_16y">
            <?php
                $qustion=array(
                    1=>"你将创办企业的法律形式是否明确确定？",
                    2=>"你有把握筹集到创办自己企业的启动资金吗？",
                    3=>"你确定了将要出售的商品或提供的服务吗？",
                    4=>"你是否作了市场细分并确定了你的销售对象？",
                    5=>"你是否访问过10位以上的潜在的顾客，并向他们了解对你的产品或服务的意见？",
                    6=>"你知道谁是你的现实或潜在的竞争对手？",
                    7=>"你对主要竞争对手做过优势和劣势比较吗？",
                    8=>"你的开业地址确定了吗？",
                    9=>"你对销售的商品或提供的服务订出价目表了吗？",
                    10=>"你是否决定花一部分钱做些广告宣传？",
                    11=>"你对企业的促销做出了预算吗？",
                    12=>"你是否已做了一年的销售预测？",
                    13=>"你是否已根据销售预测做出了盈亏平衡分析？",
                    14=>"你对开业一年的损益状态做出了预测分析吗？",
                    15=>"你第一年的经营状况能保证不亏损吗？",
                    16=>"你制订了第一年的现金流量计划吗？",
                    17=>"你和开业有关的政府部门都接洽过吗？",
                    18=>"你如果向银行贷款是否有担保的资产？",
                    19=>"你知道需要怎样的员工及员工数量吗？",
					20=>"你知道雇用员工所必须了解的法律知识吗？",
                    21=>"你知道对员工必须承担的责任和义务吗？",
                    22=>"你知道什么是为职工缴纳的“三金”吗？",
                    23=>"你知道你的企业必须投保哪些险种吗？",
                    24=>"你是否知道你的企业需要办理“特种行业”的申办手续？",
                    25=>"你对申办企业的手续作过详尽的咨询和调查吗？",
                    26=>"你清楚你的企业必须办理哪些许可证吗？",
                    27=>"你是否为申办你的企业制订了申办流程和期限表？",
                    28=>"你对涉足的行业了解或懂行吗？",
                    29=>"你办企业是否获得家人的支持并已安排了家庭开支？",
                    30=>"你是否坚信一定能把自己的企业办好？"
                );
                $width=100/count($qustion);
                for ($i=1; $i <= count($qustion); $i++) { 
                    echo '<li class="r_cp_16" style="width:'.$width.'%" id="xqcpjd_'.$i.'"></li>';
                };
                ?>
                          </div>
          </div>
          <div class="zym1" id="zymxuyao" style="width:65px;"></div>
          <div class="zym1"  style="width:80px;">时间：15分钟</div>
        </div>
<style>
    .zym8{width:71%;}
    .zym9{width: 8%;}
    .mbti_title{font-size:12px;margin-top: 0px;}
</style>        
         <form id="form" name="form" method="post" action="" >
        <div class="zym10" id='zym10' style="overflow:hidden ;max-height:450px;">
<?php 
	//count($qustion)
    for ($i=1; $i <=30 ; $i++) { 
        if($i%10==1){
            if($i!=1){$style=' style="margin-top:-1px;"';}
            echo '
                <div class="zym6aa mbti_title" '.@$style.'>
                 <div class="zym7"></div>
                    <div class="zym8"><strong>请根据下列描述，选择最符合你自身情况的答案。</strong></div>
                    <div class="zym9"><strong>是</strong></div>
                    <div class="zym9 "> <strong>不确定</strong></div>
                    <div class="zym9"><strong>否</strong></div>
                  </div>';
        }
        if($i%2==1){
            $bgcolor="zym6";
        }else{
            $bgcolor="zym6a";
        }
		if($i>30){
			echo '<div class="'.$bgcolor.'" id="y_xqf_1"></div>';
		}else{
			echo '<div class="'.$bgcolor.'" id="y_xqf_1">
				<div class="zym7">'.$i.'</div>
				<div class="zym8">'.$qustion[$i].'</div>
				<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_1" name="mbti'.$i.'" value="3"  onclick="return addxqcq(\'xqcpjd_'.$i.'\',this.id,this.name);"/><label for="y_xqa_'.$i.'_1">是</label></div>
				<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_2" name="mbti'.$i.'" value="1"  onclick="return addxqcq(\'xqcpjd_'.$i.'\',this.id,this.name);"/><label for="y_xqa_'.$i.'_2">不确定</label></div>
				<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_3" name="mbti'.$i.'" value="0"  onclick="return addxqcq(\'xqcpjd_'.$i.'\',this.id,this.name);"/><label for="y_xqa_'.$i.'_3">否</label></div>
			  </div>';
		}
    }
?>   
        </div>
        <div class="zym11" style="width:240px;margin:20px auto 10px;">
          <div class="zym12" id="r15fy_up"> <a href="javascript:scrollup();"><img src="/static/ceping/timages/next_syy.jpg" width="103" height="34" border="0" /></a> </div>
           <img class="r_cp_21img" id="r_cp_21img" src="/static/ceping/timages/zymtj.jpg" width="103" height="34" border="0" usemap="#Map" style="display:none;" />
          <map name="Map" id="Map" style="display:none;">
            <area shape="rect" coords="1,1,77,32" href="#"  onclick="return checkxqcptijiao();"/>
          </map>
          <div class="zym12" id="r15fy_down"> <a href="javascript:scrolldown();"><img src="/static/ceping/timages/next_page.jpg" width="103" height="34" border="0" /></a> </div>
          <div class="clear"></div>
        </div>
        </form>
      </div>
    </div>
  </div>


<!--鼠标经过的样式class="zym6b"-->
<script>
xqcpjishu=0;
document.getElementById("zymxuyao").innerHTML="0/30";
function addxqcq(obj,vid,name){
    divname=vid.replace("y_xqa_","").replace("_1","").replace("_2","").replace("_3","").replace("_4","").replace("_5","");
    var tihao = divname; 
    if(divname==1){
        document.getElementById("zymxuyao").innerHTML="1/30";
    }
    if(divname!=1){
        topdividpme=parseInt(divname)-1;
        topdivid="y_xqa_"+topdividpme+"_1";        
        divname=document.getElementById(topdivid).name;        
        var v=document.getElementsByName(divname)
        var j=0
        for (var i=0;i<v.length;i++){
         if(v.item(i).checked){
           j++
         }
        }
        if(j<1){             
            //$(this).attr("checked",false);
            $('input:radio[name='+name+']').attr('checked',false);
            return checkxqcptijiao();
        }
        document.getElementById("zymxuyao").innerHTML=tihao+"/30";
            
    }
    xqcpjishu=xqcpjishu+1;
    
    document.getElementById(obj).style.background='#ed7115';
}

function show_xqcp_content(){
    document.getElementById('xqcp_content').style.display="block";  
}
xqjishu=0;
document.getElementById("r15fy_up").style.display="none";
function scrolldown(){
    if(xqjishu==1 && xqcpjishu>=20){
        document.getElementById("r_cp_21img").style.display="";
        document.getElementById("Map").style.display="";
        document.getElementById("r15fy_up").style.display="";
        document.getElementById("r15fy_down").style.display="none";
    }
    if(xqjishu<1){
        document.getElementById("r15fy_up").style.display="";
    }
    //alert(xqjishu+xqcpjishu);
    if(xqcpjishu<10){
        document.getElementById("r15fy_up").style.display="none";
        alert('请完成本页所有问题！');
        return;
    }
    if(xqjishu==1 && xqcpjishu<20){
		document.getElementById("r15fy_down").style.display="";
        alert('请完成本页所有问题!');
        return;
    }
    if(xqjishu==2 && xqcpjishu<30){
        alert('请完成本页所有问题!');
        return;
    }
    xqjishu=xqjishu+1;

    document.getElementById('zym10').scrollTop = document.getElementById('zym10').scrollTop+450;
    
}

function scrollup(){
    if(xqjishu>=1){
        xqjishu=xqjishu-1;
    }
    document.getElementById("r15fy_up").style.display="";
    document.getElementById("r_cp_21img").style.display="none";
    document.getElementById("r15fy_down").style.display="";
    if(xqjishu<1){
        document.getElementById("r15fy_up").style.display="none";
    }
    document.getElementById('zym10').scrollTop = document.getElementById('zym10').scrollTop-450;
}
function checkxqcptijiao(){
<?php 
    for ($i=1; $i <=count($qustion) ; $i++) { 
        echo 'var flag = false;
            if(form.mbti'.$i.' != null){
                var msglen=form.mbti'.$i.'.length;
                for(i=0;i<msglen;i++){
                  if(form.mbti'.$i.'[i].checked==true){
                    flag = true;
                  }
                }
            }
            if (flag == false){
                alert("对不起，请选择第'.$i.' 题")
                return;
            }';
    }
    echo 'form.submit();}';
?>

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