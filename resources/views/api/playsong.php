<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

$file = env("MUSIC_PATH")."/".Input::get('file');

system("omxplayer --vol -2000 ".$file." > /dev/null &");

DB::insert("INSERT INTO playedmusic (track_played) VALUES (?)", [$file]);