@extends('layouts.app')

@section('body')
<div class="blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title">Регистрационный бланк</h2>
        <hr>
        <p class="red-text">Просим внемательно заполнять форму</p>
        <p>Заполняя это бланк вы регистрируетесь в нашу базу данных для приема на работу. Ваши данные сохраняються 1 год.</p>
        <p><b>Важно</b> - только официальное трудоустройство</p>
    </div>
    {{--- возраст--}}
    {{--- образование--}}
    {{--- соответветсвующий стаж или опыт--}}
    {{--- наличие каких то документов(справки о несудимости,медицинская справка и т д)--}}
    {{--.Сколько смен или какой график работы--}}
    {{--Есть ли сверхурочные и как оплачиваются--}}
    {{--Обеспечивают ли жильем и или транспортом--}}
    {{--Диапазон зарплаты в нетто--}}

    <div>
        <h4 class="mb-3">{{ __('Резюме') }}</h4>
        <div class="alert alert-success fade in alert-dismissable show" id="success-send" style="margin-top:18px; display: none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
            </button>
            <strong>{{ __('Ура') }}!</strong> {{ __('Форма успешно отправлена') }}
        </div>

        <div class="alert alert-danger fade in alert-dismissable show" id="danger-send" style="display: none">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            <strong>{{ __('Внимание') }}!</strong> {{ __('Не все поля заполнены коректно') }}.
        </div>

        <form class="needs-validation register-form-vacancy">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6 mb-3 form-item">
                    <label for="name">{{ __('Имя') }}</label>
                    <input type="text" class="form-control" name="name" id="name" required="">
                    <div class="invalid-feedback error"></div>
                </div>
                <div class="col-md-6 mb-3 form-item">
                    <label for="surname">{{ __('Фамилия') }}</label>
                    <input type="text" class="form-control" name="surname" id="surname" required="">
                    <div class="invalid-feedback error">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">По-батькові</label>
                    <input type="text" class="form-control" id="фіва" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Роки:</label>
                    <input type="text" class="form-control" id="фівавфіаві" placeholder="" value="" required="">
                    <div class="invalid-feedback" style="display: block">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="mb-3">
                <label for="comment">Уровень образования</label>
                <div class="input-group">
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="comment">Спецыальность (квалификация)</label>
                <div class="input-group">
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="comment">стаж или опыт работы</label>
                <div class="input-group">
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="comment">Какой график работы вам удобный?</label>
                <div class="input-group">
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="address">Название учереждения</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Водительские права (A,B,C,D) укажите через кому</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Водительские права на погрузчик:</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Какими владеете языками</h4>
            <div>
                Английский:
                <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
            </div>
            <div>
                Английский:
                <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
            </div>

            <div class="mb-3">
                <label for="comment">Другие языки</label>
                <div class="input-group">
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <label class="btn btn-default btn-file">Загрузите вашие документы</label>
                <div class="input-group">
                    <input type="file" value="Справки" style="">
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Желаемый уровень ЗП в $</label>
                <input type="text" class="form-control" id="address" placeholder="Все деньги" required="">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block send-register-form-vacancy" type="submit">Подать заявку</button>
        </form>
    </div>
    <br>

</div><!-- /.blog-main -->
@stop