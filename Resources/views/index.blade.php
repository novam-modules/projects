@extends('projects::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('projects.name') !!}
    </p>

    @php
        dump($Projects)
    @endphp
@stop
