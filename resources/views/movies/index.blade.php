@extends('layout.app')

@section('page_title', 'Lista Film')

@section('page_content')
    <div class="container">
        <div class="text-center py-3">
            {{-- <a href="{{ route('admin.movies.create') }}" class="btn btn-primary">Aggiungi</a> --}}
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
                                <svg class="bi" width="16" height="16">
                                    <use xlink:href="/bootstrap-icons.svg#eye-fill"></use>
                                </svg>
                            </a>
                        <td>
                            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-info">
                                <svg class="bi" width="16" height="16">
                                    <use xlink:href="/bootstrap-icons.svg#pencil-square"></use>
                                </svg>
                            </a>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
