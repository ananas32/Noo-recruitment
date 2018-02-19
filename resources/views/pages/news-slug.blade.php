@extends('layouts.app')

@section('meta_title', $news->meta_title)
@section('meta_description', $news->meta_description)
@section('meta_keywords', $news->meta_keywords)

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content-block">
                    <h2 class="text-center">{{ $news->title }}</h2>
                    <div class="row text-justify"  style="padding: 10px">
                        <div class="row">
                            <div class="text-uppercase">
                                <strong class="left-line">{{ $news->title }}</strong>
                            </div>
                            <p>
                                <time datetime="{{ $news->created_at->format('Y-m-d H:i') }}" style="margin-right: 10px">
                                    {{ $news->created_at->format('Y-m-d H:i') }}
                                </time>
                                Переглядів: <b>{{ $news->views }}</b>
                                <span style="float: right"><a href="{{ url()->previous() }}" class="link-news">назад</a></span>
                            </p>
                            <hr style="border: 1px solid #DFDFDF; margin: 0; padding: 0">
                            <div>
                                <p style="max-width: 600px">
                                    <img class="img-responsive img-thumbnail minimized" style="float: left; margin: 0 10px 7px 0;" src="{{ $news->getCroppedPhoto('home', 'norm') }}" alt="{{ $news->text_alt }}">
                                </p>
                                <p class="">{!! $news->body !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop