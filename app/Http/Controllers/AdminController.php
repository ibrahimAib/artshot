<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function photo()
    {
        $photos = Photo::all();
        return view('admin.photo', compact('photos'));
    }

    public function gear()
    {
        return view('admin.gear');
    }

    public function social()
    {
        return view('admin.social');
    }

    public function admins()
    {
        $users = User::all();
        return view('admin.admins', compact('users'));
    }
    public function addadmin()
    {
        return view('auth.register');
    }

    public function createphoto()
    {
        return view('admin.create-photo');
    }
    public function createvideo()
    {
        return view('admin.create-video');
    }
    public function about()
    {
        $about = About::find(1);

        return view('admin.about-admin', compact('about'));
    }
}
