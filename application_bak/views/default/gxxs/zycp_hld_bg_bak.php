<?php $this->load->view('header'); ?>
<link href="/static/ceping/cp_gkb.css" type="text/css" rel="stylesheet" />
  <div id="r_ts">
    <div class="r_bt">MBTI职业倾向性测评</div>
    <div class="clear"></div>
  </div>
  <div id="right_1">
    <div class="r_cp_3" style="margin-top:20px;">
      <div class="r_cp_4" style="background:url(/static/ceping/timages/xq1_03.jpg) no-repeat;"></div>
      <div class="r_rightcp_1">
        <div class="r_rightcp_2 hszt"><?php echo $ceping['uname'];?>MBTI职业倾向性测评结果</div>
        <div class="clear"></div>
        <p class="r_rightcp_p">每个人都有独特的兴趣特点，下图显示了你在六种职业兴趣类型上的分布状况，你可以了解你的兴趣倾向的整体情况：</p>
        <div class="r_cp_10">
          <div class="r_cp_11"><strong>您现实型为：</strong><span>50分</span></div>
          <div class="r_cp_11"><strong>您研究型为：</strong><span>0分</span></div>
          <div class="r_cp_11"><strong>您艺术型为：</strong><span>0分</span></div>
          <div class="r_cp_11"><strong>您社会型为：</strong><span>0分</span></div>
          <div class="r_cp_11"><strong>您企业型为：</strong><span>15分</span></div>
          <div class="r_cp_11"><strong>您常规型为：</strong><span>0分</span></div>
        </div>
        <div class="r_rightcp_9">
        	<img src="/resources/jpg/HLD.php?R=<?php echo @$hld['R'];?>&C=<?php echo @$hld['C'];?>&E=<?php echo @$hld['E'];?>&S=<?php echo @$hld['S'];?>&A=<?php echo @$hld['A'];?>&I=<?php echo @$hld['I'];?>"/>
         </div>
        
         <div style="text-align:center; font-weight:bold; height:24px; font-size:16px;">职业兴趣测评分类说明</div>
        <div class="r_rightcp_10">
        	    <table border="0" cellspacing="1" width="100%" bgcolor="#C5C5C5">
  <tbody><tr>
    <td width="82" height="30" bgcolor="#FFFFFF"><p align="center"><strong>兴趣</strong><strong>类型 </strong></p></td>
    <td width="67" bgcolor="#FFFFFF"><p align="center"><strong>测评得分 </strong></p></td>
    <td width="66" bgcolor="#FFFFFF"><p align="center"><strong>评价等级 </strong></p></td>
    <td width="217" bgcolor="#FFFFFF"><p align="center"><strong>共同特征 </strong></p></td>
    <td width="257" bgcolor="#FFFFFF"><p align="center"><strong>典型职业 </strong></p></td>
  </tr>
  <tr>
    <td width="82" bgcolor="#FFFFFF"><p align="center">现实型 <br>
      （R） </p></td>
    <td width="67" align="center" bgcolor="#FFFFFF">50</td>
    <td width="66" align="center" bgcolor="#FFFFFF">较高</td>
    <td width="217" bgcolor="#FFFFFF"><p>愿意使用工具从事操作性工作，动手能力强，做事手脚灵活，动作协调。偏好于具体任务，不善言辞，做事保守，较为谦虚。缺乏社交能力，通常喜欢独立做事。 </p></td>
    <td width="257" bgcolor="#FFFFFF"><p>喜欢使用工具、机器，需要基本操作技能的工作。对要求具备机械方面才能、体力或从事与物件、机器、工具、运动器材、植物、动物相关的职业有兴趣，并具备相应能力。如：技术性职业（计算机硬件人员、摄影师、制图员、机械装配工），技能性职业（木匠、厨师、技工、修理工、农民、一般劳动）。 </p></td>
  </tr>
  <tr>
    <td width="82" bgcolor="#FFFFFF"><p align="center">研究型 <br>
      （I） </p></td>
    <td width="67" align="center" bgcolor="#FFFFFF">0</td>
    <td width="66" align="center" bgcolor="#FFFFFF">较低</td>
    <td width="217" bgcolor="#FFFFFF"><p>思想家而非实干家，抽象思维能力强，求知欲强，肯动脑，善思考，不愿动手。喜欢独立的和富有创造性的工作。知识渊博，有学识才能，不善于领导他人。考虑问题理性，做事喜欢精确，喜欢逻辑分析和推理，不断探讨未知的领域。 </p></td>
    <td width="257" bgcolor="#FFFFFF"><p>喜欢智力的、抽象的、分析的、独立的定向任务，要求具备智力或分析才能，并将其用于观察、估测、衡量、形成理论、最终解决问题的工作，并具备相应的能力。如科学研究人员、教师、工程师、电脑编程人员、医生、系统分析员。 </p></td>
  </tr>
  <tr>
    <td width="82" bgcolor="#FFFFFF"><p align="center">艺术型 <br>
      （A） </p></td>
    <td width="67" align="center" bgcolor="#FFFFFF">0</td>
    <td width="66" align="center" bgcolor="#FFFFFF">较低</td>
    <td width="217" bgcolor="#FFFFFF"><p>有创造力，乐于创造新颖、与众不同的成果，渴望表现自己的个性，实现自身的价值。做事理想化，追求完美，不重实际。具有一定的艺术才能和个性。善于表达、怀旧、心态较为复杂。 </p></td>
    <td width="257" bgcolor="#FFFFFF"><p>喜欢的工作要求具备艺术修养、创造力、表达能力和直觉，并将其用于语言、行为、声音、颜色和形式的审美、思索和感受，具备相应的能力，不善于事务性工作。如艺术方面（演员、导演、艺术设计师、雕刻家、建筑师、摄影家、广告制作人），音乐方面（歌唱家、作曲家、乐队指挥），文学方面（小说家、诗人、剧作家）。 </p></td>
  </tr>
  <tr>
    <td width="82" bgcolor="#FFFFFF"><p align="center">社会型 <br>
      （S） </p></td>
    <td width="67" align="center" bgcolor="#FFFFFF">0</td>
    <td width="66" align="center" bgcolor="#FFFFFF">较低</td>
    <td width="217" bgcolor="#FFFFFF"><p>喜欢与人交往、不断结交新的朋友、善言谈、愿意教导别人。关心社会问题、渴望发挥自己的社会作用。寻求广泛的人际关系，比较看重社会义务和社会道德。 </p></td>
    <td width="257" bgcolor="#FFFFFF"><p>喜欢要求与人打交道的工作，能够不断结交新的朋友，从事提供信息、启迪、帮助、培训、开发或治疗等事务，并具备相应能力。如: 教育工作者（教师、教育行政人员），社会工作者（咨询人员、公关人员）。 </p></td>
  </tr>
  <tr>
    <td width="82" bgcolor="#FFFFFF"><p align="center">企业型 <br>
      （E） </p></td>
    <td width="67" align="center" bgcolor="#FFFFFF">15</td>
    <td width="66" align="center" bgcolor="#FFFFFF">较低</td>
    <td width="217" bgcolor="#FFFFFF"><p>追求权力、权威和物质财富，具有领导才能。喜欢竞争、敢冒风险、有野心、抱负。为人务实，习惯以利益得失，权利、地位、金钱等来衡量做事的价值，做事有较强的目的性。 </p></td>
    <td width="257" bgcolor="#FFFFFF"><p>喜欢要求具备经营、管理、劝服、监督和领导才能，以实现机构、政治、社会及经济目标的工作，并具备相应的能力。如项目经理、销售人员，营销管理人员、政府官员、企业领导、法官、律师。 </p></td>
  </tr>
  <tr>
    <td width="82" bgcolor="#FFFFFF"><p align="center">常规型 <br>
      （C） </p></td>
    <td width="67" align="center" bgcolor="#FFFFFF">0</td>
    <td width="66" align="center" bgcolor="#FFFFFF">较低</td>
    <td width="217" bgcolor="#FFFFFF"><p>尊重权威和规章制度，喜欢按计划办事，细心、有条理，习惯接受他人的指挥和领导，自己不谋求领导职务。喜欢关注实际和细节情况，通常较为谨慎和保守，缺乏创造性，不喜欢冒险和竞争，富有自我牺牲精神。&nbsp;&nbsp; </p></td>
    <td width="257" bgcolor="#FFFFFF"><p>喜欢要求注意细节、精确度、有系统有条理，具有记录、归档、据特定要求或程序组织数据和文字信息的职业，并具备相应能力。如：秘书、办公室人员、记事员、会计、行政助理、图书馆管理员。 </p></td>
  </tr>
