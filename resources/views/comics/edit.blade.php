@extends('../templates/base')

@section('PageTitle', 'modifica albo')

@section('content')
    <main>
        <div class="container">

            <form class="my-3" action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">

                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    @error('title')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="description">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
                    @error('description')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="thumb">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                    @error('thumb')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="price">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                    @error('price')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="series">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                    @error('series')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="date">Data di pubblicazione</label>
                    <input type="date" class="form-control" id="date" name="sale_date" value="{{ $comic->sale_date }}">
                    @error('sale_date')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="type">Tipologia</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                    @error('type')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <button type="submit" class="btn btn-success mt-3" id="saveComic">Save</button>

                <a class="btn btn-primary mt-3" href="{{ url()->previous() }}">Indietro</a>
            </form>
        </div>
    </main>
@endsection
