<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
    public function index() {
        $articles = Article::paginate(5);
        return view("index", compact("articles"));
    }

    public function about() {
        return view("about");
    }

    public function contact() {
        return view("contact");
    }

    public function single(Request $request, $id) {
        $article = Article::find($id);
        return view("single", compact("article"));
    }

    public function tags(Request $request) {
        $tags = $request->input("tags");
        $articles = Article::whereHas("tags", function($query) use ($tags) {
            $query->where('name', '=', $tags);
        })->paginate();
       // $articles = \App\Tag::where("name", "=", $tags)->get()[0]->articles->paginate(5);
        return view("index", compact("articles"));
    }

    public function work() {
        return view("work");
    }

    public function test() {
        $articles = Article::first()->tags();
        return $articles;
        //return view("index");
    }
}
