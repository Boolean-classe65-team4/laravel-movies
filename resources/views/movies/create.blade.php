{{-- @extends('layout_app') --}}

{{-- @section('page_content') --}}
<div class="container">
    <div>
        <form action="{{ route('movies.store') }}" method="post">
            @csrf
            {{-- input TITLE --}}
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control">
            </div>

            {{-- input OVERVIEW --}}
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control"></textarea>
            </div>

            {{-- input URL IMMAGINE --}}
            <div>
                <label for="">Url immagine</label>
                <input class='form-control' type="text" name="thumb">
            </div>

            {{-- input RATING --}}
            <div>
                <label for="">Valutazione</label>
                <input class='form-control' type="number" name="thumb">
            </div>
            {{-- input RUNNING TIME --}}
            <div>
                <label for="">Durata</label>
                <input class='form-control' type="number" name="thumb">
            </div>
            {{-- input RELEASE DATA --}}
            <div>
                <label for="">Data di rilascio</label>
                <input class='form-control' type="date" name="thumb">
            </div>

            {{-- input LENGUAGE --}}
            <div class="mb-3">
                <label class="form-label">Lingua</label>
                <input type="text" class="form-control">
            </div>

            <button type="submit">Salva</button>
            <button><a href="{{ route('movies.index') }}">Annulla</a></button>
        </form>
    </div>
</div>

{{-- @endsection --}}
