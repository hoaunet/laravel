<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
//use App\Users\Repository as UserRepository;

class ArticlesController extends Controller
{
    protected $articles;

    /**
     * Create a new controller instance.
     *
     * @param  UserRepository  $users
     * @return void
     
    public function __construct(ArticleRepository $articles)
    {
        $this->articles = $articles;
    }*/
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$articles = Article::paginate(15);
		
		return view('Articles.index',compact('articles'));
    }
	
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($short_url=null)
    {
        $articles =Article::where('short_url', $short_url)->with('category')->first();
		dd($articles);
		/*$articleslq = Article::load(['category' => function ($query) {
    				$query->where('short_url', 'like', '%short_url%');
					}])->get();,'articleslq'*/
		$articles_new = Article::where('isactive', '=', '1')->orderBy('created', 'desc')->get();
		$articles_hot = Article::where('ishot', '=', '1')->get();						
		return view('Articles.view',compact('articles','articles_new','articles_hot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
		return $article;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
