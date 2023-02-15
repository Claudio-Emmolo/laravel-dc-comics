@extends('layouts.app');

@section('title', 'Create a new comic')

@section('main-app')
<main>
    <h2 class="text-center mb-2">Edit Comic</h2>
    <div class="container">
        {{-- Import Form --}}
        @include('admin.comics.partials.form', ["route" => 'admin.comic.update', 'methodRoute' => 'PUT'])
    </div>
</main>
@endsection