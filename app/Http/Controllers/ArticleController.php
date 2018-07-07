<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = [];
        $articles['new'] = Article::where('status', '=', 1)->orderBy('created_at', 'desc')->paginate(15);
        $articles['hot'] = Article::where('status', '=', 1)->orderBy('created_at', 'asc')->paginate(15);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|string|max:255',
            'describe' => 'nullable|string',
            'category' => 'required|integer',
            'content' => 'required|string',
        ],[],[
            'title' => '标题',
            'describe' => '摘要',
            'category' => '分类',
            'content' => '内容',
        ]);

        $title = request()->input("title");
        $describe = request()->input("describe");
        $category = request()->input("category");
        $content = request()->input("content");

        $article = new Article();
        $article->title = $title;
        $article->describe = $describe ?: str_limit($content, $limit = 100, $end = '...');
        $article->content = $content;
        $article->category_id = $category;
        $article->user_id = Auth::id();
        $article->status = 1;
        $article->save();
        return redirect("/article/" . $article->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
