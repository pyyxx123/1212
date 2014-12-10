<?php

// +---------------------------------------------+
// |     Copyright  2014 - 2028 BDHD  YXX        |
// |     http://www.wisco.com.cn                 |
// |     This file may not be redistributed.     |
// +---------------------------------------------+


//以下4行代码是对浏览器类型进行判断。非微信浏览器禁止打开网页。
// $useragent = addslashes($_SERVER['HTTP_USER_AGENT']);
// if(strpos($useragent, 'MicroMessenger') === false && strpos($useragent, 'Windows Phone') === false ){
// echo " Sorry！非微信浏览器不能访问";
// exit(0);
// }
?>

<!DOCTYPE html PUBLIC "" ""><HTML><HEAD>
	<META content="IE=11.0000" http-equiv="X-UA-Compatible">
<META http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<META name="format-detection" content="telephone=no">	 
<META name="apple-mobile-web-app-capable" content="yes">	 
<META name="apple-mobile-web-app-status-bar-style" content="black">			 
<META http-equiv="Pragma" content="no-cache">	 
<META http-equiv="Expires" content="-1">
<META name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
<TITLE>1212活动</TITLE> 
<STYLE>
* {
	margin: 0;
	padding: 0;
}
html, body {
	background: #350038;
	width: 100%;
	height: 100%;
}
img{ border:0;}
#main {
	position:relative;
	left:0;
	top:0;
	width:320px;
	height:568px;
	margin:0 auto;
	z-index: 1;
	background:url(./images/bg1.png) no-repeat center top #350038;
	background-size:contain;
}

.tel{
	position:absolute;
	top:315px;
	left:45%;
	margin-left:-94px;
	font-size: 20px;
	color: white;
}
.tel div{
	
	margin:10px auto;
	
}
.tel #telno{
 height: 30px;
 width: 130px;
 font-family:"microsoft yahei";
 font-size: 20px;
}
.tel #username{
 height: 30px;
 width: 130px;
 font-family:"microsoft yahei";
 font-size: 20px;
}
.getbtn, .invtebtn, .helpbtn, .joinbtn {
	position:absolute;
	top:420px;
	left:50%;
	margin-left:-94px;
}
.rule {
	position:absolute;
	top:500px;
	left:50%;
	margin-left:-70px;
}
.rule-detail {
	position:absolute;
	left:0;
	top:0;
	z-index:1000;
	display:none;
}
.rule-detail a {
	position:absolute;
	left:50%;
	margin-left:-67px;
	bottom:18px;
	display:block;
	width:135px;
	height:38px;
}
.invite, .help {
	position:absolute;
	left:0;
	top:0;
	width:320px;
	height:568px;
	display:none;
}
.huangguan {
	position:absolute;
	top:200px;
	left:10px;
}
.share {
	position:absolute;
	z-index:1000;
	left:0;
	top:0;
	display:none;
}
.score {
	position:absolute;
	top:323px;
	left:140px;
	color:#999;
	font-size:34px;
	font-family:"microsoft yahei";
}
.progress{
    position:absolute;
	top:366px;
	left:10px;
	display: none;
}
</STYLE>

