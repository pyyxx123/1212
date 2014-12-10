<?php

// +---------------------------------------------+
// |     Copyright  2014 - 2028 BDHD  YXX        |
// |     http://www.wisco.com.cn                 |
// |     This file may not be redistributed.     |
// +---------------------------------------------+

include('includes/Core.php');
$openid=""; 
$score="";
$username="";
function getrandnum(){	//随机抽取 12,24,48 
	$randnum=rand(1,2);
	switch ($randnum) {
		case '1':
			$randnum='12';
			break;
		case '2':
			$randnum='24';
			break;
		default:
			$randnum=0;
			break;
	}
	return $randnum;
}

$openid=$_POST['openid'];
$type=$_POST['type'];

if ($type==0){
	#获取openid,从数据库查找此openid的分数 
	#若数据库不存在此openid，则建立一笔资料。是否考虑输入电话号码？？
	$rs=$DB->getOne("SELECT score,username FROM " . TABLE_PREFIX . "userscore WHERE openid = '$openid'");
	if ($rs==false) {
		$tel=$_POST['telno']; 
		$username=$_POST['username'];
		if (!$tel&&!$username) {
			$score=false;
			$username=false;
		}else{
		#随机抽取
		$score=getrandnum();
		$DB->exe("INSERT INTO " . TABLE_PREFIX . "userscore (openid, tel, username, score) VALUES ('$openid', '$tel', '$username', '$score')");
		$DB->insert_id();
		}
	}else{
		$score=$rs['score'];
		$username=$rs['username'];
	}
	

}else if ($type==1) {
	# 获取openid,随机抽取 12,24,48 将分数进行累加。并返回最新分数。
	$score=getrandnum();
	$DB->exe("UPDATE " . TABLE_PREFIX . "userscore SET score = score+$score");
	$rs=$DB->getOne("SELECT score,username FROM " . TABLE_PREFIX . "userscore WHERE openid = '$openid'");
	if (!$rs) {
	$score=$rs['score'];
	$username=$rs['username'];
	}
	
}
        
 $arr = array(
 	0 => array(
 		'openid' =>  $openid,
 		'score' =>  $score,
 		'username'=>$username
 		)
 	);
echo json_encode($arr);  
?>