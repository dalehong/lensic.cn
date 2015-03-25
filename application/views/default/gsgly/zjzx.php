<?php $this->load->view('header'); ?>
<form id="search_form" method="get">
    <input type="text" class="input_text" name="search_key" value="<?php echo $search_key; ?>" /> <input type="submit" value="搜索" />
</form>
<table id="list_table" style="margin:20px 0px;min-width: 1000px;" width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
        <td width="6%">用户编号</td>
        <td width="6%" >姓名</td>
        <td width="12%">所在院系</td>
        <td width="12%">专业</td>
        <td width="8%">班级</td>
        <td width="8%">资料状态</td>
        <td width="8%">期望时间</td>
        <td width="8%">咨询方式</td>
        <td width="8%">咨询师</td>
        <td width="8%">咨询时间</td>
        <!--<td width="8%">报告生成</td>-->
        <td width="8%">查看报告</td>
    </tr>
    <?php 
        foreach($datas as $n => $data): 
        if(empty($data['hld_time'])){
            $zlzt='缺霍兰德';
        }else if(empty($data['mbti_time'])){
            $zlzt='缺MBTI';
        }else if(empty($data['zyfx_time'])){
            $zlzt='缺职业分析';
        }else{
            $zlzt='资料完成';
        }
        
    ?>
    <tr id="tr_user_<?php echo $data['mid']; ?>">
        <td><?php echo $data['mid'];?></td>
        <td><?php echo str_replace($search_key, '<span class="have_search_key">' . $search_key . '</span>', $data['uname']); ?></td>
        <td><?php echo $data['department'];?></td>
        <td><?php echo $data['specialty'];?></td>
        <td><?php echo $data['class'];?></td>
        <td><?php echo $zlzt;?></td>
        <td><?php echo empty($data['zxsj'])?'--':$data['zxsj'];?></td>
        <td><?php echo empty($data['zxfs'])?'--': $data['zxfs'];?></td>
        <td><?php echo empty($data['zxs_name'])?'--':$data['zxs_name'];?></td>
        <td><?php echo empty($data['zxtime'])?'--':date("Y-m-d H:i",$data['zxtime']);?></td>
        <td><?php echo empty($data['zxbg_id'])?'尚未生成':'<a href="'.site_url('gsgly/zjzx_bg/' . $data['mid']).'" title="点击查看">查看报告</a>';?></td>
        <!--<td><a href="<?php echo site_url('gsgly/edit/' . $data['mid']); ?>" title="编辑"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/edit.gif" alt="编辑" /></a> <a href="javascript:void(0);" onClick="return show_dialog('确定删除该记录吗？', 'del', '<?php echo site_url('gsgly/del/' . $data['mid']); ?>', 'tr_user_<?php echo $data['mid']; ?>');" title="删除"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/del.gif" alt="删除" /></a></td>-->
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?php echo $pages; ?>
<?php $this->load->view('footer'); ?>