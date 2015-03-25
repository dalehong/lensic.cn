<?php echo $this->load->view('header'); ?>
<div id="tabs">
	<ul>
    	<li><a href="#tabs-1">基本设置</a></li>
        <li><a href="#tabs-2">站点状态</a></li>
        <li><a href="#tabs-3">注册协议</a></li>
        <li><a href="#tabs-4">主题设置</a></li>
    </ul>
    <div id="tabs-1">
    <form method="post">
    <input type="hidden" name="tabs" value="tabs-1" />
    <table width="100%" cellpadding="0" cellspacing="0">
    <tbody>
    	<tr>
        	<td class="td_right">站点名称：</td>
            <td><input class="input_text" type="text" id="site_name" name="site_name" maxlength="50" value="<?php echo SITE_NAME; ?>" title="您的站点名称" /> SITE_NAME</td>
        </tr>
        <tr>
        	<td class="td_right">站点 LOGO：</td>
            <td><input class="input_text" type="text" id="site_logo" name="site_logo" maxlength="50" value="<?php echo str_replace(SITE_STATIC . '/', '', SITE_LOGO); ?>" title="您的站点 LOGO，位于 <?php echo SITE_STATIC; ?> 下" /> SITE_LOGO</td>
        </tr>
        <tr>
        	<td class="td_right">备案号：</td>
            <td><input class="input_text" type="text" id="site_icp" name="site_icp" maxlength="50" value="<?php echo SITE_ICP; ?>" title="您的站点备案号" /> SITE_ICP</td>
        </tr>
        <tr>
        	<td class="td_right">统计代码：</td>
            <td><textarea class="textarea" id="site_statistical_code" name="site_statistical_code" title="您的站点统计代码"><?php echo SITE_STATISTICAL_CODE; ?></textarea> SITE_STATISTICAL_CODE</td>
        </tr>
        <tr>
        	<td class="td_right">分享代码：</td>
            <td><textarea class="textarea" id="site_share_code" name="site_share_code" title="您的站点分享代码"><?php echo SITE_SHARE_CODE; ?></textarea> SITE_SHARE_CODE</td>
        </tr>
        <tr>
        	<td class="td_right">站点关键字：</td>
            <td><input class="input_text" type="text" id="site_keywords" name="site_keywords" title="您的站点关键字" maxlength="200" value="<?php echo SITE_KEYWORDS; ?>" /> SITE_KEYWORDS</td>
        </tr>
        <tr>
        	<td class="td_right">站点描述：</td>
            <td><input class="input_text" type="text" id="site_description" name="site_description" title="您的站点描述" maxlength="200" value="<?php echo SITE_DESCRIPTION; ?>" /> SITE_DESCRIPTION</td>
        </tr>
        <tr>
        	<td class="td_right"></td>
            <td><input type="submit" value="提交" /></td>
        </tr>
    </tbody>
    </table>
    </form>
    </div>
    <div id="tabs-2">
    <form method="post">
    <input type="hidden" name="tabs" value="tabs-2" />
    <table width="100%" cellpadding="0" cellspacing="0">
    <tbody>
    	<tr>
        	<td class="td_right">站点状态：</td>
            <td class="input_radio_container"><input type="radio" id="radio1" name="site_status" value="1"<?php if(SITE_STATUS == 1): ?> checked="checked"<?php endif; ?> /><label for="radio1">开启</label><input type="radio" id="radio2" name="site_status" value="2"<?php if(SITE_STATUS == 2): ?> checked="checked"<?php endif; ?> /><label for="radio2">关闭</label>&nbsp;&nbsp;SITE_STATUS</td>
        </tr>
        <tr>
        	<td class="td_right">站点关闭原因：</td>
            <td><input class="input_text" type="text" id="site_close_reason" name="site_close_reason" maxlength="200" value="<?php echo SITE_CLOSE_REASON; ?>" title="您的站点关闭原因" /> SITE_CLOSE_REASON</td>
        </tr>
        <tr>
        	<td class="td_right"></td>
            <td><input type="submit" value="提交" /></td>
        </tr>
    </tbody>
    </table>
    </form>
    </div>
    <div id="tabs-3">
    <form method="post">
    <input type="hidden" name="tabs" value="tabs-3" />
    <table width="100%" cellpadding="0" cellspacing="0">
    <tbody>
    	<tr>
        	<td class="td_right">注册协议：</td>
            <td><textarea class="textarea" id="site_reg_agreement" name="site_reg_agreement" title="您的站点注册协议"><?php echo SITE_REG_AGREEMENT; ?></textarea> SITE_REG_AGREEMENT</td>
        </tr>
        <tr>
        	<td class="td_right"></td>
            <td><input type="submit" value="提交" /></td>
        </tr>
    </tbody>
    </table>
    </form>
    </div>
    <div id="tabs-4">
    <form method="post">
    <input type="hidden" name="tabs" value="tabs-4" />
    <table width="100%" cellpadding="0" cellspacing="0">
    <tbody>
    	<tr>
        	<td class="td_right">主题名称：</td>
            <td><input class="input_text" type="text" id="site_theme" name="site_theme" maxlength="20" value="<?php echo str_replace(SITE_THEMES . '/', '', SITE_THEME); ?>" title="您的站点主题名称，位于根目录 <?php echo SITE_THEMES; ?> 下，必须保证填写内容与文件夹名一致" /></td>
        </tr>
        <tr>
        	<td class="td_right"></td>
            <td><input type="submit" value="提交" /></td>
        </tr>
    </tbody>
    </table>
    </form>
    </div>
</div>
<script type="text/javascript" src="<?php echo SITE_RESOURCES; ?>/kindeditor/kindeditor-all-min.js"></script>
<script type="text/javascript">
KindEditor.ready(function (K){
	var options = 
	{
		width : '800px',
		height : '380px',
		allowFileManager : true,
		uploadJson : '<?php echo site_url('common/editor_upload'); ?>',
		fileManagerJson : '<?php echo site_url('common/editor_manager'); ?>'
	};
	var editor = K.create('#site_reg_agreement', options);
});
</script>
<?php echo $this->load->view('footer'); ?>