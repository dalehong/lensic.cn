<?php
//���ȼ����������ĵ��ļ�
require_once ('JpGraph/jpgraph.php');
require_once ('JpGraph/jpgraph_bar.php');

//�����������ӵ���Ϣ
$datay1[]=$_GET['E'];
$datay1[]=$_GET['S'];
$datay1[]=$_GET['T'];
$datay1[]=$_GET['J'];

$datay2[]=$_GET['I'];
$datay2[]=$_GET['N'];
$datay2[]=$_GET['F'];
$datay2[]=$_GET['P'];

/* $datay=array(5.4,8.2,5.4,5.7);
$datay2=array(7.9,2.4,6.8,6.4); */

//����һ����������С��450*200������ͼƬ��С
$graph = new Graph(390,220);
//�����ʾ�����ܹ�֧������
$graph->title->SetFont(FF_SIMSUN,FS_BOLD,14);
//����ͼ��ı��⣬��Ϊ���ļ���GB2312����ģ����Կ���ֱ������д����������UTF-8����Ļ�����Ҫiconvת��
$graph->title->Set('MBTI�Ը�ǿ��ָ��');
//����xy����ʽ��y�����Сֵ�����ֵ
$graph->SetScale("textlin",0,10);
//���ÿ̶ȵĴ�С
$graph->yscale->ticks->Set(1); 
//���ñ߾࣬��������
$graph->img->SetMargin(50,50,10,30);
//����x�������λ�ã���һ�����������ҡ��ڶ�������������
$graph->xaxis->SetLabelAlign('center','center');
$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD,14);
$graph->xaxis->SetTickLabels(array("E��I","S��N","T��F","J��P"));
//��ʾ��ʾ�����ߵ���ɫ����̫��Ҫ
$graph->ygrid->SetColor('gray','lightgray@0.5');
//���ü�ϵ�������ɫ
$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5'); 

//��������
$BarPlot1 = new BarPlot($datay1);
$BarPlot2 = new BarPlot($datay2);
$GroupBar = new GroupBarPlot(array($BarPlot1,$BarPlot2));
//����Ҫ���Ƚ�������Ϣ���뵽graph����������òŻ���Ч��
$graph->Add($GroupBar);
$BarPlot1->value->Show();
$BarPlot1->SetColor("#000");				//���ñ߿����ɫ
$BarPlot1->SetFillColor('#9999fb');	//���������ɫ
$GroupBar->SetWidth(0.55);		//�������ӵĿ��
$BarPlot1->SetAbsWidth(20);	//������������ʲô�ð������������������ӵļ��

$BarPlot2->value->Show();
$BarPlot2->value->SetColor('darkred');
$BarPlot2->SetFillColor('#973367');
$GroupBar->SetWidth(0.55);		//�������ӵĿ��
$BarPlot2->SetAbsWidth(20);//������������ʲô�ð������������������ӵļ��

/* $myfile = "MBTI_1".$_GET['mid'].".png";
if (file_exists($myfile)){
	$result=unlink ($myfile);
}
$graph->Stroke($myfile); */
$graph->Stroke();