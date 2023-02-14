@extends('layouts.userApp')

@section('user-app')
<main>
    <div class="container">
        <div class="m-4">
            <div class="d-flex">
                <img src="{{$comic->thumb}}" alt="" class="img-fluid mb-2">
                <div class="comic-titles p-4">
                    <h3 class="mb-5">{{$comic->title}}</h3>
                    <p>
                        {{$comic->description}}
                    </p>
                </div>
            </div>
            <p>
                Price: <span class="fw-bold">{{$comic->price}}</span> <br>
                Series: <span class="fw-bold">{{$comic->series}}</span> <br>
                Sale Date: <span class="fw-bold">{{$comic->sale_date}}</span> <br>
            </p>
        </div>
    </div>
</main>
@endsection