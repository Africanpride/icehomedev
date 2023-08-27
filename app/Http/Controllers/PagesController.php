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

        $sliderItems = [
            [
                'topic' => 'Explore Our Array of Project Showcases',
                'explanation' => 'Embark on a journey through our diverse project portfolio, a testament to our accomplishments, expertise, and unwavering commitment to excellence across various domains.',
                'image' => 'images/services/service015.jpg',
                'link' => 'projects',
                'color' => 'yellow'
            ],
            [
                'topic' => 'Funding solutions for construction projects',
                'explanation' => 'With expertise in project financing, equity investment, and debt financing, we offer flexible and customized options to bring projects to life.  Our aim is to assist clients in achieving their visions by providing tailored funding solutions.',
                'explanation',
                'image' => 'images/services/service046.jpg',
                'link' => 'services',
                'color' => 'green'
            ],

        ];
        $sliderItems = collect($sliderItems);

        return view('home', compact(['projectFields', 'sliderItems']));
    }
    public function maintenance()
    {
        return view('maintenance');
    }
    public function about()
    {
        return view('about');
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