<META name="GENERATOR" content="MSHTML 11.00.9600.17416"></HEAD> 
<BODY>
<DIV id="main">
<div class="tel">
<div>
昵&nbsp;&nbsp;&nbsp;&nbsp;称:
<input type="text" name="username" id="username"  maxlength="30" autocomplete="off" class="amount_text fw c_fff" value=""><b>★</b></div>
<div>手机号:
<input type="tel" name="telno" id="telno"  maxlength="11" autocomplete="off" class="amount_text fw c_fff" value=""><b>★</b></div>
</div>
<IMG width="187" height="57" class="getbtn" src="./images/getbtn.png"> 
<div class="progress" style="width:300px;height:35px;overflow:hidden;">
<div style="position:absolute;background:url(./images/jdt1.png) no-repeat center;z-index:10;width:300px;height:35px"></div>
<div class="scorep" style="position:absolute;background-color:#f3fb95;margin-left: 38px;z-index:10;width:12px;height:35px"></div>
<div style="position:absolute;background:url(./images/jdt2.png) no-repeat center;z-index:100;width:300px;height:35px"></div>
</div>
<DIV class="invite"><IMG width="300" class="huangguan" src="./images/huangguan.png"> 
<SPAN class="score"></SPAN>
<IMG width="187" height="57" class="invtebtn" src="./images/invte.png"> 
</DIV>
<DIV class="help"><IMG width="300" class="huangguan" src="./images/huangguan.png"> 
<SPAN class="score"></SPAN> <IMG width="187" height="57" class="helpbtn" src="./images/help.png"> 
<A class="joinbtn" style="display: none;" href="http://mp.weixin.qq.com/s?__biz=MzA4MTg5MzAzMw==&mid=201524462&idx=1&sn=13dd0e10d7133993a78c6fd03d9814fe#rd" 
target="_self"><IMG width="187" height="57" src="./images/join.png"> 
</A></DIV><IMG width="140" height="30" class="rule" src="./images/rule.png"> 
<IMG width="320" height="568" class="share" src="./images/share.png">   
<DIV class="rule-detail"><IMG width="320" height="568" src="./images/rule_detail.png"> 
<A href="javascript:;" target="_self"></A></DIV></DIV>
<!--<a href="javascript:clearCookie()">清除cookie</a>-->
<SCRIPT src="./script/jquery.js"></SCRIPT>
 
<SCRIPT>

var imgUrl = 'http://www.siveo.com/1212/images/shareimg.png';  //分享时活动图标
var lineLink =  location.href+"&need=1";  //分享时活动URL
var descContent ='双12领礼品';   //默认标题
var shareTitle = "顶礼盒赢神秘大奖，快快找小伙伴们帮忙吧！";  //默认内容
var appid = ''; //这里是公众账号Id
function setCookie(c_name, value, expiredays) {
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + expiredays);
	document.cookie = c_name + "=" + escape(value) + ";path=/" + ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString())
}
function getCookie(Name){
	var search = Name + "=";
	var returnvalue = "";
	if (document.cookie.length > 0) {
		offset = document.cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = document.cookie.indexOf(";", offset);
			if (end == -1) end = document.cookie.length;
			returnvalue = unescape(document.cookie.substring(offset, end));
		}
	}
	return returnvalue;
} 
var wxDate={
	"img_url": imgUrl,  
	"img_width": "640",  
	"img_height": "640",  
	"link": lineLink,  
	"desc": descContent,  
	"title": shareTitle   
}

function setWxTitle(name,score){
	wxDate.title=name+" 还差"+(1212-score)+"即可获得神秘大奖，快来帮TA顶";
	wxDate.desc=name+" 还差"+(1212-score)+"即可获得神秘大奖，快来帮TA顶";
	$(".score").html(score);	
	$(".progress").show();
	$(".scorep").width(score/5.2);
}

function shareFriend(){
	WeixinJSBridge.invoke('sendAppMessage',wxDate,function(res) {  
		_report('send_msg', res.err_msg);  
	})
	WeixinJSBridge.invoke('shareTimeline',wxDate,function(res) {  
		_report('send_msg', res.err_msg); 
	})
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {  
  
// 发送给好友  
WeixinJSBridge.on('menu:share:appmessage', function(argv){  
shareFriend();  
});  
  
WeixinJSBridge.on('menu:share:timeline', function(argv){  
shareFriend();  
});  
  
}, false);  

$.ajaxSetup({
	beforeSend:function(){
		$(".score").html('<img src="./images/loading.gif" />')
	}
})		
function getUrlParam(name){
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if (r!=null) return unescape(r[2]); return null;
}

function IsNum(num){
  var reNum=/^\d*$/;
  return(reNum.test(num));
}


