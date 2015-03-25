<?php
require_once '../../JpGraph/jpgraph/jpgraph.php';
require_once '../../JpGraph/jpgraph/jpgraph_bar.php';

//定义两个柱子的信息
$datay=array(5.4,8.2,5.4,5.7);
$datay2=array(7.9,5.4,6.8,6.4);

//创建一个画布，大小是450*200，就是图片大小
$graph = new Graph(650,200);
//下面表示设置能够支持中文
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
//设置图表的标题，因为本文件是GB2312编码的，所以可以直接这样写，如果你的是UTF-8编码的话就需要iconv转码
$graph->title->Set('2013网络热词介绍排行榜');
//设置xy轴样式及y轴的最小值和最大值
$graph->SetScale("textlin",0,10);
//设置刻度的大小
$graph->yscale->ticks->Set(1); 
//设置边距，左右上下
$graph->img->SetMargin(50,50,10,30);
//设置x轴的字体位置，第一个参数是左右、第二个参数是上下
$graph->xaxis->SetLabelAlign('center','center');
$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD);
$graph->xaxis->SetTickLabels(array("A2　A","B2　B","C2　C","D2　D"));
//表示显示网格线的颜色，不太重要
$graph->ygrid->SetColor('gray','lightgray@0.5');
//设置间断的网格颜色
$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5'); 

//柱子设置
$BarPlot1 = new BarPlot($datay);
$BarPlot2 = new BarPlot($datay2);
$GroupBar = new GroupBarPlot(array($BarPlot1,$BarPlot2));
//比如要首先将柱子信息加入到graph中下面的设置才会有效的
$graph->Add($GroupBar);
$BarPlot1->value->Show();
$BarPlot1->SetColor("#000");				//设置边框的颜色
$BarPlot1->SetFillColor('#9999fb');	//设置填充颜色
$GroupBar->SetWidth(0.3);		//设置柱子的宽度
$BarPlot1->SetAbsWidth(20);	//这里设置来有什么用啊，用来保存两个柱子的间隔

$BarPlot2->value->Show();
$BarPlot2->value->SetColor('darkred');
$BarPlot2->SetFillColor('#973367');
$BarPlot2->SetAbsWidth(20);//这里设置来有什么用啊，用来保存两个柱子的间隔
//$graph->Stroke('myimage.png');
//$graph->Stroke();




require_once '../PHPWord.php';

// New Word Document
$PHPWord = new PHPWord();

// New portrait section
$section = $PHPWord->createSection();

// Add image elements
$section->addImage('_mars.jpg');
$section->addTextBreak(2);

//$section->addImage('http://127.0.0.1/JpGraph/MBTI_1.php', array('width'=>210, 'height'=>210, 'align'=>'center'));
$section->addImage('myimage.png', array('width'=>210, 'height'=>210, 'align'=>'center'));
$section->addTextBreak(2);


$section->addImage('_earth.JPG', array('width'=>210, 'height'=>210, 'align'=>'center'));
$section->addTextBreak(2);

$section->addImage('_mars.jpg', array('width'=>100, 'height'=>100, 'align'=>'right'));



// Save File
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save('Image.docx');
/* 
$document = $PHPWord->loadTemplate('Template.docx');

$document->setValue('Value1', 'Sun');
$document->setValue('Value2', 'Mercury');
$document->setValue('Value3', 'Venus');
$document->setValue('Value4', 'Earth');
$document->setValue('Value5', 'Mars');
$document->setValue('Value6', 'Jupiter');
$document->setValue('Value7', 'Saturn');
$document->setValue('Value8', 'Uranus');
$document->setValue('Value9', 'Neptun');
$document->setValue('Value10', 'Pluto');

$document->setValue('weekday', date('l'));
$document->setValue('time', date('H:i'));

$document->save('Solarsystem.docx'); */
?>