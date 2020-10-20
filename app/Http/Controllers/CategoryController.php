<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // get all categories
        $categories = Category::where('id', '>', 0)->get();

        if ($categories->count() === 0) {
            return 'no categories';
        }

        return $categories;
    }

    public function show($id)
    {
//        return Category::where('id', $id)->first();
        //        return Category::find($id);

//        $name = 'Sci-Fi & Fantasy';
        //        return Category::where('name', $name)->first();
        //        return Category::where('name', $name)->firstOrFail();

//        $category = Category::find($id); // get first Category with `id` = $id
        //
        //        if($category === null){
        //            return '404';
        //        }

        $category = Category::findOrFail($id);

        return $category;
    }

    public function create()
    {
        return view('categories/create');
    }

    public function store(Request $request)
    {
//        $name = $_POST['name'];
        $name = $request->input('name');

        $category = Category::where('name', $name)->first();

        if ($category === null) {

            $category = new Category;
            $category->name = $name;
            $category->save();
        }

        return $category;
    }
}

