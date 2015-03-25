<?php
require_once ('JpGraph/jpgraph.php');
require_once ('JpGraph/jpgraph_bar.php');
//$data=array(-3.9,4.4,-2.2,-1.1);
$data1=array($_GET['A']);
$data2=array('',$_GET['B']);
$data3=array('','',$_GET['C']);
$data4=array('','','',$_GET['D']);
//创建画布
$graph = new Graph(390,220);	
$graph->img->SetMargin(30,30,10,30);
$graph->SetScale("textlin");
//显示格式竖线
$graph->xgrid->Show();
//隐藏左边的刻度
$graph->yaxis->HideLabels();
$graph->xaxis->SetPos("min");//设置零点位置
$graph->xaxis->SetLabelAlign('center','center');
//设置X轴信息
$graph->xaxis->SetTickLabels(array("I","N","F","P"));
$graph->SetAxisStyle(AXSTYLE_YBOXIN);
//这里有1个柱
$BarPlot = new BarPlot($data1);
$graph->Add($BarPlot);
$BarPlot->SetFillColor("#4F81BC");
$BarPlot->value->Show();
$BarPlot->SetValuePos("max");

//这里有2个柱
$BarPlot = new BarPlot($data2);
$graph->Add($BarPlot);
$BarPlot->SetFillColor("#A34442");
$BarPlot->value->Show();
$BarPlot->SetValuePos("max");

//这里有3个柱
$BarPlot = new BarPlot($data3);
$graph->Add($BarPlot);
$BarPlot->SetFillColor("#839E4A");
$BarPlot->value->Show();
$BarPlot->SetValuePos("max");

//这里有4个柱
$BarPlot = new BarPlot($data4);
$graph->Add($BarPlot);
$BarPlot->SetFillColor("#614B7A");
$BarPlot->value->Show();
$BarPlot->SetValuePos("max");

$graph->yscale->SetGrace(10,10);

$graph->title->SetFont(FF_SIMSUN,FS_BOLD,14);
$graph->title->Set("MBTI性格类型清晰度指标
E        S        T        G");
$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD,14);

/* $myfile = "MBTI_2".$_GET['mid'].".png";
if (file_exists($myfile)){
	$result=unlink ($myfile);
}
$graph->Stroke($myfile); */
$graph->Stroke();




































