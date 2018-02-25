<?php

namespace App\Http\Controllers;

use App\Page;
use App\Country;
use App\Specialization;
use App\Vacancy;
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
        $hotVacancy = Vacancy::where('status_id', 1)->orderBy('id', 'DESC')->take(4)->get();
        $countries = Country::get();
        $specialisation = Specialization::get();

        return view('pages.home', compact('page', 'countries', 'hotVacancy', 'specialisation'));
    }
}
