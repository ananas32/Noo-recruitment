<?php

namespace App\Http\Controllers;

use App\Article;
use App\Page;

class PageController extends Controller
{
    public function home()
    {
//        $home = Page::where('slug', 'home')->firstOrFail();
//
//        $freshArticle = Article::freshMain(0, 5)->get();
//
//        $data = [
//            'styles'  => config('resources.home.styles'),
//            'scripts' => config('resources.home.scripts'),
//            'freshArticle' => $freshArticle
//        ];
//
//        return view('pages.home', $data);
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        if($slug == 'contacts')
            return view('pages.contacts', compact('page'));

        return view('pages.static', compact('page'));
    }

}
