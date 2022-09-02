@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col text-center">
          <h1 class="p-4">Laravel Movies Team #4 </h1>
          <a class="btn btn-outline-primary" href="{{route('movies.index')}}"><h3>Movies</h3></a>
        </div>
      </div>
    </div>
@endsection