<?php

session_start();

//check if you have curl loaded
if(!function_exists("curl_init")) die("cURL extension is not installed");

$member_id = $_GET["memberid"];
$group_id = $_GET["groupid"];
$message = $_GET["message"];
$subject = $_GET["subject"];

$url = 'https://api.meetup.com/2/message?access_token='.$_SESSION['accesstoken'].'&member_id='.$member_id.'group_id='.$group_id.'&message='.$message.'$subject='.$subject;

$ch=curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_POST, 5);
$r=curl_exec($ch);
curl_close($ch);

echo $r

?>