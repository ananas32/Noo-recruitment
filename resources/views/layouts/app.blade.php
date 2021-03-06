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