<?php

class Song
{
    public $songId;
    public $title;
}

$octopusSong = new Song();
$yellowSub = new Song();

$octopusSong->songId = 1;
$octopusSong->title = "Octopus's Garden";

$yellowSub->songId = 2;
$yellowSub->title = "Yellow Submarine";
// var_dump($octopusSong);

class Playlist
{
    public $name;
    public $songs = [];

    public function addSong($song) {

        $this->songs[] = $song;

    }
}

$playlist = new Playlist();

$playlist->name = 'Rock';
$playlist->addSong($octopusSong);
$playlist->addSong($yellowSub);

var_dump($playlist->songs);
