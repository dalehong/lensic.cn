<?php $this->load->view('header'); ?>
<form id="search_form" method="get">
    <span class="input_radio_container"><input type="radio" id="radio1" name="status" value="1" /><label for="radio1">正常</label><input type="radio" id="radio2" name="status" value="2" /><label for="radio2">关闭</label></span> <input type="text" class="input_text" name="search_key" value="<?php echo $search_key; ?>" /> <input type="submit" value="搜索" />
</form>
<table id="list_table" style="margin:20px 0px;min-width: 1000px;" width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
        <td width="5%">用户状态</td>
        <td width="6%">用户编号</td>
        <td width="6%">用户名</td>
        <td >姓名</td>
        <td width="5%">性别</td>
        <td width="12%">所在院系</td>
        <td width="12%">专业</td>
        <td width="10%">班级</td>
        <td width="10%">学号</td>
        <td width="10%">登录时间</td>
        <td width="8%">操作</td>
    </tr>
    <?php foreach($datas as $n => $data): ?>
    <tr id="tr_user_<?php echo $data['mid']; ?>">
        <td><?php if($data['status'] == 1): ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/ico_key_open.png" title="正常" /><?php else: ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/ico_key_close.png" title="关闭" /><?php endif; ?></td>
        <td><?php echo $data['mid'];?></td>
        <td><?php echo $data['username'];?></td>
        <td><?php echo str_replace($search_key, '<span class="have_search_key">' . $search_key . '</span>', $data['uname']); ?></td>
        <td><?php echo $data['sex'];?></td>
        <td><?php echo $data['department'];?></td>
        <td><?php echo $data['specialty'];?></td>
        <td><?php echo $data['class'];?></td>
        <td><?php echo $data['studentid'];?></td>
        <td><?php echo empty($data['logintime']) ? '--' : date("Y-m-d H:i",$data['logintime']);?></td>
        <td><a href="<?php echo site_url('gxgly/edit/' . $data['mid']); ?>" title="查看编辑">查看</a>&nbsp;&nbsp;<a href="<?php echo site_url('gxgly/pwd/' . $data['mid']); ?>" title="修改用户名密码">修改</a></td>
        <!--<td><a href="<?php echo site_url('gxgly/edit/' . $data['mid']); ?>" title="编辑"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/edit.gif" alt="编辑" /></a> <a href="javascript:void(0);" onClick="return show_dialog('确定删除该记录吗？', 'del', '<?php echo site_url('gxgly/del/' . $data['mid']); ?>', 'tr_user_<?php echo $data['mid']; ?>');" title="删除"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/del.gif" alt="删除" /></a></td>-->
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?php echo $pages; ?>
<?php $this->load->view('footer'); ?>