<?php $this->load->view('header'); ?>
<table id="list_table" width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
        <td width="5%">用户ID</td>
        <td width="6%">姓名</td>
        <td width="10%">资料到齐时间</td>
        <td width="10%">MBTI测评</td>
        <td width="10%">霍兰德测评</td>
        <td width="10%">分析问卷</td>
        <td width="15%">期望咨询时间</td>
        <td width="15%">执行咨询时间</td>
        <td width="10%">报告</td>
    </tr>
    <?php 
        foreach($khlb_datas as $n => $data):
        
            if($data['hld_time']>$data['zyfx_time']){
                if($data['hld_time']>$data['mbti_time']){
                    $zlzt=$data['hld_time'];
                }else{
                    $zlzt=$data['mbti_time'];
                }
            }else{
                if($data['zyfx_time']>$data['mbti_time']){
                    $zlzt=$data['zyfx_time'];
                }else{
                    $zlzt=$data['mbti_time'];
                }
            }
            $zlsj=empty($zlzt)?'资料尚未完成':date('Y-m-d H:i',$zlzt);
    ?>
    <tr>
        <td><?php echo $data['mid']; ?></td>
        <td><?php echo $data['uname']; ?></td>
        <td><?php echo $zlsj;?></td>
        <td><?php echo empty($data['mbti_id'])?'尚未测评':'<a href="'.site_url('zxs/cp_mbti/' . $data['mbti_id']).'" title="点击查看">查看详情</a>';?></td>
        <td><?php echo empty($data['hld_id'])?'尚未测评':'<a href="'.site_url('zxs/cp_hld/' . $data['hld_id']).'" title="点击查看">查看详情</a>';?></td>
        <td><?php echo empty($data['zyfx_id'])?'尚未测评':'<a href="'.site_url('zxs/cp_zyfx/' . $data['zyfx_id']).'" title="点击查看">查看详情</a>';?></td>
        <td><?php echo empty($data['zxsj'])?'--':$data['zxsj'];?></td>
        <td><?php echo empty($data['zxtime'])?'<a href="'.site_url('zxs/edit_zx/' . $data['mid']).'" title="点击查看">填写咨询时间</a>':date('Y-m-d H:i',$data['zxtime']);?></td>
        <td><?php echo empty($data['zxbg_id'])?'<a href="'.site_url('zxs/zxbg_add/' . $data['mid']).'" title="点击编辑">填写报告</a>':'<a href="'.site_url('zxs/zxbg_add/' . $data['mid']).'" title="点击编辑">编辑报告</a>';?></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?php $this->load->view('footer'); ?>