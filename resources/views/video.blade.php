@extends('layouts.app')
@section('title', 'art shot - video')
@section('content')
@include('layouts.navbar')
    <section class="mt-1 py-5" style="height: 100%"> 
        <div class="container d-flex ">
            <div class=" d-flex flex-column h2-f-video px-0">
            
                <video width="100%" src="video/1.mp4" controls></video>
            </div>
        </div>

    </section>
    
@endsection