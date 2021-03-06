<?php $this->load->view('header'); ?>
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
<form id="zycp_hld_form" method="post" name="form1" onsubmit="return check()">  <!---->
<div class="content">
    <div class="hld_title">
        <h1>霍兰德职业倾向测验量表</h1>
    </div>
    <div class="hld_ms">
		&nbsp;&nbsp;&nbsp;&nbsp;导语：本测验量表将帮助您发现并确定自己的职业兴趣和能力特长，从而更好地帮助我们做出求职择业或专业选择的决策。<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;本测验共六个部份，每部份测验都没有时间限制，但请您尽快按要求完成。
    </div>
    <div class="q_title">
    	<h3>第一部份 您心目中的理想职业（专业）</h3>
        <p>对于未来的职业（或升学进修的专业），您得早有考虑，它可能很抽象、很朦胧，也可能很具体、很清晰。不论是哪种情况，现在都请您把自己最想干的3种工作或想读的3种专业，按顺序写下来，并说明理由。请在所填职业/专业的右侧按其在你心目中的清晰程度或具体程度，按从很朦胧/抽象到很清晰/具体分别用1、2、3、4、5来表示，如5分表示它在你心中的影象非常清晰。</p>
    </div>
    <div class="t1">
    	<div class="t11">职业/专业：</div>
    	<div class="t12"><input type="text" name="zy1" class="input_text" value=""/></div>
    	<div class="t13">清晰/具体程度：</div>
    	<div class="t14">
        	<input class="input_checkbox" type="radio" name="qxd1" value="1分" id="a_1"><label for="a_1">1分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd1" value="2分" id="a_2"><label for="a_2">2分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd1" value="3分" id="a_3"><label for="a_3">3分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd1" value="4分" id="a_4"><label for="a_4">4分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd1" value="5分" id="a_5"><label for="a_5">5分</label></div>        
    </div>
    <div class="t2">
        <div class="t15">选择理由：&nbsp; </div>
        <div class="t16 left_f"><textarea class="textarea" name="ly1"></textarea></div>
    </div>
	
    <div class="t1">
    	<div class="t11">职业/专业：</div>
    	<div class="t12"><input type="text" name="zy2" class="input_text" value=""/></div>
    	<div class="t13">清晰/具体程度：</div>
    	<div class="t14">
        	<input class="input_checkbox" type="radio" name="qxd2" value="1分" id="b_1"><label for="b_1">1分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd2" value="2分" id="b_2"><label for="b_2">2分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd2" value="3分" id="b_3"><label for="b_3">3分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd2" value="4分" id="b_4"><label for="b_4">4分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd2" value="5分" id="b_5"><label for="b_5">5分</label></div>        
    </div>
    <div class="t2">
        <div class="t15">选择理由：&nbsp; </div>
        <div class="t16 left_f"><textarea class="textarea" name="ly2"></textarea></div>
    </div>
	
    <div class="t1">
    	<div class="t11">职业/专业：</div>
    	<div class="t12"><input type="text" name="zy3" class="input_text" value=""/></div>
    	<div class="t13">清晰/具体程度：</div>
    	<div class="t14">
        	<input class="input_checkbox" type="radio" name="qxd3" value="1分" id="c_1"><label for="c_1">1分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd3" value="2分" id="c_2"><label for="c_2">2分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd3" value="3分" id="c_3"><label for="c_3">3分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd3" value="4分" id="c_4"><label for="c_4">4分</label>&nbsp;&nbsp;
        	<input class="input_checkbox" type="radio" name="qxd3" value="5分" id="c_5"><label for="c_5">5分</label></div>        
    </div>
    <div class="t2">
        <div class="t15">选择理由：&nbsp; </div>
        <div class="t16 left_f"><textarea class="textarea" name="ly3"></textarea></div>
    </div>
    
    <div class="q_title">
    	<h3>第二部份 您所感兴趣的活动</h3>
        <p>下面列举了若干活动，请就这些活动判断您的好恶，喜欢的在前面打钩。</p>
    </div>
	<div class="q_list">
		<ul>
			<li class="li_title">R：实际型</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="1" id="q2_R_1"/><label for="q2_R_1">1、装配修理电器或玩具</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="2" id="q2_R_2"/><label for="q2_R_2">2、修理自行车</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="3" id="q2_R_3"/><label for="q2_R_3">3、用木头做东西</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="4" id="q2_R_4"/><label for="q2_R_4">4、开汽车或摩托车</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="5" id="q2_R_5"/><label for="q2_R_5">5、用机器做东西</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="6" id="q2_R_6"/><label for="q2_R_6">6、参加木工技术学习班</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="7" id="q2_R_7"/><label for="q2_R_7">7、参加制图描图学习班</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="8" id="q2_R_8"/><label for="q2_R_8">8、驾驶卡车或拖拉机</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="9" id="q2_R_9"/><label for="q2_R_9">9、参加机械和电气学习班</li>
			<li><input name="q2_R[]" type="checkbox" class="input_checkbox" value="10" id="q2_R_10"/><label for="q2_R_10">10、装配修理机器</li>
		</ul>
		<ul>
			<li class="li_title">S：社会型</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="1" id="q2_S_1"/><label for="q2_S_1">1、参加单位组织的正式活动</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="2" id="q2_S_2"/><label for="q2_S_2">2、参加某个社会团体或俱乐部活动</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="3" id="q2_S_3"/><label for="q2_S_3">3、帮助别人解决困难</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="4" id="q2_S_4"/><label for="q2_S_4">4、照顾儿童</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="5" id="q2_S_5"/><label for="q2_S_5">5、出席晚会、联欢会、茶话会</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="6" id="q2_S_6"/><label for="q2_S_6">6、和大家一起出去郊游</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="7" id="q2_S_7"/><label for="q2_S_7">7、想获得关于心理方面的知识</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="8" id="q2_S_8"/><label for="q2_S_8">8、参加讲座会或辩论会</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="9" id="q2_S_9"/><label for="q2_S_9">9、观看或参加体育比赛和运动会</li>
			<li><input name="q2_S[]" type="checkbox" class="input_checkbox" value="10" id="q2_S_10"/><label for="q2_S_10">10、结交新朋友</li>
		</ul>
		<ul class="br">
			<li class="li_title">I：调查型</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="1" id="q2_I_1"/><label for="q2_I_1">1、读科技图书或杂志</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="2" id="q2_I_2"/><label for="q2_I_2">2、在实验室工作</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="3" id="q2_I_3"/><label for="q2_I_3">3、改良水果品种，培育新的水果</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="4" id="q2_I_4"/><label for="q2_I_4">4、调查了解土和金属等物质的成份</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="5" id="q2_I_5"/><label for="q2_I_5">5、研究自己选择的特殊问题</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="6" id="q2_I_6"/><label for="q2_I_6">6、解算术或数学游戏</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="7" id="q2_I_7"/><label for="q2_I_7">7、物理课</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="8" id="q2_I_8"/><label for="q2_I_8">8、化学课</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="9" id="q2_I_9"/><label for="q2_I_9">9、几何课</li>
			<li><input name="q2_I[]" type="checkbox" class="input_checkbox" value="10" id="q2_I_10"/><label for="q2_I_10">10、生物课</li>
		</ul>
		<ul class="bb">
			<li class="li_title">E：事业型</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="1" id="q2_E_1"/><label for="q2_E_1">1、鼓动他人</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="2" id="q2_E_2"/><label for="q2_E_2">2、卖东西</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="3" id="q2_E_3"/><label for="q2_E_3">3、谈论政治</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="4" id="q2_E_4"/><label for="q2_E_4">4、制定计划、参加会议</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="5" id="q2_E_5"/><label for="q2_E_5">5、以自己的意志影响别人的行为</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="6" id="q2_E_6"/><label for="q2_E_6">6、在社会团体中担任职务</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="7" id="q2_E_7"/><label for="q2_E_7">7、检查与评价别人的工作</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="8" id="q2_E_8"/><label for="q2_E_8">8、结交名流</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="9" id="q2_E_9"/><label for="q2_E_9">9、指导有某种目标的团体</li>
			<li><input name="q2_E[]" type="checkbox" class="input_checkbox" value="10" id="q2_E_10"/><label for="q2_E_10">10、参与政治活动</li>
		</ul>
		<ul class="bb">
			<li class="li_title">A：艺术型</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="1" id="q2_A_1"/><label for="q2_A_1">1、素描/制图或绘画</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="2" id="q2_A_2"/><label for="q2_A_2">2、参加话剧/戏剧</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="3" id="q2_A_3"/><label for="q2_A_3">3、设计家具/布置室内</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="4" id="q2_A_4"/><label for="q2_A_4">4、练习乐器/参加乐队</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="5" id="q2_A_5"/><label for="q2_A_5">5、欣赏音乐或戏剧</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="6" id="q2_A_6"/><label for="q2_A_6">6、看小说/读剧本</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="7" id="q2_A_7"/><label for="q2_A_7">7、从事摄影创作</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="8" id="q2_A_8"/><label for="q2_A_8">8、写诗或吟诗</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="9" id="q2_A_9"/><label for="q2_A_9">9、进艺术（美术/音乐）培训班练习书法</li>
			<li><input name="q2_A[]" type="checkbox" class="input_checkbox" value="10" id="q2_A_10"/><label for="q2_A_10">10、练习书法</li>
		</ul>
		<ul class="bb br">
			<li class="li_title">C：常规型（传统型）</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="1" id="q2_C_1"/><label for="q2_C_1">1、整理好桌面与房间</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="2" id="q2_C_2"/><label for="q2_C_2">2、抄写文件和信件</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="3" id="q2_C_3"/><label for="q2_C_3">3、为领导写报告或公务信函</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="4" id="q2_C_4"/><label for="q2_C_4">4、检查个人收支情况</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="5" id="q2_C_5"/><label for="q2_C_5">5、打字培训班</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="6" id="q2_C_6"/><label for="q2_C_6">6、参加算盘、文秘等实务培训</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="7" id="q2_C_7"/><label for="q2_C_7">7、参加商业会计培训班</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="8" id="q2_C_8"/><label for="q2_C_8">8、参加情报处理培训班</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="9" id="q2_C_9"/><label for="q2_C_9">9、整理信件、报告、记录等</li>
			<li><input name="q2_C[]" type="checkbox" class="input_checkbox" value="10" id="q2_C_10"/><label for="q2_C_10">10、写商业贸易信</li>
		</ul>
	</div>
    <div class="clear"></div>
	
    <div class="q_title">
    	<h3>第三部份 您所擅长获胜的活动</h3>
        <p>下面列举若干种活动，请选择你能做或大概能做的事，在前面打钩。</p>
    </div>
	<div class="q_list">
		<ul>
			<li class="li_title">R：实际型</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="1" id="q3_R_1"/><label for="q3_R_1">1、能使用电锯、电钻和锉刀等木工工具</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="2" id="q3_R_2"/><label for="q3_R_2">2、知道万用电表的使用方法</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="3" id="q3_R_3"/><label for="q3_R_3">3、能够修理自行车或其它机械</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="4" id="q3_R_4"/><label for="q3_R_4">4、能够使用电钻订、磨床或缝纫机</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="5" id="q3_R_5"/><label for="q3_R_5">5、能给家具和木制品刷漆</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="6" id="q3_R_6"/><label for="q3_R_6">6、能看建筑设计图</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="7" id="q3_R_7"/><label for="q3_R_7">7、能够修理简单的电气用品</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="8" id="q3_R_8"/><label for="q3_R_8">8、能修理家具</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="9" id="q3_R_9"/><label for="q3_R_9">9、能修理收录机</li>
			<li><input name="q3_R[]" type="checkbox" class="input_checkbox" value="10" id="q3_R_10"/><label for="q3_R_10">10、能简单地修理水管</li>
		</ul>
		<ul>
			<li class="li_title">S：社会型</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="1" id="q3_S_1"/><label for="q3_S_1">1、有向各种人说明解释的能力</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="2" id="q3_S_2"/><label for="q3_S_2">2、常参加社会福利活动</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="3" id="q3_S_3"/><label for="q3_S_3">3、能和大家一起友好相处地工作</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="4" id="q3_S_4"/><label for="q3_S_4">4、善于与年长者相处</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="5" id="q3_S_5"/><label for="q3_S_5">5、会邀请人、招待人</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="6" id="q3_S_6"/><label for="q3_S_6">6、能简单易懂地教育儿童</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="7" id="q3_S_7"/><label for="q3_S_7">7、能安排会议等活动顺序</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="8" id="q3_S_8"/><label for="q3_S_8">8、善于体察人心和帮助他人</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="9" id="q3_S_9"/><label for="q3_S_9">9、帮助护理病人和伤员</li>
			<li><input name="q3_S[]" type="checkbox" class="input_checkbox" value="10" id="q3_S_10"/><label for="q3_S_10">10、安排社团组织的各种事务</li>
		</ul>
		<ul class="br">
			<li class="li_title">I：调查型</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="1" id="q3_I_1"/><label for="q3_I_1">1、懂得真空管或晶体管的作用</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="2" id="q3_I_2"/><label for="q3_I_2">2、能够列举三种蛋白质多的食品</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="3" id="q3_I_3"/><label for="q3_I_3">3、理解铀的裂变</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="4" id="q3_I_4"/><label for="q3_I_4">4、能用计算尺、计算器、对数表</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="5" id="q3_I_5"/><label for="q3_I_5">5、会使用显微镜</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="6" id="q3_I_6"/><label for="q3_I_6">6、能找到三个星座</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="7" id="q3_I_7"/><label for="q3_I_7">7、能独立进行调查研究</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="8" id="q3_I_8"/><label for="q3_I_8">8、能解释简单的化学</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="9" id="q3_I_9"/><label for="q3_I_9">9、能理解人造卫星为什么不落地</li>
			<li><input name="q3_I[]" type="checkbox" class="input_checkbox" value="10" id="q3_I_10"/><label for="q3_I_10">10、经常参加学术的会议</li>
		</ul>
		<ul class="bb">
			<li class="li_title">E：事业型</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="1" id="q3_E_1"/><label for="q3_E_1">1、担任过学生干部并且干得不错</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="2" id="q3_E_2"/><label for="q3_E_2">2、工作上能指导和监督他人</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="3" id="q3_E_3"/><label for="q3_E_3">3、做事充满活力和热情</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="4" id="q3_E_4"/><label for="q3_E_4">4、有效利用自身的做法调动他人</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="5" id="q3_E_5"/><label for="q3_E_5">5、销售能力强</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="6" id="q3_E_6"/><label for="q3_E_6">6、曾作为俱乐部或社团的负责人</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="7" id="q3_E_7"/><label for="q3_E_7">7、向领导提出建议或反映意见</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="8" id="q3_E_8"/><label for="q3_E_8">8、有开创事业的能力</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="9" id="q3_E_9"/><label for="q3_E_9">9、知道怎样做能成为一个优秀的领导者</li>
			<li><input name="q3_E[]" type="checkbox" class="input_checkbox" value="10" id="q3_E_10"/><label for="q3_E_10">10、健谈善辩</li>
		</ul>
		<ul class="bb">
			<li class="li_title">A：艺术型</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="1" id="q3_A_1"/><label for="q3_A_1">1、能演奏乐器</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="2" id="q3_A_2"/><label for="q3_A_2">2、能参加二部或四部合唱</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="3" id="q3_A_3"/><label for="q3_A_3">3、独唱或独奏</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="4" id="q3_A_4"/><label for="q3_A_4">4、扮演剧中角色</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="5" id="q3_A_5"/><label for="q3_A_5">5、能创作简单的乐曲</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="6" id="q3_A_6"/><label for="q3_A_6">6、会跳舞</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="7" id="q3_A_7"/><label for="q3_A_7">7、能绘画、素描或书法</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="8" id="q3_A_8"/><label for="q3_A_8">8、能雕刻、剪纸或泥塑</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="9" id="q3_A_9"/><label for="q3_A_9">9、能设计板报、服装或家具</li>
			<li><input name="q3_A[]" type="checkbox" class="input_checkbox" value="10" id="q3_A_10"/><label for="q3_A_10">10、能写一手好文章</li>
		</ul>
		<ul class="bb br">
			<li class="li_title">C：常规型（传统型）</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="1" id="q3_C_1"/><label for="q3_C_1">1、会熟练的打印中文</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="2" id="q3_C_2"/><label for="q3_C_2">2、会用外文打字机或复印机</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="3" id="q3_C_3"/><label for="q3_C_3">3、能快速记笔记和抄写文章</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="4" id="q3_C_4"/><label for="q3_C_4">4、善于整理保管文件和资料</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="5" id="q3_C_5"/><label for="q3_C_5">5、善于从事事务性的工作</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="6" id="q3_C_6"/><label for="q3_C_6">6、会用算盘</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="7" id="q3_C_7"/><label for="q3_C_7">7、能在短时间内分类和处理大量文件</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="8" id="q3_C_8"/><label for="q3_C_8">8、能使用计算机</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="9" id="q3_C_9"/><label for="q3_C_9">9、能搜集数据</li>
			<li><input name="q3_C[]" type="checkbox" class="input_checkbox" value="10" id="q3_C_10"/><label for="q3_C_10">10、善于为自己或集体做财务预算表</li>
		</ul>
	</div>
    <div class="clear"></div>	
    
    <div class="q_title">
    	<h3>第四部份 你所喜欢的职业</h3>
        <p>下面列举了多种职业，请认真地看，选择您感兴趣的工作，在前面打钩。</p>
    </div>
	<div class="q_list">
		<ul>
			<li class="li_title">R：实际型</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="1" id="q4_R_1"/><label for="q4_R_1">1、飞机机械师</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="2" id="q4_R_2"/><label for="q4_R_2">2、野生动物专家</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="3" id="q4_R_3"/><label for="q4_R_3">3、汽车维修工</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="4" id="q4_R_4"/><label for="q4_R_4">4、木匠</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="5" id="q4_R_5"/><label for="q4_R_5">5、测量工程师</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="6" id="q4_R_6"/><label for="q4_R_6">6、无线电报务员</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="7" id="q4_R_7"/><label for="q4_R_7">7、园艺师</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="8" id="q4_R_8"/><label for="q4_R_8">8、长途公共汽车司机</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="9" id="q4_R_9"/><label for="q4_R_9">9、电工</li>
			<li><input name="q4_R[]" type="checkbox" class="input_checkbox" value="10" id="q4_R_10"/><label for="q4_R_10">10、火车司机</li>
		</ul>
		<ul>
			<li class="li_title">S：社会型</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="1" id="q4_S_1"/><label for="q4_S_1">1、街道、工会或妇联干部</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="2" id="q4_S_2"/><label for="q4_S_2">2、小学、中学教师</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="3" id="q4_S_3"/><label for="q4_S_3">3、精神病医生</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="4" id="q4_S_4"/><label for="q4_S_4">4、婚姻介绍所工作人员</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="5" id="q4_S_5"/><label for="q4_S_5">5、体育教练</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="6" id="q4_S_6"/><label for="q4_S_6">6、福利机构负责人</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="7" id="q4_S_7"/><label for="q4_S_7">7、心理咨询员</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="8" id="q4_S_8"/><label for="q4_S_8">8、共青团干部</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="9" id="q4_S_9"/><label for="q4_S_9">9、导游</li>
			<li><input name="q4_S[]" type="checkbox" class="input_checkbox" value="10" id="q4_S_10"/><label for="q4_S_10">10、国家机关工作人员</li>
		</ul>
		<ul class="br">
			<li class="li_title">I：调查型</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="1" id="q4_I_1"/><label for="q4_I_1">1、气象学或天文学者</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="2" id="q4_I_2"/><label for="q4_I_2">2、生物学者</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="3" id="q4_I_3"/><label for="q4_I_3">3、医学实验室的技术人员</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="4" id="q4_I_4"/><label for="q4_I_4">4、人类学者</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="5" id="q4_I_5"/><label for="q4_I_5">5、动物学者</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="6" id="q4_I_6"/><label for="q4_I_6">6、化学者</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="7" id="q4_I_7"/><label for="q4_I_7">7、教学者</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="8" id="q4_I_8"/><label for="q4_I_8">8、科学杂志的编辑或作家</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="9" id="q4_I_9"/><label for="q4_I_9">9、地质学者</li>
			<li><input name="q4_I[]" type="checkbox" class="input_checkbox" value="10" id="q4_I_10"/><label for="q4_I_10">10、物理学者</li>
		</ul>
		<ul class="bb">
			<li class="li_title">E：事业型</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="1" id="q4_E_1"/><label for="q4_E_1">1、厂长</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="2" id="q4_E_2"/><label for="q4_E_2">2、电视片编制人</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="3" id="q4_E_3"/><label for="q4_E_3">3、公司经理</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="4" id="q4_E_4"/><label for="q4_E_4">4、销售员</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="5" id="q4_E_5"/><label for="q4_E_5">5、不动产推销员</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="6" id="q4_E_6"/><label for="q4_E_6">6、广告部长</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="7" id="q4_E_7"/><label for="q4_E_7">7、体育活动主办者</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="8" id="q4_E_8"/><label for="q4_E_8">8、销售部长</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="9" id="q4_E_9"/><label for="q4_E_9">9、个体工商业者</li>
			<li><input name="q4_E[]" type="checkbox" class="input_checkbox" value="10" id="q4_E_10"/><label for="q4_E_10">10、企业管理咨询人员</li>
		</ul>
		<ul class="bb">
			<li class="li_title">A：艺术型</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="1" id="q4_A_1"/><label for="q4_A_1">1、乐队指挥</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="2" id="q4_A_2"/><label for="q4_A_2">2、演奏家</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="3" id="q4_A_3"/><label for="q4_A_3">3、作家</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="4" id="q4_A_4"/><label for="q4_A_4">4、摄影家</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="5" id="q4_A_5"/><label for="q4_A_5">5、记者</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="6" id="q4_A_6"/><label for="q4_A_6">6、画家、书法家</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="7" id="q4_A_7"/><label for="q4_A_7">7、歌唱家</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="8" id="q4_A_8"/><label for="q4_A_8">8、作曲家</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="9" id="q4_A_9"/><label for="q4_A_9">9、电影电视演员</li>
			<li><input name="q4_A[]" type="checkbox" class="input_checkbox" value="10" id="q4_A_10"/><label for="q4_A_10">10、电视节目主持人</li>
		</ul>
		<ul class="bb br">
			<li class="li_title">C：常规型（传统型）</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="1" id="q4_C_1"/><label for="q4_C_1">1、会计师</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="2" id="q4_C_2"/><label for="q4_C_2">2、银行出纳员</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="3" id="q4_C_3"/><label for="q4_C_3">3、税收管理员</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="4" id="q4_C_4"/><label for="q4_C_4">4、计算机操作员</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="5" id="q4_C_5"/><label for="q4_C_5">5、薄记人员</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="6" id="q4_C_6"/><label for="q4_C_6">6、成本核算员</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="7" id="q4_C_7"/><label for="q4_C_7">7、文书档案管理员</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="8" id="q4_C_8"/><label for="q4_C_8">8、打字员</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="9" id="q4_C_9"/><label for="q4_C_9">9、法庭书记员</li>
			<li><input name="q4_C[]" type="checkbox" class="input_checkbox" value="10" id="q4_C_10"/><label for="q4_C_10">10、人员普查登记员</li>
		</ul>
	</div>
    <div class="clear"></div>
    
    <div class="q_title">
    	<h3>第五部份 您的能力类型简评</h3>
        <p>下面A\B两张表是您在6个职业能力方面的自我评定表。您可先与同龄人比较出自己在每一方面的能力，然后斟酌后对自己的能力作评估。请在表中直接选出您该项能力的自评分数，数值越大表明您的能力越强。注意，因为人的每项能力不会完全一样的，请勿选择同样的数字。</p>
    </div>
	<div class="q_list5">		
		<ul>
			<li class="li_title5">R型</li>
			<li class="li_title5_1">机械操作能力 </li>
			<li><input name="q5_R" type="radio" class="input_checkbox" value="1" id="q5_R_1"/><label for="q5_R_1">1分</li>
			<li><input name="q5_R" type="radio" class="input_checkbox" value="2" id="q5_R_2"/><label for="q5_R_2">2分</li>
			<li><input name="q5_R" type="radio" class="input_checkbox" value="3" id="q5_R_3"/><label for="q5_R_3">3分</li>
			<li><input name="q5_R" type="radio" class="input_checkbox" value="4" id="q5_R_4"/><label for="q5_R_4">4分</li>
			<li><input name="q5_R" type="radio" class="input_checkbox" value="5" id="q5_R_5"/><label for="q5_R_5">5分</li>
			<li><input name="q5_R" type="radio" class="input_checkbox" value="6" id="q5_R_6"/><label for="q5_R_6">6分</li>
			<li><input name="q5_R" type="radio" class="input_checkbox" value="7" id="q5_R_7"/><label for="q5_R_7">7分</li>
		</ul>	
		<ul>
			<li class="li_title5">I型</li>
			<li class="li_title5_1">科学研究能力 </li>
			<li><input name="q5_I" type="radio" class="input_checkbox" value="1" id="q5_I_1"/><label for="q5_I_1">1分</li>
			<li><input name="q5_I" type="radio" class="input_checkbox" value="2" id="q5_I_2"/><label for="q5_I_2">2分</li>
			<li><input name="q5_I" type="radio" class="input_checkbox" value="3" id="q5_I_3"/><label for="q5_I_3">3分</li>
			<li><input name="q5_I" type="radio" class="input_checkbox" value="4" id="q5_I_4"/><label for="q5_I_4">4分</li>
			<li><input name="q5_I" type="radio" class="input_checkbox" value="5" id="q5_I_5"/><label for="q5_I_5">5分</li>
			<li><input name="q5_I" type="radio" class="input_checkbox" value="6" id="q5_I_6"/><label for="q5_I_6">6分</li>
			<li><input name="q5_I" type="radio" class="input_checkbox" value="7" id="q5_I_7"/><label for="q5_I_7">7分</li>
		</ul>	
		<ul>
			<li class="li_title5">A型</li>
			<li class="li_title5_1">艺术创作能力 </li>
			<li><input name="q5_A" type="radio" class="input_checkbox" value="1" id="q5_A_1"/><label for="q5_A_1">1分</li>
			<li><input name="q5_A" type="radio" class="input_checkbox" value="2" id="q5_A_2"/><label for="q5_A_2">2分</li>
			<li><input name="q5_A" type="radio" class="input_checkbox" value="3" id="q5_A_3"/><label for="q5_A_3">3分</li>
			<li><input name="q5_A" type="radio" class="input_checkbox" value="4" id="q5_A_4"/><label for="q5_A_4">4分</li>
			<li><input name="q5_A" type="radio" class="input_checkbox" value="5" id="q5_A_5"/><label for="q5_A_5">5分</li>
			<li><input name="q5_A" type="radio" class="input_checkbox" value="6" id="q5_A_6"/><label for="q5_A_6">6分</li>
			<li><input name="q5_A" type="radio" class="input_checkbox" value="7" id="q5_A_7"/><label for="q5_A_7">7分</li>
		</ul>	
		<ul>
			<li class="li_title5">S型</li>
			<li class="li_title5_1">解释表达能力 </li>
			<li><input name="q5_S" type="radio" class="input_checkbox" value="1" id="q5_S_1"/><label for="q5_S_1">1分</li>
			<li><input name="q5_S" type="radio" class="input_checkbox" value="2" id="q5_S_2"/><label for="q5_S_2">2分</li>
			<li><input name="q5_S" type="radio" class="input_checkbox" value="3" id="q5_S_3"/><label for="q5_S_3">3分</li>
			<li><input name="q5_S" type="radio" class="input_checkbox" value="4" id="q5_S_4"/><label for="q5_S_4">4分</li>
			<li><input name="q5_S" type="radio" class="input_checkbox" value="5" id="q5_S_5"/><label for="q5_S_5">5分</li>
			<li><input name="q5_S" type="radio" class="input_checkbox" value="6" id="q5_S_6"/><label for="q5_S_6">6分</li>
			<li><input name="q5_S" type="radio" class="input_checkbox" value="7" id="q5_S_7"/><label for="q5_S_7">7分</li>
		</ul>	
		<ul>
			<li class="li_title5">E型</li>
			<li class="li_title5_1">商业洽谈能力 </li>
			<li><input name="q5_E" type="radio" class="input_checkbox" value="1" id="q5_E_1"/><label for="q5_E_1">1分</li>
			<li><input name="q5_E" type="radio" class="input_checkbox" value="2" id="q5_E_2"/><label for="q5_E_2">2分</li>
			<li><input name="q5_E" type="radio" class="input_checkbox" value="3" id="q5_E_3"/><label for="q5_E_3">3分</li>
			<li><input name="q5_E" type="radio" class="input_checkbox" value="4" id="q5_E_4"/><label for="q5_E_4">4分</li>
			<li><input name="q5_E" type="radio" class="input_checkbox" value="5" id="q5_E_5"/><label for="q5_E_5">5分</li>
			<li><input name="q5_E" type="radio" class="input_checkbox" value="6" id="q5_E_6"/><label for="q5_E_6">6分</li>
			<li><input name="q5_E" type="radio" class="input_checkbox" value="7" id="q5_E_7"/><label for="q5_E_7">7分</li>
		</ul>	
		<ul class="br">
			<li class="li_title5">C型</li>
			<li class="li_title5_1">事务执行能力 </li>
			<li><input name="q5_C" type="radio" class="input_checkbox" value="1" id="q5_C_1"/><label for="q5_C_1">1分</li>
			<li><input name="q5_C" type="radio" class="input_checkbox" value="2" id="q5_C_2"/><label for="q5_C_2">2分</li>
			<li><input name="q5_C" type="radio" class="input_checkbox" value="3" id="q5_C_3"/><label for="q5_C_3">3分</li>
			<li><input name="q5_C" type="radio" class="input_checkbox" value="4" id="q5_C_4"/><label for="q5_C_4">4分</li>
			<li><input name="q5_C" type="radio" class="input_checkbox" value="5" id="q5_C_5"/><label for="q5_C_5">5分</li>
			<li><input name="q5_C" type="radio" class="input_checkbox" value="6" id="q5_C_6"/><label for="q5_C_6">6分</li>
			<li><input name="q5_C" type="radio" class="input_checkbox" value="7" id="q5_C_7"/><label for="q5_C_7">7分</li>
		</ul>	
	</div>
	
	<div class="q_list5">		
		<ul>
			<li class="li_title5">R型</li>
			<li class="li_title5_1">体育技能 </li>
			<li><input name="q52_R" type="radio" class="input_checkbox" value="1" id="q52_R_1"/><label for="q52_R_1">1分</li>
			<li><input name="q52_R" type="radio" class="input_checkbox" value="2" id="q52_R_2"/><label for="q52_R_2">2分</li>
			<li><input name="q52_R" type="radio" class="input_checkbox" value="3" id="q52_R_3"/><label for="q52_R_3">3分</li>
			<li><input name="q52_R" type="radio" class="input_checkbox" value="4" id="q52_R_4"/><label for="q52_R_4">4分</li>
			<li><input name="q52_R" type="radio" class="input_checkbox" value="5" id="q52_R_5"/><label for="q52_R_5">5分</li>
			<li><input name="q52_R" type="radio" class="input_checkbox" value="6" id="q52_R_6"/><label for="q52_R_6">6分</li>
			<li><input name="q52_R" type="radio" class="input_checkbox" value="7" id="q52_R_7"/><label for="q52_R_7">7分</li>
		</ul>	
		<ul>
			<li class="li_title5">I型</li>
			<li class="li_title5_1">数学技能 </li>
			<li><input name="q52_I" type="radio" class="input_checkbox" value="1" id="q52_I_1"/><label for="q52_I_1">1分</li>
			<li><input name="q52_I" type="radio" class="input_checkbox" value="2" id="q52_I_2"/><label for="q52_I_2">2分</li>
			<li><input name="q52_I" type="radio" class="input_checkbox" value="3" id="q52_I_3"/><label for="q52_I_3">3分</li>
			<li><input name="q52_I" type="radio" class="input_checkbox" value="4" id="q52_I_4"/><label for="q52_I_4">4分</li>
			<li><input name="q52_I" type="radio" class="input_checkbox" value="5" id="q52_I_5"/><label for="q52_I_5">5分</li>
			<li><input name="q52_I" type="radio" class="input_checkbox" value="6" id="q52_I_6"/><label for="q52_I_6">6分</li>
			<li><input name="q52_I" type="radio" class="input_checkbox" value="7" id="q52_I_7"/><label for="q52_I_7">7分</li>
		</ul>	
		<ul>
			<li class="li_title5">A型</li>
			<li class="li_title5_1">音乐技能 </li>
			<li><input name="q52_A" type="radio" class="input_checkbox" value="1" id="q52_A_1"/><label for="q52_A_1">1分</li>
			<li><input name="q52_A" type="radio" class="input_checkbox" value="2" id="q52_A_2"/><label for="q52_A_2">2分</li>
			<li><input name="q52_A" type="radio" class="input_checkbox" value="3" id="q52_A_3"/><label for="q52_A_3">3分</li>
			<li><input name="q52_A" type="radio" class="input_checkbox" value="4" id="q52_A_4"/><label for="q52_A_4">4分</li>
			<li><input name="q52_A" type="radio" class="input_checkbox" value="5" id="q52_A_5"/><label for="q52_A_5">5分</li>
			<li><input name="q52_A" type="radio" class="input_checkbox" value="6" id="q52_A_6"/><label for="q52_A_6">6分</li>
			<li><input name="q52_A" type="radio" class="input_checkbox" value="7" id="q52_A_7"/><label for="q52_A_7">7分</li>
		</ul>	
		<ul>
			<li class="li_title5">S型</li>
			<li class="li_title5_1">交际技能 </li>
			<li><input name="q52_S" type="radio" class="input_checkbox" value="1" id="q52_S_1"/><label for="q52_S_1">1分</li>
			<li><input name="q52_S" type="radio" class="input_checkbox" value="2" id="q52_S_2"/><label for="q52_S_2">2分</li>
			<li><input name="q52_S" type="radio" class="input_checkbox" value="3" id="q52_S_3"/><label for="q52_S_3">3分</li>
			<li><input name="q52_S" type="radio" class="input_checkbox" value="4" id="q52_S_4"/><label for="q52_S_4">4分</li>
			<li><input name="q52_S" type="radio" class="input_checkbox" value="5" id="q52_S_5"/><label for="q52_S_5">5分</li>
			<li><input name="q52_S" type="radio" class="input_checkbox" value="6" id="q52_S_6"/><label for="q52_S_6">6分</li>
			<li><input name="q52_S" type="radio" class="input_checkbox" value="7" id="q52_S_7"/><label for="q52_S_7">7分</li>
		</ul>	
		<ul>
			<li class="li_title5">E型</li>
			<li class="li_title5_1">领导技能 </li>
			<li><input name="q52_E" type="radio" class="input_checkbox" value="1" id="q52_E_1"/><label for="q52_E_1">1分</li>
			<li><input name="q52_E" type="radio" class="input_checkbox" value="2" id="q52_E_2"/><label for="q52_E_2">2分</li>
			<li><input name="q52_E" type="radio" class="input_checkbox" value="3" id="q52_E_3"/><label for="q52_E_3">3分</li>
			<li><input name="q52_E" type="radio" class="input_checkbox" value="4" id="q52_E_4"/><label for="q52_E_4">4分</li>
			<li><input name="q52_E" type="radio" class="input_checkbox" value="5" id="q52_E_5"/><label for="q52_E_5">5分</li>
			<li><input name="q52_E" type="radio" class="input_checkbox" value="6" id="q52_E_6"/><label for="q52_E_6">6分</li>
			<li><input name="q52_E" type="radio" class="input_checkbox" value="7" id="q52_E_7"/><label for="q52_E_7">7分</li>
		</ul>	
		<ul class="br">
			<li class="li_title5">C型</li>
			<li class="li_title5_1">办公技能 </li>
			<li><input name="q52_C" type="radio" class="input_checkbox" value="1" id="q52_C_1"/><label for="q52_C_1">1分</li>
			<li><input name="q52_C" type="radio" class="input_checkbox" value="2" id="q52_C_2"/><label for="q52_C_2">2分</li>
			<li><input name="q52_C" type="radio" class="input_checkbox" value="3" id="q52_C_3"/><label for="q52_C_3">3分</li>
			<li><input name="q52_C" type="radio" class="input_checkbox" value="4" id="q52_C_4"/><label for="q52_C_4">4分</li>
			<li><input name="q52_C" type="radio" class="input_checkbox" value="5" id="q52_C_5"/><label for="q52_C_5">5分</li>
			<li><input name="q52_C" type="radio" class="input_checkbox" value="6" id="q52_C_6"/><label for="q52_C_6">6分</li>
			<li><input name="q52_C" type="radio" class="input_checkbox" value="7" id="q52_C_7"/><label for="q52_C_7">7分</li>
		</ul>	
	</div>	
	
    
    <!--<div class="q_title">
    	<h3>第六部份您所感兴趣的活动</h3>
        <p>下面列举了若干种活动，请就这些活动判断你的好恶。喜欢的，计1分，不喜欢的不计分。</p>
    </div>-->
    
    <div class="q_title">
    	<h3>第六部份 您所看重的东西——职业价值观</h3>
        <p>人们在选择工作时通常会考虑以下9种因素，请你依次选择出最重要、次重要、最不重要、次不重要的一项因素。</p>
    </div>
	<div class="q_list6">		
		<ul>
			<li class="li_title6">最重要的</li>
			<li><input name="q6_A" type="radio" class="input_checkbox" value="工资高、福利好" id="q6_A_1"/><label for="q6_A_1">1、工资高、福利好</li>
			<li><input name="q6_A" type="radio" class="input_checkbox" value="工作环境（物质方面）舒适" id="q6_A_2"/><label for="q6_A_2">2、工作环境（物质方面）舒适</li>
			<li><input name="q6_A" type="radio" class="input_checkbox" value="人际关系良好" id="q6_A_3"/><label for="q6_A_3">3、人际关系良好</li>
			<li><input name="q6_A" type="radio" class="input_checkbox" value="工作稳定有保障" id="q6_A_4"/><label for="q6_A_4">4、工作稳定有保障</li>
			<li><input name="q6_A" type="radio" class="input_checkbox" value="能提供较好的受教育机会" id="q6_A_5"/><label for="q6_A_5">5、能提供较好的受教育机会</li>
			<li><input name="q6_A" type="radio" class="input_checkbox" value="有较高的社会地位" id="q6_A_6"/><label for="q6_A_6">6、有较高的社会地位</li>
			<li><input name="q6_A" type="radio" class="input_checkbox" value="工作不太紧张、外部压力少" id="q6_A_7"/><label for="q6_A_7">7、工作不太紧张、外部压力少</li>
			<li><input name="q6_A" type="radio" class="input_checkbox" value="能充分发挥自己的能力特长" id="q6_A_8"/><label for="q6_A_8">8、能充分发挥自己的能力特长</li>
			<li><input name="q6_A" type="radio" class="input_checkbox" value="社会需要与社会贡献大" id="q6_A_9"/><label for="q6_A_9">9、社会需要与社会贡献大</li>
		</ul>
		<ul>
			<li class="li_title6">次重要的</li>
			<li><input name="q6_B" type="radio" class="input_checkbox" value="工资高、福利好" id="q6_B_1"/><label for="q6_B_1">1、工资高、福利好</li>
			<li><input name="q6_B" type="radio" class="input_checkbox" value="工作环境（物质方面）舒适" id="q6_B_2"/><label for="q6_B_2">2、工作环境（物质方面）舒适</li>
			<li><input name="q6_B" type="radio" class="input_checkbox" value="人际关系良好" id="q6_B_3"/><label for="q6_B_3">3、人际关系良好</li>
			<li><input name="q6_B" type="radio" class="input_checkbox" value="工作稳定有保障" id="q6_B_4"/><label for="q6_B_4">4、工作稳定有保障</li>
			<li><input name="q6_B" type="radio" class="input_checkbox" value="能提供较好的受教育机会" id="q6_B_5"/><label for="q6_B_5">5、能提供较好的受教育机会</li>
			<li><input name="q6_B" type="radio" class="input_checkbox" value="有较高的社会地位" id="q6_B_6"/><label for="q6_B_6">6、有较高的社会地位</li>
			<li><input name="q6_B" type="radio" class="input_checkbox" value="工作不太紧张、外部压力少" id="q6_B_7"/><label for="q6_B_7">7、工作不太紧张、外部压力少</li>
			<li><input name="q6_B" type="radio" class="input_checkbox" value="能充分发挥自己的能力特长" id="q6_B_8"/><label for="q6_B_8">8、能充分发挥自己的能力特长</li>
			<li><input name="q6_B" type="radio" class="input_checkbox" value="社会需要与社会贡献大" id="q6_B_9"/><label for="q6_B_9">9、社会需要与社会贡献大</li>
		</ul>
		<ul>
			<li class="li_title6">最不重要的</li>
			<li><input name="q6_C" type="radio" class="input_checkbox" value="工资高、福利好" id="q6_C_1"/><label for="q6_C_1">1、工资高、福利好</li>
			<li><input name="q6_C" type="radio" class="input_checkbox" value="工作环境（物质方面）舒适" id="q6_C_2"/><label for="q6_C_2">2、工作环境（物质方面）舒适</li>
			<li><input name="q6_C" type="radio" class="input_checkbox" value="人际关系良好" id="q6_C_3"/><label for="q6_C_3">3、人际关系良好</li>
			<li><input name="q6_C" type="radio" class="input_checkbox" value="工作稳定有保障" id="q6_C_4"/><label for="q6_C_4">4、工作稳定有保障</li>
			<li><input name="q6_C" type="radio" class="input_checkbox" value="能提供较好的受教育机会" id="q6_C_5"/><label for="q6_C_5">5、能提供较好的受教育机会</li>
			<li><input name="q6_C" type="radio" class="input_checkbox" value="有较高的社会地位" id="q6_C_6"/><label for="q6_C_6">6、有较高的社会地位</li>
			<li><input name="q6_C" type="radio" class="input_checkbox" value="工作不太紧张、外部压力少" id="q6_C_7"/><label for="q6_C_7">7、工作不太紧张、外部压力少</li>
			<li><input name="q6_C" type="radio" class="input_checkbox" value="能充分发挥自己的能力特长" id="q6_C_8"/><label for="q6_C_8">8、能充分发挥自己的能力特长</li>
			<li><input name="q6_C" type="radio" class="input_checkbox" value="社会需要与社会贡献大" id="q6_C_9"/><label for="q6_C_9">9、社会需要与社会贡献大</li>
		</ul>
		<ul class="br">
			<li class="li_title6">次不重要的</li>
			<li><input name="q6_D" type="radio" class="input_checkbox" value="工资高、福利好" id="q6_D_1"/><label for="q6_D_1">1、工资高、福利好</li>
			<li><input name="q6_D" type="radio" class="input_checkbox" value="工作环境（物质方面）舒适" id="q6_D_2"/><label for="q6_D_2">2、工作环境（物质方面）舒适</li>
			<li><input name="q6_D" type="radio" class="input_checkbox" value="人际关系良好" id="q6_D_3"/><label for="q6_D_3">3、人际关系良好</li>
			<li><input name="q6_D" type="radio" class="input_checkbox" value="工作稳定有保障" id="q6_D_4"/><label for="q6_D_4">4、工作稳定有保障</li>
			<li><input name="q6_D" type="radio" class="input_checkbox" value="能提供较好的受教育机会" id="q6_D_5"/><label for="q6_D_5">5、能提供较好的受教育机会</li>
			<li><input name="q6_D" type="radio" class="input_checkbox" value="有较高的社会地位" id="q6_D_6"/><label for="q6_D_6">6、有较高的社会地位</li>
			<li><input name="q6_D" type="radio" class="input_checkbox" value="工作不太紧张、外部压力少" id="q6_D_7"/><label for="q6_D_7">7、工作不太紧张、外部压力少</li>
			<li><input name="q6_D" type="radio" class="input_checkbox" value="能充分发挥自己的能力特长" id="q6_D_8"/><label for="q6_D_8">8、能充分发挥自己的能力特长</li>
			<li><input name="q6_D" type="radio" class="input_checkbox" value="社会需要与社会贡献大" id="q6_D_9"/><label for="q6_D_9">9、社会需要与社会贡献大</li>
		</ul>
	</div>
	<div class="clear" style="margin:10px auto 20px;text-align:center;"><input type="submit" value="确认提交"/></div>   
