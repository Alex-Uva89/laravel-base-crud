{{-- pagina visualizzazione lista comics --}}

@extends('../templates/base')

@section('PageTitle', 'Home - Comics')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach ($comics as $comic)
            <div class="col pb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->type }}</p>
                    <p class="card-text">{{ $comic->series }}</p>
                    <p class="card-text">{{ $comic->sale_date }}</p>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">See comic</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-between align-items-center m-3">
        <a class="btn btn-white border" href="{{ url()->previous() }}">Indietro</a>
        {{ $comics->links() }}
        <a href=" {{ route('home') }}" class="btn btn-primary"> Torna alla Home </a>
    </div>


</div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection