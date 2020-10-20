<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
//        $books = DB::select('SELECT * from `books`');

        $books = Book::get();

        return view('books/index', compact('books'));
    }

    public function show($id)
    {
//        $book = DB::select('SELECT * from `books` where `id` = ?', [$id]);
        //        $book = $book[ 0 ];

        $book = Book::findOrFail($id);

        return view('books/show', compact('book'));
    }

    public function create()
    {
        return view('books/create');
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->input('title');
        $book->authors = $request->input('authors');
        $book->image = $request->input('image');

        $book->save();

        //after storing new book we will redirect our user to action('BookController@index')
        return redirect(action('BookController@index'));
    }
}



