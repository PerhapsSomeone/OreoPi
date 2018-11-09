<?php

use Illuminate\Support\Facades\DB;

exec("ps cax | grep -c omxplayer.bin", $playerProcessActive);

if($playerProcessActive == 0) {
    echo array(
        "nowplaying" => "undefined"
    );
} else {
    DB::select("SELECT * FROM musiclog");
}