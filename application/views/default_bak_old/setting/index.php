<?php echo $this->load->view('header'); ?>
<div id="tabs">
	<ul>
    	<li><a href="#tabs-1">文件名设置</a></li>
        <li><a href="#tabs-2">自定义加密</a></li>
        <li><a href="#tabs-3">上传大小</a></li>
    </ul>
    <div id="tabs-1">
    <form method="post">
    <input type="hidden" name="tabs" value="tabs-1" />
    <table width="100%" cellpadding="0" cellspacing="0">
    <tbody>
    	<tr>
        	<td class="td_right" style="width:222px;">资源存放文件名：</td>
            <td><input class="input_text" type="text" id="site_resources" name="site_resources" maxlength="20" value="<?php echo str_replace(base_url(), '', SITE_RESOURCES); ?>" title="公共外部资源存放文件夹，位于根目录下，<br />必须保证填写内容与文件夹名一致" /> SITE_RESOURCES</td>
        </tr>
        <tr>
        	<td class="td_right">前后端图片、样式、脚本存放文件名：</td>
            <td><input class="input_text" type="text" id="site_static" name="site_static" maxlength="20" value="<?php echo str_replace(base_url(), '', SITE_COMMON_STATIC); ?>" title="（公共、前端、后端）样式、图片、脚本存放文件夹，位于根目录下，<br />必须保证填写内容与文件夹名一致" /> SITE_COMMON_STATIC</td>
        </tr>
        <tr>
        	<td class="td_right">上传文件存放文件名：</td>
            <td><input class="input_text" type="text" id="site_uploads" name="site_uploads" maxlength="20" value="<?php echo str_replace(base_url(), '', SITE_UPLOADS); ?>" title="公共上传文件夹，位于根目录下，<br />必须保证填写内容与文件夹名一致" /> SITE_UPLOADS</td>
        </tr>
        <tr>
        	<td class="td_right">前端主题存放文件名：</td>
            <td><input class="input_text" type="text" id="site_themes" name="site_themes" maxlength="20" value="<?php echo SITE_THEMES; ?>" title="前端存放主题文件夹，位于根目录下，<br />必须保证填写内容与文件夹名一致" /></td>
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
        	<td class="td_right">开始密钥：</td>
            <td><input class="input_text" type="text" id="site_encryption_key_begin" name="site_encryption_key_begin" maxlength="20" value="<?php echo SITE_ENCRYPTION_KEY_BEGIN; ?>" title="开始密钥，运用了 helper 中的 my_md5 函数，请在第一次使用系统时设置" /></td>
        </tr>
        <tr>
        	<td class="td_right">结束密钥：</td>
            <td><input class="input_text" type="text" id="site_encryption_key_end" name="site_encryption_key_end" maxlength="20" value="<?php echo SITE_ENCRYPTION_KEY_END; ?>" title="结束密钥，运用了 helper 中的 my_md5 函数，请在第一次使用系统时设置" /></td>
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
        	<td class="td_right">上传图片大小：</td>
            <td><input class="input_text" type="text" id="site_upload_image_size" name="site_upload_image_size" value="<?php echo SITE_UPLOAD_IMAGE_SIZE; ?>" title="允许上传图片的最大值，单位 B" /> SITE_UPLOAD_IMAGE_SIZE</td>
        </tr>
        <tr>
        	<td class="td_right">上传动画大小：</td>
            <td><input class="input_text" type="text" id="site_upload_flash_size" name="site_upload_flash_size" value="<?php echo SITE_UPLOAD_FLASH_SIZE; ?>" title="允许上传动画的最大值，单位 B" /> SITE_UPLOAD_FLASH_SIZE</td>
        </tr>
        <tr>
        	<td class="td_right">上传视频大小：</td>
            <td><input class="input_text" type="text" id="site_upload_media_size" name="site_upload_media_size" value="<?php echo SITE_UPLOAD_MEDIA_SIZE; ?>" title="允许上传视频的最大值，单位 B" /> SITE_UPLOAD_MEDIA_SIZE</td>
        </tr>
        <tr>
        	<td class="td_right">上传文件大小：</td>
            <td><input class="input_text" type="text" id="site_upload_file_size" name="site_upload_file_size" value="<?php echo SITE_UPLOAD_FILE_SIZE; ?>" title="允许上传文件的最大值，单位 B" /> SITE_UPLOAD_FILE_SIZE</td>
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
<?php echo $this->load->view('footer'); ?>