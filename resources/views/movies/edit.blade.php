@extends('layout.app')

@section('title', 'Edit Movie')

@section('page_content')
<form action=" {{route('movies.update', $movie->id)}} "  method="post">
    @csrf
    @method('PATCH')
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="form-container">
                    <div class="mb-3">
                        <label class="text-dark" for="titleInput" class="form-label">Title</label>
                        <input type="text" value="{{$movie->title}}" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}} " placeholder="Add Title" name="title" id="titleInput">
                        <div class="invalid-feedback"> {{$errors->first('title')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="secriptionInput" class="form-label">overview</label>
                        <input type="text" value="{{$movie->overview}}" class="form-control {{$errors->has('overview') ? 'is-invalid' : ''}}" placeholder="Add overview" name="overview" id="secriptionInput">
                        <div class="invalid-feedback"> {{$errors->first('overview')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="linkInput" class="form-label">Link movies</label>
                        <input type="text" value="{{$movie->thumb}}" class="form-control {{$errors->has('thumb') ? 'is-invalid' : ''}}" placeholder="Add Link" name="thumb" id="linkInput">
                        <div class="invalid-feedback"> {{$errors->first('thumb')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="ratingInput" class="form-label">Rating</label>
                        <input type="text" value="{{$movie->rating}}" class="form-control {{$errors->has('rating') ? 'is-invalid' : ''}}" placeholder="Add rating" name="rating" id="ratingInput">
                        <div class="invalid-feedback"> {{$errors->first('rating')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="running_timeInput" class="form-label">Durata</label>
                        <input type="text" value="{{$movie->running_time}}" class="form-control {{$errors->has('running_time') ? 'is-invalid' : ''}}" placeholder="Add running_time" name="running_time" id="running_timeInput">
                        <div class="invalid-feedback"> {{$errors->first('running_time')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="dateInput" class="form-label">Data di rilascio</label>
                        <input type="date" value="{{$movie->release_date}}" class="form-control" placeholder="Add Date Of Sale" name="release_date" id="dateInput">
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="languageInput" class="form-label">Lingua</label>
                        <input type="text" value="{{$movie->language}}" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" placeholder="language" name="language" id="languageInput">
                        <div class="invalid-feedback"> {{$errors->first('price')}} </div>
                    </div>  
                    <div class="button-form d-flex">
                        <div class="m-auto">
                            <button class="btn btn-primary" type="submit">Salva</button>
                            <a class="btn btn-outline-light" href="{{route('movies.index')}}">Annulla</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
