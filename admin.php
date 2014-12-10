<?php

// +---------------------------------------------+
// |     Copyright  2014 - 2028 BDHD  YXX        |
// |     http://www.wisco.com.cn                 |
// |     This file may not be redistributed.     |
// +---------------------------------------------+
include('includes/Core.php');
session_start(); 
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
<TITLE>后台管理</TITLE> 
<META name="GENERATOR" content="MSHTML 11.00.9600.17416"></HEAD> 
<BODY>

<?php
$loginname="";
$password= "";
$log="";
$action = ForceIncomingString('action');

if ($action=="L") { //如果是登录则验证管理员账号
	$loginname=ForceIncomingString('loginname');
	$password=MD5(ForceIncomingString('password'));
	$tempsql="SELECT username FROM " . TABLE_PREFIX . "user WHERE loginname = '$loginname' and password='$password'";

	$user=$DB->getOne($tempsql);
	if ($user!=false) {
		$_SESSION['username']=$user['username'];
		$_SESSION['loginname']=$loginname;
	}else
	{
		$log="账号口令错误，请重新输入";
	}
}else if ($action=="O") { //注销
	unset($_SESSION['loginname']);
	unset($_SESSION['username']);
}else if($action=="U"){ //修改密码
	$loginname=ForceIncomingString('loginname');
	$newpassword1=MD5(ForceIncomingString('newpassword1'));
	$tempsql="UPDATE " . TABLE_PREFIX . "user SET password = '$newpassword1' WHERE loginname='$loginname'";
	$DB->exe($tempsql);
	echo $tempsql;
	$log="密码修改成功！";
}
echo $log;
if(!isset($_SESSION['loginname'])){

?>
<div style="width:250px;margin:0 auto;border:solid 1px #666;padding:20px;margin-top: 100px;border-radius:10px;-moz-border-radius:10px;">
<div style="text-align:center;color: #333;margin-bottom: 10px;">1212活动后台</div>
<form method="post" action="./admin.php">
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="loginname" id="loginname"></td>
		</tr>
		<tr>
			<td>密&nbsp;&nbsp;码：</td>
			<td><input type="password" name="password" id="password"></td>
		</tr>
		<tr>
		<td colspan="2"  align="center">
		<input type="hidden" name="action" value="L">
	<input type="submit" value="提交">
		</td>
		
		</tr>
	</table>
	
	
</form>

</div>
<?php
}else{
//登录成功，显示管理员信息，检索分数最高的TOP50信息
echo "<div style='width:700px;margin:0 auto;'>";  
echo '用户ID：',$_SESSION['loginname'],'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';  

echo '<a href="./admin.php?action=O">注销</a> 登录<br />';  
echo '<hr />';

echo '<form method=post action="./admin.php" >
新密码 <input type="password" name="newpassword1"/>
<input type="hidden" name="loginname" id="loginname" value="'.$_SESSION['loginname'].'">
	<input type="hidden" name="action" value="U">
	<input type="submit" value="提交">
</form> ';
$getwxuser = $DB->query("SELECT openid,username,tel,score,createtime FROM " . TABLE_PREFIX . "userscore ORDER BY score desc limit 0,5000");
	echo '<hr />	
	<table id="welive_list" border="1" cellpadding="1" cellspacing="1" style="width: 700px;">
	<thead>
	<tr>
	<th>OPENID</th>
	<th>昵称</th>
	<th>电话</th>
	<th>分数</th>
	<th>参加时间</th>
	</tr>
	</thead>
	<tbody>';

 while($userscore= $DB->fetch($getwxuser)){
		echo '<tr>
		<td>'.$userscore['openid'].'</td>
		<td>' . $userscore['username']. '</td>
		<td>' . $userscore['tel']. '</td>
		<td>' . $userscore['score']. '</td>
		<td>' . $userscore['createtime']. '</td>
		</tr>';
	}
echo '</tbody></table>';
echo '</div>';
}?>


</BODY>
</html>