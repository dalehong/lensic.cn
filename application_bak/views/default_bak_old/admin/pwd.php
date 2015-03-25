<?php $this->load->view('header'); ?>
<form id="pwd_form" method="post">
<table width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
    	<td class="td_right">旧密码：</td>
        <td><input class="input_text" type="password" name="old_password" id="old_password" title="您当前的密码" /></td>
    </tr>
    <tr>
    	<td class="td_right">新密码：</td>
        <td><input class="input_text" type="password" name="password" id="password" title="您的新密码" /></td>
    </tr>
    <tr>
    	<td class="td_right">确认新密码：</td>
        <td><input class="input_text" type="password" id="check_password" title="您上方输入的新密码" /></td>
    </tr>
    <tr>
    	<td class="td_right"></td>
        <td><input type="submit" value="提交" /></td>
    </tr>
</tbody>
</table>
</form>
<?php $this->load->view('footer'); ?>