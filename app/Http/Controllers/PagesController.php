<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $projectFields = [
            'Industrial Projeicts',
            'Green energy',
            'Flair Gas recovery',
            'Aviation Projects',
            'Bridges',
            'Office Buildings',
            'Educational Projects',
            'Low Rise Residential',
            'High Rise Residential',
            'Casinos',
            'Resorts',
            'Earth Moving',
            'Concrete Pole Production',
            'Stone Crushing',
            'Water Pipes Production',
            'Precast Production',
            'Solar Panel Production',
        ];

        return view('home', compact('projectFields'));
    }
    public function maintenance()
    {
        return view('maintenance');
    }
    public function about()
    {
        return view('about');
    }
    public function products()
    {
        return view('products.index');
    }
    public function projects()
    {
        return view('projects.index');
    }
    public function services()
    {
        return view('services.index');
    }

    public function contact()
    {
        return view('contact');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function terms()
    {
        return view('terms');
    }
}
