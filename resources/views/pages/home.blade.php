@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">OreoPi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ trans("home.welcome") }}

                     <?php use Illuminate\Support\Facades\Auth; echo Auth::user()->name ?>!
                </div>
            </div>
        </div>

        <br /><br />

        <div class="col-md-8 space">
            <div class="card">
                <div class="card-header">{{ trans("home.onelook") }}</div>
                <div class="card-body">
                    <i class="fa fa-thermometer-full fa-fw"></i><span id="tempNumber">Lädt...</span>
                </div>
            </div>
        </div>

        <br /><br />

        <div class="col-md-8 space">
            <div class="card">
                <div class="card-header">{{ trans("home.menu") }}</div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="nav nav-pills nav-stacked" style="text-align: center;">
                                    <li><a href="{{ route("music") }}"><i class="fa fa-music fa-fw"></i>{{ trans("home.music") }}</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
