<?php

namespace App\Http\Controllers;

use App\Article;
use App\Page;

class PageController extends Controller
{
    public function work($slug)
    {
        return view('pages.work-slug');
    }

    public function workList($currentPage = 1)
    {
        $page = Page::where('slug', 'work')->firstOrFail();

//        $categoryId = Category::where('slug', 'news')->value('id');
//
//        $limit = (int) \Voyager::setting('news_number_in_list');
//
//        Paginator::currentPageResolver(function() use ($currentPage) {
//            return $currentPage;
//        });
//
//        $news = Article::where('category_id', $categoryId)
//            ->active()
//            ->orderBy('id', 'DESC')
//            ->paginate($limit);
//
//        if (!count($news)) {
//            abort(404);
//        }
//
//        $news->setPath('/news/page/');

        return view('pages.work', compact('page','news'));
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        if($slug == 'contacts')
            return view('pages.contacts', compact('page'));

        return view('pages.static', compact('page'));
    }

}
