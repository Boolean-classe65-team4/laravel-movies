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
                        <input type="text" value=" {{$movie->title}}" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}} " placeholder="Add Title" name="title" id="titleInput">
                        <div class="invalid-feedback"> {{$errors->first('title')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="secriptionInput" class="form-label">overview</label>
                        <input type="text" value="{{$movie->overview}}" class="form-control {{$errors->has('overview') ? 'is-invalid' : ''}}" placeholder="Add overview" name="description" id="secriptionInput">
                        <div class="invalid-feedback"> {{$errors->first('overview')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="linkInput" class="form-label">Link movies</label>
                        <input type="text" value="{{$movie->thumb}}" class="form-control {{$errors->has('thumb') ? 'is-invalid' : ''}}" placeholder="Add Link" name="thumb" id="linkInput">
                        <div class="invalid-feedback"> {{$errors->first('thumb')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="priceInput" class="form-label">Price</label>
                        <input type="text" value="{{$movie->price}}" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" placeholder="Add Price" name="price" id="priceInput">
                        <div class="invalid-feedback"> {{$errors->first('price')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="seriesInput" class="form-label">Series</label>
                        <input type="text" value="{{$movie->series}}" class="form-control {{$errors->has('series') ? 'is-invalid' : ''}}" placeholder="Add Series" name="series" id="seriesInput">
                        <div class="invalid-feedback"> {{$errors->first('series')}} </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="dateInput" class="form-label">Sale_date</label>
                        <input type="date" value="{{$movie->sale_date}}" class="form-control" placeholder="Add Date Of Sale" name="sale_date" id="dateInput">
                    </div>
                    <div class="mb-3">
                        <label class="text-dark" for="typeInput" class="form-label">Type</label>
                        <input type="text" value="{{$movie->type}}" class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" placeholder="Add Type" name="type" id="typeInput">
                        <div class="invalid-feedback"> {{$errors->first('type')}} </div>
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
