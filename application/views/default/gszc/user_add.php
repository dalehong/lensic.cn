<?php $this->load->view('header'); ?>
<form id="user_add_form" method="post">
<table width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
    	<td class="td_right">用户名：</td>
        <td><input class="input_text" type="text" name="username" id="username" title="不能和现有用户名相同" maxlength="20" /></td>
    </tr>
    <tr>
    	<td class="td_right">密码：</td>
        <td><input class="input_text" type="text" name="password" id="password" title="用户登陆的密码" value="123456" /></td>
    </tr>
    <tr>
    	<td class="td_right">类型：</td>
        <td>
        <span class="input_radio_container">
		    <input type="radio" id="radio1" name="studentid" value="1" /><label for="radio1">学生</label><input type="radio" id="radio2" name="studentid" value="-1" /><label for="radio2">职场</label>
	    </span>
	    </td>
    </tr>
    <tr>
    	<td class="td_right">姓名：</td>
        <td><input class="input_text" type="text" name="uname"/></td>
    </tr>
    <tr>
    	<td class="td_right">性别：</td>
        <td>
        <span class="input_radio_container">
		    <input type="radio" id="radio3" name="sex" value="男" /><label for="radio3">男</label><input type="radio" id="radio4" name="sex" value="女" /><label for="radio4">女</label>
	    </span>
	    </td>
    </tr>
    <tr>
    	<td class="td_right">电话：</td>
        <td><input class="input_text" type="text" name="phone"/></td>
    </tr>
    <!--<tr>
    	<td class="td_right">所属权限组：</td>
        <td><select id="power_group_id" name="power_group_id" class="select"><option value="">请选择</option><?php foreach($power_group as $data): ?><option value="<?php echo $data['id']; ?>"><?php echo $data['group_name']; ?></option><?php endforeach; ?></select></td>
    </tr>-->
    <tr>
    	<td class="td_right"></td>
        <td><input type="submit" value="提交" /></td>
    </tr>
</tbody>
</table>
</form>
<?php $this->load->view('footer'); ?>