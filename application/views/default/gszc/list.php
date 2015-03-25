<?php $this->load->view('header'); ?>
<form id="search_form" method="get">
    <span class="input_radio_container"><input type="radio" id="radio1" name="status" value="1" /><label for="radio1">正常</label><input type="radio" id="radio2" name="status" value="2" /><label for="radio2">关闭</label></span> <input type="text" class="input_text" name="search_key" value="<?php echo $search_key; ?>" /> <input type="submit" value="搜索" />
</form>
<table id="list_table" style="margin:20px 0px;min-width: 1000px;" width="100%" cellpadding="0" cellspacing="0">
<tbody>
    <tr>
        <td width="5%">用户状态</td>
        <td width="6%">用户编号</td>
        <td width="5%">用户名</td>
        <td >姓名</td>
        <td width="4%">性别</td>
        <td width="7%">电话</td>
        <td width="8%">MBTI测评</td>
        <td width="7%">测评时间</td>
        <td width="8%">霍兰德测评</td>
        <td width="7%">测评时间</td>
        <td width="8%">分析问卷</td>
        <td width="7%">测评时间</td>
        <td width="8%">职业满意度</td>
        <td width="7%">测评时间</td>
        <td width="8%">用户资料</td>
    </tr>
    <?php foreach($datas as $n => $data): ?>
    <tr id="tr_user_<?php echo $data['mid']; ?>">
        <td><?php if($data['status'] == 1): ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/ico_key_open.png" title="正常" /><?php else: ?><img src="<?php echo SITE_ADMIN_STATIC; ?>/images/ico_key_close.png" title="关闭" /><?php endif; ?></td>
        <td><?php echo $data['mid'];?></td>
        <td><?php echo $data['username'];?></td>
        <td><?php echo str_replace($search_key, '<span class="have_search_key">' . $search_key . '</span>', $data['uname']); ?></td>
        <td><?php echo $data['sex'];?></td>
        <td><?php echo $data['phone'];?></td>
        <td><?php echo empty($data['mbti_id'])? '尚未测评' : '<a href="/gszc/zycp_mbti_bg/'.$data['mbti_id'].'.html">报告</a>&nbsp;&nbsp;<a href="/gszc/zycp_mbti_xq/'.$data['mbti_id'].'.html">详情</a>';?></td>
        <td><?php echo empty($data['mbti_time'])? '--' : date('Y-m-d H:i',$data['mbti_time']); ?></td>
        <td><?php echo empty($data['hld_id'])? '尚未测评' : '<a href="/gszc/zycp_hld_bg/'.$data['hld_id'].'.html">报告</a>&nbsp;&nbsp;<a href="/gszc/zycp_hld_xq/'.$data['hld_id'].'.html">详情</a>';?></td>
        <td><?php echo empty($data['hld_time'])? '--' : date('Y-m-d H:i',$data['hld_time']); ?></td>
        <td><?php echo empty($data['zyfx_id'])? '尚未测评' : '<a href="/gszc/zycp_zyfx_bg/'.$data['zyfx_id'].'.html">报告</a>&nbsp;&nbsp;<a href="/gszc/zycp_zyfx_xq/'.$data['zyfx_id'].'.html">详情</a>';?></td>
        <td><?php echo empty($data['zyfx_time'])? '--' : date('Y-m-d H:i',$data['zyfx_time']); ?></td>
        <td><?php echo empty($data['zymyd_id'])? '尚未测评' : '<a href="/gszc/zycp_zymyd_bg/'.$data['zymyd_id'].'.html">报告</a>&nbsp;&nbsp;<a href="/gszc/zycp_zymyd_xq/'.$data['zymyd_id'].'.html">详情</a>';?></td>
        <td><?php echo empty($data['zymyd_time'])? '--' : date('Y-m-d H:i',$data['zymyd_time']); ?></td>
        
        <td><a href="<?php echo site_url('gszc/edit/' . $data['mid']); ?>" title="查看编辑">查看详情</a>&nbsp;&nbsp;<a href="<?php echo site_url('gszc/pwd/' . $data['mid']); ?>" title="修改用户名密码">修改</a></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?php echo $pages; ?>
<?php $this->load->view('footer'); ?>