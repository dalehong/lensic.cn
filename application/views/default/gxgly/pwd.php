<?php $this->load->view('header'); ?>
<style>
    .ptitle, .pint{float: left;}
    .clear{clear: both;}
    .input_radio_container{line-height:40px;}
</style>
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>

<form id="search_form" method="post" class="content"  action="/gxgly/pwd" >    
    <div class="ptitle">姓名</div>
    <div class="pint"><input type="text" class="input_text" disabled="disabled" name="uname" value="<?php echo @$member['uname']; ?>" /> </div>
    <div class="clear"></div>
    
    <div class="ptitle">用户名</div>
    <div class="pint"><input type="text" class="input_text" disabled="disabled" name="username" value="<?php echo @$member['username']; ?>" /> </div>
    <div class="clear"></div>
    
    <div class="ptitle">状态</div>
    <span class="input_radio_container">
            <input type="radio" id="radio1" name="status" value="1" <?php echo @$member['status']?'checked':'';?>/><label for="radio1">正常</label><input type="radio" id="radio2" name="status" value="0" <?php echo @$member['status']?'':'checked';?>/><label for="radio2">关闭</label>
    </span> 
    <div class="clear"></div>
    
    <div class="ptitle">新密码</div>
    <div class="pint"><input type="text" class="input_text" name="pwd" title="如果不需要修改密码则不填" /> </div>
    <div class="clear"></div>
    
    <div class="ptitle"></div>    
    <div class="pint">
        <input type="hidden" name="mid" value="<?php echo @$member['mid'];?>" />
        <input type="submit" value="修改" />
    </div>
</form>
<?php $this->load->view('footer'); ?>