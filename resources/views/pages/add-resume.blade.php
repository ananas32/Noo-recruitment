@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content-block">
                    <h3><span>Регистрационный бланк</span></h3>
                    <hr>
                    <h3 class="red-text">Просим внемательно заполнять форму</h3>
                    <p>Заполняя это бланк вы регистрируетесь в нашу базу данных для приема на работу. Ваши данные сохраняються 1 год.</p>
                    <p><b>Важно</b> - только официальное трудоустройство</p>
                    <div class="info">
                        <div>
                            <h4 class="mb-3 text-center"><b>{{ __('Ваше резюме') }}</b></h4>
                            <div class="alert alert-success fade in alert-dismissable" id="success-send" style="margin-top:18px; display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="font-size:20px">×</span>
                                </button>
                                <strong>{{ __('Ура') }}!</strong> {{ __('Форма успешно отправлена') }}
                            </div>

                            <div class="alert alert-danger fade in alert-dismissable" id="danger-send" style="display: none">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                                <strong>{{ __('Внимание') }}!</strong> {{ __('Не все поля заполнены коректно') }}.
                            </div>

                            <form class="write-to-us register-form-vacancy">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name">{{ __('Имя') }}</label>
                                        <input type="text" class="form-control" name="name" id="name" required="">
                                        <div class="red-text error"></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="surname">{{ __('Фамилия') }}</label>
                                        <input type="text" class="form-control" name="surname" id="surname" required="">
                                        <div class="red-text error"></div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="middle_name">{{ __('По-батькові') }}</label>
                                        <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="" required="">
                                        <div class="red-text error"></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="age">{{ __('Года') }}:</label>
                                        <input type="text" class="form-control" name="age" id="age" placeholder="" required="">
                                        <div class="red-text error"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                                            <div class="red-text error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="mb-3">
                                            <label for="drive_license">Водительские права (A,B,C,D) укажите через кому</label>
                                            <input type="text" class="form-control" name="drive_license" id="drive_license" required="">
                                            <div class="red-text error"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="message">{{ __('Уровень образования') }}</label>
                                            <textarea class="form-control" id="exampleInputText" rows="4" placeholder="Your question or comment" required="required" name="message" cols="50"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="message">{{ __('Спецыальность (квалификация)') }}</label>
                                            <textarea class="form-control" id="exampleInputText" rows="4" placeholder="Your question or comment" required="required" name="message" cols="50"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="message">{{ __('Cтаж или опыт работы') }}</label>
                                            <textarea class="form-control" id="exampleInputText" rows="4" placeholder="Your question or comment" required="required" name="message" cols="50"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="message">{{ __('Какой график работы вам удобный') }}?</label>
                                            <textarea class="form-control" id="exampleInputText" rows="4" placeholder="Your question or comment" required="required" name="message" cols="50"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <label class="custom-control-label" for="same-address">{{ __('Водительские права на погрузчик') }}</label>
                                </div>
                                <hr class="mb-4">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h4 class="mb-3">Какими владеете языками</h4>

                                        <div>
                                            {{ __('Английский') }}:
                                            <label class="checkbox-inline"><input name="english" type="radio" value="">{{ __('Начальный') }}</label>
                                            <label class="checkbox-inline"><input name="english" type="radio" value="">{{ __('Средний') }}</label>
                                            <label class="checkbox-inline"><input name="english" type="radio" value="">{{ __('Высший') }}</label>
                                            <label class="checkbox-inline"><input name="english" type="radio" value="">{{ __('Переговорный') }}</label>
                                        </div>
                                        <div>
                                            {{ __('Немецкий') }}:
                                            <label class="checkbox-inline"><input name="de" type="radio" value="">{{ __('Начальный') }}</label>
                                            <label class="checkbox-inline"><input name="de" type="radio" value="">{{ __('Средний') }}</label>
                                            <label class="checkbox-inline"><input name="de" type="radio" value="">{{ __('Высший') }}</label>
                                            <label class="checkbox-inline"><input name="de" type="radio" value="">{{ __('Переговорный') }}</label>
                                        </div>
                                        <div>
                                            {{ __('Венгерский') }}:
                                            <label class="checkbox-inline"><input name="ve" type="radio" value="">{{ __('Начальный') }}</label>
                                            <label class="checkbox-inline"><input name="ve" type="radio" value="">{{ __('Средний') }}</label>
                                            <label class="checkbox-inline"><input name="ve" type="radio" value="">{{ __('Высший') }}</label>
                                            <label class="checkbox-inline"><input name="ve" type="radio" value="">{{ __('Переговорный') }}</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="message">{{ __('Другие языки') }}</label>
                                            <textarea class="form-control" id="exampleInputText" rows="4" placeholder="Your question or comment" required="required" name="message" cols="50"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label>{{ __('Загрузите вашие документы') }}</label>
                                            <div class="input-group input-file" name="Fichier1">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default btn-choose" type="button">{{ __('Выберите') }}</button>
                                            </span>
                                            <input type="text" class="form-control" placeholder='{{ __('Выберите файл') }}...' />
                                            <span class="input-group-btn">
                                                <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="mb-3">
                                            <label for="address">{{ __('Желаемый уровень ЗП в') }} $</label>
                                            <input type="text" class="form-control" id="address" placeholder="Все деньги" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-info send-register-form-vacancy" type="submit">Подать заявку</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop