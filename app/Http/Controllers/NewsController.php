<?php

namespace App\Http\Controllers;

use App\Article;
use app\Category;
use App\Page;
use Illuminate\Pagination\Paginator;

class NewsController extends Controller
{
//    public function newsList()
//    {
//        $page = Page::where('slug', 'news')->firstOrFail();
//
//        $newsList = Article::activeList()->paginate();
//        dd($newsList);
//        return view('pages.news', compact('page', 'newsList'));
//    }

    public function newsList($currentPage = 1)
    {
        $page = Page::where('slug', 'news')->firstOrFail();

        $categoryId = Category::where('slug', 'news')->value('id');

        $limit = (int) \Voyager::setting('news_number_in_list');

        Paginator::currentPageResolver(function() use ($currentPage) {
            return $currentPage;
        });

        $news = Article::where('category_id', $categoryId)
            ->active()
            ->orderBy('id', 'DESC')
            ->paginate($limit);

        if (!count($news)) {
            abort(404);
        }

        $news->setPath('/news/page/');

        return view('pages.news', compact('page','news'));
    }

}
