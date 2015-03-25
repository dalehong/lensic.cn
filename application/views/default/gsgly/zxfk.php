<?php $this->load->view('header'); ?>
<form id="search_form" method="get">
    <input type="text" class="input_text" name="search_key" value="<?php echo $search_key; ?>" /> <input type="submit" value="搜索" />
</form>
<table id="list_table" style="margin:20px 0px;min-width: 1000px;" width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
        <td width="6%">编号</td>
        <td width="6%">姓名</td>
        <td width="6%">咨询师</td>
        <td width="6%">总评</td>
        <td width="8%">首次服务</td>
        <td width="8%">需求了解</td>
        <td width="8%">访谈愉快</td>
        <td width="8%">时间满意</td>
        <td width="8%">达到期望值</td>
        <td width="8%">是否有帮助</td>
        <td width="6%">专业度</td>
        <td width="8%">咨询环境</td>
        <td width="10%">反馈时间</td>
        <td width="6%">更多</td>
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
        <td><?php echo $data['id'];?></td>
        <td><?php echo str_replace($search_key, '<span class="have_search_key">' . $search_key . '</span>', $data['uname']); ?></td>
        <td><?php echo $data['zxs'];?></td>
        <td><?php echo $data['zongping'];?></td>
        <td><?php echo $data['fk1'];?>分</td>
        <td><?php echo $data['fk2'];?>分</td>
        <td><?php echo $data['fk3'];?>分</td>
        <td><?php echo $data['fk4'];?>分</td>
        <td><?php echo $data['fk5'];?>分</td>
        <td><?php echo $data['fk6'];?>分</td>
        <td><?php echo $data['fk7'];?>分</td>
        <td><?php echo $data['fk8'];?>分</td>
        <td><?php echo empty($data['uptime'])?'--':date("Y-m-d H:i",$data['uptime']);?></td>
        <td><a href="<?php echo site_url('gsgly/zxfk_xq/' . $data['id']);?>" title="点击查看">详情</a></td>
        <!--<td><a href="<?php echo site_url('gsgly/edit/' . $data['mid']); ?>" title="编辑"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/edit.gif" alt="编辑" /></a> <a href="javascript:void(0);" onClick="return show_dialog('确定删除该记录吗？', 'del', '<?php echo site_url('gsgly/del/' . $data['mid']); ?>', 'tr_user_<?php echo $data['mid']; ?>');" title="删除"><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/del.gif" alt="删除" /></a></td>-->
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?php echo $pages; ?>
<?php $this->load->view('footer'); ?>