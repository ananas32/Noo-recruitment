@extends('layouts.app')

@section('body')
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-center">
        <a class="p-2 text-muted" href="">Вакансії</a>
        <a class="p-2 text-muted" href="">Візи</a>
        <a class="p-2 text-muted" href="">Новини</a>
        <a class="p-2 text-muted" href="">Контакти</a>
        <a class="p-2 text-muted" href="">Партнери</a>
    </nav>
</div>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Заголовок</h1>
        <p class="lead my-3">Короткий опис про те чим займаємся</p>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">Малєнькі статьї</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Featured post</a>
                </h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]"
                 style="width: 200px; height: 250px;"
                 src="https://www.samcodes.co.uk/project/geometrize-haxe-web/assets/images/xseagull.jpg.pagespeed.ic.iK66EGA15-.jpg"
                 data-holder-rendered="true">
        </div>
    </div>
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Post title</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                 alt="Thumbnail [200x250]" src="" data-holder-rendered="true" style="width: 200px; height: 250px;">
        </div>
    </div>
</div>
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">Регистрационный бланк</h2>
                <hr>
                <p>ПРОСИМ БЛАНК ЗАПОЛНЯТЬ ВНИМАТЕЛЬНО И ЗАГЛАВНЫМИ БУКВАМИ</p>
                <p>ЗАПОЛНЯЯ ЭТОТ БЛАНК ВЫ РЕГИСТРИРУЕТЕСЬ В НАШУ БАЗУ ДАННЫХ ДЛЯ ПРИЕМА НА РАБОТУ. ВАШИ ДАННЫЕ СОХРАНЯЮТСЯ 1 ГОД.</p>
            </div><!-- /.blog-post -->

            <div>
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Ім'я</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Прізвище</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
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
                    <!--<div class="d-block my-3">-->
                    <!--<div class="custom-control custom-radio">-->
                    <!--<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">-->
                    <!--<label class="custom-control-label" for="credit">Credit card</label>-->
                    <!--</div>-->
                    <!--<div class="custom-control custom-radio">-->
                    <!--<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">-->
                    <!--<label class="custom-control-label" for="debit">Debit card</label>-->
                    <!--</div>-->
                    <!--<div class="custom-control custom-radio">-->
                    <!--<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">-->
                    <!--<label class="custom-control-label" for="paypal">Paypal</label>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="row">-->
                    <!--<div class="col-md-6 mb-3">-->
                    <!--<label for="cc-name">Name on card</label>-->
                    <!--<input type="text" class="form-control" id="cc-name" placeholder="" required="">-->
                    <!--<small class="text-muted">Full name as displayed on card</small>-->
                    <!--<div class="invalid-feedback">-->
                    <!--Name on card is required-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6 mb-3">-->
                    <!--<label for="cc-number">Credit card number</label>-->
                    <!--<input type="text" class="form-control" id="cc-number" placeholder="" required="">-->
                    <!--<div class="invalid-feedback">-->
                    <!--Credit card number is required-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="row">-->
                    <!--<div class="col-md-3 mb-3">-->
                    <!--<label for="cc-expiration">Expiration</label>-->
                    <!--<input type="text" class="form-control" id="cc-expiration" placeholder="" required="">-->
                    <!--<div class="invalid-feedback">-->
                    <!--Expiration date required-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-md-3 mb-3">-->
                    <!--<label for="cc-expiration">CVV</label>-->
                    <!--<input type="text" class="form-control" id="cc-cvv" placeholder="" required="">-->
                    <!--<div class="invalid-feedback">-->
                    <!--Security code required-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="mb-3">-->
                    <!--<label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>-->
                    <!--<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">-->
                    <!--</div>-->

                    <!--<div class="row">-->
                    <!--<div class="col-md-5 mb-3">-->
                    <!--<label for="country">Country</label>-->
                    <!--<select class="custom-select d-block w-100" id="country" required="">-->
                    <!--<option value="">Choose...</option>-->
                    <!--<option>United States</option>-->
                    <!--</select>-->
                    <!--<div class="invalid-feedback">-->
                    <!--Please select a valid country.-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 mb-3">-->
                    <!--<label for="state">State</label>-->
                    <!--<select class="custom-select d-block w-100" id="state" required="">-->
                    <!--<option value="">Choose...</option>-->
                    <!--<option>California</option>-->
                    <!--</select>-->
                    <!--<div class="invalid-feedback">-->
                    <!--Please provide a valid state.-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-md-3 mb-3">-->
                    <!--<label for="zip">Zip</label>-->
                    <!--<input type="text" class="form-control" id="zip" placeholder="" required="">-->
                    <!--<div class="invalid-feedback">-->
                    <!--Zip code required.-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Подать заявку</button>
                </form>
            </div>
            <br>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">Про нас</h4>
                <p class="mb-0">Ми надаєм свої послуги для пошуку роботи за кордоном.</p>
                <p>ми гарнтуєм вам офіційну зароблі</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Контакты: </h4>
                <ol class="list-unstyled">
                    <li>E-mail: work.aleh@gmail.com</li>
                    <li>Cím: 8107 Bratislava, Blumentálska 5., SKCím: 9094 Tápszentmiklós, fő u. 38, HU</li>
                    <li>Tel: +380 66 267 35 28</li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->
@stop
