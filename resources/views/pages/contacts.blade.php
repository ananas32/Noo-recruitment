@extends('layouts.app')

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content-block">
                    <h3><span>{{ $page->title }}</span></h3>
                    <div class="info">{{ $page->title }}</div>
                    {!! $page->body !!}
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.760417058452!2d17.846942515626704!3d47.494580479177465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476bcde05fe5ea21%3A0x622bf22440905710!2zVMOhcHN6ZW50bWlrbMOzcywgRsWRIHUuIDM4LCA5MDk0INCS0LXQvdCz0YDQuNGP!5e0!3m2!1sru!2sua!4v1519589439301" width="1140" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@stop