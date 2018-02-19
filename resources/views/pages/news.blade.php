@extends('layouts.app')

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@section('meta')
    @if (Request::is('*/page/*'))
        <link rel="canonical" href="{{ url( str_copy_before(Request::path(), '/page/') ) }}" />
    @else
        <link rel="canonical" href="{{ url(Request::path()) }}" />
    @endif

    @if ($news->previousPageUrl())
        <link rel="prev" href="{{ rewrite_page_url($news->previousPageUrl()) }}">
    @endif
    @if ($news->nextPageUrl())
        <link rel="next" href="{{ rewrite_page_url($news->nextPageUrl()) }}">
    @endif
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content-block">
                    <h3><span>{{ $page->title }}</span></h3>
                    {{--col-xs-12 col-xsm-6 col-sm-3--}}
                        @foreach($news as $item)
                            <div class="row">
                                <div class="col-xs-12 col-xsm-5 col-sm-5">
                                    <a href="/news/{{ $item->slug }}">
                                        <img class="img-responsive img-thumbnail" src="{{ $item->getCroppedPhoto('home', 'norm') }}" alt="{{ $item->photo_alt }}">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-xsm-7 col-sm-7 text-justify">
                                    <p class="text-uppercase">
                                        <a href="/news/{{ $item->slug }}" class="link-news">
                                            <strong class="left-line">{{ $item->title }}</strong>
                                        </a>
                                    </p>
                                    <p>
                                        <time datetime="{{ $item->created_at->format('Y-m-d H:i') }}" style="margin-right: 10px">
                                            {{ $item->created_at->format('Y-m-d H:i') }}
                                        </time>
                                    </p>
                                    {{ $item->incision }}
                                    <div class="text-right">
                                        <a href="/news/{{ $item->slug }}" class="btn btn-warning">more</a>
                                    </div>
                                </div>
                            </div>
                            @if(!$loop->last)
                                <hr>
                            @endif
                        @endforeach
                </div>
            </div>
        </div>
        <div class="text-center">
            {{ $news->links('content.pagination') }}
        </div>
    </div>
@stop