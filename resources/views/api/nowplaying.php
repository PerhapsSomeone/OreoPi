<?php

use Illuminate\Support\Facades\DB;

exec("ps cax | grep -c omxplayer.bin", $playerProcessActive);

if($playerProcessActive == "0") {
    echo json_encode(array(
        "nowplaying" => "undefined"
    ));
} else {
    $lastPlayed = json_decode(json_encode(DB::select("SELECT * FROM playedmusic ORDER BY number DESC LIMIT 1")), true);
    if ($lastPlayed !== []) {
        echo json_encode(array(
            "nowplaying" => $lastPlayed[0]["track_played"]
        ));
    }
}