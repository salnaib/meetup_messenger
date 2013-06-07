<?php
//check if you have curl loaded
if(!function_exists("curl_init")) die("cURL extension is not installed");

$url = 'http://api.meetup.com/2/groups?radius=25.0&order=id&desc=false&member_id='.$_SESSION['user_id'].'&offset=0&format=json&page=20&fields=&sig_id=95300972&sig=b748addf7d45873a90748ad8d6c170496dc4b532';

$ch=curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$r=curl_exec($ch);
curl_close($ch);

echo $r;

?>