<?php

namespace App\Http\Controllers;

use View;

class frontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View::make('front.home');
    }


    public function how_it_works()
    {
        return view('front.howitworks');
    }

    public function faq()
    {
        return view('front.faq');
    }

}
