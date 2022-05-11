@extends('templates.base')

@section('PageTitle', 'Home - Comics')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <h1> Io sono la Home </h1>
    <a href="{{ route('comics.index') }}" class="btn btn-primary">vai alla lista dei fumetti </a>
@endsection

@section('footer')
    @include('partials.footer')
@endsection