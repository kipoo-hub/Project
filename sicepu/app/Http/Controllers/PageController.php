<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function feature()
    {
        return view('pages.feature');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function notFound()
    {
        return view('pages.404');
    }
}