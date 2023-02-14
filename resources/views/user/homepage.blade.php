@extends('layouts.userApp')

@section('user-app')
<main>
    <div class="container">
        <div class="row row-cols-3">

            @forelse ($comicList as $comic)
            <div class="col g-4 d-flex justify-content-center">
                <div class="comic-card text-center m-4">
                    <img src="{{$comic->thumb}}" alt="" class="img-fluid mb-2">
                    <h3>{{$comic->title}}</h3>
                </div>
            </div>
            @empty
            <p>
                There are no comics to display
            </p>
            @endforelse
        </div>
    </div>
</main>
@endsection