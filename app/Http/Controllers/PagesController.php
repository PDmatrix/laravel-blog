<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
    public function index() {
        return view("index");
    }

    public function about() {
        return view("about");
    }

    public function contact() {
        return view("contact");
    }

    public function single() {
        return view("single");
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