</form>
<script type="text/javascript">
function checkRad(rName){
    ifSel = false;
    uLen = document.all[rName].length;
    for(var j =0;j<uLen;j++){
        if(document.all[rName][j].checked == true){
            ifSel = true;
            break;
        }
    }
    return ifSel;
}

function checkValue(aName,bName){
    aLen = document.all[aName].length;
    for(var j =0;j<aLen;j++){
        if(document.all[aName][j].checked == true){
            aValue = document.all[aName][j].getAttribute("value");
            break;
        }
    }
    
    bLen = document.all[bName].length;
    for(var j =0;j<bLen;j++){
        if(document.all[bName][j].checked == true){
            bValue = document.all[bName][j].getAttribute("value");
            break;
        }
    }
    if(aValue == bValue){
    	ifSel = false;
    }else{
    	ifSel = true;
    }
    return ifSel;
}
function check(){
    if (checkRad("q5_R") ==false || checkRad("q5_I") ==false || checkRad("q5_A") ==false || checkRad("q5_S") ==false || checkRad("q5_E") ==false || checkRad("q5_C") ==false){
        alert("第五部份 您的能力类型简评 尚未完成\r\n请填写完后再提交")
        return false
    } 
    if (checkRad("q52_R") ==false || checkRad("q52_I") ==false || checkRad("q52_A") ==false || checkRad("q52_S") ==false || checkRad("q52_E") ==false || checkRad("q52_C") ==false){
        alert("第五部份 您的能力类型简评 尚未完成\r\n请填写完后再提交")
        return false
    } 
    if (checkRad("q6_D") ==false || checkRad("q6_C") ==false || checkRad("q6_B") ==false || checkRad("q6_A") ==false){
        alert("第六部份 您所看重的东西——职业价值观 尚未选择！\r\n请填写完后再提交")
        return false
    } 

    if (checkValue("q5_R","q5_I") ==  false || checkValue("q5_R","q5_A") ==  false || checkValue("q5_R","q5_S") ==  false || checkValue("q5_R","q5_E") ==  false || checkValue("q5_R","q5_C") ==  false || 
        	checkValue("q5_I","q5_A") ==  false || checkValue("q5_I","q5_S") ==  false || checkValue("q5_I","q5_E") ==  false || checkValue("q5_I","q5_C") ==  false || 
        	checkValue("q5_A","q5_S") ==  false || checkValue("q5_A","q5_E") ==  false || checkValue("q5_A","q5_C") ==  false || 
        	checkValue("q5_S","q5_E") ==  false || checkValue("q5_S","q5_C") ==  false|| 
        	checkValue("q5_E","q5_C") ==  false){
    	alert("第五部份 您的能力类型简评 不可重复选择\r\n请改后再提交")
        return false
    }  

    if (checkValue("q52_R","q52_I") ==  false || checkValue("q52_R","q52_A") ==  false || checkValue("q52_R","q52_S") ==  false || checkValue("q52_R","q52_E") ==  false || checkValue("q52_R","q52_C") ==  false || 
        	checkValue("q52_I","q52_A") ==  false || checkValue("q52_I","q52_S") ==  false || checkValue("q52_I","q52_E") ==  false || checkValue("q52_I","q52_C") ==  false || 
        	checkValue("q52_A","q52_S") ==  false || checkValue("q52_A","q52_E") ==  false || checkValue("q52_A","q52_C") ==  false || 
        	checkValue("q52_S","q52_E") ==  false || checkValue("q52_S","q52_C") ==  false|| 
        	checkValue("q52_E","q52_C") ==  false){
    	alert("第五部份 您的能力类型简评 不可重复选择\r\n请改后再提交")
        return false
    } 
    
    if (checkValue("q6_A","q6_B") ==  false || checkValue("q6_A","q6_C") ==  false || checkValue("q6_A","q6_D") ==  false || checkValue("q6_C","q6_B") ==  false || checkValue("q6_D","q6_B") ==  false || checkValue("q6_C","q6_D") ==  false){
        alert("第六部份 您所看重的东西——职业价值观 不可重复选择！\r\n请修改后再提交")
        return false
    }   
}
</script>
<?php $this->load->view('footer'); ?>