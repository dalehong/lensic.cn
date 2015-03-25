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
<?php 
	if(empty($member['studentid'])){	        	
?>
	<div class="iid_title" style="line-height:50px; height:50px"><h2>亲爱的<?php echo $member['uname'];?> 欢迎进入向阳生涯职业测评，请选择您的角色</h2></div>
    <div>
	    <table width="100%" cellpadding="0" cellspacing="0">
	    <tbody>
	        <tr height='40'>
	            <td width="40%"></td>
	            <td width="10%">
            	<form method="post" action="">
					<input type="hidden" name="studentid" value="1"/>
					<input type="submit" value="我是学生" />
				</form>
				</td>
	            <td width="10%">
            	<form method="post" action="">
					<input type="hidden" name="studentid" value="-1"/>
					<input type="submit" value="我是职场人" />
				</form>
	            </td>
	            <td width="40%"></td>
	        </tr>
	    </tbody>
	    </table>
    </div>
<?php 
	}else{
?>

	<div class="iid_title" style="line-height:50px; height:50px"><h2>亲爱的<?php echo $member['uname'];?> 欢迎进入向阳生涯职业测评</h2></div>
    <div>
	    <table width="100%" cellpadding="0" cellspacing="0">
	    <tbody>
	        <tr height='40'>
	            <td width="10%">
            	<form method="post" action="">
					<input type="submit" value="开始测评" />
				</form>
				</td>
	        </tr>
	    </tbody>
	    </table>
    </div>
<?php 
	}

?>
    
	<div class="iid_title" style="margin-top: 10px;border-top: 1px solid #999;">用户信息</div>
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