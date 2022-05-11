{{-- pagina visualizzazione lista comics --}}

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

    <a href=" {{ route('home') }}" class="btn btn-primary"> Torna alla Home </a>
@endsection

@section('footer')
    @include('partials.footer')
@endsection