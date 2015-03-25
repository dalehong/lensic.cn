<?php $this->load->view('header'); ?>
<form id="search_form" method="get">
    <input type="text" class="input_text" name="search_key" value="<?php echo $search_key; ?>" /> <input type="submit" value="搜索" />
</form>
<table id="list_table" style="margin:20px 0px;min-width: 1000px;" width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
        <td width="6%">用户编号</td>
        <td width="15%" >姓名</td>
        <td width="15%">咨询师</td>
        <td width="20%">咨询时间</td>
        <td width="20%">报告时间</td>
        <td width="20%">查看报告</td>
    </tr>
    <?php 
        foreach($datas as $n => $data): 
    ?>
    <tr id="tr_user_<?php echo $data['mid']; ?>">
        <td><?php echo $data['mid'];?></td>
        <td><?php echo str_replace($search_key, '<span class="have_search_key">' . $search_key . '</span>', $data['uname']); ?></td>
        <td><?php echo $data['zxs_name'];?></td>
        <td><?php echo empty($data['zxtime'])?'--':date("Y-m-d H:i",$data['zxtime']);?></td>
        <td><?php echo empty($data['zxbg_time'])?'--':date("Y-m-d H:i",$data['zxbg_time']);?></td>
        <td><?php echo empty($data['zxbg_id'])?'尚未生成':'<a href="'.site_url('gsgly/zxbg_xq/' . $data['mid']).'" title="点击查看">查看报告</a>';?></td>
        <!--<td><a href="<?php echo site_url('gsgly/edit/' . $data['mid']); ?>" title="编辑"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/edit.gif" alt="编辑" /></a> <a href="javascript:void(0);" onClick="return show_dialog('确定删除该记录吗？', 'del', '<?php echo site_url('gsgly/del/' . $data['mid']); ?>', 'tr_user_<?php echo $data['mid']; ?>');" title="删除"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/del.gif" alt="删除" /></a></td>-->
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?php echo $pages; ?>
<?php $this->load->view('footer'); ?>