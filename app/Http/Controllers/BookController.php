<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::select('SELECT * from `books`');

        return view('books/index', compact('books'));
    }

    public function show($id)
    {
        $book = DB::select('SELECT * from `books` where `id` = ?', [$id]);
        $book = $book[0];

        return view('books/show', compact('book'));
    }
}

