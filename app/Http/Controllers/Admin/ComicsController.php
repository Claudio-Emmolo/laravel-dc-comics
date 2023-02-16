<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{

    public $validator =
    [
        'title' => 'required|string|min:2|max:150',
        'description' => 'required|min:10',
        'thumb' => 'required|url|min:5',
        'price' => 'required|numeric',
        'series' => 'required|string|min:2|max:50',
        'sale_date' => 'nullable|date',
        'type' => 'required|string|min:2|max:50',
    ];

    public $errorMessage = [
        'title.required' => 'Inserisci un TITOLO ',
        'title.min' => 'Il TITOLO deve contenere almeno 2 caratteri',
        'title.max' => 'Nel TITOLO hai superato il numero massimo di caratteri',

        'description.required' => 'Inserisci una DESCRIZIONE',
        'description.min' => 'La DESCRIZIONE deve contenere almeno 10 caratteri',
        'description.max' => 'Nella DESCRIZIONE hai superato il numero massimo di caratteri',

        'thumb.required' => 'Inserisci un link nella THUMB',
        'thumb.url' => 'Inserisci una URL valido nella THUMB',
        'thumb.min' => 'La THUMB deve contenere almeno 5 caratteri',

        'price.required' => 'Inserisci un PREZZO corretto',

        'series.required' => 'Inserisci una SERIE',
        'series.min' => 'La SERIE deve contenere almeno 2 caratteri',
        'series.max' => 'Nella SERIE hai superato il numero massimo di caratteri',

        'sale_date.date' => 'Inserisci una DATA esatta',

        'type.required' => 'Inserisci un TIPO',
        'type.min' => 'Il TIPO deve contenere almeno 2 caratteri',
        'type.max' => 'Nel TIPO hai superato il numero massimo di caratteri',
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicList = Comic::all();
        return view('admin.comics.index', compact('comicList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic = new Comic();
        return view('admin.comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userData = $request->all();

        $request->validate(
            $this->validator,
            $this->errorMessage
        );

        $newComic = new Comic();
        $newComic->fill($userData);
        // $newComic->title = $userData['title'];
        // $newComic->description = $userData['description'];
        // $newComic->thumb = $userData['thumb'];
        // $newComic->price = $userData['price'];
        // $newComic->series = $userData['series'];
        // $newComic->sale_date = $userData['sale_date'];
        // $newComic->type = $userData['type'];
        $newComic->save();

        return redirect()->route('admin.comic.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $request->validate(
            $this->validator,
            $this->errorMessage
        );

        $comic = Comic::findOrFail($id);
        $comic->update($data);

        return redirect()->route('admin.comic.index', compact('comic'))->with('message', "Elemento Modificato ($comic->title) ")->with('typeMessage', 'alert-success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('admin.comic.index')->with('message', 'Elemento Eliminato')->with('typeMessage', 'alert-danger');
    }
}
