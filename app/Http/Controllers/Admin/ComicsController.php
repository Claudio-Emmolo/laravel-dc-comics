<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
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

        $request->validate([
            'title' => 'required|string|min:1|max:150',
            'description' => 'required|min:10',
            'thumb' => 'required|url|min:5',
            'price' => 'required|numeric',
            'series' => 'required|string|min:1|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|string|min:1|max:50',
        ]);

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

        $request->validate([
            'title' => 'required|string|min:1|max:150',
            'description' => 'required|min:10',
            'thumb' => 'required|url|min:5',
            'price' => 'required|numeric',
            'series' => 'required|string|min:1|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|string|min:1|max:50',
        ]);

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
