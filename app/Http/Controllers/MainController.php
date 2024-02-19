<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicFromRequest;
use Illuminate\Http\Request;

use App\Models\Comic;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();

        $newComic->title = $data['title'];
        $newComic->author_firstname = $data['author_firstname'];
        $newComic->author_lastname = $data['author_lastname'];
        $newComic->genre = $data['genre'];
        $newComic->date_of_publish = $data['date_of_publish'];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicFromRequest $request, $id)
    {
        $comic = Comic::find($id);

        $data = $request->all();
        // $data = $request->validate([

        // ]);

        $comic->title = $data['title'];
        $comic->author_firstname = $data['author_firstname'];
        $comic->author_lastname = $data['author_lastname'];
        $comic->genre = $data['genre'];
        $comic->date_of_publish = $data['date_of_publish'];

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
