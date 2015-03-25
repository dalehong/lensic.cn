<?php $this->load->view('header'); ?>

<div id="ceping_content">
<!--#测试题写在这里-->
<form name="radioform" action="ceping-2-result.html" method="post">
<div class="Test">
 <div id="Problem1">
        <h3>问题:1、换一份新的工作，我原来学到的技能就得不到利用</h3>
    
      <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q1',0,1);"><input name="q1" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q1',1,1);"><input name="q1" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q1',2,1);" class=""><input name="q1" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q1',3,1);"><input name="q1" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q1',4,1);"><input name="q1" type="radio" value="5">E.是</li>
      </ul>
        <input type="button" id="button1" class="but" value="下一步" style="visibility:hidden">
    
    </div>
    <div id="Problem2" class="hidden">
        <h3>问题:2、在目前的组织里工作，我赚不到多少钱</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q2',0,2);"><input name="q2" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q2',1,2);"><input name="q2" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q2',2,2);"><input name="q2" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q2',3,2);"><input name="q2" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q2',4,2);"><input name="q2" type="radio" value="5">E.是</li>
      </ul>
        <input type="button" id="button2" class="but" value="下一步" style="visibility:hidden">

   </div>
   
   <div id="Problem3" class="hidden">
        <h3>问题:3、我目前从事的工作非常有用</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q3',0,3);"><input name="q3" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q3',1,3);"><input name="q3" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q3',2,3);"><input name="q3" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q3',3,3);"><input name="q3" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q3',4,3);"><input name="q3" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button3" class="but" value="下一步" style=" visibility:hidden;">
        
   </div>
   
   <div id="Problem4" class="hidden">
        <h3>问题:4、有时我觉得自己的工作受不到重视</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q4',0,4);"><input name="q4" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q4',1,4);"><input name="q4" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q4',2,4);"><input name="q4" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q4',3,4);"><input name="q4" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q4',4,4);"><input name="q4" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button4" class="but" value="下一步" style="visibility:hidden">
        
   </div>
   
   <div id="Problem5" class="hidden">
        <h3>问题:5、我的工作内容与我的岗位适合</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q5',0,5);"><input name="q5" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q5',1,5);"><input name="q5" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q5',2,5);"><input name="q5" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q5',3,5);"><input name="q5" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q5',4,5);"><input name="q5" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button5" class="but" value="下一步" style="visibility:hidden">
        
   </div>
   
   <div id="Problem6" class="hidden">
        <h3>问题:6、我所处的组织的工作气氛非常好</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q6',0,6);"><input name="q6" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q6',1,6);"><input name="q6" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q6',2,6);"><input name="q6" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q6',3,6);"><input name="q6" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q6',4,6);"><input name="q6" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button6" class="but" value="下一步" style="visibility:hidden">
        
   </div>
   
   <div id="Problem7" class="hidden">
        <h3>问题:7、工作之余，我常与同事聚会</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q7',0,7);"><input name="q7" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q7',1,7);"><input name="q7" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q7',2,7);"><input name="q7" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q7',3,7);"><input name="q7" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q7',4,7);"><input name="q7" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button7" class="but" value="下一步" style="visibility:hidden">
        
   </div>
   
    <div id="Problem8" class="hidden">
        <h3>问题:8、我希望工作的地方离家不太远</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q8',0,8);"><input name="q8" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q8',1,8);"><input name="q8" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q8',2,8);"><input name="q8" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q8',3,8);"><input name="q8" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q8',4,8);"><input name="q8" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button8" class="but" value="下一步" style="visibility:hidden">
        
   </div>
   
    <div id="Problem9" class="hidden">
        <h3>问题:9、我与老板处得不好</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q9',0,9);"><input name="q9" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q9',1,9);"><input name="q9" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q9',2,9);"><input name="q9" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q9',3,9);"><input name="q9" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q9',4,9);"><input name="q9" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button9" class="but" value="下一步" style="visibility:hidden">
    
   </div>
    <div id="Problem10" class="hidden">
        <h3>问题:10、如果为自己工作，我会生活得更好些</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q10',0,10);"><input name="q10" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q10',1,10);"><input name="q10" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q10',2,10);"><input name="q10" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q10',3,10);"><input name="q10" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q10',4,10);"><input name="q10" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button10" class="but" value="下一步" style="visibility:hidden">
    
   </div>
   
  <div id="Problem11" class="hidden">
        <h3>问题:11、有时我觉得自己做了一份自己并不喜欢的工作</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q11',0,11);"><input name="q11" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q11',1,11);"><input name="q11" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q11',2,11);"><input name="q11" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q11',3,11);"><input name="q11" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q11',4,11);"><input name="q11" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button11" class="but" value="下一步" style="visibility:hidden">
    
   </div>
   
   <div id="Problem12" class="hidden">
        <h3>问题:12、如果换个工作，我应当会赚更多钱</h3>

     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q12',0,12);"><input name="q12" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q12',1,12);"><input name="q12" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q12',2,12);"><input name="q12" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q12',3,12);"><input name="q12" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q12',4,12);"><input name="q12" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button12" class="but" value="下一步" style="visibility:hidden">

   </div>
