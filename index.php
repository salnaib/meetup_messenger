<?php

include "socialmedia_oauth_connect.php";
$oauth = new socialmedia_oauth_connect();
$oauth->provider="MeetUp";
$oauth->client_id = "elimmsk4tfqtc7b9il0vk5u3d7";
$oauth->client_secret = "amq5s5799jnv5bdrt65ofg4mtq";
$oauth->redirect_uri  ="http://radiant-anchorage-6507.herokuapp.com/messenger.php";

$oauth->scope="basic, messaging";

$oauth->Initialize();

$code = ($_REQUEST["code"]) ?  ($_REQUEST["code"]) : "";

if(empty($code)) {
	$oauth->Authorize();
}else{
	$oauth->code = $code;
#	$oauth->getAccessToken();
	$getData = json_decode($oauth->getUserProfile());
	$oauth->debugJson($getData);
	print "Name :".$getData->data->full_name;

}
?>