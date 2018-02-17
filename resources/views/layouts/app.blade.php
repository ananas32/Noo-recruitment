<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('header.head')
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


</head>
<body>
<header id="header" class="">
    @include('header.header')
</header>

<section>
    @yield('body')
</section>

<script src="{{ asset('js/app.js') }}"></script>

@include('footer.footer')
@include('footer.foot_script')
</body>
</html>
{{--<!DOCTYPE html>--}}
{{--<!-- saved from url=(0045)http://bootstrap-4.ru/docs/4.0/examples/blog/ -->--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">--}}

    {{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
    {{--<meta name="description"--}}
          {{--content="Пример на bootstrap 4: Блог - двухколоночный макет блога с пользовательской навигацией, заголовком и содержанием.">--}}
    {{--<meta name="author" content="">--}}
    {{--<link rel="icon" href="http://bootstrap-4.ru/favicon.ico">--}}

    {{--<title>Form</title>--}}

    {{--<!-- Bootstrap core CSS -->--}}
    {{--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}

    {{--<!-- Custom styles for this template -->--}}
    {{--<link href="{{ asset('css/css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/blog.css') }}" rel="stylesheet">--}}
{{--</head>--}}

{{--<body>--}}
{{--<div class="container">--}}
    {{--<header class="blog-header py-3">--}}
        {{--<div class="row flex-nowrap justify-content-between align-items-center">--}}
            {{--<div class="col-4 pt-1">--}}

                {{--<div class="btn-group">--}}
                    {{--<button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">--}}
                        {{--English--}}
                        {{--<span class="caret"></span>--}}
                    {{--</button>--}}
                    {{--<!-- Выпадающее меню -->--}}
                    {{--<ul class="dropdown-menu custom-menu">--}}
                        {{--<!-- Пункты меню -->--}}
                        {{--<li><a href="#">English</a></li>--}}
                        {{--<li><a href="#">Руский</a></li>--}}
                        {{--<li><a href="#">Українська</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<!--<a class="text-muted" href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Переключалка мов</a>-->--}}
            {{--</div>--}}
            {{--<div class="col-4 text-center">--}}
                {{--<a class="blog-header-logo text-dark" href="/">Noo--}}
                    {{--recruitment</a>--}}
            {{--</div>--}}
            {{--<div class="col-4 d-flex justify-content-end align-items-center">--}}
                {{--<a class="text-muted" href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">--}}
                    {{--<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"--}}
                         {{--stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
                         {{--class="mx-3">--}}
                        {{--<circle cx="10.5" cy="10.5" r="7.5"></circle>--}}
                        {{--<line x1="21" y1="21" x2="15.8" y2="15.8"></line>--}}
                    {{--</svg>--}}
                {{--</a>--}}
                {{--<a class="btn btn-sm btn-outline-secondary" href="{{ route('add-vacancy') }}">{{ __('Я роботодатєль') }}</a>--}}

                {{--<a class="btn btn-sm btn-outline-secondary" href="{{ route('add-resume') }}">{{ __('Отправить резюме') }}</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</header>--}}
    {{--<div class="nav-scroller py-1 mb-2">--}}
        {{--<nav class="nav d-flex justify-content-center">--}}
            {{--@foreach($headMenu as $link)--}}
                {{--<a class="p-2 text-muted" href="/{{ $link->slug }}">{{ $link->title }}</a>--}}
            {{--@endforeach--}}
        {{--</nav>--}}
    {{--</div>--}}
    {{--@yield('body')--}}

    {{--<footer class="blog-footer">--}}
        {{--<p>Blog template built for <a rel="nofollow noopener" target="_blank" href="https://getbootstrap.com/">Bootstrap</a>--}}
            {{--by <a rel="nofollow noopener" target="_blank" href="https://twitter.com/mdo">@mdo</a>.</p>--}}
        {{--<p>--}}
            {{--<a href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Back to top</a>--}}
        {{--</p>--}}
    {{--</footer>--}}

{{--<!-- Bootstrap core JavaScript--}}
{{--================================================== -->--}}
{{--<!-- Placed at the end of the document so the pages load faster -->--}}
{{--<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>--}}
{{--<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>--}}
{{--<script src="{{ asset('js/popper.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/holder.min.js') }}"></script>--}}
{{--<script src="{{ asset('/js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('/js/dev-script.js') }}"></script>--}}

{{--<script>--}}
    {{--//      Holder.addTheme('thumb', {--}}
    {{--//        bg: '#55595c',--}}
    {{--//        fg: '#eceeef',--}}
    {{--//        text: 'Thumbnail'--}}
    {{--//      });--}}
{{--</script>--}}


{{--<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none"--}}
     {{--style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">--}}
    {{--<defs>--}}
        {{--<style type="text/css"></style>--}}
    {{--</defs>--}}
    {{--<text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">--}}
        {{--Thumbnail--}}
    {{--</text>--}}
{{--</svg>--}}
{{--</body>--}}
{{--</html>--}}