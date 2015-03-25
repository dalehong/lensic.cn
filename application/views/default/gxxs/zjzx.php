<?php $this->load->view('header'); ?>
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="/resources/Datepicker/jquery-ui.css">
<script src="/resources/Datepicker/jquery-1.10.2.js"></script>
<script src="/resources/Datepicker/jquery-ui.js"></script>
<script>
	$(function(){  
		$("#zxsj2").datepicker({//添加日期选择功能  
		dateFormat: 'yy-mm-dd',//日期格式  
		minDate:'2015-01-01',//最小日期  
		maxDate:'2058-03-20',//最大日期  
		monthNames: ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],  
		dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],  
		dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],  
		dayNamesMin: ['日','一','二','三','四','五','六']
		});  
	}); 
  </script>
<div class="content">
<form id="gxxs_zjzx_form" method="post">
	<div>

</form>
</div>
<form id="gxxs_zjzx_form" method="post">
<table id="list_table" width="100%" style="max-width:1028px;" cellpadding="0" cellspacing="0">
<tbody class="zjzx">
    <?php echo @$error; ?>
    <tr>
        <td colspan="11" class="h2 left_a"><b>一、您期望安排咨询的时间</b>：</td>
    </tr>
    <!--<tr>
        <td colspan="11" class="question">ddd</td>
    </tr>-->
    <?php 
        $zxsj=explode('|', $zx['zxsj']);
        $zxsj2=explode('--', $zxsj[1]); 
    ?>
    <tr class="fenzhi">
      	<td colspan="11"><input class="input_checkbox" type="radio" name="zxsj" value="周一至周五" <?php echo @$zxsj[0]=='周一至周五'?'checked':'';?> id="fk_a"><label for="fk_a">周一至周五</label></td>
    </tr>
    <tr class="fenzhi">
      	<td colspan="11"><input class="input_checkbox" type="radio" name="zxsj" value="周末" <?php echo @$zxsj[0]=='周末'?'checked':'';?> id="fk_b"><label for="fk_b">周末</label></td>
    </tr>
    <tr class="fenzhi">
      	<td colspan="11"><input class="input_checkbox" type="checkbox" name="zxsj2[]" value="上午" <?php echo @array_intersect(array('上午'),$zxsj2)?'checked':'';?> id="fk_c"><label for="fk_c">上午</label></td>
    </tr>
    <tr class="fenzhi">
      	<td colspan="11"><input class="input_checkbox" type="checkbox" name="zxsj2[]" value="下午" <?php echo @array_intersect(array('下午'),$zxsj2)?'checked':'';?> id="fk_d"><label for="fk_d">下午</label></td>
    </tr>
    <tr class="fenzhi">
      	<td colspan="11"><input class="input_checkbox" type="checkbox" name="zxsj2[]" value="晚上" <?php echo @array_intersect(array('晚上'),$zxsj2)?'checked':'';?> id="fk_e"><label for="fk_e">晚上</label></td>
    </tr>
    <tr class="fenzhi">
      	<td colspan="11"><input class="input_checkbox" type="checkbox" <?php echo @join('',array_diff($zxsj2,array('周一至周五','周末','上午','下午','晚上')))? 'checked':'';?> id="fk_f"><label for="fk_f">具体日期 <input class="input_text" type="text" name="zxsj2[]" id="zxsj2" value="<?php echo join(',', array_diff($zxsj2,array('周一至周五','周末','上午','下午','晚上'))); ?>"></label></td>
    </tr>
    
    <tr>
        <td colspan="11" class="h2 left_a"><b>二、您期望安排咨询的方式</b></td>
    </tr>
    <tr class="fenzhi">
      	<td colspan="11"><input class="input_checkbox" type="radio" name="zxfs" value="面谈咨询" <?php echo @$zx['zxfs']=='面谈咨询'?'checked':'';?> id="fk_g"><label for="fk_g">面谈咨询</label></td>
    </tr>
    <tr class="fenzhi">
      	<td colspan="11"><input class="input_checkbox" type="radio" name="zxfs" value="电话咨询" <?php echo @$zx['zxfs']=='电话咨询'?'checked':'';?> id="fk_h"><label for="fk_h">电话咨询</label></td>
    </tr>
    <tr class="fenzhi">
      	<td colspan="11"><input class="input_checkbox" type="radio" name="zxfs" value="QQ语音或视频咨询" <?php echo @$zx['zxfs']=='QQ语音或视频咨询'?'checked':'';?> id="fk_i"><label for="fk_i">QQ语音或视频咨询</label></td>
    </tr>
    <tr>
        <td colspan="11" class="button"><input type="submit" value="确认提交" /></td>
    </tr>
</tbody>
</table>
</form>
<?php $this->load->view('footer'); ?>