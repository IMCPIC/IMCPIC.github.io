<?php


	$jsonurl = "http://getpocket.com/v3/get?consumer_key=41123-fe4863e76b86cdd3c0382833&access_token=1f8a751f-c3e9-a29d-e897-d1756d&detailType=complete";
	$json = file_get_contents($jsonurl);
	echo $json;


?>