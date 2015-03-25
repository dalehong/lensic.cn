<?php $this->load->view('header'); ?>
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="/resources/kindeditor/themes/default/default.css" />
<script type="text/javascript" src="/resources/kindeditor/kindeditor-all-min.js"></script>
<script>
    KindEditor.ready(function(K) {
        var editor = K.editor({
            allowFileManager : true,
            uploadJson : '/common/editor_upload.html',
            fileManagerJson : '/common/editor_manager.html'
        });             
        K('#image2').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    showRemote : false,
                    imageUrl : K('#face').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        K('#face').val(url);
                        var div = K('#face_img');
                        div.html('');
                        div.append('<img width="112" height="150" src="' + url + '">');
                        editor.hideDialog();
                    }
                });
            });
        });
    });
</script>

<style type="text/css">
</style>
<form id="gxxs_form" method="post">
<div class="content">
    <input type="hidden" name="xs1_id" value="<?php echo @$xs1['id'];?>" />
    <!-- 基本信息 -->
    <div class="c_left">
    <div class="ptitle">所在院系</div>
    <div class="pint"><input class="input_text" type="text" name="department" id="department" title="" value="<?php echo $member['department'];?>"/></div>
    <div class="ptitle">专业</div>
    <div class="pint"><input class="input_text" type="text" name="specialty" id="specialty" title="" value="<?php echo $member['specialty'];?>"/></div>
    <div class="ptitle">班级</div>
    <div class="pint"><input class="input_text" type="text" name="class" id="class" title="" value="<?php echo $member['class'];?>"/></div>
    <div class="ptitle">学号</div>
    <div class="pint"><input class="input_text" type="text" name="studentid" id="studentid" title="" value="<?php echo $member['studentid'];?>"/></div>
    <div class="ptitle">姓名</div>
    <div class="pint"><input class="input_text" type="text" name="uname" id="uname" title="" value="<?php echo $member['uname'];?>"/></div>
    <div class="ptitle">性别</div>
    <div class="pint"><input class="input_text" type="text" name="sex" id="sex" title="" value="<?php echo $member['sex'];?>"/></div>
    <div class="ptitle">出生日期</div>
    <div class="pint"><input class="input_text" type="text" name="birthday" id="birthday" title="" value="<?php echo $member['birthday'];?>"/></div>
    <div class="ptitle">血型</div>
    <div class="pint"><input class="input_text" type="text" name="xuexing" id="xuexing" title="" value="<?php echo $member['xuexing'];?>"/></div>
    <div class="ptitle">籍贯</div>
    <div class="pint"><input class="input_text" type="text" name="hkcity" id="hkcity" title="" value="<?php echo $member['hkcity'];?>"/></div>
    <div class="ptitle">政治面貌</div>
    <div class="pint"><input class="input_text" type="text" name="politics" id="politics" title="" value="<?php echo $member['politics'];?>"/></div>
    <div class="ptitle">健康状况</div>
    <div class="pint"><input class="input_text" type="text" name="health" id="health" title="" value="<?php echo $member['health'];?>"/></div>
    <div class="ptitle">学历</div>
    <div class="pint"><input class="input_text" type="text" name="xueli" id="xueli" title="" value="<?php echo $member['xueli'];?>"/></div>
    <div class="ptitle clear">联系电话</div>
    <div class="pint"><input class="input_text" type="text" name="phone" id="phone" title="" value="<?php echo $member['phone'];?>"/></div>
    <div class="ptitle">Email</div>
    <div class="pint"><input class="input_text" type="text" name="email" id="email" title="" value="<?php echo $member['email'];?>"/></div>
    <div class="ptitle">联系地址</div>
    <div class="pint"><input class="input_text" type="text" name="address" id="address" title="" value="<?php echo $member['address'];?>"/></div>
    </div>
    <div class="c_right">
        <div id="face_img"><img src="<?php echo $member['face'];?>" width="112px" height="150px" /></div>
        <div class="ptitle clear">上传照片</div>
        <div class="pint" style="width:40px;">
            <input class="input_text" type="hidden" name="face" id="face" title="上传照片500k内" value="<?php echo $member['face'];?>"/>
          <input type="button" class="left_f ui-button ui-widget ui-state-default ui-corner-all" value="上传" id="image2"/>
        </div>
    </div>
    
    <!-- 以上为基本信息结束 -->
    <!-- 家庭情况 -->
    <div class="clear pl_10 ball f_title">家庭情况：</div>
    <div class="f_title" id="f_title">
        <div class="bb bl br" style="width:180px">家庭成员</div>
        <div class="bb br">姓名</div>
        <div class="bb br">工作单位</div>
        <div class="bb br">职务</div>
        <div class="bb br">联系方式</div> 
        <div class="bb br" style="width:41px"><b>更多</b></div>    
    </div>
    <div class="f_body" id="family">
        <?php 
		if(empty($xs3)){
			echo '<div class="bb bl br" style="width:180px">
					<input class="input_text" type="text" name="xs2_family[]" value="如：父亲" onclick="if(this.value==\'如：父亲\') this.value=\'\'"; />
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_name[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_unit[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_job[]" />
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_phone[]" />
				</div>
				<div class="bb br" style="width:41px;cursor: pointer;" onclick="add_family()"><b>增加</b></div>
				
				<div class="bb bl br" style="width:180px">
					<input class="input_text" type="text" name="xs2_family[]" value="如：母亲" onclick="if(this.value==\'如：母亲\') this.value=\'\'"; />
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_name[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_unit[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_job[]" />
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_phone[]" />
				</div>
				<div class="bb br" style="width:41px;cursor: pointer;" onclick="add_family()"><b>增加</b></div>';		
		}else{
			foreach($xs2 as $n => $data): ?>
				<div class="bb bl br" style="width:180px">
					<input class="input_text" type="text" name="xs2_family_u[]" title="如：父亲" value="<?php echo $data['family'];?>" />
					<input type="hidden" name="xs2_id_u[]" value="<?php echo $data['id'];?>" />
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_name_u[]" value="<?php echo $data['name'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_unit_u[]" value="<?php echo $data['unit'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_job_u[]" value="<?php echo $data['job'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs2_phone_u[]" value="<?php echo $data['phone'];?>"/>
				</div>
				<div class="bb br" style="width:41px;cursor: pointer;" onclick="add_family()"><b>增加</b></div>
		<?php 
			endforeach; 
			}
		?>
        
    </div>
    <!-- 家庭情况结束 -->
    
     <!-- 教育经历 -->
    <div class="clear pl_10 f_title bl br bb">教育经历:</div>
    <div class="f_title" id="f_title">
        <div class="bb br bl" style="width:180px">名称</div>
        <div class="bb br">时间</div>
        <div class="bb br">学校</div>
        <div class="bb br">学习成绩</div>
        <div class="bb br">校内职务</div> 
        <div class="bb br" style="width:41px"><b>更多</b></div>    
    </div>
    <div class="f_body" id="jiaoyu">        
        <?php 
		if(empty($xs3)){
			echo '<div class="bb bl br" style="width:180px">
					<input class="input_text" type="text" name="xs3_name[]" value="如：小学" onclick="if(this.value==\'如：小学\') this.value=\'\'"; />
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_time[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_school[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_specialty[]"="specialty" />
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_score[]"/>
				</div>
				<div class="bb br" style="width:41px;cursor: pointer;" onclick="add_jiaoyu()"><b>增加</b></div> ';
			echo '<div class="bb bl br" style="width:180px">
					<input class="input_text" type="text" name="xs3_name[]" value="如：中学" onclick="if(this.value==\'如：中学\') this.value=\'\'";/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_time[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_school[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_specialty[]"="specialty" />
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_score[]"/>
				</div>
				<div class="bb br" style="width:41px;cursor: pointer;" onclick="add_jiaoyu()"><b>增加</b></div> ';
		}else{
			foreach($xs3 as $n => $data): ?>
				<div class="bb bl br" style="width:180px">
					<input class="input_text" type="text" name="xs3_name_u[]" value="<?php echo $data['name'];?>"/>
					<input class="input_text" type="hidden" name="xs3_id_u[]" value="<?php echo $data['id'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_time_u[]" value="<?php echo $data['school'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_school_u[]" value="<?php echo $data['school'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_specialty_u[]" value="<?php echo $data['specialty'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs3_score_u[]" value="<?php echo $data['score'];?>"/>
				</div>
				<div class="bb br" style="width:41px;cursor: pointer;" onclick="add_jiaoyu()"><b>增加</b></div>
		<?php 
			endforeach;
			}
		?>
              
    </div>
    <!-- 教育经历结束 -->
	
	<!-- 社会实践 -->
    <div class="clear pl_10  bl br bb f_title ">社会实践:</div>
    <div class="f_title" id="f_title">
        <div class="bb br bl" style="width:180px">名称</div>
        <div class="bb br">时间</div>
        <div class="bb br">组织单位</div>
        <div class="bb br">实践内容</div>
        <div class="bb br">实践收获</div> 
        <div class="bb br" style="width:41px"><b>更多</b></div>    
    </div>
    <div class="f_body"  id="shijian">
        <?php //value="123" onclick="if(this.value==\'234\') this.value=\'\'";
		if(empty($xs4)){
			echo '<div class="bb bl br" style="width:180px">			
					<input class="input_text" type="text" name="xs4_sjname[]" title="" value=""/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_time[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_unit[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_content[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_harvest[]" />
				</div>
				<div class="bb br" style="width:41px;cursor: pointer;" onclick="add_shijian()"><b>增加</b></div>';
			echo '<div class="bb bl br" style="width:180px">
					<input class="input_text" type="text" name="xs4_sjname[]" title="" value=""/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_time[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_unit[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_content[]"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_harvest[]" />
				</div>
				<div class="bb br" style="width:41px;cursor: pointer;" onclick="add_shijian()"><b>增加</b></div>';		
		}else{		
			foreach($xs4 as $n => $data): 
		?>
				<div class="bb bl br" style="width:180px">
					<input class="input_text" type="text" name="xs4_sjname_u[]" title="" value="<?php echo $data['sjname'];?>"/>
					<input class="input_text" type="hidden" name="xs4_id_u[]" value="<?php echo $data['id'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_time_u[]" value="<?php echo $data['time'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_unit_u[]" value="<?php echo $data['unit'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_content_u[]" value="<?php echo $data['content'];?>"/>
				</div>
				<div class="bb br">
					<input class="input_text" type="text" name="xs4_harvest_u[]" value="<?php echo $data['harvest'];?>"/>
				</div>
				<div class="bb br" style="width:41px;cursor: pointer;" onclick="add_shijian()"><b>增加</b></div>
		<?php 
			endforeach; 
			}
		?>
        
    </div>
    <!-- 社会实践结束 -->    
	
	<!-- 所获证书、荣誉 -->  
    <div class="miaoshu">
        <div class="miaoshu_1 bb br bl" style="line-height:18px; padding-top:30px; text-align:center; height:50px; padding-right:0; width:90px">所获证书、荣誉</div>
        <div class="miaoshu_2 bb br">
            <textarea class="textarea" id="" name="honor" title="简单描述您所获证书、荣誉"><?php echo $xs1['honor'];?></textarea>
        </div>
    </div>
	
    <!-- 学生详细信息 -->
    <div class="wenti">
        <div class="wenti_1 bb br bl">面临问题</div>
        <div class="wenti_2 bb br">
            <?php $problem_arr = explode(',', $xs1['problem']);?>
            <input class="input_checkbox" type="checkbox" name="problem[]" value="学业规划" <?php echo in_array('学业规划', $problem_arr)?'checked':'';?> id="a"><label for="a">学业规划</label>&nbsp;&nbsp;
            <input class="input_checkbox" type="checkbox" name="problem[]" value="专业选择" <?php echo in_array('专业选择', $problem_arr)?'checked':'';?> id="b"><label for="b">专业选择</label>&nbsp;&nbsp;</br>
            <input class="input_checkbox" type="checkbox" name="problem[]" value="了解职业" <?php echo in_array('了解职业', $problem_arr)?'checked':'';?> id="c"><label for="c">了解职业</label>&nbsp;&nbsp;
            <input class="input_checkbox" type="checkbox" name="problem[]" value="求职指导" <?php echo in_array('求职指导', $problem_arr)?'checked':'';?> id="d"><label for="d">求职指导</label>&nbsp;&nbsp;
            <input class="input_checkbox" type="checkbox" name="problem[]" value="职业规划" <?php echo in_array('职业规划', $problem_arr)?'checked':'';?> id="f"><label for="f">职业规划</label>&nbsp;&nbsp;</br>
            <input class="input_checkbox" type="checkbox" name="problem[]" value="自我认知" <?php echo in_array('自我认知', $problem_arr)?'checked':'';?> id="e"><label for="e">自我认知</label>&nbsp;&nbsp;
            <input class="input_checkbox" type="checkbox" name="problem[]" value="自我提升" <?php echo in_array('自我提升', $problem_arr)?'checked':'';?> id="g"><label for="g">自我提升</label>&nbsp;&nbsp;
            <input class="input_checkbox" type="checkbox" name="problem[]" value="人际关系" <?php echo in_array('人际关系', $problem_arr)?'checked':'';?> id="h"><label for="h">人际关系</label>&nbsp;&nbsp;</br>
            <input class="input_checkbox" type="checkbox" name="problem[]" value="其它" <?php echo in_array('其它', $problem_arr)?'checked':'';?> id="e"><label for="e">其它</label>&nbsp;&nbsp;
        </div>
    </div>

	<!-- 目标学校 -->
	<div class="wenti">
        <div class="wenti_1 bb br bl">目标学校</div>
        <div class="bb br wenti_3">
            <input class="input_text" type="text" name="target_school" value="<?php echo $xs1['target_school'];?>"/>
        </div>
        <div class="wenti_1 bb br">目标专业</div>
        <div class="bb br wenti_3">
            <input class="input_text" type="text" name="target_specialty" value="<?php echo $xs1['target_specialty'];?>"/>
        </div>
        <div class="wenti_1 bb br">目标企业</div>
        <div class="bb br wenti_3" style="width:241px;">
            <input class="input_text" type="text" name="target_company" value="<?php echo $xs1['target_company'];?>"/>
        </div>
        
        <div class="wenti_1 bb br bl clear">目标职务</div>
        <div class="bb br wenti_3">
            <input class="input_text" type="text" name="target_zhiwu" value="<?php echo $xs1['target_zhiwu'];?>"/>
        </div>
        <div class="wenti_1 bb br">目标薪资</div>
        <div class="bb br wenti_3">
            <input class="input_text" type="text" name="target_salary" value="<?php echo $xs1['target_salary'];?>"/>
        </div>
        <div class="wenti_1 bb br">目标工作</div>
        <div class="bb br wenti_3" style="width:241px;">
            <input class="input_text" type="text" name="target_job" value="<?php echo $xs1['target_job'];?>"/>
        </div>
    </div>
    
    <!-- 问题描述 -->
    <div class="miaoshu">
        <div class="miaoshu_1 bb br bl" style="line-height:18px; padding-top:20px; text-align:center; height:60px; padding-right:0; width:90px">遇到的职业规划方面最大困惑</div>
        <div class="miaoshu_2 bb br">
            <textarea class="textarea" id="" name="confused" title="简单描述您遇到的职业规划方面最大困惑"><?php echo $xs1['confused'];?></textarea>
        </div>
    </div>
    
    <div class="miaoshu">
        <div class="miaoshu_1 bb br bl"  style="line-height:18px; padding-top:20px; text-align:center; height:60px; padding-right:0; width:90px">期望老师帮您解决</div>
        <div class="miaoshu_2 bb br">
            <textarea class="textarea" id="" name="resolve" title="简单描述您希望解决的问题"><?php echo $xs1['resolve'];?></textarea>
        </div>
        <!--<div class="bb br bl clear" style="height:40px; width:1026px; margin-bottom:30px;text-align: center;padding-top: 10px;"><input type="submit" value="确认提交" /></div> -->
    </div>
     
    <!-- 学生详细信息结束 -->   
</div>
</form>
<script type="text/javascript">
function add_family(){
    $("#family").append('<div class="bb bl br" style="width:180px"><input class="input_text" type="text" name="xs2_family[]" title="如：父亲" /></div><div class="bb br">   <input class="input_text" type="text" name="xs2_name[]" id="name" title="" /></div><div class="bb br"><input class="input_text" type="text" name="xs2_unit[]" id="unit" title="" /></div><div class="bb br"><input class="input_text" type="text" name="xs2_job[]" id="job" title="" /> </div><div class="bb br"><input class="input_text" type="text" name="xs2_phone[]" id="phone" title="" /></div><div class="bb br" style="width:41px;cursor: pointer;" onclick="add_family()"><b>增加</b></div>');
}
function add_jiaoyu(){
    $("#jiaoyu").append('<div class="bb bl br" style="width:180px"><input class="input_text" type="text" name="xs3_name[]" value=""/></div><div class="bb br"><input class="input_text" type="text" name="xs3_time[]" id="time"/></div><div class="bb br"><input class="input_text" type="text" name="xs3_school[]" id="school"/></div><div class="bb br"><input class="input_text" type="text" name="xs3_specialty[]" id="specialty" /></div><div class="bb br"><input class="input_text" type="text" name="xs3_score[]" id="score"/></div><div class="bb br" style="width:41px;cursor: pointer;" onclick="add_jiaoyu()"><b>增加</b></div>');
}
function add_shijian(){
    $("#shijian").append('<div class="bb bl br" style="width:180px"><input class="input_text" type="text" name="xs4_sjname[]" title="" value=""/></div><div class="bb br"><input class="input_text" type="text" name="xs4_time[]"/></div><div class="bb br"><input class="input_text" type="text" name="xs4_unit[]"/></div><div class="bb br"><input class="input_text" type="text" name="xs4_content[]"/></div><div class="bb br"><input class="input_text" type="text" name="xs4_harvest[]" /> </div><div class="bb br" style="width:41px;cursor: pointer;" onclick="add_shijian()"><b>增加</b></div>');
}

</script>

<?php $this->load->view('footer'); ?>