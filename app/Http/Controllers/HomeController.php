<?php

namespace App\Http\Controllers;

use App\Page;
use App\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::where('slug', 'home')->firstOrFail();
        $countries = Country::get();


        return view('pages.home', compact('page', 'countries'));
    }
}
