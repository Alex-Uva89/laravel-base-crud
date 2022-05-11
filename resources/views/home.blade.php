@extends('templates.base')

@section('PageTitle', 'Home - Comics')

@section('header')
    @include('partials.header')

    <div>
        @foreach ($comics as $comic)
            $comic->title = $title
        @endforeach
    </div>

@endsection