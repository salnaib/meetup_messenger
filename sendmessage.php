<?php

session_start();

//check if you have curl loaded
if(!function_exists("curl_init")) die("cURL extension is not installed");

$url = 'https://api.meetup.com/2/message?access_token='.$_SESSION['accesstoken'].'&member_id='.$_POST["memberid"].'&group_id='.$_POST["groupid"].'&subject='.urlencode($_POST["subject"]).'&message='.urlencode($_POST["message"]);

$ch=curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_POST, 5);
$r=curl_exec($ch);
curl_close($ch);

$error = json_decode($r)->details;

if (!empty($error)) {
	echo "Error: ".$error;
} else {
	echo "Message sent!";
}

?>