<div id="Problem13" class="hidden">
        <h3>问题:13、工作中要做的事对我毫无意义</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q13',0,13);"><input name="q13" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q13',1,13);"><input name="q13" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q13',2,13);"><input name="q13" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q13',3,13);"><input name="q13" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q13',4,13);"><input name="q13" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button13" class="but" value="下一步" style="visibility:hidden">

   </div>
<div id="Problem14" class="hidden">
        <h3>问题:14、公司能够提供给我足够的培训</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q14',0,14);"><input name="q14" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q14',1,14);"><input name="q14" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q14',2,14);"><input name="q14" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q14',3,14);"><input name="q14" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q14',4,14);"><input name="q14" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button14" class="but" value="下一步" style="visibility:hidden">
    
   </div>   
   
<div id="Problem15" class="hidden">
        <h3>问题:15、如果在这个组织中待下去，我的工作会一成不变</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q15',0,15);"><input name="q15" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q15',1,15);"><input name="q15" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q15',2,15);"><input name="q15" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q15',3,15);"><input name="q15" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q15',4,15);"><input name="q15" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button15" class="but" value="下一步" style="visibility:hidden">
    
</div>   

<div id="Problem16" class="hidden">
        <h3>问题:16、我目前的组织里有很多有趣的事情做</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q16',0,16);"><input name="q16" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q16',1,16);"><input name="q16" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q16',2,16);"><input name="q16" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q16',3,16);"><input name="q16" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q16',4,16);"><input name="q16" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button16" class="but" value="下一步" style="visibility:hidden">
        
</div>  

<div id="Problem17" class="hidden">
        <h3>问题:17、我不太适应剧烈的变化</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q17',0,17);"><input name="q17" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q17',1,17);"><input name="q17" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q17',2,17);"><input name="q17" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q17',3,17);"><input name="q17" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q17',4,17);"><input name="q17" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button17" class="but" value="下一步" style="visibility:hidden">
    
</div>   

<div id="Problem18" class="hidden">
        <h3>问题:18、我目前的工作让我有稳定感</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q18',0,18);"><input name="q18" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q18',1,18);"><input name="q18" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q18',2,18);"><input name="q18" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q18',3,18);"><input name="q18" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q18',4,18);"><input name="q18" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button18" class="but" value="下一步" style="visibility:hidden">
    
</div>  

<div id="Problem19" class="hidden">
        <h3>问题:19、我的直属上司是通情达理</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q19',0,19);"><input name="q19" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q19',1,19);"><input name="q19" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q19',2,19);"><input name="q19" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q19',3,19);"><input name="q19" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q19',4,19);"><input name="q19" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button19" class="but" value="下一步" style="visibility:hidden">
        
</div> 

<div id="Problem20" class="hidden">
        <h3>问题:20、有时候我会因为工作原因而遗忘了工作以外的任务</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q20',0,20);"><input name="q20" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q20',1,20);"><input name="q20" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q20',2,20);"><input name="q20" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q20',3,20);"><input name="q20" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q20',4,20);"><input name="q20" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button20" class="but" value="下一步" style="visibility:hidden">
        
</div> 

<div id="Problem21" class="hidden">
        <h3>问题:21、有时我想：到其它组织里工作更合适</h3>
        
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q21',0,21);"><input name="q21" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q21',1,21);"><input name="q21" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q21',2,21);"><input name="q21" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q21',3,21);"><input name="q21" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q21',4,21);"><input name="q21" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button21" class="but" value="下一步" style="visibility:hidden">
    
</div> 

<div id="Problem22" class="hidden">
        <h3>问题:22、我对目前的待遇感到满意</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q22',0,22);"><input name="q22" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q22',1,22);"><input name="q22" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q22',2,22);"><input name="q22" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q22',3,22);"><input name="q22" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q22',4,22);"><input name="q22" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button22" class="but" value="下一步" style="visibility:hidden">
        
</div> 

<div id="Problem23" class="hidden">
        <h3>问题:23、我的工作并不能让我充分享受生活</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q23',0,23);"><input name="q23" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q23',1,23);"><input name="q23" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q23',2,23);"><input name="q23" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q23',3,23);"><input name="q23" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q23',4,23);"><input name="q23" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button23" class="but" value="下一步" style="visibility:hidden">
    
</div>
<div id="Problem24" class="hidden">
        <h3>问题:24、我期望不久得到升职</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q24',0,24);"><input name="q24" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q24',1,24);"><input name="q24" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q24',2,24);"><input name="q24" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q24',3,24);"><input name="q24" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q24',4,24);"><input name="q24" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button24" class="but" value="下一步" style="visibility:hidden">
    
