<?php
require_once ('JpGraph/jpgraph.php');
require_once ('JpGraph/jpgraph_bar.php');
//$data=array(-3.9,4.4,-2.2,-1.1);
$data1=array($_GET['A']);
$data2=array('',$_GET['B']);
$data3=array('','',$_GET['C']);
$data4=array('','','',$_GET['D']);
//��������
$graph = new Graph(390,220);	
$graph->img->SetMargin(30,30,10,30);
$graph->SetScale("textlin");
//��ʾ��ʽ����
$graph->xgrid->Show();
//������ߵĿ̶�
$graph->yaxis->HideLabels();
$graph->xaxis->SetPos("min");//�������λ��
$graph->xaxis->SetLabelAlign('center','center');
//����X����Ϣ
$graph->xaxis->SetTickLabels(array("I","N","F","P"));
$graph->SetAxisStyle(AXSTYLE_YBOXIN);
//������1����
$BarPlot = new BarPlot($data1);
$graph->Add($BarPlot);
$BarPlot->SetFillColor("#4F81BC");
$BarPlot->value->Show();
$BarPlot->SetValuePos("max");

//������2����
$BarPlot = new BarPlot($data2);
$graph->Add($BarPlot);
$BarPlot->SetFillColor("#A34442");
$BarPlot->value->Show();
$BarPlot->SetValuePos("max");

//������3����
$BarPlot = new BarPlot($data3);
$graph->Add($BarPlot);
$BarPlot->SetFillColor("#839E4A");
$BarPlot->value->Show();
$BarPlot->SetValuePos("max");

//������4����
$BarPlot = new BarPlot($data4);
$graph->Add($BarPlot);
$BarPlot->SetFillColor("#614B7A");
$BarPlot->value->Show();
$BarPlot->SetValuePos("max");

$graph->yscale->SetGrace(10,10);

$graph->title->SetFont(FF_SIMSUN,FS_BOLD,14);
$graph->title->Set("MBTI�Ը�����������ָ��
E        S        T        G");
$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD,14);

/* $myfile = "MBTI_2".$_GET['mid'].".png";
if (file_exists($myfile)){
	$result=unlink ($myfile);
}
$graph->Stroke($myfile); */
$graph->Stroke();




































