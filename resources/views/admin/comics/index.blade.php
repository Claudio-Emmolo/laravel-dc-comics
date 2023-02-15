@extends('layouts.app')

@section('title', 'Index Comic')

@section('main-app')
<main>
  <div class="btn-create d-flex">
    <a href=" {{route('admin.comic.create')}} " class="btn btn-primary mb-3 mx-auto">Create</a>
  </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($comicList as $comic)
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a href=" {{route('admin.comic.show', $comic->id)}} " class="btn btn-success">View</a>
                    <a href="{{route('admin.comic.edit', $comic->id)}}" class="btn btn-info">Edit</a>
                </td>
            </tr>
            @empty
                <p>Nessun fumetto da mostrare</p>
            @endforelse
        </tbody>
      </table>
</main>
@endsection