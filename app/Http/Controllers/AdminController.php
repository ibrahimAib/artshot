<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
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

    public function firststart()
    {
        $story = "'أنا مصور طعام محترف مقيم في السعودية , الرياض

        هوسي السري؟ تحويل المألوف إلى غير عادي.
        
        باستخدام مجموعة مهاراتي المتقدمة في مرحلة ما بعد الإنتاج ،
        
         لدي ميل لإنشاء مشاهد درامية وقوية لالتقاط موضوعاتي بطريقة مميزة.
        
        أنا أؤمن أيضًا بوجود هدف أكبر لشغفك ،
         ولذا أتبرع بنسبة 10٪ من أرباحي للمنظمات التي تطعم وتعلم الأطفال ، أو تركز على استعادة البيئة.
        
        
         إذا كنت مهتمًا بإنشاء محتوى استثنائي لعملك ، فأنا أحب أن أسمع منك: example@example.com
        
        
        
         أتطلع للعمل معك!'";

        About::create([
            'name' => 'name',
            'story' => $story
        ]);
        $contact = [
            'text' => 'يسعدنا تواصلكم معنى على حساباتنا :',
            'instagram' => 'www.instagram.com/2rt_shot/',
            'whatsapp' => '0533301365',
            'twitter' => 'twitter.com/iIBRAHIMaia',
            'email' => 'e1415e@gmil.com'
        ];
        Contact::create($contact);
        redirect('/');
    }
}
