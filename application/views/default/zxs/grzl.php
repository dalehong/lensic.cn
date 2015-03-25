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
    <input type="hidden" name="mid" value="<?php echo $member['mid'];?>" />
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
    $("#shijian").before('<div class="bb bl br" style="width:180px"><input class="input_text" type="text" name="xs4_sjname[]" title="" value=""/></div><div class="bb br"><input class="input_text" type="text" name="xs4_time[]"/></div><div class="bb br"><input class="input_text" type="text" name="xs4_unit[]"/></div><div class="bb br"><input class="input_text" type="text" name="xs4_content[]"/></div><div class="bb br"><input class="input_text" type="text" name="xs4_harvest[]" /> </div><div class="bb br" style="width:41px;cursor: pointer;" onclick="add_shijian()"><b>增加</b></div>');
}

</script>

<?php $this->load->view('footer'); ?>