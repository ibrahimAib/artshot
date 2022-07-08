@extends('layouts.app')
@section('content')

<section class="py-5 min-height">
<div class="container d-flex text-right about-story">
    <div class="col-6 about-img">
        <img src="{{ 'storage/' . $data->image_1}}" alt="">
    </div>
    <div class="col-6">
        <h2>
            {{$data->heading}}
        </h2>
        <pre class="mt-5  text-right">
{{$data->story}}
        </pre>
    </div>
</div>
</section>
@endsection
