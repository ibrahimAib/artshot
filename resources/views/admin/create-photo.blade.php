@extends('admin.app-admin')
@section('title', 'Create photo')


@section('content')

<div class="container py-5">
    <div class="d-flex justify-content-center ">
        <form action="/photo" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="file" name="photo_path" class="form-control">
        <textarea name="comption" class="form-control mt-2" cols="30" rows="10"></textarea>
        <select class="form-control mt-2" name="line" id="">
            <option value="1">طولي</option>
            <option value="2">عرضي</option>
        </select>
        <select class="form-control mt-2" name="sec" id="">
            <option value="food">FOOD</option>
            <option value="drink">DRINK</option>
        </select>
        <button type="submit" class="btn btn-dark mt-1 text-cnter btn-block mt-2">send</button>
    </form>
    </div>
</div>
@endsection