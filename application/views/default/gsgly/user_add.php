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