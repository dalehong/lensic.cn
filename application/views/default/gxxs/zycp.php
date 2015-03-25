<?php 
	$this->load->view('header');	
?>
<table id="list_table" width="100%" cellpadding="0" cellspacing="0">
<tbody>
	<tr>
		<td colspan="4" align="left"style="padding-left: 40px;font-size: 14px;font-weight: bold;">职业测评：&nbsp;</td>
	</tr>
    <tr style="font-weight: bold;font-size: 14px;">
        <td width="15%">问卷名称</td>
        <td width="5%">问卷状态</td>
        <td width="30%">测评状态</td>
        <td width="15%">测评时间</td>
        <!--<td width="15%">下载报告</td>-->
    </tr>
    <tr>
        <td>职业倾向性测评</td>
        <td><?php echo in_array('mbti', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['mbti_id'])?in_array('mbti', $group)?'<a href="/gxxs/zycp_mbti/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'<a href="/gxxs/zycp_mbti_bg/'.$member['mid'].'.html">查看结果</a>'; ?></td>
        <td><?php echo empty($member['mbti_time'])?'尚未测评':date('Y-m-d H:i',$member['mbti_time']); ?></td>
        <!--<td><?php echo empty($member['mbti_id'])?'尚未测评':'<a href="down.pho?key='.$member['mbti_id'].'">下载报告</a>'; ?></td>-->
    </tr>
    <tr>
        <td>霍兰德兴趣测评</td>
        <td><?php echo in_array('hld', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['hld_id'])?in_array('hld', $group)?'<a href="/gxxs/zycp_hld/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'<a href="/gxxs/zycp_hld_bg/'.$member['mid'].'.html">查看结果</a>'; ?></td>
        <td><?php echo empty($member['hld_time'])?'尚未测评':date('Y-m-d H:i',$member['hld_time']); ?></td>
        <!--<td><?php echo empty($member['hld_id'])?'尚未测评':'<a href="down.pho?key='.$member['hld_id'].'">下载报告</a>'; ?></td>-->
    </tr>
    <tr>
        <td>中职生职业规划分析问卷</td>
        <td><?php echo in_array('zyfx', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['zyfx_id'])?in_array('zyfx', $group)?'<a href="/gxxs/zycp_zyfx/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'<a href="/gxxs/zycp_zyfx_bg/'.$member['mid'].'.html">查看结果</a>'; ?></td>
        <td><?php echo empty($member['zyfx_id'])?'尚未测评':date('Y-m-d H:i',$member['zyfx_time']); ?></td>
        <!--<td><?php echo empty($member['zyfx_id'])?'尚未测评':'<a href="down.pho?key='.$member['zyfx_id'].'">下载报告</a>'; ?></td>-->
    </tr>
	<tr>
		<td colspan="4" align="left"style="padding-left: 40px;font-size: 14px;font-weight: bold;">其它测评：&nbsp;</td>
	</tr>
    <tr style="font-weight: bold;font-size: 14px;">
        <td>问卷名称</td>
        <td>问卷状态</td>
        <td>测评状态</td>
        <td>测评时间</td>
    </tr>
	
    <tr>
        <td>求职能力测试</td>
        <td><?php echo in_array('qznl', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['qznl_id'])?in_array('qznl', $group)?'<a href="/gxxs/zycp_qznl/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'<a href="/gxxs/zycp_qznl_bg/'.$member['mid'].'.html">查看结果</a>'; ?></td>
        <td><?php echo empty($member['qznl_id'])?'尚未测评':date('Y-m-d H:i',$member['qznl_time']); ?></td>
        <!--<td><?php echo empty($member['qznl_id'])?'尚未测评':'<a href="down.pho?key='.$member['qznl_id'].'">下载报告</a>'; ?></td>-->
    </tr>
    <tr>
        <td>创业可行性自测</td>
        <td><?php echo in_array('cykxx', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['cykxx_id'])?in_array('cykxx', $group)?'<a href="/gxxs/zycp_cykxx/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'<a href="/gxxs/zycp_cykxx_bg/'.$member['mid'].'.html">查看结果</a>'; ?></td>
        <td><?php echo empty($member['cykxx_id'])?'尚未测评':date('Y-m-d H:i',$member['cykxx_time']); ?></td>
        <!--<td><?php echo empty($member['cykxx_id'])?'尚未测评':'<a href="down.pho?key='.$member['qznl_id'].'">下载报告</a>'; ?></td>-->
    </tr>
</tbody>
</table>
<?php $this->load->view('footer'); ?>