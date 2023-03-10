@extends('layouts.app');

@section('title', 'Create a new comic')

@section('main-app')
<main>
    <h2 class="text-center mb-2">Create New Comic</h2>

    <div class="container">
        {{-- Import Form --}}
        @include('admin.comics.partials.form', ["route" => 'admin.comic.store', 'isCreateForm'=>'create-form', 'methodRoute' => 'POST', 'btnClass' => 'create-btn'])

    </div>
</main>
@endsection