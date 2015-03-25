<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />

<div id="right_1">
    <div class="r_cp_3">
      <div class="zym4" ></div>
      <div id="r_cp_6">
        <div class="zym5">
          <h1>求职能力测评详情</h1>
            <?php
                $qustion=array(
                    1=>"你不愿意和不认识的人沟通，以获取更多自己所感兴趣职业的相关信息。",
                    2=>"即便某个老板并不缺人，你也会主动向他打听，是否有其他公司需要雇人。",
                    3=>"除非你知道该公司缺人，否则你不会毛遂自荐。",
                    4=>"你不愿意直接向用人单位应征工作，而宁可通过中介公司介绍。",
                    5=>"知道有某个职位空缺时，通常不会主动去打听有关的详情，除非有认识的人。",
                    6=>"面试前，你会与该公司的职员联系，或调查用人单位的一些情况，以求获得更多有关公司状况的信息。",
                    7=>"你相信有经验的职业咨询人员，认为通过他们会更清楚自己适合什么样的工作。",
                    8=>"如果秘书告诉你老板太忙暂时无法和你面谈，你会放弃与该雇主继续联络。",
                    9=>"你认为自己符合条件，而人事部门却拒绝给你面试机会时，你会直接与老板联络。",
                    10=>"当面试官请你陈述自己的工作经验时，你只会陈述曾经实际支付过薪水的工作。",
                    11=>"你会刻意忽视自己的资历条件，这样雇主才不会认为你以高就低。",
                    12=>"面试时，你很少主动提问题。",
                    13=>"你尽量避免用电话与雇主联系，因为你担心他们可能太忙，没时间和你谈。",
                    14=>"你认为得到一个理想的工作，需要很好的运气。",
                    15=>"你宁可直接与将来的顶头上司联络，而不是只与公司的人事部接洽。",
                    16=>"你不太愿意请老师或上司帮你写推荐信。",
                    17=>"除非自己的资格条件符合应聘资格，否则你不会去应聘这个工作。",
                    18=>"如果第一次面试表现不太理想，你会要求安排第二次面谈。",
                    19=>"即使你没有被录用，你也会打电话给该雇主询问自己该如何改进，以便将来能获得同样性质的工作。",
					20=>"向朋友询问招聘信息会使你感到不自在。",
                    21=>"在决定要从事什么职业之前，你会先看看还有哪些工作机会。",
                    22=>"面试官对你说“有职位空缺时，我会与您联络的”时，你认为其实根本就没有机会了。",
                    23=>"你清楚所应聘的职位能给你带来什么，并且知道在这里所能积累的东西对下一步职业发展会有帮助。",
                    24=>"在找工作迟迟没什么结果时或就业市场不景气时，你希望抓住任何所能找到的工作。"
                );
               $width=100/count($qustion);
                for ($i=1; $i <= count($qustion); $i++) { 
                    //echo '<li class="r_cp_16" style="width:'.$width.'%" id="xqcpjd_'.$i.'"></li>';
                };
                ?>
        </div>
<style>
    .zym8{width:71%;}
    .zym9{width: 5%;}
    .mbti_title{font-size:10px;margin-top: 0px;}
</style>        
        <div class="zym10" id='zym10'>
<?php 
	//count($qustion)
	$answers=explode(',',$ceping['answer']);
    for ($i=1,$d=0; $i <=24 ; $i++,$d++) { 
        if($i==1){
            if($i!=1){$style=' style="margin-top:-1px;"';}
            echo '
                <div class="zym6aa mbti_title" '.@$style.'>
                 <div class="zym7"></div>
                    <div class="zym8"><strong>请根据下列描述，选择最符合你自身情况的答案。</strong></div>
                    <div class="zym9"><strong>不是</strong></div>
                    <div class="zym9 mbti_title"><strong>基本<br/>不是</strong></div>
                    <div class="zym9 "> <strong>不确定</strong></div>
                    <div class="zym9"> <strong>基本是</strong></div>
                    <div class="zym9"><strong>是</strong></div>
                  </div>';
        }
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
			<div class="zym8">'.$qustion[$i].'</div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_1" name="mbti'.$i.'" value="1" '.$an1.'/><label for="y_xqa_'.$i.'_1">1分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_2" name="mbti'.$i.'" value="2" '.$an2.'/><label for="y_xqa_'.$i.'_2">2分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_3" name="mbti'.$i.'" value="3" '.$an3.'/><label for="y_xqa_'.$i.'_3">3分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_4" name="mbti'.$i.'" value="4" '.$an4.'/><label for="y_xqa_'.$i.'_4">4分</label></div>
			<div class="zym9"><input type="radio" id="y_xqa_'.$i.'_5" name="mbti'.$i.'" value="5" '.$an5.'/><label for="y_xqa_'.$i.'_5">5分</label></div>
		  </div>';
    }
?>   
        </div>
      </div>
    </div>
  </div>


<!--鼠标经过的样式class="zym6b"-->
<script>
xqcpjishu=0;
document.getElementById("zymxuyao").innerHTML="0/24";
function addxqcq(obj,vid,name){
    divname=vid.replace("y_xqa_","").replace("_1","").replace("_2","").replace("_3","").replace("_4","").replace("_5","");
    var tihao = divname; 
    if(divname==1){
        document.getElementById("zymxuyao").innerHTML="1/24";
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
        document.getElementById("zymxuyao").innerHTML=tihao+"/24";
            
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
    
        document.getElementById("r_cp_21img").style.display="";
        document.getElementById("Map").style.display="";
        document.getElementById("r15fy_up").style.display="";
        document.getElementById("r15fy_down").style.display="none";
    
    if(xqjishu<1){
        document.getElementById("r15fy_up").style.display="";
    }
    //alert(xqjishu+xqcpjishu);
    if(xqcpjishu<12){
        document.getElementById("r15fy_up").style.display="none";
        alert('请完成本页所有问题1');
        return;
    }
    if(xqjishu==1 && xqcpjishu<24){
        alert('请完成本页所有问题2');
        return;
    }
    xqjishu=xqjishu+1;

    document.getElementById('zym10').scrollTop = document.getElementById('zym10').scrollTop+532;
    
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
    document.getElementById('zym10').scrollTop = document.getElementById('zym10').scrollTop-532;
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