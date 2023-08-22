<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }
    public function maintenance() {
        return view('maintenance');
    }
    public function about() {
        return view('about');
    }
    public function products() {
        return view('products.index');
    }
    public function projects() {
        return view('projects.index');
    }
    public function services() {
        return view('services.index');
    }

    public function contact() {
        return view('contact');
    }
    public function privacy() {
        return view('privacy');
    }
    public function terms() {
        return view('terms');
    }
}
