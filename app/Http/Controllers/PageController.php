<?php

namespace App\Http\Controllers;

use App\About;
use App\Banner;
use App\Category;
use App\Event;
use App\Indicators;
use App\Information;
use App\Language;
use App\Mail\SendMail;
use App\Partners;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Mail;
class PageController extends Controller
{
    public function index()
    {
        $cats = Category::all();
        $products = Product::all();
        $about = About::first();
        $information = Information::first();
        $indicators = Indicators::all();
        $events = Event::all();
        return view('index',compact('cats','products','about','indicators','events','information'));
    }

    public function changeLang($lang)
    {
        $language = Language::where('language', $lang)->exists();
        if ($language) session(['locale' => $lang]);
        return redirect()->back();
    }
    public function mail(Request $request)
    {
//        Mail::to('ilham.pirm@gmail.com')->send(new SendMail($request));
        return dd($request);
    }
}
