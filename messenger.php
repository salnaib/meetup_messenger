<?php

session_start();

$url = 'https://secure.meetup.com/oauth2/access?client_id=elimmsk4tfqtc7b9il0vk5u3d7&client_secret=au1eo0jqihqvgk6vrtp4sfmfn9&grant_type=authorization_code&redirect_uri=http://radiant-anchorage-6507.herokuapp.com/messenger.php&code='.$_GET["code"];

$ch=curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_POST, 5);
$r=curl_exec($ch);
curl_close($ch);

$_SESSION['accesstoken'] = json_decode($r)->access_token;

header("Location: messenger.html");
die();

?>