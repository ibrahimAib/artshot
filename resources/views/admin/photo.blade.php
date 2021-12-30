@extends('admin.app-admin')
@section('content')
<div class="container">
    
    @if (count($photos) != 0)
    <div class="d-flex justify-content-center my-5">
        
        <a class="btn btn-warning" href="/createphoto">أضف صورة</a>
    </div>
    <div class="d-flex justify-content-center">
        @foreach ($photos as $ph)
            <div class="m-1 border p-1">
                <div class="is-c">
                    <img  src="{{'storage/'. $ph->photo_path}}" alt="">
                </div>
                <div class="d-flex justify-content-between align-items-center py-2 px-0">
                    <form action="/photo/{{$ph->id}}" method="post">
                    @csrf
                    @method('DELETE')
                        <button class="bg-white border-0 text-cetner" type="submit">
                            <img src="image/icon/trash.svg" alt="">
                        </button>
                    </form>
                    <span class="me-2">edit</span>
                    <span class="me-2">save</span>
                </div>
            </div>
            @endforeach
        @else
            <div class="d-flex flex-column justify-content-center my-5 py-5">
                <h1 class="text-dark my-5">No Photos</h1>
                <a class="btn btn-warning" href="/createphoto">Add first photo</a>
            </div>
        @endif
    </div>
</div>
    
@endsection