@extends('admin.app-admin')
@section('title', 'artshot - admins')
@section('content')

<div class="container mt-5">
    <h1 class="text-center my-5">Admins</h1>
    <table class="table">
        <tr>
            <th class=" text-left border" style="width: 10px;">ID</th>
            <th class=" text-left border border-right-0" style="width: 250px">Name</th>
            <th class=" text-left border border-right-0 border-left-0" style="width: 450px">Email</th>
            <th class=" text-left border border-left-0" style="width: 50px">Actions</th>
        </tr>
@foreach ($users as $user)
        <tr>
            <td class=" text-left border" style="width: 10px;">{{$user->id}}</td>
            <td class=" text-left border border-right-0" style="width: 250px">{{$user->name}}</td>
            <td class=" text-left border border-right-0 border-left-0" style="width: 450px">{{$user->email}}</td>
            <td class=" text-left border border-left-0" style="width: 50px">
                <div>
                    <img src="image/icon/trash.svg" alt="">    
                    <img src="image/icon/pencil.svg" alt="">    
                </div>    
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection