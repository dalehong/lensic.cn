<?php $this->load->view('header'); ?>
<table id="list_table" width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
        <td width="15%">问卷名称</td>
        <td width="5%">问卷状态</td>
        <td width="30%">测评状态</td>
        <td width="15%">测评时间</td>
        <td width="15%">下载报告</td>
    </tr>
    <tr>
        <td>职业倾向性测评</td>
        <td><?php echo in_array('mbti', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['mbti_id'])?in_array('mbti', $group)?'<a href="/gxxs/zycp_mbti/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'<a href="/gxxs/zycp_mbti_bg/'.$member['mid'].'.html">查看结果</a>'; ?></td>
        <td><?php echo empty($member['mbti_time'])?'尚未测评':date('Y-m-d H:i',$member['mbti_time']); ?></td>
        <td><?php echo empty($member['mbti_id'])?'尚未测评':'<a href="down.pho?key='.$member['mbti_id'].'">下载报告</a>'; ?></td>
    </tr>
    <tr>
        <td>霍兰德兴趣测评</td>
        <td><?php echo in_array('hld', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['hld_id'])?in_array('hld', $group)?'<a href="/gxxs/zycp_hld/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'<a href="/gxxs/zycp_hld_bg/'.$member['mid'].'.html">查看结果</a>'; ?></td>
        <td><?php echo empty($member['hld_time'])?'尚未测评':date('Y-m-d H:i',$member['hld_time']); ?></td>
        <td><?php echo empty($member['hld_id'])?'尚未测评':'<a href="down.pho?key='.$member['hld_id'].'">下载报告</a>'; ?></td>
    </tr>
    <tr>
        <td>职业分析用表</td>
        <td><?php echo in_array('zyfx', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['zyfx_id'])?in_array('zyfx', $group)?'<a href="/gxxs/zycp_zyfx/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'<a href="/gxxs/zycp_zyfx_bg/'.$member['mid'].'.html">查看结果</a>'; ?></td>
        <td><?php echo empty($member['zyfx_time'])?'尚未测评':date('Y-m-d H:i',$member['zyfx_time']); ?></td>
        <td><?php echo empty($member['zyfx_id'])?'尚未测评':'<a href="down.pho?key='.$member['zyfx_id'].'">下载报告</a>'; ?></td>
    </tr>
</tbody>
</table>
<?php $this->load->view('footer'); ?>