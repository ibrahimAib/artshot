@extends('admin.app-admin')
@section('title', 'Create video')

@section('content')

<div class="container py-5">
    <div class="d-flex justify-content-center ">
        <form action="/videos" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="file" name="video_path" class="form-control">
        <textarea name="comption" class="form-control mt-2" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-dark mt-1 text-cnter btn-block mt-2">send</button>
    </form>
    </div>
</div>
@endsection