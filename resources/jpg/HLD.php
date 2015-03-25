<?php
require_once ('JpGraph/jpgraph.php');
require_once ('JpGraph/jpgraph_radar.php');

$titles=array('R型 实际型','C型 常规型','E型 事业型','S型 社会型','A型 艺术型','I型 调查型');
//$data=array(0.7,2.6,7.2,3.0,1.4,2.3);
$data[]=$_GET['R'];
$data[]=$_GET['C'];
$data[]=$_GET['E'];
$data[]=$_GET['S'];
$data[]=$_GET['A'];
$data[]=$_GET['I'];

$graph = new RadarGraph (530,380);
$graph->title->Set('弗洛伊德社会性人格分析案例');
$graph->title->SetFont(FF_SIMSUN,FS_BOLD,18);
$graph->title->SetMargin(15);

$graph->SetTitles($titles);
//设置图案居中左右和上下
$graph->SetCenter(0.5,0.52);
$graph->HideTickMarks();
$graph->SetColor('lightgreen@0.7');
$graph->SetColor('#FAFFD1@0.7'); //设置背景 
$graph->axis->SetColor('darkgray');
$graph->grid->SetColor('darkgray');
$graph->grid->Show();

$graph->axis->title->SetFont(FF_SIMSUN,FS_BOLD,13);
$graph->axis->title->SetMargin(5);
$graph->SetGridDepth(DEPTH_BACK);
$graph->SetSize(0.68);

$plot = new RadarPlot($data);
$plot->SetColor('#0309d7');
$plot->SetLineWeight(3);

$plot->SetFillColor('red@0.7');
$plot->mark->SetType(MARK_IMG_BEVEL,'red',0.5);
$plot->mark->SetFillColor('darkred');
$plot->SetCSIMTargets( $targets , $alts );

$graph->Add($plot);
//$graph->StrokeCSIM();

/* $myfile = "HLD".$_GET['mid'].".png";
if (file_exists($myfile)){
	$result=unlink ($myfile);
}
$graph->Stroke($myfile); */

$graph->Stroke();









