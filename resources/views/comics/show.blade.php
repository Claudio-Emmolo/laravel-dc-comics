@extends('layouts.app')

@section('main-app')
<main>
    <img src="{{$singleComic->thumb}}" alt="">
    <h1>{{ $singleComic->title }}</h1>
    <p>
        {{ $singleComic->description }}
    </p>
   <p>
       Prezzo: {{ $singleComic->price }} <br>
       Serie: {{ $singleComic->series }}<br>
       Tipo: {{ $singleComic->type }}<br>
       Data Uscita: {{ $singleComic->sale_date }}
    </p>
</main>
@endsection