@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content-block">
                    <h3><span>{{ $page->title }}</span></h3>
                    <div class="info">{{ $page->title }}</div>
                    {!! $page->body !!}
                </div>
            </div>
        </div>
    </div>
@stop