<?php

session_start();

//check if you have curl loaded
if(!function_exists("curl_init")) die("cURL extension is not installed");

$url = 'https://api.meetup.com/2/message?access_token='.$_SESSION['accesstoken'].'&member_id='.$_POST["memberid"].'group_id='.$_POST["groupid"].'&message='.$_POST["message"].'$subject='.$_POST["subject"];

$ch=curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_POST, 5);
$r=curl_exec($ch);
curl_close($ch);

echo $url;

?>