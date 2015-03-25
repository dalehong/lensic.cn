<?php $this->load->view('header'); ?>
<table id="list_table" width="100%" cellpadding="0" cellspacing="0">
<tbody>
	<tr>
    	<td width="15%">权限状态</td>
    	<td>权限组名称</td>
        <td width="30%">描述</td>
        <td width="15%">使用情况</td>
        <td width="15%">操作</td>
    </tr>
    <?php foreach($group_datas as $n => $data): ?>
    <tr id="tr_power_<?php echo $data['id']; ?>">
    	<td><?php if($data['status'] == 1): ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/ico_key_open.png" title="正常" /><?php else: ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/ico_key_close.png" title="关闭" /><?php endif; ?></td>
        <td><?php echo $data['group_name']; ?></td>
        <td><?php echo $data['group_describe']; ?></td>
        <td><?php echo $data['use_count']; ?> 人使用</td>
        <td><?php if($data['id'] == 1): ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/edit_gray.gif" alt="不可编辑" title="不可编辑" /> <img src="<?php echo SITE_ADMIN_STATIC; ?>/images/del_gray.gif" alt="不可删除" title="不可删除" /><?php else: ?><a href="<?php echo site_url('admin/power/group_edit/' . $data['id']); ?>" title="编辑"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/edit.gif" alt="编辑" /></a> <?php if($data['use_count']): ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/del_gray.gif" alt="不可删除" title="该组已在使用，不可删除" /><?php else: ?><a href="javascript:void(0);" onClick="return show_dialog('确定删除该记录吗？', 'del', '<?php echo site_url('admin/power/group_del/' . $data['id']); ?>', 'tr_power_<?php echo $data['id']; ?>');" title="删除"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/del.gif" alt="删除" /></a><?php endif; ?><?php endif; ?></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?php $this->load->view('footer'); ?>