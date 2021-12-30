@extends('admin.app-admin')
@section('title', 'artshot - admins')
@section('content')

<div class="container mt-5 col-8">
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
     <div class="m-1 border p-1">
        <div class="is-c">
            <img  src="{{'storage/'. $about->image_1}}" alt="">
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 px-0">
            <span class="me-2">edit</span>

        </div>
    </div>
    {{-- image tow 2 --}}
    @if ($about->image_2 != null)
    <div class="m-1 border p-1">
        <div class="is-c">
            <img  src="{{'storage/'. $about->image_2}}" alt="">
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 px-0">
            <form action="/about/1" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" name="delete_image_2" value="helo">
                <button class="bg-white border-0 text-cetner" type="submit">
                    <img src="image/icon/trash.svg" alt="">
                </button>
            </form>
            <span class="me-2">edit</span>
            <span class="me-2">save</span>
        </div>
    </div>
    @else
    <form action="/about" method="post">
    @csrf
    bu
    </form>
    @endif
    <button type="submit" form="about" class="btn btn-primary">حفظ</button>
</div>
@endsection