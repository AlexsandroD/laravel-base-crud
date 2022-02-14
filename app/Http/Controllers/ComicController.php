<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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

        $request->validate([
            "title" => "required|string|max:80|unique:comics",
            "image" => "nullable|url",
            "description" => "required|string|max:2000",
            "price" => "required|integer|min:1|max:10000",
            "series" =>"required|string|max:80",
            "sales_date"=> "nullable|date",
            "type" => "required|string|max:80"
        ]);
        // $newComic->title = $data['title'];
        // $newComic->image = $data['image'];
        // $newComic->description = $data['description'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];

        // $newComic->save();

         $newComic = Comic::create($data);

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function show(Comic $comic)
    {
         return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
       return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comic $comic)
    {
        $data = $request->all();

        $request->validate([
            "title" => "required|string|max:80|unique:comics,title,{$comic->id}",
            "image" => "nullable|url",
            "description" => "required|string|2000",
            "price" => "required|integer|min:1|max:10000",
            "series" =>"required|string|max:80",
            "sales_date"=> "nullable|date",
            "type" => "required|string|max:80"
        ]);

        $comic->update($data);

        // restituisco la pagina show della risorsa modificata
        return redirect()->route("comics.show", $comic->id);
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
        return redirect()->route('comics.index');
    }
}