if(!getUrlParam("need")){
	$(".getbtn").show();		
}
//页面载入时先进行此方法 查看openid是否已经有分数
if(getCookie("my_weixin_id")==getUrlParam("wxid")){
	// alert("本地COOKIE与WXID相等");
	$(".getbtn").hide();
	$(".tel").hide();
	$(".invite").show();
	$.ajax({
		url:"getscore.php",
		data:{
			openid:getUrlParam("wxid"),
			telno:"",
			type:0
		},
		type:"POST",
		dataType:"json",
		success:function(data){
			setWxTitle(data[0].username,data[0].score);
		}
	})
}
if((!getCookie("my_weixin_id")&&getUrlParam("need")==1)||(getCookie("my_weixin_id")&&getCookie("my_weixin_id")!=getUrlParam("wxid"))){
	$(".getbtn").hide();
	$(".tel").hide();
	$(".help").show();
	$.ajax({
		url:"getscore.php",
		data:{
			openid:getUrlParam("wxid"),
			telno:"",
			type:0
		},
		type:"POST",
		dataType:"json",
		success:function(data){
			if (data[0].score==false) {
					$(".helpbtn").hide();
					$(".joinbtn").show();
					$(".score").html("");
			}else{
			setWxTitle(data[0].username,data[0].score);	
			}		
		}
	})	
}



$(".getbtn").click(function(){ //点击领取我的礼盒
	var strText1= $("#username")[0].value;
    if(strText1==null || strText1== "" )
    {
        $("#username")[0].value="请输入昵称";
        $("#username").focus(); 
        return false;
    }  
	var strText= $("#telno")[0].value;
    if(strText=="" || strText==null)
    {
        $("#telno")[0].value="请输入手机号";
        $("#telno").focus(); 
        return false;
    }
     if(!IsNum(strText)||strText.length!=11)
    {
        $("#telno")[0].value="输入不正确";
        $("#telno").focus(); 
        return false;
    } 
  
	$(".getbtn").hide();
	$(".tel").hide();
	$(".invite").show();
	$.ajax({
		url:"getscore.php",
		data:{
			openid:getUrlParam("wxid"),
			telno:strText,
			username:strText1,
			type:0
		},
		type:"POST",
		dataType:"json",
		success:function(data){
			setWxTitle(data[0].username,data[0].score);
			setCookie("my_weixin_id",getUrlParam("wxid"),9999);
			//setCookie(getUrlParam("wxid"),1,9999);
		}
	})
})
$(".rule").click(function(){
	$(".rule-detail").show();
})
$(".rule-detail a").click(function(){
	$(".rule-detail").hide();
});
/**
$(".getbtn").click(function(){
	$(".invite").show();
	$(".getbtn").hide();
});
*/
$(".invtebtn").click(function(){
	window.scrollTo(0,0);
	$(".share").show();
});
$(".share").click(function(){
	$(".share").hide();
});
$(".helpbtn").click(function(){
	if(getCookie(getUrlParam("wxid"))){
		alert("只能顶一次哦");
		$(".helpbtn").hide();
		$(".joinbtn").show();
		return;
	}
	$(".helpbtn").hide();
	$(".joinbtn").show();
	$.ajax({
		url:"getscore.php",
		data:{
			openid:getUrlParam("wxid"),
			type:1
		},
		type:"POST",
		dataType:"json",
		success:function(data){
			setWxTitle(data[0].username,data[0].score);
			setCookie(getUrlParam("wxid"),1,9999);
		}
	})
});
/*
function getuser(){
	$.ajax({
		url:"https://api.weixin.qq.com/cgi-bin/user/info",
		data:{
			appid:"wxf2ac167e17a99ddb",
			secret:"c6ee7d1c90e0b6ad02854cc415a44cdf",
			grant_type:client_credential
		},
		type:"POST",
		dataType:"json",
		success:function(data){
			var token=data.access_token;
			$.ajax({
				url:"https://api.weixin.qq.com/cgi-bin/user/info",
				data:{
					access_token:token,
					openid:getUrlParam("wxid")
				},
				type:"POST",
				dataType:"json",
				success:function(data){
					getUrlParam("wxid")
				}
			})
		}
	})
}*/


function clearCookie() {
setCookie("my_weixin_id","",-9999);
}
</SCRIPT>

</BODY></HTML>
