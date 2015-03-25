<?php $this->load->view('header'); ?>
<style>
#area1{width:auto;height:183px; BACKGROUND: url(images/ceping/ad-1.jpg) no-repeat 50% 0px;clear:both; }
#ceping_nav{width:1016px; height:30px; margin-left:auto; margin-right:auto; font-size:14px; line-height:30px;}
#ceping_top{ margin-left:auto; margin-right:auto; width:1016px; height:auto;}
#news_img{width:auto; height:auto; margin-left:auto; margin-right:auto;}
#news_content_content{width:width:auto;height:auto; margin-left:auto; margin-right:auto; line-height:24px;}
#news_title{margin-left:150px;}
##ceping_content dl{clear:both;}
#ceping_content dd{clear:both;width:auto;height:auto; padding-left:10px; }
#ceping_content span{float:right;padding-right:0px;}
.bg1{height:40px; line-height:40px; background-color:#f7f7f7;}
.bg2{height:40px; line-height:40px; background-color:#ffffff;}
.m10{ margin-top:10px;}
.m40{ margin-top:40px;}
h2{font-size:20px;}
h3{ font-family:"微软雅黑"; font-size:15px; height:30px;}
.but{color:#666666; border:1px solid #ccc; background:#fff;cursor:pointer;height:25px; line-height:25px;width:80px;}
/*进度度*/
.checkbox{margin:5px auto; background:#ffffff; padding:15px; width:600px;}
.progress,.evaluation{color:#66666;height:auto;overflow:hidden;width:598px;margin:0 auto;padding:10px 0 10px 0;}
.evaluation div{float:left;}
.progress i{color:#f7f7f7;font-weight:700; font-style:normal;}
.progress p{height:26px;width:100%;}
.progress .picbg{clear:both;background:#fff;height:27px;width:590px; border:1px solid #ebebeb; line-height:27px;}
.progress .picbg span{background:#ff4045;display:block;float:left;height:27px; line-height:27px; }
/*问答内容*/
.Test ul{ margin:0; padding:0;}
.Test li{margin-bottom:4px; cursor:pointer; width:100%; height:30px; line-height:30px; padding-left:5px; }
.Test li.myBox{ border:1px solid #e7e7e7;background:#f7f7f7;}
#Problem1,#Problem2,#Problem3{}
.hidden{ display:none;}
#Result p{ margin:8px; padding:8px; line-height:25px;background:#FFF; width:560px; border:1px dotted #FF8E20;}

</style>

<div id="ceping_content">
<!--#测试题写在这里-->
<form name="radioform" action="" method="post">
<div class="Test">
 <div id="Problem1" style="display: none;">
    <h3>问题:1、R：实际型活动 </h3>
    <ul>
       <li onclick="setcheckvale('q1[]',0);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;装配修理电器或玩具</li>
       <li onclick="setcheckvale('q1[]',1);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;修理自行车</li>
       <li onclick="setcheckvale('q1[]',2);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;用木头做东西</li>
       <li onclick="setcheckvale('q1[]',3);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;开汽车或摩托车</li>
       <li onclick="setcheckvale('q1[]',4);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;用机器做东西</li>
       <li onclick="setcheckvale('q1[]',5);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;参加木工技术学习班</li>
       <li onclick="setcheckvale('q1[]',6);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;参加制图描图学习班</li>
       <li onclick="setcheckvale('q1[]',7);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;驾驶卡车或拖拉机</li>
       <li onclick="setcheckvale('q1[]',8);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;参加机械和电气学习班</li>
       <li onclick="setcheckvale('q1[]',9);" class=""><input name="q1[]" type="checkbox" value="1">&nbsp;装配修理机器</li>
    </ul>
        <input type="button" class="but" value="下一步">
    
    </div>
    <div id="Problem2" class="hidden" style="display: block;">
    <h3>问题:2、S：社会型活动 </h3>
    <ul>
       <li onclick="setcheckvale('q2[]',0);"><input name="q2[]" type="checkbox" value="1">&nbsp;或单位组织的正式活动</li>
       <li onclick="setcheckvale('q2[]',1);"><input name="q2[]" type="checkbox" value="1">&nbsp;参加某个社会团体或俱乐部活动</li>
       <li onclick="setcheckvale('q2[]',2);"><input name="q2[]" type="checkbox" value="1">&nbsp;帮助别人解决困难</li>
       <li onclick="setcheckvale('q2[]',3);"><input name="q2[]" type="checkbox" value="1">&nbsp;照顾儿童</li>
       <li onclick="setcheckvale('q2[]',4);"><input name="q2[]" type="checkbox" value="1">&nbsp;出席晚会、联欢会、茶话会</li>
       <li onclick="setcheckvale('q2[]',5);"><input name="q2[]" type="checkbox" value="1">&nbsp;和大家一起出去郊游</li>
       <li onclick="setcheckvale('q2[]',6);"><input name="q2[]" type="checkbox" value="1">&nbsp;想获得关于心理方面的知识</li>
       <li onclick="setcheckvale('q2[]',7);"><input name="q2[]" type="checkbox" value="1">&nbsp;参加讲座会或辩论会</li>
       <li onclick="setcheckvale('q2[]',8);"><input name="q2[]" type="checkbox" value="1">&nbsp;观看或参加体育比赛和运动会</li>
       <li onclick="setcheckvale('q2[]',9);"><input name="q2[]" type="checkbox" value="1">&nbsp;结交新朋友</li>
   </ul>
        <input type="button" class="but" value="下一步">

   </div>
   
   <div id="Problem3" class="hidden">
        <h3>问题:3、研究型活动</h3>
        
     <ul>
<li onclick="setcheckvale('q3[]',0);"><input name="q3[]" type="checkbox" value="1">&nbsp;阅读科技图书或杂志</li>
<li onclick="setcheckvale('q3[]',1);"><input name="q3[]" type="checkbox" value="1">&nbsp;在实验室工作</li>
<li onclick="setcheckvale('q3[]',2);"><input name="q3[]" type="checkbox" value="1">&nbsp;改良水果品种，培育新的水果</li>
<li onclick="setcheckvale('q3[]',3);"><input name="q3[]" type="checkbox" value="1">&nbsp;调查了解土和金属等物质的成份</li>
<li onclick="setcheckvale('q3[]',4);"><input name="q3[]" type="checkbox" value="1">&nbsp;研究自己选择的特殊问题</li>
<li onclick="setcheckvale('q3[]',5);"><input name="q3[]" type="checkbox" value="1">&nbsp;解算术或数学游戏</li>
<li onclick="setcheckvale('q3[]',6);"><input name="q3[]" type="checkbox" value="1">&nbsp;物理课</li>
<li onclick="setcheckvale('q3[]',7);"><input name="q3[]" type="checkbox" value="1">&nbsp;化学课</li>
<li onclick="setcheckvale('q3[]',8);"><input name="q3[]" type="checkbox" value="1">&nbsp;几何课</li>
<li onclick="setcheckvale('q3[]',9);"><input name="q3[]" type="checkbox" value="1">&nbsp;生物课</li>


     </ul>
 <input type="button" class="but" value="下一步">
        
   </div>
   
   <div id="Problem4" class="hidden">
        <h3>问题:4、E：事业型活动</h3>
        
<ul>
<li onclick="setcheckvale('q4[]',0);"><input name="q4[]" type="checkbox" value="1">&nbsp;鼓动他人</li>
<li onclick="setcheckvale('q4[]',1);"><input name="q4[]" type="checkbox" value="1">&nbsp;卖东西</li>
<li onclick="setcheckvale('q4[]',2);"><input name="q4[]" type="checkbox" value="1">&nbsp;谈论政治</li>
<li onclick="setcheckvale('q4[]',3);"><input name="q4[]" type="checkbox" value="1">&nbsp;制定计划、参加会议</li>
<li onclick="setcheckvale('q4[]',4);"><input name="q4[]" type="checkbox" value="1">&nbsp;以自己的意志影响别人的行为</li>
<li onclick="setcheckvale('q4[]',5);"><input name="q4[]" type="checkbox" value="1">&nbsp;在社会团体中担任职务</li>
<li onclick="setcheckvale('q4[]',6);"><input name="q4[]" type="checkbox" value="1">&nbsp;检查与评价别人的工作</li>
<li onclick="setcheckvale('q4[]',7);"><input name="q4[]" type="checkbox" value="1">&nbsp;结交名流</li>
<li onclick="setcheckvale('q4[]',8);"><input name="q4[]" type="checkbox" value="1">&nbsp;指导有某种目标的团体</li>
<li onclick="setcheckvale('q4[]',9);"><input name="q4[]" type="checkbox" value="1">&nbsp;参与政治活动</li>

</ul>
 <input type="button" class="but" value="下一步">
        
   </div>
   
   <div id="Problem5" class="hidden">
        <h3>问题:5、艺术型活动</h3>
        
 <ul>
<li onclick="setcheckvale('q5[]',0);"><input name="q5[]" type="checkbox" value="1">&nbsp;素描/制图或绘画</li>
<li onclick="setcheckvale('q5[]',1);"><input name="q5[]" type="checkbox" value="1">&nbsp;参加话剧/戏剧</li>
<li onclick="setcheckvale('q5[]',2);"><input name="q5[]" type="checkbox" value="1">&nbsp;设计家具/布置室内</li>
<li onclick="setcheckvale('q5[]',3);"><input name="q5[]" type="checkbox" value="1">&nbsp;练习乐器/参加乐队</li>
<li onclick="setcheckvale('q5[]',4);"><input name="q5[]" type="checkbox" value="1">&nbsp;欣赏音乐或戏剧</li>
<li onclick="setcheckvale('q5[]',5);"><input name="q5[]" type="checkbox" value="1">&nbsp;看小说/读剧本</li>
<li onclick="setcheckvale('q5[]',6);"><input name="q5[]" type="checkbox" value="1">&nbsp;从事摄影创作</li>
<li onclick="setcheckvale('q5[]',7);"><input name="q5[]" type="checkbox" value="1">&nbsp;写诗或吟诗</li>
<li onclick="setcheckvale('q5[]',8);"><input name="q5[]" type="checkbox" value="1">&nbsp;进艺术（美术/音乐）培训班练习书法</li>
<li onclick="setcheckvale('q5[]',9);"><input name="q5[]" type="checkbox" value="1">&nbsp;练习书法</li>
 
 

 </ul>
 <input type="button" class="but" value="下一步">
        
   </div>
   
   <div id="Problem6" class="hidden">
 <h3>问题:6、常规型(传统型)活动</h3>
<ul>
<li onclick="setcheckvale('q6[]',0);"><input name="q6[]" type="checkbox" value="1">&nbsp;整理好桌面与房间</li>
<li onclick="setcheckvale('q6[]',1);"><input name="q6[]" type="checkbox" value="1">&nbsp;抄写文件和信件</li>
<li onclick="setcheckvale('q6[]',2);"><input name="q6[]" type="checkbox" value="1">&nbsp;为领导写报告或公务信函</li>
<li onclick="setcheckvale('q6[]',3);"><input name="q6[]" type="checkbox" value="1">&nbsp;检查个人收支情况</li>
<li onclick="setcheckvale('q6[]',4);"><input name="q6[]" type="checkbox" value="1">&nbsp;打字培训班</li>
<li onclick="setcheckvale('q6[]',5);"><input name="q6[]" type="checkbox" value="1">&nbsp;参加算盘、文秘等实务培训</li>
<li onclick="setcheckvale('q6[]',6);"><input name="q6[]" type="checkbox" value="1">&nbsp;参加商业会计培训班</li>
<li onclick="setcheckvale('q6[]',7);"><input name="q6[]" type="checkbox" value="1">&nbsp;参加情报处理培训班</li>
<li onclick="setcheckvale('q6[]',8);"><input name="q6[]" type="checkbox" value="1">&nbsp;整理信件、报告、记录等</li>
<li onclick="setcheckvale('q6[]',9);"><input name="q6[]" type="checkbox" value="1">&nbsp;写商业贸易信</li>

</ul>
 <input type="button" class="but" value="下一步">
        
   </div>
   
   <div id="Problem7" class="hidden">
        <h3>问题:7、R：实际型能力 </h3>
        
<ul>
<li onclick="setcheckvale('q7[]',0);"><input name="q7[]" type="checkbox" value="1">&nbsp;能使用电锯、电钻和锉刀等木工工具</li>
<li onclick="setcheckvale('q7[]',1);"><input name="q7[]" type="checkbox" value="1">&nbsp;知道万用电表的使用方法</li>
<li onclick="setcheckvale('q7[]',2);"><input name="q7[]" type="checkbox" value="1">&nbsp;能够修理自行车或其它机械</li>
<li onclick="setcheckvale('q7[]',3);"><input name="q7[]" type="checkbox" value="1">&nbsp;能够使用电钻订、磨床或缝纫机</li>
<li onclick="setcheckvale('q7[]',4);"><input name="q7[]" type="checkbox" value="1">&nbsp;能给家具和木制品刷漆</li>
<li onclick="setcheckvale('q7[]',5);"><input name="q7[]" type="checkbox" value="1">&nbsp;能看建筑设计图</li>
<li onclick="setcheckvale('q7[]',6);"><input name="q7[]" type="checkbox" value="1">&nbsp;能够修理简单的电气用品</li>
<li onclick="setcheckvale('q7[]',7);"><input name="q7[]" type="checkbox" value="1">&nbsp;能修理家具</li>
<li onclick="setcheckvale('q7[]',8);"><input name="q7[]" type="checkbox" value="1">&nbsp;能修理收录机</li>
<li onclick="setcheckvale('q7[]',9);"><input name="q7[]" type="checkbox" value="1">&nbsp;能简单地修理水管</li>
</ul>
 <input type="button" class="but" value="下一步">
        
   </div>
   
    <div id="Problem8" class="hidden">
        <h3>问题:8、社会型能力</h3>
    
<ul>
<li onclick="setcheckvale('q8[]',0);"><input name="q8[]" type="checkbox" value="1">&nbsp;有向各种人说明解释的能力</li>
<li onclick="setcheckvale('q8[]',1);"><input name="q8[]" type="checkbox" value="1">&nbsp;常参加社会福利活动</li>
<li onclick="setcheckvale('q8[]',2);"><input name="q8[]" type="checkbox" value="1">&nbsp;能和大家一起友好相处地工作</li>
<li onclick="setcheckvale('q8[]',3);"><input name="q8[]" type="checkbox" value="1">&nbsp;善于与年长者相处</li>
<li onclick="setcheckvale('q8[]',4);"><input name="q8[]" type="checkbox" value="1">&nbsp;会邀请人、招待人</li>
<li onclick="setcheckvale('q8[]',5);"><input name="q8[]" type="checkbox" value="1">&nbsp;能简单易懂地教育儿童</li>
<li onclick="setcheckvale('q8[]',6);"><input name="q8[]" type="checkbox" value="1">&nbsp;能安排会议等活动顺序</li>
<li onclick="setcheckvale('q8[]',7);"><input name="q8[]" type="checkbox" value="1">&nbsp;善于体察人心和帮助他人</li>
<li onclick="setcheckvale('q8[]',8);"><input name="q8[]" type="checkbox" value="1">&nbsp;帮助护理病人和伤员</li>
<li onclick="setcheckvale('q8[]',9);"><input name="q8[]" type="checkbox" value="1">&nbsp;安排社团组织的各种事务</li>


</ul>
 <input type="button" class="but" value="下一步">
        
   </div>
   
    <div id="Problem9" class="hidden">
        <h3>问题:9、研究型能力</h3>
        
<ul>
<li onclick="setcheckvale('q9[]',0);"><input name="q9[]" type="checkbox" value="1">&nbsp;懂得真空管或晶体管的作用</li>
<li onclick="setcheckvale('q9[]',1);"><input name="q9[]" type="checkbox" value="1">&nbsp;能够列举三种蛋白质多的食品</li>
<li onclick="setcheckvale('q9[]',2);"><input name="q9[]" type="checkbox" value="1">&nbsp;理解铀的裂变</li>
<li onclick="setcheckvale('q9[]',3);"><input name="q9[]" type="checkbox" value="1">&nbsp;能用计算尺、计算器、对数表</li>
<li onclick="setcheckvale('q9[]',4);"><input name="q9[]" type="checkbox" value="1">&nbsp;会使用显微镜</li>
<li onclick="setcheckvale('q9[]',5);"><input name="q9[]" type="checkbox" value="1">&nbsp;能找到三个星座</li>
<li onclick="setcheckvale('q9[]',6);"><input name="q9[]" type="checkbox" value="1">&nbsp;能独立进行调查研究</li>
<li onclick="setcheckvale('q9[]',7);"><input name="q9[]" type="checkbox" value="1">&nbsp;能解释简单的化学</li>
<li onclick="setcheckvale('q9[]',8);"><input name="q9[]" type="checkbox" value="1">&nbsp;能理解人造卫星为什么不落地</li>
<li onclick="setcheckvale('q9[]',9);"><input name="q9[]" type="checkbox" value="1">&nbsp;经常参加学术的会议</li>
</ul>
 <input type="button" class="but" value="下一步">
    
   </div>
    <div id="Problem10" class="hidden">
        <h3>问题:10、事业型能力</h3>
 <ul>
<li onclick="setcheckvale('q10[]',0);"><input name="q10[]" type="checkbox" value="1">&nbsp;担任过学生干部并且干得不错</li>
<li onclick="setcheckvale('q10[]',1);"><input name="q10[]" type="checkbox" value="1">&nbsp;工作上能指导和监督他人</li>
<li onclick="setcheckvale('q10[]',2);"><input name="q10[]" type="checkbox" value="1">&nbsp;做事充满活力和热情</li>
<li onclick="setcheckvale('q10[]',3);"><input name="q10[]" type="checkbox" value="1">&nbsp;有效利用自身的做法调动他人</li>
<li onclick="setcheckvale('q10[]',4);"><input name="q10[]" type="checkbox" value="1">&nbsp;销售能力强</li>
<li onclick="setcheckvale('q10[]',5);"><input name="q10[]" type="checkbox" value="1">&nbsp;曾作为俱乐部或社团的负责人</li>
<li onclick="setcheckvale('q10[]',6);"><input name="q10[]" type="checkbox" value="1">&nbsp;向领导提出建议或反映意见</li>
<li onclick="setcheckvale('q10[]',7);"><input name="q10[]" type="checkbox" value="1">&nbsp;有开创事业的能力</li>
<li onclick="setcheckvale('q10[]',8);"><input name="q10[]" type="checkbox" value="1">&nbsp;知道怎样做能成为一个优秀的领导者</li>
<li onclick="setcheckvale('q10[]',9);"><input name="q10[]" type="checkbox" value="1">&nbsp;健谈善辩</li>
 </ul>
 <input type="button" class="but" value="下一步">
    
   </div>
   
  <div id="Problem11" class="hidden">
        <h3>问题:11、艺术型能力</h3>
    
<ul>
<li onclick="setcheckvale('q11[]',0);"><input name="q11[]" type="checkbox" value="1">&nbsp;能演奏乐器</li>
<li onclick="setcheckvale('q11[]',1);"><input name="q11[]" type="checkbox" value="1">&nbsp;能参加二部或四部合唱</li>
<li onclick="setcheckvale('q11[]',2);"><input name="q11[]" type="checkbox" value="1">&nbsp;独唱或独奏</li>
<li onclick="setcheckvale('q11[]',3);"><input name="q11[]" type="checkbox" value="1">&nbsp;扮演剧中角色</li>
<li onclick="setcheckvale('q11[]',4);"><input name="q11[]" type="checkbox" value="1">&nbsp;能创作简单的乐曲</li>
<li onclick="setcheckvale('q11[]',5);"><input name="q11[]" type="checkbox" value="1">&nbsp;会跳舞</li>
<li onclick="setcheckvale('q11[]',6);"><input name="q11[]" type="checkbox" value="1">&nbsp;能绘画、素描或书法</li>
<li onclick="setcheckvale('q11[]',7);"><input name="q11[]" type="checkbox" value="1">&nbsp;能雕刻、剪纸或泥塑</li>
<li onclick="setcheckvale('q11[]',8);"><input name="q11[]" type="checkbox" value="1">&nbsp;能设计板报、服装或家具</li>
<li onclick="setcheckvale('q11[]',9);"><input name="q11[]" type="checkbox" value="1">&nbsp;能写一手好文章</li>

</ul>
 <input type="button" class="but" value="下一步">
    
   </div>
   
   <div id="Problem12" class="hidden">
        <h3>问题:12、常规型能力</h3>
<ul>
<li onclick="setcheckvale('q12[]',0);"><input name="q12[]" type="checkbox" value="1">&nbsp;会熟练的打印中文</li>
<li onclick="setcheckvale('q12[]',1);"><input name="q12[]" type="checkbox" value="1">&nbsp;会用外文打字机或复印机</li>
<li onclick="setcheckvale('q12[]',2);"><input name="q12[]" type="checkbox" value="1">&nbsp;能快速记笔记和抄写文章</li>
<li onclick="setcheckvale('q12[]',3);"><input name="q12[]" type="checkbox" value="1">&nbsp;善于整理保管文件和资料</li>
<li onclick="setcheckvale('q12[]',4);"><input name="q12[]" type="checkbox" value="1">&nbsp;善于从事事务性的工作</li>
<li onclick="setcheckvale('q12[]',5);"><input name="q12[]" type="checkbox" value="1">&nbsp;会用算盘</li>
<li onclick="setcheckvale('q12[]',6);"><input name="q12[]" type="checkbox" value="1">&nbsp;能在短时间内分类和处理大量文件</li>
<li onclick="setcheckvale('q12[]',7);"><input name="q12[]" type="checkbox" value="1">&nbsp;能使用计算机</li>
<li onclick="setcheckvale('q12[]',8);"><input name="q12[]" type="checkbox" value="1">&nbsp;能搜集数据</li>
<li onclick="setcheckvale('q12[]',9);"><input name="q12[]" type="checkbox" value="1">&nbsp;善于为自己或集体做财务预算表</li>
</ul>
 <input type="button" class="but" value="下一步">

   </div>
<div id="Problem13" class="hidden">
<h3>问题:13、R：实际型职业</h3>
 <ul>
<li onclick="setcheckvale('q13[]',0);"><input name="q13[]" type="checkbox" value="1">&nbsp;飞机机械师</li>
<li onclick="setcheckvale('q13[]',1);"><input name="q13[]" type="checkbox" value="1">&nbsp;野生动物专家</li>
<li onclick="setcheckvale('q13[]',2);"><input name="q13[]" type="checkbox" value="1">&nbsp;汽车维修工</li>
<li onclick="setcheckvale('q13[]',3);"><input name="q13[]" type="checkbox" value="1">&nbsp;木匠</li>
<li onclick="setcheckvale('q13[]',4);"><input name="q13[]" type="checkbox" value="1">&nbsp;测量工程师</li>
<li onclick="setcheckvale('q13[]',5);"><input name="q13[]" type="checkbox" value="1">&nbsp;无线电报务员</li>
<li onclick="setcheckvale('q13[]',6);"><input name="q13[]" type="checkbox" value="1">&nbsp;园艺师</li>
<li onclick="setcheckvale('q13[]',7);"><input name="q13[]" type="checkbox" value="1">&nbsp;长途公共汽车司机</li>
<li onclick="setcheckvale('q13[]',8);"><input name="q13[]" type="checkbox" value="1">&nbsp;电工</li>
<li onclick="setcheckvale('q13[]',9);"><input name="q13[]" type="checkbox" value="1">&nbsp;火车司机</li>
</ul>
 <input type="button" class="but" value="下一步">

   </div>
<div id="Problem14" class="hidden">
        <h3>问题:14、S：社会型职业</h3>  
<ul>
<li onclick="setcheckvale('q14[]',0);"><input name="q14[]" type="checkbox" value="1">&nbsp;街道、工会或妇联干部</li>
<li onclick="setcheckvale('q14[]',1);"><input name="q14[]" type="checkbox" value="1">&nbsp;小学、中学教师</li>
<li onclick="setcheckvale('q14[]',2);"><input name="q14[]" type="checkbox" value="1">&nbsp;精神病医生</li>
<li onclick="setcheckvale('q14[]',3);"><input name="q14[]" type="checkbox" value="1">&nbsp;婚姻介绍所工作人员</li>
<li onclick="setcheckvale('q14[]',4);"><input name="q14[]" type="checkbox" value="1">&nbsp;体育教练</li>
<li onclick="setcheckvale('q14[]',5);"><input name="q14[]" type="checkbox" value="1">&nbsp;福利机构负责人</li>
<li onclick="setcheckvale('q14[]',6);"><input name="q14[]" type="checkbox" value="1">&nbsp;心理咨询师</li>
<li onclick="setcheckvale('q14[]',7);"><input name="q14[]" type="checkbox" value="1">&nbsp;共青团干部</li>
<li onclick="setcheckvale('q14[]',8);"><input name="q14[]" type="checkbox" value="1">&nbsp;导游</li>
<li onclick="setcheckvale('q14[]',9);"><input name="q14[]" type="checkbox" value="1">&nbsp;国家机关工作人员</li>
</ul>
 <input type="button" class="but" value="下一步">
    
   </div>   
   
<div id="Problem15" class="hidden">
        <h3>问题:15、研究型职业 </h3>
<ul>
<li onclick="setcheckvale('q15[]',0);"><input name="q15[]" type="checkbox" value="1">&nbsp;气象学或天文学者</li>
<li onclick="setcheckvale('q15[]',1);"><input name="q15[]" type="checkbox" value="1">&nbsp;生物学者</li>
<li onclick="setcheckvale('q15[]',2);"><input name="q15[]" type="checkbox" value="1">&nbsp;医学实验室的技术人员</li>
<li onclick="setcheckvale('q15[]',3);"><input name="q15[]" type="checkbox" value="1">&nbsp;人类学者</li>
<li onclick="setcheckvale('q15[]',4);"><input name="q15[]" type="checkbox" value="1">&nbsp;动物学者</li>
<li onclick="setcheckvale('q15[]',5);"><input name="q15[]" type="checkbox" value="1">&nbsp;化学者</li>
<li onclick="setcheckvale('q15[]',6);"><input name="q15[]" type="checkbox" value="1">&nbsp;数学者</li>
<li onclick="setcheckvale('q15[]',7);"><input name="q15[]" type="checkbox" value="1">&nbsp;科学杂志的编辑或作家</li>
<li onclick="setcheckvale('q15[]',8);"><input name="q15[]" type="checkbox" value="1">&nbsp;地质学者</li>
<li onclick="setcheckvale('q15[]',9);"><input name="q15[]" type="checkbox" value="1">&nbsp;物理学者</li>
</ul>
 <input type="button" class="but" value="下一步">
    
</div>   

<div id="Problem16" class="hidden">
        <h3>问题:16、事业型职业</h3>
 <ul>
<li onclick="setcheckvale('q16[]',0);"><input name="q16[]" type="checkbox" value="1">&nbsp;厂长</li>
<li onclick="setcheckvale('q16[]',1);"><input name="q16[]" type="checkbox" value="1">&nbsp;电视剧/电影制片人</li>
<li onclick="setcheckvale('q16[]',2);"><input name="q16[]" type="checkbox" value="1">&nbsp;公司经理</li>
<li onclick="setcheckvale('q16[]',3);"><input name="q16[]" type="checkbox" value="1">&nbsp;销售员</li>
<li onclick="setcheckvale('q16[]',4);"><input name="q16[]" type="checkbox" value="1">&nbsp;不动产推销员</li>
<li onclick="setcheckvale('q16[]',5);"><input name="q16[]" type="checkbox" value="1">&nbsp;广告部长(经理)</li>
<li onclick="setcheckvale('q16[]',6);"><input name="q16[]" type="checkbox" value="1">&nbsp;体育活动主办者</li>
<li onclick="setcheckvale('q16[]',7);"><input name="q16[]" type="checkbox" value="1">&nbsp;销售部长(经理)</li>
<li onclick="setcheckvale('q16[]',8);"><input name="q16[]" type="checkbox" value="1">&nbsp;个体工商业者</li>
<li onclick="setcheckvale('q16[]',9);"><input name="q16[]" type="checkbox" value="1">&nbsp;企业管理咨询人员</li>
</ul>
 <input type="button" class="but" value="下一步">
        
</div>  

<div id="Problem17" class="hidden">
        <h3>问题:17、我比较容易分心</h3>
        
<ul>
<li onclick="setcheckvale('q17[]',0);"><input name="q17[]" type="checkbox" value="1">&nbsp;乐队指挥</li>
<li onclick="setcheckvale('q17[]',1);"><input name="q17[]" type="checkbox" value="1">&nbsp;演奏家</li>
<li onclick="setcheckvale('q17[]',2);"><input name="q17[]" type="checkbox" value="1">&nbsp;作家</li>
<li onclick="setcheckvale('q17[]',3);"><input name="q17[]" type="checkbox" value="1">&nbsp;摄影家</li>
<li onclick="setcheckvale('q17[]',4);"><input name="q17[]" type="checkbox" value="1">&nbsp;记者</li>
<li onclick="setcheckvale('q17[]',5);"><input name="q17[]" type="checkbox" value="1">&nbsp;画家、书法家</li>
<li onclick="setcheckvale('q17[]',6);"><input name="q17[]" type="checkbox" value="1">&nbsp;歌唱家</li>
<li onclick="setcheckvale('q17[]',7);"><input name="q17[]" type="checkbox" value="1">&nbsp;作曲家</li>
<li onclick="setcheckvale('q17[]',8);"><input name="q17[]" type="checkbox" value="1">&nbsp;电影电视演员</li>
<li onclick="setcheckvale('q17[]',9);"><input name="q17[]" type="checkbox" value="1">&nbsp;电视节目主持人</li>


</ul>
 <input type="button" class="but" value="下一步">
    
</div>   

<div id="Problem18" class="hidden">
        <h3>问题:18、常规型职业</h3>
        
<ul>
<li onclick="setcheckvale('q18[]',0);"><input name="q18[]" type="checkbox" value="1">&nbsp;会计师</li>
<li onclick="setcheckvale('q18[]',1);"><input name="q18[]" type="checkbox" value="1">&nbsp;银行出纳员</li>
<li onclick="setcheckvale('q18[]',2);"><input name="q18[]" type="checkbox" value="1">&nbsp;税收管理员</li>
<li onclick="setcheckvale('q18[]',3);"><input name="q18[]" type="checkbox" value="1">&nbsp;计算机操作员</li>
<li onclick="setcheckvale('q18[]',4);"><input name="q18[]" type="checkbox" value="1">&nbsp;薄记人员</li>
<li onclick="setcheckvale('q18[]',5);"><input name="q18[]" type="checkbox" value="1">&nbsp;成本核算员</li>
<li onclick="setcheckvale('q18[]',6);"><input name="q18[]" type="checkbox" value="1">&nbsp;文书档案管理员</li>
<li onclick="setcheckvale('q18[]',7);"><input name="q18[]" type="checkbox" value="1">&nbsp;打字员</li>
<li onclick="setcheckvale('q18[]',8);"><input name="q18[]" type="checkbox" value="1">&nbsp;法庭书记员</li>
<li onclick="setcheckvale('q18[]',9);"><input name="q18[]" type="checkbox" value="1">&nbsp;人员普查登记员</li>


</ul>
 <input type="button" class="but" value="下一步">
    
</div>  

<div id="Problem19" class="hidden">
        <h3>问题:19、R型 机械操作能力</h3>
        
<ul>
       <li onclick="setradiovale('q19',0,19);"><input name="q19" type="radio" value="7">&nbsp;7分</li>
       <li onclick="setradiovale('q19',1,19);"><input name="q19" type="radio" value="6">&nbsp;6分</li>
       <li onclick="setradiovale('q19',2,19);"><input name="q19" type="radio" value="5">&nbsp;5分</li>
       <li onclick="setradiovale('q19',3,19);"><input name="q19" type="radio" value="4">&nbsp;4分</li>
       <li onclick="setradiovale('q19',4,19);"><input name="q19" type="radio" value="3">&nbsp;3分</li>
       <li onclick="setradiovale('q19',5,19);"><input name="q19" type="radio" value="2">&nbsp;2分</li>
       <li onclick="setradiovale('q19',6,19);"><input name="q19" type="radio" value="1">&nbsp;1分</li>
 </ul>
 <input type="button" id="button19" class="but" value="下一步" style="visibility:hidden">
        
</div> 

<div id="Problem20" class="hidden">
        <h3>问题:20、I型 科学研究能力</h3>
    
<ul>
       <li onclick="setradiovale('q20',0,20);"><input name="q20" type="radio" value="7">&nbsp;7分</li>
       <li onclick="setradiovale('q20',1,20);"><input name="q20" type="radio" value="6">&nbsp;6分</li>
       <li onclick="setradiovale('q20',2,20);"><input name="q20" type="radio" value="5">&nbsp;5分</li>
       <li onclick="setradiovale('q20',3,20);"><input name="q20" type="radio" value="4">&nbsp;4分</li>
       <li onclick="setradiovale('q20',4,20);"><input name="q20" type="radio" value="3">&nbsp;3分</li>
       <li onclick="setradiovale('q20',5,20);"><input name="q20" type="radio" value="2">&nbsp;2分</li>
       <li onclick="setradiovale('q20',6,20);"><input name="q20" type="radio" value="1">&nbsp;1分</li>
</ul>
 <input type="button" id="button20" class="but" value="下一步" style="visibility:hidden">
        
</div> 

<div id="Problem21" class="hidden">
        <h3>问题:21、A型 艺术创作能力</h3>
        
     <ul>
<li onclick="setradiovale('q21',0,21);"><input name="q21" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q21',1,21);"><input name="q21" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q21',2,21);"><input name="q21" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q21',3,21);"><input name="q21" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q21',4,21);"><input name="q21" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q21',5,21);"><input name="q21" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q21',6,21);"><input name="q21" type="radio" value="1">&nbsp;1分</li>


      </ul>
 <input type="button" id="button21" class="but" value="下一步" style="visibility:hidden">
    
</div> 

<div id="Problem22" class="hidden">
        <h3>问题:22、S型 解释表达能力</h3>
    
 <ul>
<li onclick="setradiovale('q22',0,22);"><input name="q22" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q22',1,22);"><input name="q22" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q22',2,22);"><input name="q22" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q22',3,22);"><input name="q22" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q22',4,22);"><input name="q22" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q22',5,22);"><input name="q22" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q22',6,22);"><input name="q22" type="radio" value="1">&nbsp;1分</li>
</ul>
 <input type="button" id="button22" class="but" value="下一步" style="visibility:hidden">
        
</div> 

<div id="Problem23" class="hidden">
        <h3>问题:23、E型 商业洽谈能力</h3>
    
<ul>
<li onclick="setradiovale('q23',0,23);"><input name="q23" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q23',1,23);"><input name="q23" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q23',2,23);"><input name="q23" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q23',3,23);"><input name="q23" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q23',4,23);"><input name="q23" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q23',5,23);"><input name="q23" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q23',6,23);"><input name="q23" type="radio" value="1">&nbsp;1分</li>


</ul>
 <input type="button" id="button23" class="but" value="下一步" style="visibility:hidden">
    
</div>
<div id="Problem24" class="hidden">
       <h3>问题:24、C型 事务执行能力</h3>
      <ul>
<li onclick="setradiovale('q24',0,24);"><input name="q24" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q24',1,24);"><input name="q24" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q24',2,24);"><input name="q24" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q24',3,24);"><input name="q24" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q24',4,24);"><input name="q24" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q24',5,24);"><input name="q24" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q24',6,24);"><input name="q24" type="radio" value="1">&nbsp;1分</li>

      </ul>
 <input type="button" id="button24" class="but" value="下一步" style="visibility:hidden">
    
</div>
<div id="Problem25" class="hidden">
        <h3>问题:25、R型 体育技能</h3>
    
     <ul>
<li onclick="setradiovale('q25',0,25);"><input name="q25" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q25',1,25);"><input name="q25" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q25',2,25);"><input name="q25" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q25',3,25);"><input name="q25" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q25',4,25);"><input name="q25" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q25',5,25);"><input name="q25" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q25',6,25);"><input name="q25" type="radio" value="1">&nbsp;1分</li>
      </ul>
 <input type="button" id="button25" class="but" value="下一步" style="visibility:hidden">
    