</tbody></table>
        </div>
         
         <div class="rn">
    
         
      <p class="r_rightcp_p">你是一个典型的Doer，总是以实实在在地完成实实在在的事情为第一原则。你喜欢和各种材料、工具、机械打交道，爱好动手操作的活动，乐于使用各种工具和设备，关注各种自然原理。在他人眼里，你绝对是最佳的实干家，当同学或朋友有东西（如电脑）需要修理、安装或是需要体力上的协助，他们首先想到的就是你，而你也会相当乐意帮忙。在生活中，你可能比较宅，不愿过多地参与人际互动的活动，宁愿一个人琢磨与工具、机械有关的事情。你也可能爱好各种体育活动、户外运动，享受挥汗如雨的感觉。一般来讲，你情绪稳定、有耐性、坦诚直率，宁愿行动不喜多言，喜欢在讲求实际、需要动手环境中从事明确固定的工作，依既定的规则一步步地制造完成有实际用途的产品，是个彻底的实用主义者。</p>
		    
		   <p class="r_rightcp_p"><strong>你可能喜欢的职业有：</strong>你可能喜欢的职业有技术员、检验员、工程师、程序员、运动员、体育教师、拓展训练员等。</p>
		   <p class="r_rightcp_p"><strong>你适宜的成长环境：</strong>适宜的成长环境：独立、需要身体力行、操作性强、较少涉及人际交往的环境。</p>
		    
	  <p class="r_rightcp_p"><strong>你可能喜欢的专业有：</strong>你可能喜欢的专业有：教育技术学，武术与民族传统体育，运动康复，休闲体育，机械工程，机械设计制造及其自动化，材料成型及控制工程，机械电子工程，过程装备与控制工程，车辆工程，汽车服务工程，机械工艺技术，微机电系统工程，机电技术教育，汽车维修工程教育，测控技术与仪器，材料科学与工程，材料物理，材料化学，冶金工程，金属材料工程，无机非金属材料工程，高分子材料与工程，复合材料与工程，粉体材料科学与工程，宝石及材料工艺学，焊接技术与工程，功能材料，纳米材料与技术，新能源材料与器件，能源与动力工程，能源与环境系统工程，新能源科学与工程，电气工程及其自动化，智能电网信息工程，光源与照明，电气工程与智能控制，电子信息工程，电子科学与技术，通信工程，微电子科学与工程，光电信息科学与工程，信息工程，广播电视工程，水声工程，电子封装技术，集成电路设计与集成系统，医学信息工程，电磁场与无线技术，电波传播与天线，电子信息科学与技术，电信工程及管理，应用电子技术教育，自动化，轨道交通信号与控制，计算机科学与技术，软件工程，网络工程，信息安全，物联网工程，数字媒体技术，智能科学与技术，空间信息与数字技术，电子与计算机工程，土木工程，建筑环境与能源应用工程，给排水科学与工程，建筑电气与智能化，城市地下空间工程，道路桥梁与渡河工程，水利水电工程，水文与水资源工程，港口航道与海岸工程，水务工程，测绘工程，遥感科学与技术，导航工程，地理国情监测，化学工程与工艺，制药工程，资源循环科学与工程，能源化学工程，化学工程与工业生物工程，地质工程，勘查技术与工程，资源勘查工程，地下水科学与工程，采矿工程，石油工程，矿物加工工程，油气储运工程，矿物资源工程，海洋油气工程，纺织工程，非织造材料与工程，轻化工程，包装工程，印刷工程，交通运输，交通工程，航海技术，轮机工程，飞行技术，交通设备与控制工程，救助与打捞工程，船舶电子电气工程，船舶与海洋工程，海洋工程与技术，海洋资源开发技术，航空航天工程，飞行器设计与工程，飞行器制造工程，飞行器动力工程，飞行器环境与生命保障工程，飞行器质量与可靠性，飞行器适航技术，武器系统与工程，武器发射工程，探测制导与控制技术，弹药工程与爆炸技术，特种能源技术与工程，装甲车辆工程，信息对抗技术，核工程与核技术，辐射防护与核安全，工程物理，核化工与核燃料工程，农业工程，农业机械化及其自动化，农业电气化，农业建筑环境与能源工程，农业水利工程，森林工程，木材科学与工程，林产化工，环境科学与工程，环境工程，环境科学，环境生态工程，环保设备工程，资源环境科学，水质科学与技术，生物医学工程，假肢矫形工程，食品科学与工程，食品质量与安全，粮食工程，乳品工程，酿酒工程，葡萄与葡萄酒工程，食品营养与检验教育，烹饪与营养教育，安全工程，生物工程，生物制药，刑事科学技术，消防工程，交通管理工程，安全防范工程，公安视听技术，抢险救援指挥与技术，火灾勘查，网络安全与执法，核生化消防，临床医学，麻醉学，医学影像学，眼视光医学，放射医学，口腔医学，法医学，医学检验技术，医学实验技术，医学影像技术，眼视光学，康复治疗学，口腔医学技术，卫生检验与检疫，听力与言语康复学，物流工程</p>
  
		    
   
    
 
 <p class="r_rightcp_p">根据你最弱的兴趣，你对帮助他人成长、教导他人、为他人提供服务不太感兴趣，因此，在职业生涯规划过程中，一些服务性要求较高的发展方向可能不适合你，比如教师、医生、护士、客服人员、社会工作者等。</p>
		   <p class="r_rightcp_p"><strong>不建议选择的专业范围:</strong>社会工作，家政学，思想政治教育，科学教育，人文教育，学前教育，小学教育，特殊教育，华文教育，体育教育，运动训练，汉语国际教育，英语，俄语，德语，法语，西班牙语，阿拉伯语，日语，波斯语，朝鲜语，菲律宾语，梵语巴利语，印度尼西亚语，印地语，柬埔寨语，老挝语，缅甸语，马来语，蒙古语，僧伽罗语，泰语，乌尔都语，希伯来语，越南语，豪萨语，斯瓦希里语，阿尔巴尼亚语，保加利亚语，波兰语，捷克语，斯洛伐克语，罗马尼亚语，葡萄牙语，瑞典语，塞尔维亚语，土耳其语，希腊语，匈牙利语，意大利语，泰米尔语，普什图语，世界语，孟加拉语，尼泊尔语，克罗地亚语，荷兰语，芬兰语，乌克兰语，挪威语，丹麦语，冰岛语，爱尔兰语，拉脱维亚语，立陶宛语，斯洛文尼亚语，爱沙尼亚语，马耳他语，哈萨克语，乌兹别克语，祖鲁语，拉丁语，翻译，商务英语，新闻学，广播电视学，网络与新媒体，应用心理学，精神医学，护理学，物业管理，旅游管理，酒店管理，会展经济与管理，旅游管理与服务教育。 </p>   
            </div>
 
 
        <div class="dayin"><a href="javascript:(window.print())">打 印</a> <a href="http://www.gaokaobaokao.com/franchisee/hy_phpword.php?cardid=10121004913" target="_blank">下载报告</a></div>
      </div>
      
    </div>
  </div>

<?php $this->load->view('footer'); ?>