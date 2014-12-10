<?php

// +---------------------------------------------+
// |     Copyright  2014 - 2028 BDHD  YXX        |
// |     http://www.wisco.com.cn                 |
// |     This file may not be redistributed.     |
// +---------------------------------------------+


if(!defined('BDHD')) die('File not found!');


$thisfiledirname = strtolower(substr(str_replace(dirname(dirname(dirname(__FILE__))), '', dirname(dirname(__FILE__))), 1));
$script_name = strtolower($_SERVER['SCRIPT_NAME']);

if (strstr($script_name, $thisfiledirname.'/')){
	$thiswebsitedir = str_replace(strstr($script_name, $thisfiledirname.'/'), '', $script_name);
	$weliveURL = "http://". $_SERVER['HTTP_HOST'] . $thiswebsitedir . $thisfiledirname . '/';
}else{
	$weliveURL = "http://". $_SERVER['HTTP_HOST'] . '/';
}

define('BASEURL', $weliveURL);


?>