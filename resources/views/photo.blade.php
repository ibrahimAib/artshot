@extends('layouts.app')
@section('title', 'art shot - photo')
@section('content')
    <section class="mt-1 py-5 min-height" style="height: 100%"> 
        <div class="container d-md-flex ">
        <div class="col-12 col-md-5  d-flex flex-column h2-f-photo px-0">
            @foreach ($line1 as $ph)
            <button class="img-btn" onclick="show('{{$ph->id}}')">
                <div class=" mr-3 mb-3 shad">
                    <img  src="{{'storage/'. $ph->photo_path}}" alt="">
                </div>
            </button>
            <div class="cliked" id="{{$ph->id}}" onclick="hide('{{$ph->id}}')">
                <img  src="{{'storage/'. $ph->photo_path}}" alt="">
            </div>
            @endforeach
        </div>
        <div id="food2" class="col-12 col-md-7 h1-f-photo d-flex flex-column px-0">
            <div class=" d-flex flex-column px-0">
                @foreach ($line2 as $ph)
                <button class="img-btn" onclick="show('{{$ph->id}}')">
                    <div class=" mb-3 shad">
                        <img  src="{{'storage/'. $ph->photo_path}}" alt="">
                    </div>
                </button>
                <div class="cliked" id="{{$ph->id}}" onclick="hide('{{$ph->id}}')">
                    <img  src="{{'storage/'. $ph->photo_path}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </section>
    
@endsection