<?php

echo $_GET["code"];

$url = 'https://secure.meetup.com/oauth2/access?clientid=elimmsk4tfqtc7b9il0vk5u3d7&client_secret=amq5s5799jnv5bdrt65ofg4mtq&grant_type=authorization_code&redirect_uri=http://radiant-anchorage-6507.herokuapp.com/messenger.php&code='.$_GET["code"];

$ch=curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$r=curl_exec($ch);
curl_close($ch);

echo $r

?>