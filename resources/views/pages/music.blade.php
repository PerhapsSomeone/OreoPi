@extends('layouts.navbar')

@section("content")

    <div class="col-md-8">
        <div class="card mx-auto">
            <div class="card-header">Now playing</div>
            <div class="card-body musicBox">
                <span id="musicNowPlayingTitle">Loading...</span>
                <button onclick="stopPlaying()" class="button musicPlayButton is-rounded"><i class="fa fa-stop"></i></button>
            </div>
        </div>
    </div>

    <br />

    <div class="col-md-8 space">
        <div class="card mx-auto">
            <div class="card-header">Available music files in {{ env("MUSIC_PATH") }}</div>

            <div class="card-body">
                <?php
                $i = 0;
                foreach (array_filter(glob(env("MUSIC_PATH")."/*"), 'is_file') as $file)
                {
                    // Do something with $file
                    echo "<div class=\"card-body\"><span id='song".$i."'>".basename($file)."</span><button class='musicPlayButton' onclick='playMusic(".$i.")'><i class=\"fa fa-play\"></i></button></div>";
                    $i++;
                }
                ?>
            </div>
        </div>
    </div>
@endsection