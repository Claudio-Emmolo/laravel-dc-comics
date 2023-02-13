@extends('layouts.app')

@section('title', "DC - $singleComic->title")


@section('main-app')
<main>
    <div class="single-comic container d-flex">

        <div class="comic m-auto text-center border border-5 border-dark p-3 position-relative">
            <div class="back position-absolute top-5 start-5">
                <a href=" {{route('comic-index')}} " class="btn btn-dark">Go Back</a>
            </div>

            <img src="{{$singleComic->thumb}}" alt="{{ $singleComic->title }} Cover">
            <h1 class="fw-bold my-3">{{ $singleComic->title }}</h1>
            <p class="text-start">
                {{ $singleComic->description }}
            </p>
            <p class="text-start">
                Prezzo:      <span class="fw-bold">{{ $singleComic->price }}    </span>    <br>
                Serie:       <span class="fw-bold">{{ $singleComic->series }}   </span>    <br>
                Tipo:        <span class="fw-bold">{{ $singleComic->type }}     </span>    <br>
                Data Uscita: <span class="fw-bold">{{ $singleComic->sale_date }}</span>
            </p>
            <div class="admin-button">
                <a href="#" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</main>
@endsection