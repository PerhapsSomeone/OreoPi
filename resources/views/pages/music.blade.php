@extends('layouts.navbar')

@section("content")

    <div class="col-md-8">
        <div class="card">
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

@endsection