</div>
<div id="Problem25" class="hidden">
        <h3>问题:25、做我目前的工作是大材小用</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q25',0,25);"><input name="q25" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q25',1,25);"><input name="q25" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q25',2,25);"><input name="q25" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q25',3,25);"><input name="q25" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q25',4,25);"><input name="q25" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button25" class="but" value="下一步" style="visibility:hidden">
    
</div>
<div id="Problem26" class="hidden">
        <h3>问题:26、我实在受不了组织内部部门之间的争端和矛盾</h3>

     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q26',0,26);"><input name="q26" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q26',1,26);"><input name="q26" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q26',2,26);"><input name="q26" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q26',3,26);"><input name="q26" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q26',4,26);"><input name="q26" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button26" class="but" value="下一步" style="visibility:hidden">
    
</div>
<div id="Problem27" class="hidden">
        <h3>问题:27、我更喜欢自己单独工作</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q27',0,27);"><input name="q27" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q27',1,27);"><input name="q27" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q27',2,27);"><input name="q27" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q27',3,27);"><input name="q27" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q27',4,27);"><input name="q27" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button27" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem28" class="hidden">
        <h3>问题:28、我喜欢我所处的组织有很好的硬件环境</h3>
    
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q28',0,28);"><input name="q28" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q28',1,28);"><input name="q28" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q28',2,28);"><input name="q28" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q28',3,28);"><input name="q28" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q28',4,28);"><input name="q28" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button28" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem29" class="hidden">
        <h3>问题:29、工作中，有许多同事很难相处</h3>

     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q29',0,29);"><input name="q29" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q29',1,29);"><input name="q29" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q29',2,29);"><input name="q29" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q29',3,29);"><input name="q29" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q29',4,29);"><input name="q29" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button29" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem30" class="hidden">
        <h3>问题:30、为了能够赚点钱，我得做目前的这份工作</h3>

     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q30',0,30);"><input name="q30" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q30',1,30);"><input name="q30" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q30',2,30);"><input name="q30" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q30',3,30);"><input name="q30" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q30',4,30);"><input name="q30" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button30" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem31" class="hidden">
        <h3>问题:31、我乐意填写工作申请表去找一份新工作</h3>

     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q31',0,31);"><input name="q31" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q31',1,31);"><input name="q31" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q31',2,31);"><input name="q31" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q31',3,31);"><input name="q31" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q31',4,31);"><input name="q31" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button31" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem32" class="hidden">
        <h3>问题:32、我的薪水与我的劳动相当</h3>

     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q32',0,32);"><input name="q32" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q32',1,32);"><input name="q32" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q32',2,32);"><input name="q32" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q32',3,32);"><input name="q32" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q32',4,32);"><input name="q32" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button32" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem33" class="hidden">
        <h3>问题:33、我看不到我所做的事将来会有什么价值</h3>
    
       <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q33',0,33);"><input name="q33" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q33',1,33);"><input name="q33" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q33',2,33);"><input name="q33" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q33',3,33);"><input name="q33" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q33',4,33);"><input name="q33" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button33" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem34" class="hidden">
        <h3>问题:34、在现在的组织里，我很少有机会得到发展</h3>

     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q34',0,34);"><input name="q34" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q34',1,34);"><input name="q34" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q34',2,34);"><input name="q34" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q34',3,34);"><input name="q34" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q34',4,34);"><input name="q34" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button34" class="but" value="下一步" style="visibility:hidden">

</div>
<div id="Problem35" class="hidden">
        <h3>问题:35、我的工作适量</h3>

     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q35',0,35);"><input name="q35" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q35',1,35);"><input name="q35" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q35',2,35);"><input name="q35" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q35',3,35);"><input name="q35" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q35',4,35);"><input name="q35" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button35" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem36" class="hidden">
        <h3>问题:36、我希望我的组织的管理更民主一点儿</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q36',0,36);"><input name="q36" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q36',1,36);"><input name="q36" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q36',2,36);"><input name="q36" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q36',3,36);"><input name="q36" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q36',4,36);"><input name="q36" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button36" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem37" class="hidden">
        <h3>问题:37、我觉得自己非常有能力</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q37',0,37);"><input name="q37" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q37',1,37);"><input name="q37" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q37',2,37);"><input name="q37" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q37',3,37);"><input name="q37" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q37',4,37);"><input name="q37" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button37" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem38" class="hidden">
        <h3>问题:38、组织能提供令我满意的办公设备和条件</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q38',0,38);"><input name="q38" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q38',1,38);"><input name="q38" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q38',2,38);"><input name="q38" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q38',3,38);"><input name="q38" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q38',4,38);"><input name="q38" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button38" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem39" class="hidden">
        <h3>问题:39、有时候我觉得高层管理人员脱离了大部分员工</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q39',0,39);"><input name="q39" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q39',1,39);"><input name="q39" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q39',2,39);"><input name="q39" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q39',3,39);"><input name="q39" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q39',4,39);"><input name="q39" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button39" class="but" value="下一步" style="visibility:hidden">
