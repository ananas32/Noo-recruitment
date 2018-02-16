@extends('layouts.app')

@section('body')
<div class="blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title">Регистрационный бланк</h2>
        <hr>
        <p>ПРОСИМ БЛАНК ЗАПОЛНЯТЬ ВНИМАТЕЛЬНО И ЗАГЛАВНЫМИ БУКВАМИ</p>
        <p>ЗАПОЛНЯЯ ЭТОТ БЛАНК ВЫ РЕГИСТРИРУЕТЕСЬ В НАШУ БАЗУ ДАННЫХ ДЛЯ ПРИЕМА НА РАБОТУ. ВАШИ ДАННЫЕ СОХРАНЯЮТСЯ 1 ГОД.</p>
    </div><!-- /.blog-post -->
    - возраст
    - образование
    - соответветсвующий стаж или опыт
    - наличие каких то документов(справки о несудимости,медицинская справка и т д)
    .Сколько смен или какой график работы
    Есть ли сверхурочные и как оплачиваются
    Обеспечивают ли жильем и или транспортом
    Диапазон зарплаты в нетто
    Важно - только официальное трудоустройство
    <div>
        <h4 class="mb-3">Billing address</h4>
        <div class="alert alert-success fade in alert-dismissable show" id="success-send" style="margin-top:18px; display: none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
            </button>
            <strong>Success!</strong> This alert box indicates a successful or positive action.
        </div>

        <form class="needs-validation register-form-vacancy">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6 mb-3 form-item">
                    <label for="name">{{ __('Имя') }}</label>
                    <input type="text" class="form-control" id="name" required="">
                    <div class="invalid-feedback error"></div>
                </div>
                <div class="col-md-6 mb-3 form-item">
                    <label for="surname">{{ __('Фамилия') }}</label>
                    <input type="text" class="form-control" id="surname" required="">
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

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block send-register-form-vacancy" type="submit">Подать заявку</button>
        </form>
    </div>
    <br>

</div><!-- /.blog-main -->
@stop