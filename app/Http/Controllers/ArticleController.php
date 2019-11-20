<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request, Category $category)
    {
        $request->validate([
            'nom' => ['required', 'string'],
            'prix' => ['required','string'],
            'description' => ['required','string'],
            'category_id' => ['required'],
        ]);

        $article = new Article([
            'nom' => $request->get('nom'),
            'prix' => $request->get('prix'),
            'description' => $request->get('description'),
            'category_id' => $request->get('category_id')
        ]);

        //dd($category);
        //dd($article);

        $article->save();
        return back();
    }
}
