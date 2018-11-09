<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.home');
    }

    public function music() {
        return view("pages.music");
    }

    public function curtemp() {
        return view("api.temperature");
    }

    public function nowplaying() {
        return view("api.nowplaying");
    }

    public function playsong($file = null) {
        $file = env("MUSIC_PATH")."/".$file;
        system("omxplayer --vol -2000 ".$file." > /dev/null &");

        DB::insert("INSERT INTO playedmusic (track_played) VALUES (?)", [$file]);
        return $file;
    }
}
