@extends('layouts.navbar')

@section("content")

    <div class="col-md-8">
        <div class="card mx-auto">
            <div class="card-header">Now playing</div>
            <div class="card-body musicBox">
                <p><span id="musicNowPlayingTitle">Loading...</span></p>
            </div>
        </div>
    </div>

    <br />

    <div class="col-md-8 space">
        <div class="card mx-auto">
            <div class="card-header">Available music files</div>

            <div class="card-body">
                <?php
                foreach (array_filter(glob(env("MUSIC_PATH")."/*"), 'is_file') as $file)
                {
                    // Do something with $file
                    echo "<div class=\"card-body\">".basename($file)."</div>";
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        setInterval(nowPlayingCheck(), 3000);
    </script>
@endsection