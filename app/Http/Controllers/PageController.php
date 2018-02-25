<?php

namespace App\Http\Controllers;

use App\Country;
use App\Page;
use App\Specialization;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class PageController extends Controller
{
    public function work($slug)
    {
        $vacancy = Vacancy::where('slug', $slug)->firstOrFail();
        return view('pages.work-slug', compact('vacancy'));
    }

    public function workList(Request $request, $currentPage = 1)
    {
        $formParam  = $request->all();
        $countries = Country::get();
        $page = Page::where('slug', 'work')->firstOrFail();
        $specializations = Specialization::get();

        $query = Vacancy::join('companies', 'companies.id', '=', 'vacancies.field_id');

        if ($request->country) {
            $query = $query->where('companies.country_id', $request->country);
        }

        if($request->payment) {
            $query = $query->where('payment', '>', $request->payment);
        }

        if($request->name_vacancy) {
            $query = $query->whereTranslation('name_vacancy', 'LIKE', "%$request->name_vacancy%");
        }

        if($request->specialization) {
            $query = $query->where('specialization_id', $request->specialization);
        }

        Paginator::currentPageResolver(function() use ($currentPage) {
            return $currentPage;
        });

        $vacancies = $query
            ->select('vacancies.*')
            ->orderBy('vacancies.id', 'DESC')
            ->paginate(2);

        $vacancies->setPath('/work/page/');

        $data = [
            'page' => $page,
            'vacancies' => $vacancies,
            'countries' => $countries,
            'specializations' => $specializations
        ];
//        dd($formParam);
        $data = array_merge($data, $formParam);

        return view('pages.work', $data);
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        if($slug == 'contacts')
            return view('pages.contacts', compact('page'));

        return view('pages.static', compact('page'));
    }

}
