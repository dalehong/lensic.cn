<?php $this->load->view('header'); ?>
<form id="search_form" method="get">
    <span class="input_radio_container"><input type="radio" id="radio1" name="status" value="1" /><label for="radio1">正常</label><input type="radio" id="radio2" name="status" value="2" /><label for="radio2">关闭</label></span> <input type="text" class="input_text" name="search_key" value="<?php echo $search_key; ?>" /> <input type="submit" value="搜索" />
</form>
<table id="list_table" style="margin:20px 0px;" width="100%" cellpadding="0" cellspacing="0">
<tbody>
	<tr>
    	<td width="25%">用户状态</td>
    	<td>用户名</td>
        <td width="25%">所属权限组</td>
        <td width="25%">操作</td>
    </tr>
    <?php foreach($datas as $n => $data): ?>
    <tr id="tr_user_<?php echo $data['id']; ?>">
    	<td><?php if($data['status'] == 1): ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/ico_key_open.png" title="正常" /><?php else: ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/ico_key_close.png" title="关闭" /><?php endif; ?></td>
        <td><?php echo str_replace($search_key, '<span class="have_search_key">' . $search_key . '</span>', $data['username']); ?></td>
        <td><?php echo str_replace($search_key, '<span class="have_search_key">' . $search_key . '</span>', $data['group_name']); ?></td>
        <td><a href="<?php echo site_url('admin/edit/' . $data['id']); ?>" title="编辑"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/edit.gif" alt="编辑" /></a> <a href="javascript:void(0);" onClick="return show_dialog('确定删除该记录吗？', 'del', '<?php echo site_url('admin/del/' . $data['id']); ?>', 'tr_user_<?php echo $data['id']; ?>');" title="删除"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/del.gif" alt="删除" /></a></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?php echo $pages; ?>
<script type="text/javascript">
page_location('center');
radio_select('status', '<?php echo $status; ?>');
</script>
<?php $this->load->view('footer'); ?>