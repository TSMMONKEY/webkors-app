<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Page;

class pageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
    public function thank_you()
    {
        return view('pages.thank-you');
    }

    public function blog()
    {
        return view('blog.main');
    }
}
