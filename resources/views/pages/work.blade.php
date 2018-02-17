@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content-block">
                    <h3><span>{{ $page->title }}</span></h3>
                    {{--col-xs-12 col-xsm-6 col-sm-3--}}
                        {{--@foreach($news as $item)--}}
                            <div class="row" style="background: #fff; padding: 1%; border: solid 1px #B3B3B3;">
                                <div class="col-xs-12 col-xsm-8 col-sm-8 text-center">
                                    <p class="text-uppercase">Описание</p>
                                </div>
                                <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify">
                                    <p class="text-uppercase text-center">
                                        Страна
                                    </p>
                                </div>
                                <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify">
                                    <p class="text-center">ЗП</p>
                                </div>
                            </div>
                            <div class="row" style="background: #fff; padding: 1%; border: solid 1px #B3B3B3;">
                                <div class="col-xs-12 col-xsm-3 col-sm-3 text-center">
                                    <a href="/work/">
                                        <img class="img-responsive img-thumbnail" style="max-height: 110px;" src="http://work-garant.com/wp-content/uploads/2018/02/rabotnik-na-komplektatsiyu-avtomobilnyh-rulej-500x300.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-xsm-5 col-sm-5 text-justify border-line">
                                    <p class="text-uppercase text-center">
                                        РАБОТНИК НА КОМПЛЕКТАЦИЮ АВТОМОБИЛЬНЫХ РУЛЕЙ
                                    </p>
                                    <table class="table table-striped text-center">
                                        <tbody>
                                        <tr>
                                            <td>Статус</td>
                                            <td class="hot">
                                                Горящая
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Пол</td>
                                            <td>мужчины и женщины</td>
                                        </tr>
                                        <tr>
                                            <td>Возраст</td>
                                            <td>18 - 50</td>
                                        </tr>
                                        <tr>
                                            <td>Опыт</td>
                                            <td>без опыта работы</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify">
                                    <p class="text-uppercase text-center">
                                        Польща
                                    </p>
                                </div>
                                <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify border-line">
                                    <p class="text-center">PLN = 2 600 - 3 100</p>
                                    <p class="text-center green-text">UAH ≈ 22 100 - 26 350</p>
                                    <p class="text-center">USD ≈ 834 - 994</p>
                                    <p class="text-center">EUR ≈ 708 - 845</p>
                                </div>
                            </div>
                    <div class="row" style="background: #fff; padding: 1%; border: solid 1px #B3B3B3;">
                        <div class="col-xs-12 col-xsm-3 col-sm-3 text-center">
                            <a href="/work/">
                                <img class="img-responsive img-thumbnail" style="max-height: 110px;" src="http://work-garant.com/wp-content/uploads/2018/02/rabotnik-na-komplektatsiyu-avtomobilnyh-rulej-500x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12 col-xsm-5 col-sm-5 text-justify border-line">
                            <p class="text-uppercase text-center">
                                РАБОТНИК НА КОМПЛЕКТАЦИЮ АВТОМОБИЛЬНЫХ РУЛЕЙ
                            </p>
                            <table class="table table-striped text-center">
                                <tbody>
                                <tr>
                                    <td>Статус</td>
                                    <td class="hot">
                                        Горящая
                                    </td>
                                </tr>
                                <tr>
                                    <td>Пол</td>
                                    <td>мужчины и женщины</td>
                                </tr>
                                <tr>
                                    <td>Возраст</td>
                                    <td>18 - 50</td>
                                </tr>
                                <tr>
                                    <td>Опыт</td>
                                    <td>без опыта работы</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify">
                            <p class="text-uppercase text-center">
                                Польща
                            </p>
                        </div>
                        <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify border-line">
                            <p class="text-center">PLN = 2 600 - 3 100</p>
                            <p class="text-center green-text">UAH ≈ 22 100 - 26 350</p>
                            <p class="text-center">USD ≈ 834 - 994</p>
                            <p class="text-center">EUR ≈ 708 - 845</p>
                        </div>
                    </div><div class="row" style="background: #fff; padding: 1%; border: solid 1px #B3B3B3;">
                        <div class="col-xs-12 col-xsm-3 col-sm-3 text-center">
                            <a href="/work/">
                                <img class="img-responsive img-thumbnail" style="max-height: 110px;" src="http://work-garant.com/wp-content/uploads/2018/02/rabotnik-na-komplektatsiyu-avtomobilnyh-rulej-500x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12 col-xsm-5 col-sm-5 text-justify border-line">
                            <p class="text-uppercase text-center">
                                РАБОТНИК НА КОМПЛЕКТАЦИЮ АВТОМОБИЛЬНЫХ РУЛЕЙ
                            </p>
                            <table class="table table-striped text-center">
                                <tbody>
                                <tr>
                                    <td>Статус</td>
                                    <td class="hot">
                                        Горящая
                                    </td>
                                </tr>
                                <tr>
                                    <td>Пол</td>
                                    <td>мужчины и женщины</td>
                                </tr>
                                <tr>
                                    <td>Возраст</td>
                                    <td>18 - 50</td>
                                </tr>
                                <tr>
                                    <td>Опыт</td>
                                    <td>без опыта работы</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify">
                            <p class="text-uppercase text-center">
                                Польща
                            </p>
                        </div>
                        <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify border-line">
                            <p class="text-center">PLN = 2 600 - 3 100</p>
                            <p class="text-center green-text">UAH ≈ 22 100 - 26 350</p>
                            <p class="text-center">USD ≈ 834 - 994</p>
                            <p class="text-center">EUR ≈ 708 - 845</p>
                        </div>
                    </div><div class="row" style="background: #fff; padding: 1%; border: solid 1px #B3B3B3;">
                        <div class="col-xs-12 col-xsm-3 col-sm-3 text-center">
                            <a href="/work/">
                                <img class="img-responsive img-thumbnail" style="max-height: 110px;" src="http://work-garant.com/wp-content/uploads/2018/02/rabotnik-na-komplektatsiyu-avtomobilnyh-rulej-500x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12 col-xsm-5 col-sm-5 text-justify border-line">
                            <p class="text-uppercase text-center">
                                РАБОТНИК НА КОМПЛЕКТАЦИЮ АВТОМОБИЛЬНЫХ РУЛЕЙ
                            </p>
                            <table class="table table-striped text-center">
                                <tbody>
                                <tr>
                                    <td>Статус</td>
                                    <td class="hot">
                                        Горящая
                                    </td>
                                </tr>
                                <tr>
                                    <td>Пол</td>
                                    <td>мужчины и женщины</td>
                                </tr>
                                <tr>
                                    <td>Возраст</td>
                                    <td>18 - 50</td>
                                </tr>
                                <tr>
                                    <td>Опыт</td>
                                    <td>без опыта работы</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify">
                            <p class="text-uppercase text-center">
                                Польща
                            </p>
                        </div>
                        <div class="col-xs-12 col-xsm-2 col-sm-2 text-justify border-line">
                            <p class="text-center">PLN = 2 600 - 3 100</p>
                            <p class="text-center green-text">UAH ≈ 22 100 - 26 350</p>
                            <p class="text-center">USD ≈ 834 - 994</p>
                            <p class="text-center">EUR ≈ 708 - 845</p>
                        </div>
                    </div>
                            {{--@if(!$loop->last)--}}
                                {{--<hr>--}}
                            {{--@endif--}}
                        {{--@endforeach--}}
                </div>
            </div>
        </div>
        <div class="text-center">
{{--            {{ $news->links('content.pagination') }}--}}
        </div>
    </div>
@stop