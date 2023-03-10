@extends('layouts.app')

@section('title', "DC - $comic->title")


@section('main-app')
<main>
    <div class="single-comic container d-flex">

        <div class="comic m-auto text-center border border-5 border-dark p-3 position-relative">
            <div class="back position-absolute top-5 start-5">
                <a href=" {{route('admin.comic.index')}} " class="btn btn-dark">Go Back</a>
            </div>

            <img src="{{$comic->thumb}}" alt="{{ $comic->title }} Cover">
            <h1 class="fw-bold my-3">{{ $comic->title }}</h1>
            <p class="text-start">
                {{ $comic->description }}
            </p>
            <p class="text-start">
                Prezzo:      <span class="fw-bold">{{ $comic->price }}    </span>    <br>
                Serie:       <span class="fw-bold">{{ $comic->series }}   </span>    <br>
                Tipo:        <span class="fw-bold">{{ $comic->type }}     </span>    <br>
                Data Uscita: <span class="fw-bold">{{ $comic->sale_date }}</span>
            </p>
            <div class="admin-button">
                <a href="{{ route('admin.comic.edit', $comic->id) }}" class="btn btn-info">Edit</a>
                <form class="delete d-inline" action="{{route('admin.comic.destroy', $comic->id)}}" method="POST">
                    <button class="btn btn-danger">Delete</button>
                    @csrf
                    @method('DELETE')
                  </form>
            </div>
        </div>
    </div>

    @vite('resources/js/deletePopUp.js')

</main>
@endsection