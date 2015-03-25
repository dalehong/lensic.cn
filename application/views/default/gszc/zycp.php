<?php 
	$this->load->view('header');	
?>
<table id="list_table" width="100%" cellpadding="0" cellspacing="0">
<tbody>
	<tr>
		<td colspan="4" align="left"style="padding-left: 40px;font-size: 14px;font-weight: bold;">职业测评：&nbsp;</td>
	</tr>
    <tr style="font-weight: bold;font-size: 14px;">
        <td width="20%">问卷名称</td>
        <td width="10%">问卷状态</td>
        <td width="15%">详情</td>
        <td width="30%">测评状态</td>
        <td width="20%">测评时间</td>
    </tr>
    <tr>
        <td>职业倾向性测评</td>
        <td><?php echo in_array('mbti', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['mbti_id'])? '--' : '<a href="/gszc/zycp_mbti_xq/'.$member['mbti_id'].'.html">查看详情</a>';?></td>
        <td><?php echo empty($member['mbti_id'])?in_array('mbti', $group)?'<a href="/gszc/zycp_mbti/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'完成测评，数据已经提交……'; ?></td>
        <td><?php echo empty($member['mbti_time'])?'尚未测评':date('Y-m-d H:i',$member['mbti_time']); ?></td>
    </tr>
    <tr>
        <td>霍兰德兴趣测评</td>
        <td><?php echo in_array('hld', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['hld_id'])? '--' : '<a href="/gszc/zycp_hld_xq/'.$member['hld_id'].'.html">查看详情</a>';?></td>
        <td><?php echo empty($member['hld_id'])?in_array('hld', $group)?'<a href="/gszc/zycp_hld/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'完成测评，数据已经提交……'; ?></td>
        <td><?php echo empty($member['hld_time'])?'尚未测评':date('Y-m-d H:i',$member['hld_time']); ?></td>
    </tr>
<?php 
	if($member['studentid']=='-1'){
?>
    <tr>
        <td>职业满意度测试</td>
        <td><?php echo in_array('hld', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['zymyd_id'])? '--' : '<a href="/gszc/zycp_zymyd_xq/'.$member['zymyd_id'].'.html">查看详情</a>';?></td>
        <td><?php echo empty($member['zymyd_id'])?in_array('hld', $group)?'<a href="/gszc/zycp_zymyd/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'完成测评，数据已经提交……'; ?></td>
        <td><?php echo empty($member['zymyd_time'])?'尚未测评':date('Y-m-d H:i',$member['zymyd_time']); ?></td>
    </tr>
<?php 
	}
?>
<!-- 
    <tr>
        <td>职业咨询分析用表</td>
        <td><?php echo in_array('zyfx', $group)?'开启':'关闭';?></td>
        <td><?php echo empty($member['zyfx_id'])? '--' : '<a href="/gszc/zycp_zyfx_xq/'.$member['zyfx_id'].'.html">查看详情</a>';?></td>
        <td><?php echo empty($member['zyfx_id'])?in_array('zyfx', $group)?'<a href="/gszc/zycp_zyfx/'.$member['mid'].'.html">开始测评</a>':'尚未开放':'完成测评，数据已经提交……'; ?></td>
        <td><?php echo empty($member['zyfx_id'])?'尚未测评':date('Y-m-d H:i',$member['zyfx_time']); ?></td>
    </tr>
 -->	
</tbody>
</table>
<?php $this->load->view('footer'); ?>