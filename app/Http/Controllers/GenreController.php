<?php

namespace App\Http\Controllers;
use App\Models\Genre;

use Illuminate\Http\Request;



class GenreController extends Controller
{
    public function create()
    {
        return "hello";
        return view('genre/create');
    }

    public function store(Request $request)
    {
       
        
        $genre = new Genre;
        $genre->id = $request->input('id');
        $genre->name = $request->input('name');
        $genre->created_at = $request->input('created_at');
        $genre->opdated_at = $request->input('updated_at');


        $genre->save();
        return $genre;

        //after storing new book we will redirect our user to action('BookController@index')
        //return redirect(action('GenreController@index'));
    }
}
