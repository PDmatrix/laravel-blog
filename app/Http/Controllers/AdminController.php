<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $tags = \App\Tag::all();
        return view('article_create', compact("tags"));
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'tags' => 'nullable',
            'photo' => 'required|image'
        ]);

        $tags = [];
        if($request->tags != null)
            $tags = array_map('trim', explode (",", $request->tags));

        $dbtags = \App\Tag::whereIn("name", $tags)->pluck("id")->toArray();
        $article = new \App\Article();
        $article->content = $request['content'];
        $article->title = $request->title;
        $article->img_path = $request->photo->getClientOriginalName();
        $article->save();
        $article->tags()->attach($dbtags);
        $request->photo->storeAs('public', $request->photo->getClientOriginalName());
        $success = true;
        return view('article_create', compact("success"));
    }


}
