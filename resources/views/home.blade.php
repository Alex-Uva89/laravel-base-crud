@extends('templates.base')

@section('PageTitle', 'Home - Comics')

@section('header')
    @include('partials.header')
@endsection

@section('content')
        
    <img src="{{asset('../../images/jumbotron.jpg')}}" class="img-fluid" alt="">
    

@endsection

@section('footer')
    @include('partials.footer')
@endsection