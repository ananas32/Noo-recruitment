@extends('layouts.app')

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@section('body')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="content-block">
                <div class="info text-center">{{ $page->title }}</div>
                <div>
                    {!! $page->body !!}
                </div>
                @if(count($hotVacancy))
                    <div class="info">
                        <br>
                            <h3>{{ __('ГОРЯЩИЕ ВАКАНСИИ') }}</h3>
                        <div class="row">
                            @foreach($hotVacancy as $vacancy)
                                <div class="col-md-3 mb-6">
                                    <div>
                                        <a href="/work/{{ $vacancy->slug }}">
                                            <img class="img-responsive img-thumbnail"
                                                 src="{{ $vacancy->getCroppedPhoto('home', 'norm') }}" alt="">
                                        </a>
                                    </div>
                                    <h4 class="text-center"><a href="/work/{{ $vacancy->slug }}">{{ $vacancy->name_vacancy }}</a></h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="info">
                    <br>
                    <h3>{{ __('РАБОТА ПО СТРАНАМ') }}</h3>
                    <div class="row">
                        @if(count($countries))
                            @foreach($countries as $country)
                                <div class="col-md-3">
                                    <div>
                                        <a href="{{ url('/work') }}/?country={{ $country->id }}">
                                            <img class="img-responsive img-thumbnail" src="{{ $country->getCroppedPhoto('avatar', 'norm') }}" alt="{{ $country->name }}">
                                        </a>
                                    </div>
                                    <h4 class="text-center"><a href="/work/?country={{ $country->id }}">{{ $country->name }}</a></h4>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="info">
                    <br>
                    <h3>Каталог вакансий</h3>
                    <div class="list">
                        @if(count($specialisations))
                            @foreach($specialisations as $specialisation)
                                <div class="item">
                                    <h4 class="vacancy-category-title">
                                        <a href="work?specialization={{ $specialisation->id }}">{{ $specialisation->name }}</a>
                                    </h4>
                                    <div class="vacancy-category">
                                        <ul>
                                            @if(count($specialisation->vacancy))
                                                @foreach($specialisation->vacancy as $vacancy)
                                                    <li><a href="/work/{{ $vacancy->slug }}">{{ $vacancy->name_vacancy }}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
