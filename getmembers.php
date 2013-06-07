<?php
//check if you have curl loaded
if(!function_exists("curl_init")) die("cURL extension is not installed");

$group_id = $_GET["groupid"];

$url = 'http://api.meetup.com/2/members?group_id='.$group_id.'&order=name&offset=0&format=json&page=20&sig_id=95300972&sig=db2de403e2c7a1c715899df4152113efbe630efa';

$ch=curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$r=curl_exec($ch);
curl_close($ch);

return $r

?>