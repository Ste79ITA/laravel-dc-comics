<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    public function create()
    {

        return view('comics.create');
    }

    public function store(Request $request)
    {
        // VALIDAZIONE DATI

        $data = $request->all();

        // $new_comic = new Comic();
        // $new_comic->title = $data['title'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->type = $data['type'];
        // $new_comic->description = $data['description'];
        // $new_comic->sale_date = $data['sale_date'];

        // $new_comic->save();

        $new_comic = Comic::create($data);

        return redirect()->route('comics.show', $new_comic);
    }

    public function edit(Comic $comic)
    {

        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
