@extends('layout.app')

@section('page_title', 'Lista Film')

@section('page_content')
    <div class="container">
        <div class="text-center py-3">
             <a href="{{ route('movies.create') }}" class="btn btn-primary">Aggiungi</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Poster</th>
                    <th>Titolo</th>
                    <th>Trama</th>
                    <th>Durata</th>
                    <th>Data di uscita</th>
                    <th>Lingua</th>
                    <th>Rating</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td><img src="{{ $movie->thumb }}" alt="" class="img-thumbnail" style="height: 80px"></td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->overview }}</td>
                        <td>{{ $movie->running_time }}</td>
                        <td>{{ $movie->release_date }}</td>
                        <td>{{ $movie->language}}</td>
                        <td>{{ $movie->rating }}</td>
                        <td>
                                <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-warning">
                                    show
                            </a>
                        <td>
                            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-info">
                                edit
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
            
                                <button type="submit" class="btn btn-danger">
                                    elimina
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
