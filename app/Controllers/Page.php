<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
    public function device()
    {
        return view('pages/device');
    }
    public function contact()
    {
        return view('pages/contact');
    }
    
}
