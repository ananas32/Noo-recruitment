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
@stop