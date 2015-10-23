<?php

namespace app\Http\Controllers;

//import class
use app\article;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Carbon\Carbon;

//use Illuminate\Http\Request;

use Request;
class ArticlesController extends Controller
{
    public function index(){
    	//return 'get all articles';
        //$articles = Article::all();
    	$articles = Article::latest('published_at')->get();
    	return view('articles.index', compact('articles'));

    	//or with this:
    	//  return view('articles.index')->with('articles', $articles);
    	

    }

    public function show($id){
    	//return $id;
    	$article = Article::findOrFail($id);
    	return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(){
        $input = Request::all();
        $input['published_at'] = Carbon::now();
        Article::create($input);
        return redirect('articles');


        return $input;
    }
}
