@extends('layouts.app')

@section('body')
    <div class="container">
        <h2 class="text-center">{{ $page->title }}</h2>
        <div class="row">
            {!! $page->body !!}
        </div><!-- /.row -->
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.767642295333!2d17.11770611564958!3d48.153284679224754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c894ec86f136b%3A0xdf19b36c4dcfe347!2zQmx1bWVudMOhbHNrYSAyNzIzLzUsIDgxMSAwNyBCcmF0aXNsYXZhLCDQodC70L7QstCw0LrQuNGP!5e0!3m2!1sru!2sua!4v1518730182520" width="1110" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
@stop