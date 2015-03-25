xqcpjishu=0;
document.getElementById("zymxuyao").innerHTML="0/40";
function addxqcq(obj,vid,name){
	divname=vid.replace("y_xqa_","");
	var tihao = divname; 
	if(divname==1){
		document.getElementById("zymxuyao").innerHTML="1/40";
		}
	if(divname!=1){
		topdividpme=parseInt(divname)-1;
		topdivid="y_xqa_"+topdividpme;
		 
		divname=document.getElementById(topdivid).name;
		
		var v=document.getElementsByName(divname)
		var j=0
		for (var i=0;i<v.length;i++){
		 if(v.item(i).checked){
		   j++
		 }
		}
		if(j<1){
			 
			//$(this).attr("checked",false);
			$('input:radio[name='+name+']').attr('checked',false);
			return checkxqcptijiao();
			Response.End();
		}
		document.getElementById("zymxuyao").innerHTML=tihao+"/40";
			
	}
	xqcpjishu=xqcpjishu+1;
	
	document.getElementById(obj).style.background='#ed7115';
}


/*function divlist_come(divid){
	document.getElementById(divid).style.backgroundColor="#F0F0F0";
}

function divlist_go(divid){
	document.getElementById(divid).style.backgroundColor="";
}*/

 
//fmuecvhs
function checkxqcptijiao(){
var flag = false;
if(form.f1 != null){
    var msglen=form.f1.length;
    for(i=0;i<msglen;i++){
      if(form.f1[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第1题")
    Response.End();
}
var flag = false;
if(form.m1 != null){
    var msglen=form.m1.length;
    for(i=0;i<msglen;i++){
      if(form.m1[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第2题")
    Response.End();
}
var flag = false;
if(form.u1 != null){
    var msglen=form.u1.length;
    for(i=0;i<msglen;i++){
      if(form.u1[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第3题")
    Response.End();
}
var flag = false;
if(form.e1 != null){
    var msglen=form.e1.length;
    for(i=0;i<msglen;i++){
      if(form.e1[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第4题")
    Response.End();
}
var flag = false;
if(form.c1 != null){
    var msglen=form.c1.length;
    for(i=0;i<msglen;i++){
      if(form.c1[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第5题")
    Response.End();
}
var flag = false;
if(form.v1 != null){
    var msglen=form.v1.length;
    for(i=0;i<msglen;i++){
      if(form.v1[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第6题")
    Response.End();
}

var flag = false;
if(form.h1 != null){
    var msglen=form.h1.length;
    for(i=0;i<msglen;i++){
      if(form.h1[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第7题")
    Response.End();
}
var flag = false;
if(form.s1 != null){
    var msglen=form.s1.length;
    for(i=0;i<msglen;i++){
      if(form.s1[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false){
    alert("对不起，请选择第8题")
    Response.End();
}




var flag = false;
if(form.f2 != null){
    var msglen=form.f2.length;
    for(i=0;i<msglen;i++){
      if(form.f2[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第9题")
    Response.End();
}
var flag = false;
if(form.m2 != null){
    var msglen=form.m2.length;
    for(i=0;i<msglen;i++){
      if(form.m2[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第10题")
    Response.End();
}
var flag = false;
if(form.u2 != null){
    var msglen=form.u2.length;
    for(i=0;i<msglen;i++){
      if(form.u2[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第11题")
    Response.End();
}
var flag = false;
if(form.e2 != null){
    var msglen=form.e2.length;
    for(i=0;i<msglen;i++){
      if(form.e2[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第12题")
    Response.End();
}
var flag = false;
if(form.c2 != null){
    var msglen=form.c2.length;
    for(i=0;i<msglen;i++){
      if(form.c2[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第13题")
    Response.End();
}
var flag = false;
if(form.v2 != null){
    var msglen=form.v2.length;
    for(i=0;i<msglen;i++){
      if(form.v2[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第14题")
    Response.End();
}

var flag = false;
if(form.h2 != null){
    var msglen=form.h2.length;
    for(i=0;i<msglen;i++){
      if(form.h2[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第15题")
    Response.End();
}
var flag = false;
if(form.s2 != null){
    var msglen=form.s2.length;
    for(i=0;i<msglen;i++){
      if(form.s2[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第16题")
    Response.End();
}










var flag = false;
if(form.f3 != null){
    var msglen=form.f3.length;
    for(i=0;i<msglen;i++){
      if(form.f3[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第17题")
    Response.End();
}
var flag = false;
if(form.m3 != null){
    var msglen=form.m3.length;
    for(i=0;i<msglen;i++){
      if(form.m3[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第18题")
    Response.End();
}




var flag = false;
if(form.u3 != null){
    var msglen=form.u3.length;
    for(i=0;i<msglen;i++){
      if(form.u3[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第19题")
    Response.End();
}
var flag = false;
if(form.e3 != null){
    var msglen=form.e3.length;
    for(i=0;i<msglen;i++){
      if(form.e3[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第20题")
    Response.End();
}
var flag = false;
if(form.c3 != null){
    var msglen=form.c3.length;
    for(i=0;i<msglen;i++){
      if(form.c3[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第21题")
    Response.End();
}
var flag = false;
if(form.v3 != null){
    var msglen=form.v3.length;
    for(i=0;i<msglen;i++){
      if(form.v3[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第22题")
    Response.End();
}
var flag = false;
if(form.h3 != null){
    var msglen=form.h3.length;
    for(i=0;i<msglen;i++){
      if(form.h3[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第23题")
    Response.End();
}
var flag = false;
if(form.s3 != null){
    var msglen=form.s3.length;
    for(i=0;i<msglen;i++){
      if(form.s3[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第24题")
    Response.End();
}





var flag = false;
if(form.f4 != null){
    var msglen=form.f4.length;
    for(i=0;i<msglen;i++){
      if(form.f4[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第25题")
    Response.End();
}
var flag = false;
if(form.m4 != null){
    var msglen=form.m4.length;
    for(i=0;i<msglen;i++){
      if(form.m4[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第26题")
    Response.End();
}
var flag = false;
if(form.u4 != null){
    var msglen=form.u4.length;
    for(i=0;i<msglen;i++){
      if(form.u4[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第27题")
    Response.End();
}
var flag = false;
if(form.e4 != null){
    var msglen=form.e4.length;
    for(i=0;i<msglen;i++){
      if(form.e4[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第28题")
    Response.End();
}
var flag = false;
if(form.c4 != null){
    var msglen=form.c4.length;
    for(i=0;i<msglen;i++){
      if(form.c4[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第29题")
    Response.End();
}
var flag = false;
if(form.v4 != null){
    var msglen=form.v4.length;
    for(i=0;i<msglen;i++){
      if(form.v4[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第30题")
    Response.End();
}

var flag = false;
if(form.h4 != null){
    var msglen=form.h4.length;
    for(i=0;i<msglen;i++){
      if(form.h4[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第31题")
    Response.End();
}
var flag = false;
if(form.s4 != null){
    var msglen=form.s4.length;
    for(i=0;i<msglen;i++){
      if(form.s4[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第32题")
    Response.End();
}









var flag = false;
if(form.f5 != null){
    var msglen=form.f5.length;
    for(i=0;i<msglen;i++){
      if(form.f5[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第33题")
    Response.End();
}
var flag = false;
if(form.m5 != null){
    var msglen=form.m5.length;
    for(i=0;i<msglen;i++){
      if(form.m5[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第34题")
    Response.End();
}


var flag = false;
if(form.u5 != null){
    var msglen=form.u5.length;
    for(i=0;i<msglen;i++){
      if(form.u5[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第35题")
    Response.End();
}
var flag = false;
if(form.e5 != null){
    var msglen=form.e5.length;
    for(i=0;i<msglen;i++){
      if(form.e5[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第36题")
    Response.End();
}
var flag = false;
if(form.c5 != null){
    var msglen=form.c5.length;
    for(i=0;i<msglen;i++){
      if(form.c5[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第37题")
    Response.End();
}
var flag = false;
if(form.v5 != null){
    var msglen=form.v5.length;
    for(i=0;i<msglen;i++){
      if(form.v5[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第38题")
    Response.End();
}
var flag = false;
if(form.h5 != null){
    var msglen=form.h5.length;
    for(i=0;i<msglen;i++){
      if(form.h5[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第39题")
    Response.End();
}
var flag = false;
if(form.s5 != null){
    var msglen=form.s5.length;
    for(i=0;i<msglen;i++){
      if(form.s5[i].checked==true){
        flag = true;
      }
    }
}
if (flag == false)
{
    alert("对不起，请选择第40题")
    Response.End();
}




	form.submit();
}

function show_xqcp_content(){
	document.getElementById('xqcp_content').style.display="block";	
}
xqjishu=0;
document.getElementById("r15fy_up").style.display="none";
function scrolldown(){
	if(xqjishu==3 && xqcpjishu>31){
		document.getElementById("r_cp_21img").style.display="";
		document.getElementById("Map").style.display="";
		document.getElementById("r15fy_up").style.display="";
		document.getElementById("r15fy_down").style.display="none";
	}
	if(xqjishu<3){
		document.getElementById("r15fy_up").style.display="";
	}
	
	if(xqcpjishu<8){
		document.getElementById("r15fy_up").style.display="none";
		alert('请完成本页所有问题');
		//Response.End();
		Response.End();
	}
	if(xqjishu==1 && xqcpjishu<16){
		alert('请完成本页所有问题');
		//Response.End();	
		Response.End();
	}
	if(xqjishu==2 && xqcpjishu<24){
		alert('请完成本页所有问题');
		//Response.End();	
		Response.End();
	}
	//alert(xqjishu);
	if(xqjishu==3 && xqcpjishu<32){
		alert('请完成本页所有问题');
		//Response.End();	
		Response.End();
	}
	if(xqjishu==4 && xqcpjishu<40){
		alert('请完成本页所有问题');
		//Response.End();	
		Response.End();
	}
	if(xqjishu==5 && xqcpjishu<40){
		alert('请完成本页所有问题');
		//Response.End();	
		Response.End();
	}

	xqjishu=xqjishu+1;
	document.getElementById('zym10').scrollTop = document.getElementById('zym10').scrollTop+368;
	
}

function scrollup(){
	if(xqjishu>=1){
		xqjishu=xqjishu-1;
	}
	document.getElementById("r15fy_up").style.display="";
	document.getElementById("r_cp_21img").style.display="none";
	document.getElementById("r15fy_down").style.display="";
	if(xqjishu<1){
		document.getElementById("r15fy_up").style.display="none";
	}
	document.getElementById('zym10').scrollTop = document.getElementById('zym10').scrollTop-368;
}
