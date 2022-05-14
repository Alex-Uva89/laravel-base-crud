{{-- card con il fumetto selezionato --}}

@extends('../templates/base')

@section('PageTitle', 'Comics listing')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class=" my-bg py-5">
        <div class="container">
            <div class="d-flex">
                <div class="cont-img">
                    <img class="img-responsive m-2" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
                <div class="cont-info">
                    <h1>{{ $comic->title }}</h1>
                    <h3>{{ $comic->type }}</h3>
                    <p>{{ $comic->series }}</p>
                    <p>{{ $comic->description }}</p>
                    <h4>{{ $comic->price }} €</h4>
                    <p>{{ $comic->sale_date }}</p>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica l'albo</a>
    
                <form class="d-inline" action="{{ route('comics.destroy' , $comic->id) }}" onclick="return confirm('Sei sicuro di voler cancellare questo Albo?')" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete this comics</button>
                </form>
    
                <a class="btn btn-white" href="{{ url()->previous() }}">Indietro</a>
            </div>

        </div>

    </main>

@endsection

@section('footer')
    @include('partials.footer')
@endsection