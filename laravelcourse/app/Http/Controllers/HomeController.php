<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Home Page - Online Store';

        return view('home.index')->with('viewData', $viewData);
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is an about page ...';
        $viewData['author'] = 'Developed by: Sara Cortes';

        return view('home.about')->with('viewData', $viewData);

    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact - Online Store';
        $viewData['subtitle'] = 'Contact';
        $viewData['email'] = 'info@gmail.com';
        $viewData['address'] = 'Cr 13 No. 90-36 OF 502';
        $viewData['phoneNumber'] = '+57 123 456 789';

        return view('home.contact')->with('viewData', $viewData);
    }
}
