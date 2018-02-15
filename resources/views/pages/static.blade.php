@extends('layouts.app')

@section('body')
    <div class="container">

        <div class="row">

            <div class="blog-main">

                <div class="blog-post">
                    <h2 class="text-center">{{ $page->title }}</h2>
                    {!! $page->body !!}
                </div>

            </div><!-- /.blog-main -->

        </div><!-- /.row -->
    </div>

    <div class="row">
        <div class="col-sm-4"><strong>Главный офис</strong>:<p>Киев ул. Предславинская 11, оф. 202</p></div>
        <div class="col-sm-4"><strong>Телефоны</strong>: <p>+38 (044) 591-52-79 +38</p> <p>(050) 786-25-55</p> <p>+38 (098) 006-77-31</p></div>
        <div class="col-sm-4"><strong>Эл.почта</strong>: <a href="mailto:office@work-garant.com">office@work-garant.com </a>
            <p><strong>Skype</strong>: work-garant9</p>
        </div>
    </div>
    <p>пн-пт: 09:00 &ndash; 18:00 сб &mdash; выходной, вс &mdash; выходной</p>
@stop