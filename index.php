<?php

require 'spotify.php';

$spotify = new Spotify();
$tracks = $spotify->tracks('started from the bottom');

foreach ($tracks as $item) {

	echo 'Track name: '.$item->name."<br>";
	echo 'Album: '.$item->album->name."<br>";
	echo 'Artist: '.$item->artists[0]->name."<br>";
	echo "<hr>";

}

?>