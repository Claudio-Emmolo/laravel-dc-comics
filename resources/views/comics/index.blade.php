@extends('layouts.app')


@section('main-app')
<main>
    <h1 class="fw-bold m-2 mb-5 border-bottom">DC Comic List - Admin Panel</h1>
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
                    <a href=" {{route('comic-show', $comic->id)}} " class="btn btn-success">View</a>
                </td>
            </tr>
            @empty
                <p>Nessun fumetto da mostrare</p>
            @endforelse
        </tbody>
      </table>
</main>
@endsection