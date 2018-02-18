@if(Auth::check())
    <div class="container" style="background: #2D322F">
        <div class="col-sm-6"><a href="/admin" class="btn btn-warning">admin</a></div>
        <div class="col-sm-6" style="text-align: right">
            <a href="{{ route('logout') }}" class="btn btn-warning"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                logout
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
@endif
<section class="logo-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="logo">
                    <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                    <a href="/" class="title">
                        <h1>AntHill Hungary</h1>
                        <h2>{{ trans('header.system_search') }}</h2>
                    </a>
                    <div class="menu-bars">
                        <a href="#" onclick="showHide('main-nav', 'menu-bars')">
                            <i class="fa fa-bars" id="menu-bars" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 text-center">
                <p style="padding-top: 2%">067 436 87 46</p>
                <p>+380 66 267 35 28</p>
            </div>
            <div class="hidden-xs hidden-xsm hidden-sm col-md-4">
                <div class="cite text-right" style="padding-top: 2%">
                    <div style="padding-bottom: 1%">
                        <a class="btn btn-default header-button" href="{{ route('add-vacancy') }}">{{ __('Я роботодатєль') }}</a>
                        <a class="btn btn-danger header-button" href="{{ route('add-resume') }}">{{ __('Отправить резюме') }}</a>
                    </div>
                    <div>
                        <a class="btn btn-success header-button" href="">{{ __('Обратный звонок') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <!--<div class="container">-->
    <!--<div class="row">-->
    <!--<div class="col-xs-12">-->
    <nav class="main-nav" id="main-nav">
        <ul>
            @foreach($headMenu as $link)
                <li><a href="/{{ $link->slug }}">{{ $link->title }}</a></li>
            @endforeach
            <li class="region" id="region">
                <ul>
                    @if(isset($regions))
                        @foreach($regions as $region)
                            @if(Session::get('region') == $region->name_region_en)
                                <li><a href="#" class="active">{{ $region->$locale_region }}</a></li>
                            @else
                                <li><a href="/region/{{ $region->name_region_en }}">{{ $region->$locale_region }}</a></li>
                            @endif
                        @endforeach
                    @endif
                    {{--<li><a href="#">Вінницька</a></li>--}}
                    {{--<li><a href="#">Волинська</a></li>--}}
                    {{--<li><a href="#">Дніпропетровська</a></li>--}}
                    {{--<li><a href="#">Донецька</a></li>--}}
                    {{--<li><a href="#">Житомирська</a></li>--}}
                    {{--<li><a href="#">Закарпатська</a></li>--}}
                    {{--<li><a href="#">Запорізька</a></li>--}}
                    {{--<li><a href="#">Івано-Франківська</a></li>--}}
                    {{--<li><a href="#" class="active">Київська</a></li>--}}
                    {{--<li><a href="#">Кіровоградська</a></li>--}}
                    {{--<li><a href="#">Луганська</a></li>--}}
                    {{--<li><a href="#">Львівська</a></li>--}}
                    {{--<li><a href="#">Миколаївська</a></li>--}}
                    {{--<li><a href="#">Одеська</a></li>--}}
                    {{--<li><a href="#">Полтавська</a></li>--}}
                    {{--<li><a href="#">Рівненська</a></li>--}}
                    {{--<li><a href="#">Сумська</a></li>--}}
                    {{--<li><a href="#">Тернопільська</a></li>--}}
                    {{--<li><a href="#">Харківська</a></li>--}}
                    {{--<li><a href="#">Херсонська</a></li>--}}
                    {{--<li><a href="#">Хмельницька</a></li>--}}
                    {{--<li><a href="#">Черкаська</a></li>--}}
                    {{--<li><a href="#">Чернівецька</a></li>--}}
                    {{--<li><a href="#">Чернігівська</a></li>--}}
                </ul>
            </li>
            <li class="languages">
                <a href="#" class="set-language"><img src="{{ asset("assets/img/icons/".Session::get('locale').".png") }}" alt=""></a>
                <div class="languages-hidden">
                    @if(isset($codeLanguage))
                        @foreach($codeLanguage as $item)
                            @if($item != Session::get('locale'))
                                <a href="/locale/{!! $item !!}"><img src="{{ asset("assets/img/icons/".$item.".png") }}" alt=""></a>
                            @endif
                        @endforeach
                    @endif
                </div>
            </li>
        </ul>
    </nav>

    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
</section>