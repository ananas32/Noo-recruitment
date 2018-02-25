@extends('layouts.app')

@section('meta_title', $vacancy->name_vacancy)
{{--@section('meta_description', $page->meta_description)--}}
{{--@section('meta_keywords', $page->meta_keywords)--}}

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content-block">
                    <h3><span></span></h3>
                    <div class="row">
                        <div class="info">
                            <div class="row">

                                <aside class="col-md-8 blog-sidebar">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-responsive img-thumbnail" src="{{ $vacancy->getCroppedPhoto('home', 'norm') }}" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="font-italic">{{ $vacancy->name_vacancy }}</h4>
                                            <p>{{ __('Зарплата') }}: USD = {{ $vacancy->payment }}</p>
                                            <p>{{ __('Страна') }}: {{ $vacancy->company->country->name }}</p>
                                            <p>{{ __('Пол') }}: {{ ($vacancy->sex) ?: '-' }}</p>
                                            <p>{{ __('Возраст') }}: {{ ($vacancy->age) ?: '-' }}</p>
                                            <p>{{ __('Опыт роботы') }}: {{ ($vacancy->experience) ?: '-' }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="padding: 10px">
                                        <table class="table table-striped table-responsive text-justify">
                                            <tbody>
                                            <tr>
                                                <td style="min-width: 130px">{{ __('Обязаности') }}</td>
                                                <td class="hot">
                                                    {{ $vacancy->responsibility }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Условия проживания') }}</td>
                                                <td>
                                                    {{ $vacancy->conditions }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Рабочий график') }}</td>
                                                <td>{{ $vacancy->work_schedule }}</td>
                                            </tr>
                                            <tr>
                                                <td>Зарплата</td>
                                                <td>{{ $vacancy->payment }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Краткое описание') }}</td>
                                                <td>{{ $vacancy->description }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="{{ route('add-resume') }}?vacancy_id={{ $vacancy->id }}" class="btn btn-info">{{ __('Отправить резюме') }}</a>
                                </aside>
                                <aside class="col-md-4 blog-sidebar">

                                    <div class="p-3">
                                        <div class="alert alert-success fade in alert-dismissable" id="success-send" style="margin-top:18px; display: none">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true" style="font-size:20px">×</span>
                                            </button>
                                            <strong>{{ __('Ура') }}!</strong> {{ __('Вопрос прийнят мы вам ответим') }}
                                        </div>
                                        <h4 class="font-italic">{{ __('Спроси нас о вакансии') }}: </h4>
                                        <form class="write-to-us question-vacancy" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="vacancy_id" value="{{ $vacancy->id }}">
                                            <div class="mb-6">
                                                <label for="name">{{ __('Ваше имя') }}</label>
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" id="name">
                                                    <div class="red-text error"></div>
                                                </div>
                                            </div>
                                            <div class="mb-6">
                                                <label for="contact">{{ __('Номер телефона, ел. почта, skype') }}</label>
                                                <div class="form-group">
                                                    <input type="text" name="contact" class="form-control" id="contact">
                                                    <div class="red-text error"></div>
                                                </div>
                                            </div>
                                            <div class="mb-6">
                                                <div class="form-group">
                                                    <label for="question">{{ __('Ваш вопрос') }}</label>
                                                    <textarea class="form-control" id="question" rows="4" required="required" name="question" cols="50"></textarea>
                                                    <div class="red-text error"></div>
                                                </div>
                                            </div>
                                            <div class="mb-6 text-center">
                                                <button class="btn btn-info send-question-form-vacancy" type="submit">{{ __('Задать вопрос') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </aside><!-- /.blog-sidebar -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop