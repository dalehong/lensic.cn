<?php $this->load->view('header'); ?>
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
<div class="content"></div>
<form id="gxxs_zxfk_form" method="post">
<table id="list_table" width="100%" style="max-width:1028px;" cellpadding="0" cellspacing="0">
<tbody class="zxfk">
    <?php echo @$error; ?>
    <tr>
        <th scope="col" colspan="11" class="h1">咨询反馈</th>
    </tr>
    <tr>
        <td colspan="11" class="h3 left_a">
            <table>
                <tr>
                    <td width="350px"><b>您对本次咨询项目的整体满意度如何？<br/>How is the consulting procedure? </b></td>
                    <td width="70px" class="left_f"><input class="input_checkbox" type="radio" name="zongping" value="很好" <?php echo @$zxfk['zongping']=='很好'?'checked':'';?> id="fk_a"><label for="fk_a">很好<br/>Excellent</label></td>
                    <td width="60px" class="left_f"><input class="input_checkbox" type="radio" name="zongping" value="不错" <?php echo @$zxfk['zongping']=='不错'?'checked':'';?> id="fk_b"><label for="fk_b">不错<br/>Good </label></td>
                    <td width="60px" class="left_f"><input class="input_checkbox" type="radio" name="zongping" value="尚可" <?php echo @$zxfk['zongping']=='尚可'?'checked':'';?> id="fk_c"><label for="fk_c">尚可<br/>Fair</label></td>
                    <td width="60px" class="left_f"><input class="input_checkbox" type="radio" name="zongping" value="差" <?php echo @$zxfk['zongping']=='差'?'checked':'';?> id="fk_d"><label for="fk_d">差<br/>Bad</label></td>
                    <td width="60px" class="left_f"><input class="input_checkbox" type="radio" name="zongping" value="很差" <?php echo @$zxfk['zongping']=='很差'?'checked':'';?> id="fk_e"><label for="fk_e">很差<br/>Very Bad</label></td>

                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="11" class="h2 left_a"><b>一、服务Services</b>（10分为效果最好）：</td>
    </tr>
<?php 
    $qustion=array(
        1=>'1．在首次来访咨询时，您对我们的服务满意吗？Do you satisfy with our service in your first coming?',
        2=>'2．在第一阶段访谈中，公司对您的需求有很好的了解吗？Did we understand your situation well in first interview?',
        3=>'3．第一阶段的访谈您感到愉快吗？Are you happy in first interview?',
        4=>'4．与您预约的访谈时间令您满意吗？Do you satisfy with time scheduling?',
        5=>'5．针对本次咨询项目而言，您达到您的期望值了吗？Did you meet expectation for this program?',
        6=>'6．本次咨询对您的工作及发展有助益吗？Do you feel helpful for your personal development?',
        7=>'7．您认为职业规划师的专业度如何？How do you evaluate the consultant’s professional services? ',
        8=>'8．您对公司的咨询环境满意吗? Do you satisfy with place arrangement?'
    );
    for ($i=1; $i <= count($qustion); $i++) { 
    @$fk1= $zxfk['fk1'];
    @$fk2= $zxfk['fk2'];
    @$fk3= $zxfk['fk3'];
    @$fk4= $zxfk['fk4'];
    @$fk5= $zxfk['fk5'];
    @$fk6= $zxfk['fk6'];
    @$fk7= $zxfk['fk7'];
    @$fk8= $zxfk['fk8'];
?>  
    <tr>
        <td colspan="11" class="question"><?php echo @$qustion[$i];?></td>
    </tr>
    <tr class="fenzhi">
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="10" <?php echo @${'fk'.$i}?'checked':'';?> id="fk<?php echo $i;?>_10"><br/><label for="fk<?php echo $i;?>_10">10分</label></td>
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="9" <?php echo @${'fk'.$i}==9?'checked':'';?> id="fk<?php echo $i;?>_9"><br/><label for="fk<?php echo $i;?>_9">9分</label></td>
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="8" <?php echo @${'fk'.$i}==8?'checked':'';?> id="fk<?php echo $i;?>_8"><br/><label for="fk<?php echo $i;?>_8">8分</label></td>
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="7" <?php echo @${'fk'.$i}==7?'checked':'';?> id="fk<?php echo $i;?>_7"><br/><label for="fk<?php echo $i;?>_7">7分</label></td>
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="6" <?php echo @${'fk'.$i}==6?'checked':'';?> id="fk<?php echo $i;?>_6"><br/><label for="fk<?php echo $i;?>_6">6分</label></td>
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="5" <?php echo @${'fk'.$i}==5?'checked':'';?> id="fk<?php echo $i;?>_5"><br/><label for="fk<?php echo $i;?>_5">5分</label></td>
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="4" <?php echo @${'fk'.$i}==4?'checked':'';?> id="fk<?php echo $i;?>_4"><br/><label for="fk<?php echo $i;?>_4">4分</label></td>
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="3" <?php echo @${'fk'.$i}==3?'checked':'';?> id="fk<?php echo $i;?>_3"><br/><label for="fk<?php echo $i;?>_3">3分</label></td>
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="2" <?php echo @${'fk'.$i}==2?'checked':'';?> id="fk<?php echo $i;?>_2"><br/><label for="fk<?php echo $i;?>_2">2分</label></td>
        <td><input class="input_checkbox" type="radio" name="fk<?php echo $i;?>" value="1" <?php echo @${'fk'.$i}==1?'checked':'';?> id="fk<?php echo $i;?>_1"><br/><label for="fk<?php echo $i;?>_1">1分</label></td>
        <td width="200px"></td>
    </tr>
<?php       
    }
?>
    <tr>
        <td colspan="11" class="h3"><b>二、非常感谢您对我们的服务提出宝贵意见。We appreciate your advises/suggestions as regard to our services.</b></td>
    </tr>
    <tr>
        <td colspan="11" class="neirong"><textarea class="textarea" name="jianyi"><?php echo @$zxfk['jianyi'];?></textarea></td>
    </tr>
    <tr>
        <td colspan="11" class="h3"><b>三、请谈谈您对本次咨询的评价。Please kindly give us some remarks on our consultation for you.</b></td>
    </tr>
    <tr>
        <td colspan="11" class="neirong"><textarea class="textarea" name="pingjia"><?php echo @$zxfk['pingjia'];?></textarea></td>
    </tr>
</tbody>
</table>
</form>
<?php $this->load->view('footer'); ?>