</div>
<div id="Problem26" class="hidden">
        <h3>问题:26、I型 数学技能</h3>

<ul>
<li onclick="setradiovale('q26',0,26);"><input name="q26" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q26',1,26);"><input name="q26" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q26',2,26);"><input name="q26" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q26',3,26);"><input name="q26" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q26',4,26);"><input name="q26" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q26',5,26);"><input name="q26" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q26',6,26);"><input name="q26" type="radio" value="1">&nbsp;1分</li>
</ul>
 <input type="button" id="button26" class="but" value="下一步" style="visibility:hidden">
    
</div>
<div id="Problem27" class="hidden">
        <h3>问题:27、A型 音乐技能</h3>
<ul>
<li onclick="setradiovale('q27',0,27);"><input name="q27" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q27',1,27);"><input name="q27" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q27',2,27);"><input name="q27" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q27',3,27);"><input name="q27" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q27',4,27);"><input name="q27" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q27',5,27);"><input name="q27" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q27',6,27);"><input name="q27" type="radio" value="1">&nbsp;1分</li>
</ul>
 <input type="button" id="button27" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem28" class="hidden">
 <h3>问题:28、S型 交际技能</h3>    
 <ul>
<li onclick="setradiovale('q28',0,28);"><input name="q28" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q28',1,28);"><input name="q28" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q28',2,28);"><input name="q28" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q28',3,28);"><input name="q28" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q28',4,28);"><input name="q28" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q28',5,28);"><input name="q28" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q28',6,28);"><input name="q28" type="radio" value="1">&nbsp;1分</li>

