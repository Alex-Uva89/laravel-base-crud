@extends('../templates/base')

@section('PageTitle', 'Aggiungi albo')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<main>
    <div class="container">
        
        {{-- creazione form per inserire i dati --}}
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div>

                    <label for="title">Titolo</label>
                    <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}" placeholder="inserisci il titolo del nuovo albo">
                    @error('title')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="description">Descrizione</label>
                    <input type="text" id="description" class="form-control" name="description" value="{{ old('description') }}" placeholder="inserisci la descrizione">
                    @error('description')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="thumb">Immagine</label>
                    <input type="text" id="thumb" class="form-control" name="thumb" value="{{ old('thumb') }}" placeholder="inserisci immagine">
                    @error('thumb')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="price">Prezzo</label>
                    <input type="text" id="price" class="form-control" name="price" value="{{ old('price') }}" placeholder="inserisci prezzo">
                    @error('price')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="series">Serie</label>
                    <input type="text" id="series" class="form-control" name="series" value="{{ old('series') }}" placeholder="inserisci serie">
                    @error('series')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="date">Data pubblicazione</label>
                    <input type="date" class="form-control" id="date" name="sale_date" value="{{ old('sale_date') }}" placeholder="inserisci data">
                    @error('sale_date')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="type">Tipologia</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" placeholder="inserisci tipo">
                    @error('type')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <button type="submit" class="btn btn-success mt-3" id="saveComic">Salva!</button>
                <a class="btn btn-white mt-3" href="{{ url()->previous() }}">Indietro</a>
            </form>


        </div>
</main>
@endsection