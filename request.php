<?php
	include("core/api.php");
	include("core/func.php");
	include("core/config.php");

	$website = "https://api.telegram.org/bot".$token;

	$update = file_get_contents('php://input');
	$update = json_decode($update, true);

	$chatId = $update["message"]["chat"]["id"];
	$message = strtolower($update["message"]["text"]);

	switch ($message) {

		case 'release list':

				for($i=0; $i<20; $i++){
					$d=strtotime($releaseDate[$i]);
					$response = $response."\n\n".$title[$i]." It will be released with date ".date('d-m-Y', $d)."\n\n".$imagePoster[$i];
				}

				sendMessage($chatId, $response);

		break;

		case 'next launch':

				$d=strtotime($releaseDate[0]);
				$response = $response."\n\n".$title[0]." It will be released with date ".date('d-m-Y', $d)."\n\n".$imagePoster[0];

				sendMessage($chatId, $response);

		break;

	}
	


?>