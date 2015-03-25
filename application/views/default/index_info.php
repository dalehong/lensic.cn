<?php echo $this->load->view('header'); ?>
<!--
<div class="inde_info_div">
	<div class="iid_title">平台信息</div>
    <div>
    <table width="100%" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
        	<td width="25%">网站域名</td>
            <td width="25%"><?php echo $_SERVER['SERVER_NAME']; ?></td>
            <td width="25%">平台版本</td>
            <td width="25%">CI <?php echo CI_VERSION; ?></td>
            
        </tr>
        <tr>
        	<td width="25%">脚本语言</td>
            <td width="25%">PHP <?php echo PHP_VERSION; ?></td>
            <td width="25%">数据库</td>
            <td width="25%">MYSQL <?php echo $this->db->version(); ?></td>
        </tr>
    </tbody>
    </table>
    </div>
</div>
-->
<div class="inde_info_div">
	<div class="iid_title">用户信息</div>
    <div>
    <table width="100%" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td width="25%">当前用户</td>
            <td width="25%"><?php echo $user_data['admin_username']; ?></td>
            <td width="25%">所属权限组</td>
            <td width="25%"><?php echo $user_data['admin_power_name']; ?></td>
        </tr>
        <tr>
        	<td width="25%">登录 IP</td>
            <td width="25%"><?php echo $this->input->ip_address(); ?></td>
            <td width="25%">登录时间</td>
            <td width="25%"><?php echo $user_data['admin_login_time']; ?></td>
        </tr>
    </tbody>
    </table>
    </div>
</div>
<?php echo $this->load->view('footer'); ?>