</div>

<div id="Problem40" class="hidden">
        <h3>问题:40、我把工作当做生活，我把生活当做工作</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q40',0,40);"><input name="q40" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q40',1,40);"><input name="q40" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q40',2,40);"><input name="q40" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q40',3,40);"><input name="q40" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q40',4,40);"><input name="q40" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button40" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem41" class="hidden">
        <h3>问题:41、我希望变化一下职业发展的道路</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q41',0,41);"><input name="q41" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q41',1,41);"><input name="q41" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q41',2,41);"><input name="q41" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q41',3,41);"><input name="q41" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q41',4,41);"><input name="q41" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button41" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem42" class="hidden">
        <h3>问题:42、有没有福利，我觉得并不重要</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q42',0,42);"><input name="q42" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q42',1,42);"><input name="q42" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q42',2,42);"><input name="q42" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q42',3,42);"><input name="q42" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q42',4,42);"><input name="q42" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button42" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem43" class="hidden">
        <h3>问题:43、我相信我对自己的组织有很大的贡献</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q43',0,43);"><input name="q43" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q43',1,43);"><input name="q43" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q43',2,43);"><input name="q43" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q43',3,43);"><input name="q43" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q43',4,43);"><input name="q43" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button43" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem44" class="hidden">
        <h3>问题:44、一想到工作的前景，我就感到压抑</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q44',0,44);"><input name="q44" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q44',1,44);"><input name="q44" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q44',2,44);"><input name="q44" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q44',3,44);"><input name="q44" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q44',4,44);"><input name="q44" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button44" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem45" class="hidden">
        <h3>问题:45、我对自己工作的内容非常有兴趣</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q45',0,45);"><input name="q45" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q45',1,45);"><input name="q45" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q45',2,45);"><input name="q45" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q45',3,45);"><input name="q45" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q45',4,45);"><input name="q45" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button45" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem46" class="hidden">
        <h3>问题:46、组织太重关系，勾心斗角的事太多</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q46',0,46);"><input name="q46" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q46',1,46);"><input name="q46" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q46',2,46);"><input name="q46" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q46',3,46);"><input name="q46" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q46',4,46);"><input name="q46" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button46" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem47" class="hidden">
        <h3>问题:47、我喜欢与团队合作取得成绩</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q47',0,47);"><input name="q47" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q47',1,47);"><input name="q47" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q47',2,47);"><input name="q47" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q47',3,47);"><input name="q47" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q47',4,47);"><input name="q47" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button47" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem48" class="hidden">
        <h3>问题:48、组织有时提供旅游或奖金作为对我们工作成绩的认同</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q48',0,48);"><input name="q48" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q48',1,48);"><input name="q48" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q48',2,48);"><input name="q48" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q48',3,48);"><input name="q48" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q48',4,48);"><input name="q48" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button48" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem49" class="hidden">
        <h3>问题:49、工作中的同事有许多是我真正的朋友</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q49',0,49);"><input name="q49" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q49',1,49);"><input name="q49" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q49',2,49);"><input name="q49" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q49',3,49);"><input name="q49" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q49',4,49);"><input name="q49" type="radio" value="5">E.是</li>
      </ul>
 <input type="button" id="button49" class="but" value="下一步" style="visibility:hidden">
</div>
<div id="Problem50" class="hidden">
        <h3>问题:50、我不介意多做些额外的工作</h3>
     <ul>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q50',0,50);"><input name="q50" type="radio" value="1">A.不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q50',1,50);"><input name="q50" type="radio" value="2">B.基本不是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q50',2,50);"><input name="q50" type="radio" value="3">C.不确定</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q50',3,50);"><input name="q50" type="radio" value="4">D.基本是</li>
       <li onmouseout="this.className='';" onmouseover="this.className='myBox';" onclick="setradiovale('q50',4,50);"><input name="q50" type="radio" value="5">E.是</li>
      </ul>
 <input name="" type="submit" value="查看结果" class="but">

</div>
</div>
</form>
<!--#测试题写在这里-->
<div class="m40"></div>
<div class="progress">
<p><b>测试进度：<span id="ptip"></span></b></p>
<p class="picbg"><span style="width:0%;float:left;"></span></p>
</div>
</div>

<script type="text/javascript">
<?php if(isset($power_ids)): ?>
default_sel('<?php echo $power_ids; ?>');
<?php endif; ?>
</script>
<?php $this->load->view('footer'); ?>