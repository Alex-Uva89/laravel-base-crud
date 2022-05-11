@extends('templates.base')

@section('PageTitle', 'Home - Comics')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <ul class="container">
        @foreach ($comics as $comic)
            <li>{{ $comic->title }}</li>
        @endforeach
    </ul>
@endsection

@section('footer')
    @include('partials.footer')
@endsection