{{-- creazione form per inserire i dati --}}

<form methods="POST" action="{{ route('comics.store') }}">
    <label for="title"> Aggiungi titolo </label>
    <input type="text" name="title" id="title">

    <input type="button" value="">
</form>