<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front_pages.index');
    }

    public function about()
    {
        return view('front_pages.about');
    }

    public function services()
    {
        return view('front_pages.services');
    }

    public function packages()
    {
        return view('front_pages.packages');
    }

    public function blog()
    {
        return view('front_pages.blog');
    }

    public function contact()
    {
        return view('front_pages.contact');
    }

    public function destination()
    {
        return view('front_pages.destination');
    }

    public function tour()
    {
        return view('front_pages.tour');
    }

    public function booking()
    {
        return view('front_pages.booking');
    }

    public function gallery()
    {
        return view('front_pages.gallery');
    }

    public function guides()
    {
        return view('front_pages.guides');
    }

    public function testimonial()
    {
        return view('front_pages.testimonial');
    }

    public function page404()
    {
        return view('front_pages.404');
    }

    public function login()
    {
        return view('front_pages.login');
    }

    public function register()
    {
        return view('front_pages.register');
    }

    public function myprofile()
    {
        return view('front_pages.myprofile');
    }
}
