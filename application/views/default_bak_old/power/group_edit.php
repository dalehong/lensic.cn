<?php $this->load->view('header'); ?>
<form id="group_power_form" method="post">
<table width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
    	<td class="td_right">权限组名称：</td>
        <td><input class="input_text" type="text" name="group_name" id="group_name" maxlength="50" title="不能和现有权限组名称相同" value="<?php echo $edit_data['group_name']; ?>" /></td>
    </tr>
    <tr>
    	<td class="td_right">权限组描述：</td>
        <td><input class="input_text" type="text" name="group_describe" id="group_describe" maxlength="100" value="<?php echo $edit_data['group_describe']; ?>" /></td>
    </tr>
    <tr>
    	<td class="td_right">权限组状态：</td>
        <td class="input_radio_container"><input type="radio" id="radio1" name="status" value="1" /><label for="radio1">正常</label><input type="radio" id="radio2" name="status" value="2" /><label for="radio2">关闭</label></td>
    </tr>
    <tr>
    	<td colspan="2" style="height:40px;">请在下方选择该组具备的权限：</td>
    </tr>
    <?php foreach($power_datas as $data): ?>
    <tr>
    	<td class="td_power"><input class="input_checkbox" type="checkbox" name="power_ids[]" value="<?php echo $data['id']; ?>" onClick="power_click(this, <?php echo $data['id']; ?>);" /><?php echo $data['power_name']; ?><?php if(isset($data['children_datas'])): ?> ---> <?php endif; ?></td>
        <td class="td_power_children"><span id="dj_<?php echo $data['id']; ?>"><?php if(isset($data['children_datas'])): foreach($data['children_datas'] as $n => $child_data): ?><?php if($child_data['level'] == 1): ?><div><?php endif; ?><input class="input_checkbox" type="checkbox" name="power_ids[]" value="<?php echo $child_data['id']; ?>" disabled="disabled" onClick="power_click(this, <?php echo $child_data['id']; ?>);" /><?php echo $child_data['power_name']; ?> <?php if(isset($child_data['last_one']) && $child_data['level'] != 1): ?></span><?php if(isset($data['children_datas'][$n + 1]) && $data['children_datas'][$n + 1]['level'] == 1): ?></div><?php endif; ?><?php endif; ?><?php if(isset($child_data['have_child'])): ?><span id="dj_<?php echo $child_data['id']; ?>"><?php endif; ?><?php if(!isset($data['children_datas'][$n + 1])): ?></div></span><?php endif; ?><?php endforeach; ?><?php endif; ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
    	<td class="td_right"></td>
        <td><input type="submit" value="提交" /></td>
    </tr>
</tbody>
</table>
</form>
<script type="text/javascript">
radio_select('status', '<?php echo $edit_data['status']; ?>');
default_sel('<?php echo $edit_data['power_ids']; ?>');
</script>
<?php $this->load->view('footer'); ?>