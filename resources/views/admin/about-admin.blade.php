@extends('admin.app-admin')
@section('title', 'artshot - admins')
@section('content')

<div class="container my-5 col-9 border ">
    <h1 class="text-center my-5">من نحن</h1>

    <form action="/about/1" method="post" id="about">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="heading" class="form-label">العنوان</label>
            <input type="text" class="form-control" id="heading" name="heading" value="{{$about->heading}}" aria-describedby="headinHelp">
        </div>

        <div class="mb-3">
            <label for="story" class="form-label">من نحن</label>
            <textarea class="form-control" name="story" rows="10" id="story">{{ $about->story }}</textarea>
        </div>
        <div class="d-flex justify-content-center my-2">
    </form>
     {{-- image one 1 --}}
     <div class="m-1 border p-1 col-6 is-cs d-flex flex-column">
        <div class="">
            <img  src="{{'storage/'. $about->image_1}}" alt="">
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 px-1 px-0 mt-auto">
            <form action="/about" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="file" name="image_1" id="image-1" style="display: none;" />
                <input class="btn btn-primary" type="button" value="تغيير" onclick="document.getElementById('image-1').click();" />
                </form>

        </div>
    </div>
    {{-- image tow 2 --}}
    @if ($about->image_2 != null)
    <div class="m-1 border p-1 col-6 is-cs d-flex flex-column">
        <div class="">
            <img  src="{{'storage/'. $about->image_2}}" alt="">
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 px-0 mt-auto">
            <form action="/about/1" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" name="delete_image_2" value="helo">
                <button class="bg-white border-0 text-cetner" type="submit">
                    <img src="image/icon/trash.svg" alt="">
                </button>
            </form>
            <form action="/about" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="file" name="image_2" id="image-2" style="display: none;" />
                <input class="btn btn-primary" type="button" value="تغيير" onclick="document.getElementById('image-2').click();" />
                </form>

        </div>
    </div>
    @else
    <div class="d-flex justify-content-center align-items-center col-5">
        <form action="/about" method="post" enctype="multipart/form-data" >
        @csrf
        <input type="file" name="image_2" id="image-2" style="display: none;" />
        <input class="btn btn-primary btn-lg" type="button" value="Browse..." onclick="document.getElementById('image-2').click();" />
        </form>
    </div>
    @endif
</div>
<button type="submit" form="about" class="btn btn-primary my-2">حفظ</button>
@endsection