</ul>
 <input type="button" id="button28" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem29" class="hidden">
        <h3>问题:29、E型 领导技能</h3>
<ul>
<li onclick="setradiovale('q29',0,29);"><input name="q29" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q29',1,29);"><input name="q29" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q29',2,29);"><input name="q29" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q29',3,29);"><input name="q29" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q29',4,29);"><input name="q29" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q29',5,29);"><input name="q29" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q29',6,29);"><input name="q29" type="radio" value="1">&nbsp;1分</li>
 </ul>
 <input type="button" id="button29" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem30" class="hidden">
        <h3>问题:30、C型 办公技能</h3>

<ul>
<li onclick="setradiovale('q30',0,30);"><input name="q30" type="radio" value="7">&nbsp;7分</li>
<li onclick="setradiovale('q30',1,30);"><input name="q30" type="radio" value="6">&nbsp;6分</li>
<li onclick="setradiovale('q30',2,30);"><input name="q30" type="radio" value="5">&nbsp;5分</li>
<li onclick="setradiovale('q30',3,30);"><input name="q30" type="radio" value="4">&nbsp;4分</li>
<li onclick="setradiovale('q30',4,30);"><input name="q30" type="radio" value="3">&nbsp;3分</li>
<li onclick="setradiovale('q30',5,30);"><input name="q30" type="radio" value="2">&nbsp;2分</li>
<li onclick="setradiovale('q30',6,30);"><input name="q30" type="radio" value="1">&nbsp;1分</li>
</ul>
<input name="" type="submit" value="查看结果" class="but">
</div>
</div>
</form>
<!--#测试题写在这里-->
<div class="m40"></div>
<div class="progress">
<p><b>测试进度：<span id="ptip"></span></b></p>
<p class="picbg"><span style="width: 3.3%; float: left; display: block;"></span></p>
</div>
</div>

<script type="text/javascript">
<?php if(isset($power_ids)): ?>
default_sel('<?php echo $power_ids; ?>');
<?php endif; ?>
</script>
<?php $this->load->view('footer'); ?>