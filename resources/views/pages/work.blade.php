@extends('layouts.app')

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content-block">
                    <h3><span>{{ $page->title }}</span></h3>
                    <div class="row">
                        <div class="info">
                            <form class="write-to-us">
                                <div class="row">
                                    <div class="col-md-2 mb-6">
                                        <div class="form-group">
                                            <input type="text" name="name_vacancy"
                                                   class="form-control" placeholder="{{ __('Ключевое слово') }}"
                                                   value="{{ (isset($name_vacancy) ? $name_vacancy : '') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-6">
                                        <div class="form-group">
                                            <select name="country" id="country" class="form-control">
                                                <option value="0">{{ __('Все страны') }}</option>
                                                @if(count($countries))
                                                    @foreach($countries as $item)
                                                        @if(isset($country) && $item->id == $country)
                                                            <option selected="selected" value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-6">
                                        <div class="form-group">
                                            <select name="specialization" class="form-control" id="sel1">
                                                <option value="0">{{ __('Все специализации') }}</option>
                                                <option value="1">Шлюха</option>
                                                <option value="2">Підр</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 mb-6">
                                        <div class="form-group">
                                            <input type="text" name="payment" class="form-control"
                                                   placeholder="{{ __('Зарплата от ') }}$" value="{{ (isset($payment) ? $payment : '' ) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-2 mb-6">
                                        <button type="submit" style="width: 100%" class="btn btn-warning">{{ __('Найти вакансии') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" style="background: #fff; padding: 1%; border: solid 1px #B3B3B3;">
                        <div class="col-xs-12 col-xsm-8 col-sm-8 text-center">
                            <p class="text-uppercase">{{ __('Описание') }}</p>
                        </div>
                        <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify">
                            <p class="text-uppercase text-center">
                                {{ __('Страна') }}
                            </p>
                        </div>
                        <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify">
                            <p class="text-center">{{ __('Зарплата') }}</p>
                        </div>
                    </div>
                    @if(count($vacancies))
                        @foreach($vacancies as $vacancy)
                            <div class="row" style="background: #fff; padding: 1%; border: solid 1px #B3B3B3;">
                                <div class="col-xs-12 col-xsm-3 col-sm-3 text-center">
                                    <a href="/work/">
                                        <img class="img-responsive img-thumbnail" style="max-height: 110px;" src="{{ $vacancy->getCroppedPhoto('home', 'norm') }}" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-xsm-5 col-sm-5 text-justify border-line">
                                    <p class="text-uppercase text-center">
                                        {{ $vacancy->name_vacancy }}
                                    </p>
                                    <table class="table table-striped text-center">
                                        <tbody>
                                        <tr>
                                            <td>{{ __('Статус') }}</td>
                                            <td class="hot">
                                                Горящая
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Пол') }}</td>
                                            <td>{{ ($vacancy->sex) ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Возраст') }}</td>
                                            <td>{{ ($vacancy->age) ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('Опыт') }}</td>
                                            <td>{{ ($vacancy->experience) ?: '-' }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify">
                                    <p class="text-uppercase text-center">
                                        {{ $vacancy->company->country->name }}
                                    </p>
                                </div>
                                <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify border-line">
                                    <p class="text-center">PLN = 2 600 - 3 100</p>
                                    <p class="text-center green-text">UAH ≈ 22 100 - 26 350</p>
                                    <p class="text-center">USD ≈ {{ $vacancy->payment }}</p>
                                    <p class="text-center">EUR ≈ 708 - 845</p>
                                </div>
                            </div>
                        @endforeach
                    @endif

                            {{--@if(!$loop->last)--}}
                                {{--<hr>--}}
                            {{--@endif--}}
                        {{--@endforeach--}}
                </div>
            </div>
        </div>
        <div class="text-center">
            {{ $vacancies->links('content.pagination') }}
        </div>
    </div>
@stop