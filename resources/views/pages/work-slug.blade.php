@extends('layouts.app')

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
                                            <img class="img-responsive img-thumbnail" src="http://noo-recruitment/storage/crop/articles/home_1_norm.jpg" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="font-italic">Назва вакансии</h4>
                                            <p>{{ __('Зарплата') }}: USD = 2uah</p>
                                            <p>{{ __('Страна') }}: Україна</p>
                                            <p>{{ __('Пол') }}: Шлюха</p>
                                            <p>{{ __('Возраст') }}: 18+</p>
                                            <p>{{ __('Опыт роботы') }}: от 2 лет</p>
                                        </div>
                                    </div>
                                    <div class="row" style="padding: 10px">
                                        <table class="table table-striped table-responsive text-justify">
                                            <tbody>
                                            <tr>
                                                <td style="min-width: 130px">Обязаности</td>
                                                <td class="hot">
                                                    123123121
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Условия проживания</td>
                                                <td>Где найшла там и осталася)))
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid autem, eum magni nemo qui reiciendis vero. Assumenda cum et illum impedit iste laborum nam nesciunt non, officiis provident recusandae, ullam!</td>
                                            </tr>
                                            <tr>
                                                <td>Рабочий график</td>
                                                <td>all day, all night</td>
                                            </tr>
                                            <tr>
                                                <td>Зарплата</td>
                                                <td>Ну як вже буде) </td>
                                            </tr>
                                            <tr>
                                                <td>Краткое описание</td>
                                                <td>Говно вакансія) всім рекомендую</td>
                                            </tr>
                                            </tbody>
                                            <b>Обязанности</b> В рабочие обязанности входит упаковка упаковок со станками в коробки; контроль качества произведенной продукции
                                            <b>Рабочие условия</b> Медицинское обследование: 80 злотых – расход работника (анализы не берут, проверка зрения, давления)
                                            <b>Условия трудоустройства</b> Трудоустройство возможно по рабочей визе (остаток по визе от 3-х месяцев) и биометрическому паспорту
                                            <b>Условия проживания</b> Жилье предоставляет работодатель (работник оплачивает комм.услуги – 200 з./мес.)
                                            <b>Рабочий график</b> 8-12 ч./день, 6 дней в неделю (одна неделя ночная, одна – дневная). 200-240 часов/день. 200-240 часов в месяц
                                            <b>Зарплата</b> 11,7 зл./час (если работник моложе 25 лет); 10,07 зл./час (если работник старше 25 лет)
                                        </table>
                                    </div>
                                    <a href="" class="btn btn-info">{{ __('Отправить резюме') }}</a>
                                </aside>
                                <aside class="col-md-4 blog-sidebar">

                                    <div class="p-3">
                                        <div class="alert alert-success fade in alert-dismissable" id="success-send" style="margin-top:18px; display: block">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true" style="font-size:20px">×</span>
                                            </button>
                                            <strong>{{ __('Ура') }}!</strong> {{ __('Вопрос прийнят мы вам ответим') }}
                                        </div>
                                        <h4 class="font-italic">{{ __('Спроси нас о вакансии') }}: </h4>
                                        <form class="write-to-us question-vacancy" method="POST">
                                            {{ csrf_field() }}
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