<?php

// +---------------------------------------------+
// |     Copyright  2014 - 2028 BDHD  YXX        |
// |     http://www.wisco.com.cn                 |
// |     This file may not be redistributed.     |
// +---------------------------------------------+


error_reporting(E_ALL & ~E_NOTICE);

@include('./config/config.php');
include(BASEPATH . 'includes/BaseUrl.php');
include(BASEPATH . 'includes/Class.Database.php');
include(BASEPATH . 'includes/Functions.php');
$DB = new MySQL($dbusername, $dbpassword, $dbname,  $servername, true, $printerror);

$dbpassword   = ''; //将config.php文件中的密码付值为空, 增加安全性

?>