<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

$file = env("MUSIC_PATH")."/".Input::get('file');

system("nohup omxplayer --vol -2000 ".$file." &");

DB::insert("INSERT INTO playedmusic (track_played) VALUE ?", [$file]);