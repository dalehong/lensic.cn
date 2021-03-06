<?php $this->load->view('header'); ?>
<form id="search_form" method="get">
    <input type="text" class="input_text" name="search_key" value="<?php echo $search_key; ?>" title="输入学生姓名搜索"/> <input type="submit" value="搜索" />
</form>
<table id="list_table" style="margin:20px 0px;min-width: 1000px;" width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
        <td width="6%">用户编号</td>
        <td width="6%" >姓名</td>
        <td width="10%">所在院系</td>
        <td width="7%">职业性格</td>
        <td width="8%">完成时间</td>
        <td width="7%">霍兰德</td>
        <td width="8%">完成时间</td>
        <td width="7%">分析问卷</td>
        <td width="8%">完成时间</td>
        <td width="7%">求职能力</td>
        <td width="8%">完成时间</td>
        <td width="7%">创业可行性</td>
        <td width="8%">完成时间</td>
    </tr>
    <?php foreach($datas as $n => $data): ?>
    <tr id="tr_user_<?php echo $data['mid']; ?>">
        <td><?php echo $data['mid'];?></td>
        <td><?php echo str_replace($search_key, '<span class="have_search_key">' . $search_key . '</span>', $data['uname']); ?></td>
        <td><?php echo $data['department'];?></td>
        <td><?php echo $data['mbti_id']?'<a href="'.site_url('gxgly/mbti_xq/' . $data['mbti_id']).'" title="查看详情">查看详情</a>':'尚未测评';?></td>
        <td><?php echo $data['mbti_time']?date("Y-m-d H:i",$data['mbti_time']):'--';?></td>
        <td><?php echo $data['hld_id']?'<a href="'.site_url('gxgly/hld_xq/' . $data['hld_id']).'" title="查看详情">查看详情</a>':'尚未测评';?></td>
        <td><?php echo $data['hld_time']?date("Y-m-d H:i",$data['hld_time']):'--';?></td>
        <td><?php echo $data['zyfx_id']?'<a href="'.site_url('gxgly/zyfx_xq/' . $data['zyfx_id']).'" title="查看详情">查看详情</a>':'尚未测评';?></td>
        <td><?php echo $data['zyfx_time']?date("Y-m-d H:i",$data['zyfx_time']):'--';?></td>
        <td><?php echo $data['qznl_id']?'<a href="'.site_url('gxgly/qznl_xq/' . $data['qznl_id']).'" title="查看报告">查看详情</a>':'尚未测评';?></td>
        <td><?php echo $data['qznl_time']?date("Y-m-d H:i",$data['qznl_time']):'--';?></td>
        <td><?php echo $data['cykxx_id']?'<a href="'.site_url('gxgly/cykxx_xq/' . $data['cykxx_id']).'" title="查看报告">查看详情</a>':'尚未测评';?></td>
        <td><?php echo $data['cykxx_time']?date("Y-m-d H:i",$data['cykxx_time']):'--';?></td>
        <!--<td><a href="<?php echo site_url('gxgly/edit/' . $data['mid']); ?>" title="编辑"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/edit.gif" alt="编辑" /></a> <a href="javascript:void(0);" onClick="return show_dialog('确定删除该记录吗？', 'del', '<?php echo site_url('gxgly/del/' . $data['mid']); ?>', 'tr_user_<?php echo $data['mid']; ?>');" title="删除"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/del.gif" alt="删除" /></a></td>-->
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?php echo $pages; ?>
<?php $this->load->view('footer'); ?>