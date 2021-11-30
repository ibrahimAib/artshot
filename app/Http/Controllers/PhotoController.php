<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $line1 = Photo::where('line', '1')->inRandomOrder()->get();
        $line2 = Photo::where('line', '2')->inRandomOrder()->get();
        return view('photo', compact('line1', 'line2'));
    }
    public function food()
    {
        $line1 = Photo::where('line', '1')->where('sec', 'food')->inRandomOrder()->get();
        $line2 = Photo::where('line', '2')->where('sec', 'food')->inRandomOrder()->get();
        return view('photo.food', compact('line1', 'line2'));
    }
    public function drink()
    {
        $line1 = Photo::where('line', '1')->where('sec', 'drink')->get();
        $line2 = Photo::where('line', '2')->where('sec', 'drink')->get();
        return view('photo.drink', compact('line1', 'line2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comption = request('comption');
        $photo_path = request('photo_path')->store('uplode', 'public');

        Photo::create(
            [
                'comption' => $comption,
                'photo_path' => $photo_path,
                'line' => request('line'),
                'sec' => request('sec')
            ]
        );
        return redirect('/photo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return back();
    }
    public function gear()
    {
        return view('gear');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
}
