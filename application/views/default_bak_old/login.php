<?php echo $this->load->view('header'); ?>
<style type="text/css">
body{background-color:#c8c8c8; padding:0px;}
.nav_title{display:none;}
</style>
<div id="login_body">
    <div id="login_container">
        <div id="lc_title"><img src="<?php echo SITE_ADMIN_LOGO; ?>" /> - 后台管理登录</div>
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
        <div id="lc_power">Power By <a id="link_author" class="a_color" href="http://www.lensic.cn/" target="_blank">Lensic</a></div>
    </div>
</div>
<?php echo $this->load->view('footer'); ?>