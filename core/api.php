<?php

	$url = "https://api.crackwatch.com/api/games?page=0&is_released=false&is_sort_inverted=true";

	$data = file_get_contents($url);
	$characters = json_decode($data);

	$title = [];
	$NFOsCount = [];
	$protections = [];
	$groups = [];
	$updatedAt = [];
	$releaseDate = [];
	$imagePoster = [];
	$slug = [];
	$versions = [];
	$i = 0;

	foreach ($characters as $character) {
		$title[$i] = $character->title;
		$NFOsCount[$i] = $character->NFOsCount;
		$protections[$i] = $character->protections[0];
		$groups[$i] = $character->groups;
		$updatedAt[$i] = $character->updatedAt;
		$releaseDate[$i] = $character->releaseDate;
		$imagePoster[$i] = $character->imagePoster;
		$slug[$i] = $character->slug;

		$i++;
	}

?>