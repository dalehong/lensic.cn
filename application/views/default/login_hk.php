<?php echo $this->load->view('header'); ?>
<style type="text/css">
body{background-color:#c8c8c8; padding:0px;}
.nav_title{display:none;}
</style>
<div id="login_body" style="background-image: url(/static/images/dyzz.jpg); background-color: rgb(245, 245, 245); background-size: cover, 100%; background-position: 0% 100%; background-repeat: no-repeat no-repeat;">
    <div id="login_container">
        <div id="lc_title"><!--<img src="<?php echo SITE_ADMIN_LOGO; ?>" /> - -->在线测评、咨询系统登录</div>
        <form id="lc_form" method="post">
        <table width="100%" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td class="td_right">用户名：</td>
                <td><input class="input_text" type="text" id="username" name="username" title="您的用户名" maxlength="20" /></td>
            </tr>
            <tr>
                <td class="td_right">密码：</td>
                <td><input class="input_text" type="password" id="password" name="password" title="您的密码" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="提交" /> <input type="reset" value="取消" /></td>
            </tr>
        </tbody>
        </table>
        </form>
        <div id="lc_power">
			<h1>中职生职业规划咨询</h1>
			海口市高级技工学校</br>
			<!--Power By <a id="link_author" class="a_color" href="http://www.xycareer.com/" target="_blank">向阳生涯——中国职业规划第一品牌</a>-->
		</div>
    </div>
</div>
<?php echo $this->load->view('footer'); ?>