<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class FrontController extends Controller
{



    public function changeLanguage($lang = null)
    {
        $language = Language::where('code', $lang)->first();
        
        if (!$language) $lang = 'en';

        session()->put('lang', $lang);
        return redirect()->back();
    }



    public function index()
    {
        // \Log::info(App::getLocale());
      
        return view('main.home');
    }

    public function about()
    {
        return view('main.about');
    }

    public function services()
    {
        return view('main.services');
    }

    public function contact()
    {
        return view('main.contact');
    }
    public function faq()
    {
        return view('main.faq');
    }
   
    public function tutorial()
    {
        return view('main.tutorial');
    }

    public function team()
    {
        return view('main.team');
    }
    public function help_center()
    {
        return view('main.help-center');
    }

    public function news()
    {
        return view('main.news');
    }



}
