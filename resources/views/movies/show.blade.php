@extends('layout.app')
@section('page_title', 'Dettagli Film #' . $movie->id)
@section('page_content')
    <div class="container">
        <div class="row g-0 border rounded overflow-hidden mb-4 shadow-sm w-75 m-auto">
            <div class="col-8 p-4 d-flex flex-column">
                <h2 class="fw-bold">{{$movie->title}}</h2>
                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                
                    <button type="submit" class="btn btn-danger">
                        elimina
                    </button>
                </form>
                
                <p class="fst-italic fs-5">{{$movie->overview}}</p>
                <div class="fs-5">
                    <span>Voto:</span>
                    <span class="fw-bold">{{$movie->rating}}</span>
                </div>
                <div class="fs-5">
                    <span>Durata:</span>
                    <span class="fw-bold">{{$movie->running_time}}</span>
                </div>
                <div class="fs-5">
                    <span>Data Produzione:</span>
                    <span class="fw-bold">{{$movie->release_date}}</span>
                </div>
                <div class="fs-5">
                    <span>Lingua:</span>
                    <span class="fw-bold">{{$movie->language}}</span>
                </div>
            </div>
            <div class="col-4">
                <img class="ratio" src="{{$movie->thumb}}" alt="">
            </div>
        </div>
    </div>
@endsection

